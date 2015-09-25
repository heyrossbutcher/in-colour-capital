var gulp   = require('gulp'),
		sass = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat');

gulp.task('default', ['styles', 'watch']);

gulp.task('styles', function() {
	return gulp.src('sass/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 6-8', 'opera 12.1', 'Firefox > 20', 'iOS 7'))
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);
});