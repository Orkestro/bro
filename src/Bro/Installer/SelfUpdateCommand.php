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

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Installer\SelfUpdateCommand as BaseCommand;

/**
 * This command is inspired by the self-update command included
 * in the Symfony Installer package.
 *
 * @link https://github.com/symfony/symfony-installer/blob/master/src/Symfony/Installer/SelfUpdateCommand.php.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SelfUpdateCommand extends BaseCommand
{
    /** @var string  the URL where the latest installer version can be downloaded */
    private $remoteInstallerFile;

    protected function initialize(InputInterface $input, OutputInterface $output) {
        parent::initialize($input, $output);

        $this->remoteInstallerFile = 'http://symfonybro.com/installer';
    }
}