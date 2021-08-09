<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {

        $this
            ->setName('say_hello')
            ->setDescription('Some words about...')
            ->addArgument('string', InputArgument::REQUIRED, 'who do you want to say hello to')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $greeting = 'Привет ' . $input->getArgument('string');

        $output->writeln($greeting. '!');

        return Command::SUCCESS;

    }
}