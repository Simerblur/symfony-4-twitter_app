<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 24.05.18
 * Time: 11:10
 */

namespace App\Command;


use App\Service\Greeting;
use Symfony\Bridge\PhpUnit\TextUI\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class HelloCommand extends \Symfony\Component\Console\Command\Command

{


    /**
     * @var Greeting
     */
    private $greeting;

    public function __construct(Greeting $greeting)
    {
        $this->greeting = $greeting;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:say-hello')
            ->setDescription('Says hello to user')
            ->addArgument('name', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln([
            'Hello from the app',
            '==================',

        ]);
        $output->writeln($this->greeting->greet($name));
    }

}