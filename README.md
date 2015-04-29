# Bro

Symfony Bro to bootstrap and quick start your common projects

## Installation

This step is only needed the first time you use the installer:

### Linux and Mac OS X

```bash
$ sudo curl -LsS http://symfonybro.com/installer -o /usr/local/bin/bro
$ sudo chmod a+x /usr/local/bin/bro
```

### Windows

```bash
c:\> php -r "readfile('http://symfonybro.com/installer');" > bro
```

Move the downloaded `bro` file to your projects directory and execute
it as follows:

```bash
c:\> php bro
```

## Broup

### Using bro.json

To raise your new project you need to get somewhere the `bro.json` file to use it with Bro like this:

```bash
$ bro up
```

or

```bash
$ bro up whatever.json
```

It will automatically take the `bro.json` file located in current directory and use it to broup.

### Using GitHub

To raise your new project using GitHub repository you just need to specify this repository in the `up` command like this:

```bash
$ bro up git@github.com:symfony-bro/standard-orm-edition.git
```

or

```bash
$ bro up https://github.com/symfony-bro/standard-orm-edition
```

## Broify

To broify your project run `bro ify` inside your project root.

You will get then the `bro.json` file that you can use to bootstrap your next Symfony project using you current project bundles and settings.

## What Bro does to your host project

First of all Bro looks to your `composer.json` and gets the Symfony edition you using.

Then it throws away all the standard Symfony bundles already included in edition and takes all the stuff left.

Based on this data Bro makes a `bro.json` file that contains all the included extensions.

Then Bro gets your config files and appends it to the `bro.json` file so you can raise your typical config in pretty way on newly created project.
