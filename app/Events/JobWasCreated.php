<?php

namespace Laraveles\Events;

use Laraveles\Job;

class JobWasCreated extends Event
{
    /**
     * The created job.
     *
     * @var Job
     */
    public $job;

    /**
     * JobWasCreated constructor.
     *
     * @param Job $job
     */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }
}
