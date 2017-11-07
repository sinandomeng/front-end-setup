var gulp = require('gulp'),
    gulpSass = require('gulp-sass'),
    gulpConnect = require('gulp-connect-php'),
    gulpCleanCss = require('gulp-clean-css'),
    beautifyCss = require('gulp-cssbeautify'),
    autoPrefix = require('gulp-autoprefixer'),
    browserSync = require('browser-sync');

gulp.task('style-script', function () {
    gulp.src('./scss/**/*.scss')
        .pipe(gulpSass())
        .pipe(autoPrefix({
            browsers: ['last 2 versions']
        }))
        // .pipe(gulpCleanCss())
        .pipe(beautifyCss())
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('connect-sync', function () {
    gulpConnect.server({}, function () {
        browserSync.init({
            proxy: '127.0.0.1:8000'
        });
    });

    gulp.watch('./scss/**/*.scss', ['style-script']);
    gulp.watch(['./**/*.html', './**/*.php', './js/**/*.js']).on('change', browserSync.reload);
});

gulp.task('default', ['style-script', 'connect-sync']);