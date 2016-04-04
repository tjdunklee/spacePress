// -----------------------------------------------------------------------------
// CONFIGURATION
//  - Set path to theme assets (be sure to include trailing slash)
//  - Read more about Autoprefixer options (https://github.com/postcss/autoprefixer#options)
// -----------------------------------------------------------------------------
var assetPath = 'wp-content/themes/spacepress/assets/',
    autoprefixerOptions = { browsers: ['last 2 versions', '> 5%', 'ie >= 9', 'Firefox ESR'] };


// -----------------------------------------------------------------------------
// REQUIRES
// -----------------------------------------------------------------------------
// Global gulp
var gulp = require('gulp'); 

// Plugins
var sass = require('gulp-sass'), 
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps');


// -----------------------------------------------------------------------------
// SASS TASK
// -----------------------------------------------------------------------------
// Compile SCSS, Autoprefix it, and build Sourcemaps
gulp.task('sass', function() {
  return gulp
  .src(assetPath + 'scss/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(autoprefixer(autoprefixerOptions))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(assetPath + 'stylesheets'));
});


// -----------------------------------------------------------------------------
// WATCH TASK
// -----------------------------------------------------------------------------
gulp.task('watch', function() {
  gulp.watch(assetPath + 'scss/**/*.scss', ['sass']);
});


// -----------------------------------------------------------------------------
// TASK RUNNERS
// -----------------------------------------------------------------------------

// Default
gulp.task('default', ['sass', 'watch']);
