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
class IfyCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('ify')
            ->setDescription('Broify your project.')
            ->setHelp('The <info>%command.name%</info> command broifies your project so you can use your bro.json '.
                'to bootstrap your new projects.')
            ->addArgument('project_directory', InputArgument::OPTIONAL, 'Symfony project directory which you want to Broify', './')
            ->addArgument('json_file_name', InputArgument::OPTIONAL, 'The bro.json file name', 'bro.json')
            ->addArgument('composer_json_file_name', InputArgument::OPTIONAL, 'Project composer.json file name', 'composer.json')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $projectDir = realpath($input->getArgument('project_directory'));

        $composerJsonFileData = json_decode(file_get_contents($projectDir.'/'.$input->getArgument('composer_json_file_name')));

        var_dump($composerJsonFileData);
    }
}