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

## Local Development Setup
Most of these are basic steps relating to local Wordpress development using [MAMP](https://www.mamp.info/en/). If you are familiar with the process you will move through this quickly.

1. Browse to the directory that you keep development projects in and clone the project. Then enter the directory that is created.
    ```
    $ git clone git@github.com:tjdunklee/spacePress.git
    $ cd spacePress
    ```
    
2. We will need to make sure Gulp CLI is installed globally on your machine.
    ```
    $ npm install --global gulp-cli
    ```
  > If you have previously installed a version of gulp globally, please run npm rm --global gulp to make sure your old version doesn't collide with gulp-cli
  
  
3. After installing the CLI for Gulp, we can install of of our Node modules including the project version of Gulp.
  
    ```
    $ npm install
    ```
    
4. Start MAMP and go to Preferences->Web Server and change the "document root" to point to the root of your newly cloned directory. Next hit the "Start Servers" button in MAMP. This will open up the MAMP start page.

5. From the MAMP start page you can access phpMyAdmin under the tools dropdown in the upper navigation. Create a new Database named something appropriate to your project. Take note of this database name as we will need it later on.
    
6. Start your Gulp task runner to start watching your SCSS files and do an initial compile.
    ```
    $ gulp
    ```
  > Gulp should start running in your terminal window and continuing running to watch any changes to your SCSS files.
    
7. Open your browser and go to [http://localhost:8888](http://localhost:8888) which should start the Wordpress installation. When asked for database details, use the following:

    - **Database name**: (your database name from step #6)
    - **Database user**: root
    - **Database password**: root
    - **Database host**: localhost
    - **Database table prefix**: (see note below)
    
    > **Database Prefix Suggestion:** I would suggest making your database prefix something that relates to the site you developing. For instance if your site was called "Bob's Worm Store" it would be best to use something like "bws_" as your database prefix.

8. Follow the rest of the steps to setup an admin login and setup site details. After that is complete log in to your new Wordpress dashboard.

9. You will need to activate the spacePress starter theme. From the dashboard home go to Appearance->Themes in the lefthand navigation. You will see an installed theme called "spacePress," click "Activate" on this theme.

10. **Optional:** spacePress comes with a template for creating a spaceBase style guide. To take advantage of this you can create a new page and select the "Styleguide" template in the right hand column.

## Development Process
To make development changes, you will need to have MAMP running with the web server pointed to the root directory and Gulp running to watch for theme changes.

```
$ gulp
```
