![Banner Image](logo-spacepress-repo.png)

## Overview
A fully functioning starter Wordpress build which includes spaceBase and a Gulp task runner.

**What's Included:**
- full install of [Wordpress](https://wordpress.org/) core files
- the latest release of [spaceBase](http://spacebase.space150.com/)
- barebones theme based on the [Underscores](http://underscores.me/) started theme
- [Gulp](http://gulpjs.com/) task runner with pre-built tasks for compiling SCSS
- Wordpress page template for easily adding the spaceBase style guide

## Local Development Setup
Most of these are basic steps relating to local Wordpress development using [MAMP](https://www.mamp.info/en/). If you are familiar with the process you will move through this quickly.

1. Browse to the directory that you keep development projects in and clone the project. Then enter the directory that is created.
    ```
    $ git clone git@github.com:tjdunklee/spacePress.git
    $ cd spacePress
    ```

2. We will need to make sure Gulp is installed globally on your machine:
    ```
    $ npm install --global gulp
    ```
 
3. Also, you will need the Bundler gem to install any Ruby depedencies:
    ```
    $ gem install bundler
    ```
    
  > **NOTE:** If you are using the system Ruby install, you may need to use 'sudo' before your command to get around permission issues.

4. Run a bundle install to get the specified gems.
    ```
    $ bundle install
    ```

3. Start MAMP and go to Preferences->Web Server and change the "document root" to point to the root of your newly cloned directory. Next hit the "Start Servers" button in MAMP. This will open up the MAMP start page.

4. From the MAMP start page you can access phpMyAdmin under the tools dropdown in the upper navigation. Create a new Database named something appropriate to your project. Take note of this database name as we will need it later on.
    
5. Start your Gulp task runner to start watching your SCSS files and do an initial compile.
    ```
    $ gulp
    ```
  > Gulp should start running in your terminal window and continuing running to watch any changes to your SCSS files.
    
6. Open your browser and go to [http://localhost:8888](http://localhost:8888) which should start the Wordpress installation. When asked for database details, use the following:

    - **Database name**: (your database name from step #4)
    - **Database user**: root
    - **Database password**: root
    - **Database host**: localhost
    - **Database table prefix**: (see note below)
    
    > **Database Prefix Suggestion:** I would suggest making your database prefix something that relates to the site you developing. For instance if your site was called "Bob's Worm Store" it would be best to use something like "_bws" as your database prefix.

7. Follow the rest of the steps to setup an admin login.

8. **TODO:** Activate the spacePress starter theme.

9. **TODO:** Create a style guide page using the provided template.

## Development Process
To make development changes, you will need to have MAMP running with the web server pointed to the root directory and Gulp running to watch for theme changes. 

```
$ gulp
```
