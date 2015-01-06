<?php namespace App\Console\Commands;

use Phalanx\Contracts\Hash;
use Phalanx\Contracts\Proxy\Proxier;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Hello
 * @package CloudOffice\Console\Commands
 */
class Hello extends Command implements Proxier {

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
        $output->writeln('Hello ' . ucfirst(strtolower($input->getArgument('name'))));
    }
}