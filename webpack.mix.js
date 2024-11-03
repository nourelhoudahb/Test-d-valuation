const mix = require('laravel-mix');

// Compile specific CSS files to public/css
mix.css('resources/css/app.css', 'public/css')
   .css('resources/css/navigation.css', 'public/css');
