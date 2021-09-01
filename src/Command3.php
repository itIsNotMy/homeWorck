<?php 

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Command3 extends Command
{
    protected function configure()
    {
        $this
            ->setName('Command3')
            ->setDescription('Questionnaire')
        ;
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = [new Question('как вас зовут? ', 'вы не указали имя'), new Question('сколько вам лет? ', 'вы не указали возраст'), new ChoiceQuestion('Ваш пол?', ['M','Ж'],0)];
        
        foreach ($question as $qVal) {
            $answer[] = $helper->ask($input, $output, $qVal);
        }
        
        $output->writeln('Ваше имя '.$answer[0].' '.'Ваш возраст '.$answer[1].' '.'Ваш пол '.$answer[2]);
        return Command::SUCCESS;
    }
    
}