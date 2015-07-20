// Set Paths to Theme Assets
// * Be sure to include trailing slash
var assetPath = 'wp-content/themes/spacepress/assets/';

// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var compass = require('gulp-compass');

// by default, the environment is run as development
var config = {'env': 'dev'};


// Compile SCSS Using Compass
gulp.task('compass', function() {
  if (config.env === 'dev') {
    gulp.src(assetPath + 'scss/**/*.scss')
    .pipe(compass({
      config_file: 'config.rb',
      css: assetPath + 'stylesheets',
      sass: assetPath + 'scss',
      comments: true
    }))
    .on('error', function() {
      // error catch so things still run
    })
    .pipe(gulp.dest(assetPath + 'stylesheets'));
  }
  else {
    gulp.src(assetPath + 'scss/**/*.scss')
    .pipe(compass({
      config_file: 'config.rb',
      css: assetPath + 'stylesheets',
      sass: assetPath + 'scss',
      style: 'compressed'
    }))
    .pipe(gulp.dest(assetPath + 'stylesheets'));
  }
});


// Set Environment to Prod for Min Assets
gulp.task('prodconfig', function () {
  config.env = 'prod';
});


// Watch Files For Changes
gulp.task('watch', function() {
  gulp.watch(assetPath + 'scss/**/*.scss', ['compass']);
});


// Default Task
gulp.task('default', ['compass', 'watch']);

// Prod Build
gulp.task('prod', ['prodconfig', 'compass' ]);
