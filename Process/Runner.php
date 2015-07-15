<?php

namespace YCMS\Modules\Process;

use YCMS\Modules\Contracts\RunableInterface;
use YCMS\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \YCMS\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \YCMS\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
