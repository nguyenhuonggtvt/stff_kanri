const mix = require('laravel-mix');
const CleanObsoleteChunks = require('webpack-clean-obsolete-chunks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .webpackConfig({
        // Uncomment this when using dynamic import
        output: {
            chunkFilename: 'js/chunks/[name].[contenthash].js',
        },
        plugins: [
            new CleanObsoleteChunks()
        ],
    })
    // List of js
    .js('resources/js/index.js', 'public/js')

    .js('resources/js/staffs/staff_search.js', 'public/js')
    .js('resources/js/staffs/staff_register.js', 'public/js')
    .js('resources/js/staffs/staff_detail.js', 'public/js')
    .js('resources/js/staffs/staff_lession.js', 'public/js')
    .js('resources/js/staffs/staff_evaluation.js', 'public/js')

    .js('resources/js/teacher_sugguestion.js', 'public/js')

    .js('resources/js/evaluations/evaluation_search.js', 'public/js')
    .js('resources/js/evaluations/evaluation_input.js', 'public/js')
    .js('resources/js/evaluations/evaluation_detail.js', 'public/js')

    .js('resources/js/schedules/schedule_search.js', 'public/js')
    .js('resources/js/schedules/schedule_register.js', 'public/js')
    .js('resources/js/schedules/schedule_search_lesson.js', 'public/js')
    .js('resources/js/schedules/schedule_lession_edit.js', 'public/js')
    .js('resources/js/schedules/schedule_lession_detail.js', 'public/js')
    .js('resources/js/schedules/schedule_lession_substitute.js', 'public/js')
    // List of css
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images')

    .version();
