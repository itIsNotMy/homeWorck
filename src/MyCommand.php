<?php 

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('MyCommand')
            ->setDescription('show input')
            ->addArgument('text', \Symfony\Component\Console\Input\InputArgument::REQUIRED)
            ->addArgument('times', \Symfony\Component\Console\Input\InputArgument::OPTIONAL)
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $i=0;
        
        do {
            $output->writeln($input->getArgument('text'));
            $i++;
        } while ($i != $input->getArgument('times') && $input->getArgument('times') != null);
        
        
        return Command::SUCCESS;
    }
}