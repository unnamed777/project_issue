<?php
namespace App\Console;

use App\Action\CheckEmail;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('app:check-inbox', 'Check inbox and process emails')]
class CheckInboxCommand extends Command
{
    protected CheckEmail $action;

    public function __construct(
        CheckEmail $command
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
    }
}