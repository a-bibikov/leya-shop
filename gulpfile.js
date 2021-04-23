const gulp = require('gulp');
const browsersync = require('browser-sync');
const fileInclude = require('gulp-file-include');
const del = require('del');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const mediaQueries = require('gulp-group-css-media-queries');
const cleanCss = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify-es').default;
const imageMinify = require('gulp-imagemin');
const webp = require('gulp-webp');
const svgSprite = require('gulp-svg-sprite');
const ttf2woff = require('gulp-ttf2woff');
const ttf2woff2 = require('gulp-ttf2woff2');
const fonter = require('gulp-fonter');

const DIST = 'dist';
const PRODUCTION = 'local/templates/leya';
const SRC = 'src';
const COMPONENTS = 'local/components';

const path = {
    build: {
        html: DIST + '/',
        css: DIST + '/css/',
        js: DIST + '/js/',
        img: DIST + '/img/',
        fonts: DIST + '/css/fonts/',
    },
    templates: {
        css: PRODUCTION + '/',
        js: PRODUCTION + '/js/',
        img: PRODUCTION + '/img/',
    },
    src: {
        html: [SRC + '/*.html', '!' + SRC + '/_*.html'],
        css: [SRC + '/sass/*.sass', '!' + SRC + '/sass/_*.sass'],
        component_css: COMPONENTS + '/**/*.sass',
        js: SRC + '/js/*.js',
        img: SRC + '/img/**/*.{jpg,png,svg,gif,ico,webp}',
        fonts: SRC + '/fonts/*.{woff,woff2,ttf,eot}',
        normalize: SRC + '/sass/normalize/normalize.css'
    },
    watch: {
        html: SRC + '/**/*.html',
        css: SRC + '/sass/*.sass',
        js: SRC + '/js/*.js',
        img: SRC + '/img/**/*.{jpg,png,svg,gif,ico,webp}',
        fonts: SRC + '/fonts/*.{woff,woff2,ttf,eot}',
        component_css: COMPONENTS + '/**/*.sass',
    },
    clean: DIST + '/'
}

function browserSync() {
    browsersync.init({
        server: {
            baseDir: './' + DIST + '/'
        },
        port: 3000,
        notify: false
    })
}

function html() {
    return gulp.src(path.src.html)
        .pipe(fileInclude())
        .pipe(webp())
        .pipe(gulp.dest(path.build.html))
        .pipe(browsersync.stream())
}

function css() {
    return gulp.src(path.src.css)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(mediaQueries())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 5 versions'],
            cascade: true
        }))
        .pipe(gulp.dest(path.build.css))
        .pipe(cleanCss())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(path.build.css))
        .pipe(browsersync.stream())
}
function css_to_bitrix() {
    return gulp.src(path.src.css)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(mediaQueries())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 5 versions'],
            cascade: true
        }))
        .pipe(gulp.dest(path.templates.css))
        .pipe(cleanCss())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(path.templates.css))
        .pipe(browsersync.stream())
}
function css_components_to_bitrix() {
    return gulp.src([path.src.component_css], {dot: true})
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(mediaQueries())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 5 versions'],
            cascade: true
        }))
        .pipe(gulp.dest(function(file){
            return file.base;
        }))
        .pipe(cleanCss())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(function(file){
            return file.base;
        }))
}

function js() {
    return gulp.src(path.src.js)
        .pipe(sourcemaps.init())
        .pipe(fileInclude())
        .pipe(gulp.dest(path.build.js))
        .pipe(uglify())
        .pipe(rename({
            extname: '.min.js'
        }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(path.build.js))
        .pipe(browsersync.stream())
}
function js_to_bitrix() {
    return gulp.src(path.src.js)
        .pipe(sourcemaps.init())
        .pipe(fileInclude())
        .pipe(gulp.dest(path.templates.js))
        .pipe(uglify())
        .pipe(rename({
            extname: '.min.js'
        }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(path.templates.js))
        .pipe(browsersync.stream())
}

function images() {
    return gulp.src(path.src.img)
        .pipe(webp({
            quality: 70
        }))
        .pipe(gulp.dest(path.build.img))
        .pipe(gulp.src(path.src.img))
        .pipe(imageMinify({
            interlaced: true,
            progressive: true,
            optimizationLevel: 3,
            svgoPlugins: [{removeViewBox: false}]
        }))
        .pipe(gulp.dest(path.build.img))
        .pipe(browsersync.stream())
}
function images_to_bitrix() {
    return gulp.src(path.src.img)
        .pipe(webp({
            quality: 70
        }))
        .pipe(gulp.dest(path.templates.img))
        .pipe(gulp.src(path.src.img))
        .pipe(imageMinify({
            interlaced: true,
            progressive: true,
            optimizationLevel: 3,
            svgoPlugins: [{removeViewBox: false}]
        }))
        .pipe(gulp.dest(path.templates.img))
        .pipe(browsersync.stream())
}

function fonts() {
    gulp.src(path.src.fonts)
        .pipe(ttf2woff())
        .pipe(gulp.dest(path.build.fonts))
    return gulp.src(path.src.fonts)
        .pipe(ttf2woff2())
        .pipe(gulp.dest(path.build.fonts))
}

function normalize() {
    return gulp.src(path.src.normalize)
        .pipe(cleanCss())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest(path.build.css))
        .pipe(browsersync.stream())
}

gulp.task('eot2ttf', function () {
    return gulp.src(SRC + '/fonts/*.otf')
        .pipe(fonter({
            formats: ['ttf']
        }))
        .pipe(gulp.dest(SRC + '/fonts/'))
})

gulp.task('svgSprite', function () {
    return gulp.src([SRC + '/svg/*.svg'])
        .pipe(svgSprite({
            mode: {
                stack: {
                    sprite: './icons/icons.svg',
                    example: true
                }
            }
        }))
        .pipe(gulp.dest(path.build.img))
})

function watchFiles() {
    gulp.watch([path.watch.html], html);
    gulp.watch([path.watch.css], css);
    gulp.watch([path.watch.css], css_to_bitrix);
    gulp.watch([path.watch.component_css], css_components_to_bitrix);
    gulp.watch([path.watch.js], js);
    gulp.watch([path.watch.img], images);
    gulp.watch([path.watch.fonts], fonts);
}

function clean() {
    return del(path.clean)
}

const build = gulp.series(clean, gulp.parallel(normalize, css, css_to_bitrix, css_components_to_bitrix, js, html));
const watch = gulp.parallel(build, watchFiles, browserSync);

exports.css_components_to_bitrix = css_components_to_bitrix;
exports.css_to_bitrix = css_to_bitrix;
exports.js_to_bitrix = js_to_bitrix;
exports.fonts = fonts;
exports.images = images;
exports.js = js;
exports.css = css;
exports.html = html;
exports.build = build;
exports.watch = watch;
exports.default = watch;