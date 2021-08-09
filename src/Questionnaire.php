<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


class Questionnaire extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {

        $this
            ->setName('quest')
            ->setDescription('Fill out the questionnaire')
            ->addArgument('name', InputArgument::REQUIRED, 'Enter your name')
            ->addArgument('age', InputArgument::REQUIRED, 'Enter your age')
            ->addOption(
                'gender',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Your gender',
                ['M', 'W']
            )
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

//        $io = new SymfonyStyle($input, $output);
//
//        do {
//            $name = $io->ask('Ваше имя');
//        } while (null === $name);
//
//        do {
//            $age = $io->ask('Ваша фамилия');
//        } while (null === $age);

//        $io->success(\sprintf('Ваше полное имя: %s %s', $surname, $name));

//        return 1;


        $name = $input->getArgument('name');
        $age = $input->getArgument('age');
        $gender = $input->getOption('string');

        $output->writeln($name . ' ' . $age . ' ');

        return Command::SUCCESS;

    }
}