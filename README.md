![Banner Image](logo-spacepress-repo.png)

[![GitHub release](https://img.shields.io/github/release/tjdunklee/spacePress.svg)](https://github.com/tjdunklee/spacePress/releases)

## Overview
A fully functioning starter Wordpress build which includes spaceBase and a Gulp task runner.

**What's Included:**
- full install of [Wordpress](https://wordpress.org/) core files
- the latest release of [spaceBase](http://spacebase.space150.com/)
- barebones theme based on the [Underscores](http://underscores.me/) starter theme
- [Gulp](http://gulpjs.com/) task runner with pre-built tasks for compiling SCSS
- Wordpress page template for easily adding the spaceBase style guide

## Running Wordpress Locally
There are plenty of options to run Wordpress on your local environment. Here are a few recommended platforms:
* [MAMP](https://www.mamp.info/en/)
* [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV)
* [Local by Flywheel](https://local.getflywheel.com/)

## Local Development Setup
spacePress uses Gulp to compile SCSS files right out the box. The following steps get everything installed for you the first time you setup the project.

1. We will need to make sure Gulp CLI is installed globally on your machine.
    ```
    $ npm install --global gulp-cli
    ```
  > If you have previously installed a version of gulp globally, please run npm rm --global gulp to make sure your old version doesn't collide with gulp-cli
  
  
2. After installing the CLI for Gulp, we can install of of our Node modules including the project version of Gulp.
  
    ```
    $ npm install
    ```
    
3. Start your Gulp task runner to start watching your SCSS files and do an initial compile.
    ```
    $ gulp
    ```
  > Gulp should start running in your terminal window and continue running to watch any changes to your SCSS files.

## Development Process
After the initial setup as detailed above, all you will need to run next time from your command line is the Gulp command to start watching for asset file updates.

```
$ gulp
```
