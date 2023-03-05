const mix = require('laravel-mix');
const THEME_DIR = `..`;
const RESOURCES_DIR =  `${THEME_DIR}/laravel-mix`;
const DIST_DIR = `${THEME_DIR}/assets`;

mix.setPublicPath(`${DIST_DIR}`);

const cssPluginOwl = ['./css/plugins/owl.carousel.min.css', './css/plugins/owl.theme.default.min.css'];
mix.copy([...cssPluginOwl], `${DIST_DIR}/css/home`)
    .copy([...cssPluginOwl], `${DIST_DIR}/css/about-us`)
    .copy([...cssPluginOwl, './css/plugins/fancybox.min.css'], `${DIST_DIR}/css/construction`)
    .copy([...cssPluginOwl], `${DIST_DIR}/css/archive`)
    .sass('./scss/app.scss', 'css', {
        sourceMap: true
    })
    .js(`./js/app.js`, `js`)
    .js([
        './js/plugins/owl.carousel.min.js',
        './js/home.js',
    ], `js/home`)
    .js([
        './js/plugins/owl.carousel.min.js',
        './js/about-us.js',
    ], `js/about-us`)
    .js([
        './js/plugins/owl.carousel.min.js',
        './js/plugins/fancybox.min.js',
        './js/construction.js',
    ], `js/construction`)
    .js(['./js/archive.js'], 'js/archive')
    .setPublicPath(`${DIST_DIR}`);

mix.browserSync({
    proxy: "http://xcons.test/",
    files: [
        `${THEME_DIR}/**/*.php`,
        `./js/*.js`,
        `./css/*.css`,
    ]
});
