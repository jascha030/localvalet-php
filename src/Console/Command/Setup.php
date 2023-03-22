<?php

/**
 * @noinspection PhpMissingParentCallCommonInspection
 */

declare(strict_types=1);

namespace Jascha030\LocalValet\Console\Command;

use Jascha030\Project\Environment\EnvironmentInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Setup extends Command
{
    protected function configure(): void
    {
        $this->setName('setup');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $config = $this->createConfigFromQuestionaire();

        // Todo: rm -rf cwd() . 'app/public/'.
        // Todo: git clone wordpress/wordpress ./app/public.
        // Todo: rm -rf ./app/public/.git/.
        // Todo: rm -rf .app/public/themes/twenty*.
        // Todo: mariadb create database {db_name}.

        return Command::SUCCESS;
    }

    private function createConfigFromQuestionaire(): EnvironmentInterface
    {
        /** @var QuestionHelper $helper */
        $helper = $this->getHelper('question');

        // Todo: assert cwd() . '/app/public' exists and is a directory.

        // Todo: Ask to pull new WordPress installation in public root.

        // Todo: Ask to create a new database associated with the project.

        // Todo: Ask if database should/can be imported from a dummp or through ssh.

        // Todo: Ask for a local domain name.

        // Todo: Ask to secure domain with https.

        // Todo: Ask to search-replace domain name in db.

        // Todo: Ask to store config in environment file (as json though).
    }
}
