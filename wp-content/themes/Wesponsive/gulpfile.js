var Promise = require("es6-promise").Promise;

var gulp = require("gulp");
// Live reload/style-injection
var browserSync = require("browser-sync").create();
// CSS
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
// JavaScript
var coffee = require("gulp-coffee");
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");
var plumber = require('gulp-plumber');
var notify = require("gulp-notify");

function browserSyncFunc(done) {
    browserSync.init({
        proxy: "localhost",
        watchTask: true
    });
    done();
}

function sassFunc() {
    return gulp
        .src(["./includes/css/main.sass"])
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sass())
        .pipe(
            autoprefixer(["last 15 versions", "> 10%", "ie 8", "ie 7"], {
                cascade: true
            })
        )
        // .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest("./dist/css/"))
        .pipe(browserSync.reload({stream: true}))
}

function coffeeFunc() {
    return gulp
        .src("./includes/js/frontend/**/*.coffee")
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(coffee({bare: true}).on("error", console.log))
        .pipe(gulp.dest("./includes/js/frontend/"));
}

function scriptsFunc() {
    return gulp
        .src([
            "./includes/js/vendor/jquery.js",
            "./includes/js/vendor/**/*.js",
            "./includes/js/frontend/**/*.js"
        ])
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(concat("main.js"))
        .pipe(gulp.dest("./dist/js/"))
        .pipe(browserSync.reload({stream: true}));
}

// This function watches for changes in the following areas and refreshes/compiles

function watchFunc() {
    gulp.watch("./includes/**/*.sass", sassFunc);
    gulp.watch("./includes/**/*.scss", sassFunc);
    gulp.watch("./includes/js/**/*.coffee", coffeeFunc);
    gulp.watch("./includes/js/**/*.js", scriptsFunc);
}

// Choose which tasks occur when "gulp" command is run

const build = gulp.series(sassFunc, coffeeFunc, scriptsFunc, watchFunc);
const watchAll = gulp.series(browserSyncFunc, watchFunc); // watch CSS & JS for changes, run Browserify

exports.watchAll = watchAll;
