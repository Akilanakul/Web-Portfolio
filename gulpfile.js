'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
 
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')

  	 .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))

    .pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))

     .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css/styles.css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});