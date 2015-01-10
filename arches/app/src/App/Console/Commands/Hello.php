<?php namespace App\Console\Commands;

use Phalanx\Contracts\Hash;
use Phalanx\Contracts\Hub\Thread;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Hello
 * @package CloudOffice\Console\Commands
 */
class Hello extends Command implements Thread {

    /**
     * {@inheritDocs}
     */
    protected function configure()
    {
        $this->setName('hello');

        $this->setDescription('Says Hello');

        $this->addArgument('name', InputArgument::OPTIONAL, 'Your name', 'World');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            '<info>Hello ' . ucfirst(strtolower($input->getArgument('name'))) .
            '</info> <comment>from Phalanx</comment>'
        );
    }
}