<?php

namespace Laraveles\Http\Controllers\Auth;

use Laraveles\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard as Auth;

abstract class AbstractAuthController extends Controller
{
    /**
     * Basic login route.
     *
     * @var string
     */
    protected $loginRoute = 'auth.login';

    /**
     * Route to redirect once logged in if there is not inteneded route.
     *
     * @var string
     */
    protected $afterLoginRoute = 'home';

    /**
     * Authenticator instance.
     *
     * @var Auth
     */
    protected $auth;

    /**
     * AbstractAuthController constructor.
     *
     * @param Auth $auth
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Login form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Disconnect the user.
     *
     * @return mixed
     */
    public function logout()
    {
        $this->auth->logout();

        return $this->afterLogoutRedirect();
    }

    /**
     * Login homescreen redirect.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function loginRedirect()
    {
        return redirect()->route($this->loginRoute);
    }

    /**
     * After login redirect.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function afterLoginRedirect()
    {
        return redirect()->intended(route($this->afterLoginRoute));
    }

    /**
     * After logout redirect.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function afterLogoutRedirect()
    {
        return $this->loginRedirect();
    }
}
