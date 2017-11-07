var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var beautifyCSS = require('gulp-cssbeautify');

gulp.task('custom', function () {
    return gulp
        .src('./scss/**/*.scss')
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', ['custom']);
});

gulp.task('default', ['custom']);