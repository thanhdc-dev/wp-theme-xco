const mix = require('laravel-mix');
const THEME_DIR = `..`;
const RESOURCES_DIR =  `${THEME_DIR}/laravel-mix`;
const DIST_DIR = `${THEME_DIR}/assets`;

mix.setPublicPath(`${DIST_DIR}`);

// mix.sass(`./scss/app.scss`, `${DIST_DIR}/css/`).sourceMaps();
// mix.js(`./js/app.js`, `${DIST_DIR}/js/`)
mix.sass('./scss/app.scss', 'css', {
        sourceMap: true
    })
    .js(`./js/app.js`, `js`)
    .js(`./js/home.js`, `js/home`)
    .setPublicPath(`${DIST_DIR}`);

mix.browserSync({
    proxy: "http://xcons.test/",
    files: [
        `${THEME_DIR}/**/*.php`,
        `./js/*.js`,
        `./css/*.css`,
    ]
});
