<?php

namespace Droid\Plugin\DbTk;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $command = new \DbTk\SchemaLoader\Command\SchemaLoadCommand();
        $command->setName('dbtk:schema-load');
        $commands[] = $command;
        return $commands;
    }
}
