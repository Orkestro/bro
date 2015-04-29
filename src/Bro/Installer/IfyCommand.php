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
        ;
    }

    /**
     * The ify command is only available when using the PHAR file.
     */
    public function isEnabled()
    {
        return 'phar://' === substr(__DIR__, 0, 7);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}