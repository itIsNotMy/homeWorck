<?php 

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command1 extends Command
{
    
    protected function configure()
    {
        $this
            ->setName('Command1')
            ->setDescription('show input')
            ->addArgument('text', \Symfony\Component\Console\Input\InputArgument::REQUIRED)
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($input->getArgument('text').' '.'Hello');
        
        return Command::SUCCESS;
    }
}