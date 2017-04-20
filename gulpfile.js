var gulp = require("gulp")
, sass = require("gulp-sass")
, uglify = require("gulp-uglify")
, concat = require('gulp-concat')
, clean = require('gulp-clean-css')
, sourcemaps = require('gulp-sourcemaps')
, plumber = require('gulp-plumber')
, notify = require('gulp-notify')
, babel= require('gulp-babel')
, livereload = require('gulp-livereload');


// uri
var uri = './content/themes/slmgmt/';

var paths = {
	scss: uri.concat('src/sass/**/*.sass'),
	styles: uri.concat('src/sass/styles.sass'),
	php: uri.concat('**/*.php'),
	js: uri.concat('src/js/**/*.js'),
	src: uri.concat('src/js'),
	dest: uri.concat('prod/')
}

// Error Handling
var plumberErrorHandler = {
	errorHandler: notify.onError({
		title: 'Gulp',
		message: 'Error. <%= error.message %>'
	})
};

// Sass to Css-min
gulp.task('styles', function() {
	gulp.src(paths.styles)
	  .pipe(plumber(plumberErrorHandler))
	  .pipe(sass())
    .pipe(clean())
	  .pipe(gulp.dest(paths.dest))
	  .pipe(livereload());
});

// Minify Css 
gulp.task('minify', function() {
  return gulp.src(paths.dest.concat('styles.css'))
    .pipe(sourcemaps.init())
    .pipe(clean())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.dest))
    .pipe(livereload());
});

// Uglify JS
gulp.task('uglify', function() {
	gulp.src(paths.js)
		.pipe(plumber(plumberErrorHandler))
		.pipe(babel({
        presets: ['es2015']
		  }))
		.pipe(concat('scripts-min.js'))
	  .pipe(uglify())
	  .pipe(gulp.dest(paths.dest))
	  .pipe(livereload());
});

// Watch task
gulp.task('default', function() {
	livereload.listen();
	gulp.watch(paths.php, livereload.reload);
	gulp.watch(paths.scss, ['styles']);
	gulp.watch(paths.js, ['uglify']);
	gulp.watch(paths.dest, ['minify']);
});

