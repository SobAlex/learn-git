<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;


class Questionnaire extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('quest')
            ->setDescription('Fill out the questionnaire');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Ведите ваше имя: ', 'Вася');

        $questionAge = new Question('Ведите ваш возраст: ', '25');

        $questionGender = new ChoiceQuestion(
            'Ваш пол',

            ['М', 'Ж'],
            0
        );

        $questionGender->setErrorMessage('Gender %s is invalid.');

        $name = $helper->ask($input, $output, $questionName);

        $age = $helper->ask($input, $output, $questionAge);

        $gender = $helper->ask($input, $output, $questionGender);


        $output->writeln('Здравствуйте, ' . $name . '. Ваш возраст: ' .  $age . '. Ваш пол: ' . $gender);

        return Command::SUCCESS;
    }
}
