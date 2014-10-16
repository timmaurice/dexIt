var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');

var paths = {
  sass: ['css/*.sass'],
};

gulp.task('sass', function () {
  gulp.src(paths.sass)
    .pipe(sass())
    .pipe(gulp.dest('css'));
});

// Rerun the task when a file changes
gulp.task('watch', function () {
  watch(paths.sass, function (files, cb) {
    gulp.start('sass', cb);
  });
});

gulp.task('default', ['sass', 'watch']);
