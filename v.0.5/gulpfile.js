var gulp = require('gulp'),
		minifyCSS = require('gulp-minify-css'),
		concat = require('gulp-concat'),
		uglify = require('gulp-uglify'),
		prefix = require('gulp-autoprefixer'),
		sass = require('gulp-sass');

//minify JS
gulp.task('js', function(){
	return gulp.src('scripts/*.js')
	.pip(uglify())
	.pipe(gulp.dest('scripts'))
});

// minify and concat style files
gulp.task('css', function(){
	return gulp.src('styles/*.scss')
	.pipe(sass())
	.pipe(prefix('last 2 versions'))
	.pipe(concat('main.css'))
	.pipe(minifyCSS({processImport: false}))
	.pipe(gulp.dest('styles'))
});

gulp.task('build', function(){
	gulp.run('css')
	gulp.watch('styles/*.scss', ['css']);
	/*gulp.run('js')
	gulp.watch('sass/*.scss', function(){
		gulp.run('styles')
	})*/
});