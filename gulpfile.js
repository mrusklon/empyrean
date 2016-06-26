global.hostname = "empyrean";

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');


var paths = {

    html: ['app/**/*.php'],
    sass: ['sass/*.sass'],
    img: ['imgInbox/*']
};

gulp.task('img', function () {
    gulp.src(paths.img)
    .pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
    }))
    .pipe(gulp.dest('app/img'))
    .pipe(reload({stream: true}));
});





gulp.task('html', function () {
    gulp.src(paths.html)
        .pipe(reload({stream: true}));
});
gulp.task('browserSync', function () {
    browserSync({
        proxy: 'localhost',
        port: 80
    });
});

gulp.task('styles', function () {
    gulp.src(paths.sass)
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: require('node-bourbon').includePaths
        }).on('error', sass.logError))
        .pipe(rename({suffix: '.min', prefix: '_'}))
        .pipe(autoprefixer({
            browsers: ['last 15 versions'],
            cascade: false
        }))
        .pipe(minifycss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./app/'))
        .pipe(reload({stream: true}));
});


gulp.task('watcher', function () {
    //gulp.watch(paths.script, ['scripts']);
    gulp.watch(paths.html, ['html']);
    gulp.watch(paths.sass, ['styles']);
});


gulp.task('default', ['styles', 'watcher', 'browserSync']);
