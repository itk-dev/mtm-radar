/* Set requirements */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browsersync = require('browser-sync').create(),
    gulpif = require('gulp-if'),
    cssnano = require('gulp-cssnano'),
    del = require('del'),
    runsequence = require('run-sequence'),
    plumber = require('gulp-plumber'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer');

// Set paths
var scriptFiles = 'js/**/*.js',
    scriptDest = 'dist/js',
    styleFiles = 'scss/**/*.scss',
    styleDest = 'dist/css',
    imgFiles = 'images/**/*.*',
    imgDest = 'dist/img';
    fontFiles = 'fonts/**/*.*',
    fontDest = 'dist/fonts';

/* helper functions */
// handling errors
var onError = function (err) {  
  gutil.log;
  console.log(err);
};
var jsMinify = function (file) {
    return file.path.indexOf('.min.js') == -1;
}

/* Define tasks */

// Cleanup dist folders
gulp.task('clean', function() {
  del.sync([
      styleDest,
      fontDest,
      imgDest,
      scriptDest
    ]);
});

// Copy fonts to dist
gulp.task('fonts', function() {
    return gulp.src('node_modules/npm-font-open-sans/fonts/**/*')
    .pipe(gulp.dest('dist/fonts/open-sans/'))
});

// Copy icons to dist
gulp.task('icons', function() {
    return gulp.src('node_modules/font-awesome/fonts/**/*')
    .pipe(gulp.dest('dist/fonts/font-awesome/'))
});

// Copy scripts to dist
gulp.task('scripts', function() {
    return gulp.src([
        scriptFiles,
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/chart.js/dist/Chart.min.js',
        'node_modules/jquery-validation/dist/jquery.validate.min.js'
    ])
    .pipe(gulpif(jsMinify, uglify()))
    .pipe(gulpif(jsMinify, rename({ suffix: '.min' })))
    .pipe(gulp.dest(scriptDest))
    .pipe(browsersync.reload({ // Reload browser with changes
      stream: true
  }))
});

// Copy images to dist
gulp.task('images', function() {
    return gulp.src(imgFiles)
    .pipe(gulp.dest(imgDest))
    .pipe(browsersync.reload({ // Reload browser with changes
        stream: true
    }))
});

// Compile scss to minifyed css
gulp.task('scss', function(){
  gulp.src(styleFiles)
    .pipe(plumber({ // More graceful error handling, prevents watch from breaking.
      errorHandler: onError
    }))
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(autoprefixer({
        browsers: ['last 2 versions']
    }))
    .pipe(gulp.dest(styleDest)) // Destination for css
    .pipe(gulpif('*.css', cssnano())) // minifi the css file
    .pipe(browsersync.reload({ // Reload browser with changes
      stream: true
  }))
});

// Watch task for easy development
gulp.task('watch', [`default`], function(){
  gulp.watch('scss/**/*.scss', ['scss']);
  gulp.watch('js/**/*.js', ['scripts']);
  gulp.watch('images/**/*.*', ['images']);
});

// Reload browser with watch task
gulp.task('browsersync', function() {
  browsersync.init({
    files: styleDest
  })
});

// Default task when running gulp
gulp.task('default', function (callback) {
  runsequence(['clean', 'fonts', 'icons', 'scripts', 'images', 'scss'],
    callback
  )
});

