<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


class ShowString extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {

        $this
            ->setName('show_string')
            ->setDescription('show the string multiple times')
            ->addArgument('text', InputArgument::REQUIRED, 'enter the text')
            ->addOption(
                'iterations',
                null,
                InputOption::VALUE_REQUIRED,
                'How many times should the message be printed?',
                2
            )
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $text = $input->getArgument('text');
        $number = $input->getOption('iterations');

        for ($i = 0; $i < $number; $i++) {
            $output->writeln($text);
        }

        return Command::SUCCESS;

    }
}