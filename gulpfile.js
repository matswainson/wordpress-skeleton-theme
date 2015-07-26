var gulp = require('gulp'),
	chmod = require('gulp-chmod'),
	concat = require('gulp-concat'),
	jshint = require('gulp-jshint'),
	minifycss = require('gulp-minify-css'),
	plumber = require('gulp-plumber'),
	replace = require('gulp-replace')
	sass = require('gulp-ruby-sass'),
	scsslint = require('gulp-scss-lint'),
	stylish = require('jshint-stylish'),
	uglify = require('gulp-uglify'),
	dev = true;

gulp.task( 'scriptslint', function () {
	gulp.src( 'static/js/*.js' )
		.pipe( jshint({
			asi: true,
			expr: true
		}) )
		.pipe( jshint.reporter( 'jshint-stylish' ) );
} );

gulp.task( 'scsslint', function () {
	gulp.src( 'static/css/*.scss' )
		.pipe( scsslint( {
			'config': 'lint.yml',
			'maxBuffer': 614400,
			'reporterOutput': 'scssReport.xml'
		} ) );
} );

gulp.task( 'styles', function() {
	gulp.src('static/css/*')
		.pipe(sass())
		.pipe( concat('styles.css') )
		.pipe( chmod(644) )
		.pipe(gulp.dest('static'));
} );

gulp.task( 'scripts', function () {
	gulp.src( 'static/js/*.js' )
		.pipe( plumber() )
		.pipe( concat( 'scripts.js' ) )
		.pipe( uglify() )
		.pipe( chmod(644) )
		.pipe( gulp.dest( 'static' ) );
} );

gulp.task( 'watch', function () {
		gulp.watch( 'static/js/*.js', ['scripts'] );
		gulp.watch( 'static/js/*.js', ['scriptslint'] );
		gulp.watch( 'static/css/*', ['scsslint', 'styles'] );
		gulp.watch( 'static/css/support/*', ['scsslint', 'styles'] );
} );

gulp.task( 'default', [ 'scriptslint', 'styles', 'scripts', 'watch' ] );
