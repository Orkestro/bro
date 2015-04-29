<?php

/*
 * This file is part of the Symfony Bro Installer package.
 *
 * (c) Serge Velikanov <me@velikanov.pro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bro\Installer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This command broifies current project.
 *
 * @author Serge Velikanov <me@velikanov.pro>
 */
class UpCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('up')
            ->setDescription('Set up your project using bro.json.')
            ->setHelp('The <info>%command.name%</info> command sets up the new Symfony project for you using already '.
                'broified bro.json file.')
            ->addArgument('json_file_name', InputArgument::OPTIONAL, 'The bro.json file name', 'bro.json')
            ->addArgument('project_directory', InputArgument::OPTIONAL, 'Symfony project directory which you want to Broify', './')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}