const gulp       = require('gulp');
const notify     = require('gulp-notify');
const sass       = require('gulp-sass');
const concat     = require('gulp-concat');
const rename     = require('gulp-rename');
// const cleanCSS   = require('gulp-clean-css');
const uglify     = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const rev        = require('gulp-rev');
const replace    = require('gulp-replace'); 
const svgmin     = require('gulp-svgmin'); 
const path       = require('path');
const svgstoring = require('gulp-svgstore');
const cssmin     = require('gulp-cssmin');

var js_stream = [
    './src/js/source.js',
];

function script() {
    return gulp.src(js_stream)
        .pipe(concat('script.js'))
        // .pipe(rename({prefix: 'delidelicious.'}))
        .pipe(rename("main.js"))
        // .pipe(uglify())
        .pipe(gulp.dest('site/templates/scripts/'))
        .pipe(notify({ message : 'all done with js files concatting'}));
}


function minjs() {
    return gulp.src(js_stream)
        .pipe(concat('site/templates/scripts/script.js'))
        .pipe(uglify())
        .pipe(rename({prefix: 'min.'}))
        .pipe(gulp.dest('site/templates/scripts/'))
        .pipe(notify({ message : 'js script minified'}));
}

function style() {
    return gulp
        .src('source/sass/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            style: "expanded"
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('site/templates/styles/'))
        .pipe(notify({ message : "sass-2 build complete"}));
}

function mincss() {
    return gulp.src('site/templates/styles/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('site/templates/styles/'))
        .pipe(notify({ message : "css minified"}));
}

function cleansvg() {
    return gulp
    .src('/home/edwin/projects/prominent/httpdocs/source/svg/raw/*.svg')
    // .pipe(svgmin())
    .pipe(svgmin((file) => {
        const prefix = path.basename(file.relative, path.extname(file.relative));
        console.log(prefix);
        return {
            full: true,
            plugins: [
                // {
                //     name: 'cleanupIDs',
                //     params: {
                //       prefix: 'svg-' + prefix,
                //       minify: true,
                //     },
                // },

                {
                    name: "prefixIds",
                    params: {
                        prefix: prefix
                    }
                },
                {
                    name: "removeAttrs",
                    params: {
                        attrs: "(class|data-name|style)"
                    }
                },
                {
                    name: "cleanupAttrs"
                },
                {
                    name: "removeDoctype"
                },
                {
                    name: "removeComments"
                },
                {
                    name: "removeXMLNS"
                },
                {
                    name: "removeStyleElement"
                },
                {
                    name: "removeEmptyContainers"
                },
                {
                    name: "addClassesToSVGElement",
                    params: {
                      classNames: ["svg-icon"]
                    }
                },
                {
                    name: 'cleanupIDs',
                    params: {
                        prefix: 'foo-',
                        minify: true,
                        remove: false
                    },
                },
            ],
        }
    }))
    .pipe(gulp.dest('source/svg/optimized/'))
    .pipe(notify({ message : "svg cleaned up" }));
}

function svgStore() {
    return gulp
    .src('/home/edwin/projects/fench/httpdocs/src/svg/raw/*.svg')
    .pipe(svgmin((file) => {
        const myprefix = path.basename(file.relative, path.extname(file.relative));
        return {
            full: true,
            plugins: [
                {
                    name: 'cleanupIDs',
                    params: {
                        prefix: myprefix + '-',
                        minify: true,
                    },
                },
                {
                    name: "removeStyleElement"
                },
                {
                    name: "removeAttrs",
                    params: {
                        attrs: "(class|data-name|style)"
                    }
                },
            ]
        }
    }))
    .pipe(svgstoring())
    .pipe(gulp.dest('site/templates/resources/svg/'))
    .pipe(notify({ message : "svg store finished" }));
}

function watch() {
    gulp.watch('./src/sass/**/*', style);
    gulp.watch('./src/js/**/*', script);
}

exports.style = style;
exports.watch = watch;
exports.script = script;
exports.cleansvg = cleansvg;
exports.svgstore = svgStore;
exports.mincss = mincss;
exports.minjs = minjs;
