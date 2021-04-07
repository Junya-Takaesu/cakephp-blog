<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class HelloCommand extends Command
{
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser
            ->addArgument("name", [
                "help" => "What is your name"
            ])
            ->addOPtion("yell", [
                "help" => "Shout the name",
                "boolean" => true
            ]);
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $name = $args->getArgument("name");
        if ($args->getOption("yell")) {
            $name = mb_strtoupper($name);
        }
        $io->out("Hello {$name}");
    }
}