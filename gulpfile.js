var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var beautifyCSS = require('gulp-cssbeautify');

// just run gulp sass on cli
gulp.task('styles', function () {
    return gulp
        .src('./scss/**/*.scss')
        .pipe(sass())
        .pipe(beautifyCSS())
        .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', ['styles']);
});

gulp.task('default', ['styles']);