const Encore = require('@symfony/webpack-encore');

Encore
    // the directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the output path
    .setPublicPath('/build')

    // entry for the main JavaScript file
    .addEntry('app', './assets/app.js')

    // enable single runtime chunk for all pages
    .enableSingleRuntimeChunk()

    // enables Sass/SCSS support
    .enableSassLoader()

    // enables postcss (tailwind will be added via postcss)
    .enablePostCssLoader()

    // enable React or Vue (optional, based on your project)
    // .enableReactPreset()
    // .enableVueLoader()

    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableVersioning(Encore.isProduction())

module.exports = Encore.getWebpackConfig();
