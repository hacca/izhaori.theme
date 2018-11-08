
var gulp = require('gulp');
var sass = require('gulp-sass');
//var sass = require('gulp-ruby-sass');
//var please = require('gulp-pleeease');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require("gulp-plumber");
//var fileinclude = require('gulp-file-include');
//var changed = require('gulp-changed');
//var mediaquerie = require('gulp-combine-media-queries');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var filter = require('gulp-filter');
var notify = require('gulp-notify');
//var cssmin = require('gulp-cssmin');

var paths = {
	base:'./',
	scss:'./scss/**/*.scss',
	js:'./assets/js/**/*.js',
	html:'./**/*.html',
	image :'./assets/images/**/*',
	css:'./assets/css',
	css_files:'./assets/css/**/*.css',
	dist:'./dist',
	php:'./**/*.php'
};


gulp.task('cssmin', function() {
	gulp.src(paths.css_files)
	.pipe(cssmin())
	.pipe(gulp.dest(paths.css));
});


gulp.task('sass', function() {
	gulp.src(paths.scss)
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(sass({
		errLogToConsole: true,
//		sourceMap: ['./css/maps'],
//		sourceComments: 'normal',
		outputStyle: 'expanded',
	}))
//	.pipe(please({
//		"autoprefixer": { "browsers": ["last 4 versions", "android 2.3"] },
//		"minifier": false,
//		"mqpacker": false,
//		"sourcemaps": true
//	}))
	.pipe(autoprefixer({
		browsers: ["last 2 versions", "Firefox ESR"],
	}))
//	.pipe(mediaquerie({log: true}))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest(paths.css))
	.pipe(filter(['**', '!**/*.map'])) // Filtering stream to only css files
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function () {
	browserSync({
		notify: false,
		proxy: "http://hotel-hanayacom.local/"　//ここは毎回書き換える
	});
});

gulp.task('reload', function () {
	browserSync.reload();
});



gulp.task('default', ['browser-sync'], function () {
    gulp.watch([paths.php], ['reload']); //phpの時に各
	gulp.watch(paths.scss, ['sass']); //use Sorcemap false
//	gulp.watch('./css/*.css', ['reload']); //use Sorcemap true
});

gulp.task('build', ['sass']);
