<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class FooCommand extends Command
{
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser->setDescription("Show how custom cakephp commands work");
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out("
The name convention use the file name and class
name inside the file without 'Command' part.
So, \n
* 'FooCommand' class should be saved as 'FooCommand.php'\n
* Can be executed by typing 'bin/cake foo'\n
        ");
    }
}