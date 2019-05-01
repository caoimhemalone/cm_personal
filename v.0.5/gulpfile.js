var gulp = require("gulp");
var sass = require('gulp-sass');
//var browserSync = require('browser-sync').create();

// Specific Task
function js() {
    return gulp
    .src(['scripts/main.js'])
    .pipe(gulp.dest('scripts'))
   // .pipe(browserSync.stream());
}
gulp.task(js);

// Specific Task
function gulpSass() {
    return gulp
    .src(['styles/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('styles'))
    //.pipe(browserSync.stream());
}
gulp.task(gulpSass);

// Run multiple tasks
gulp.task('start', gulp.series(js, gulpSass));