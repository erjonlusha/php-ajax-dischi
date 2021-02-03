let mix = require('laravel-mix');

mix.js('src/main.js', 'dist').vue()
.sass('src/style.scss', 'dist')
.setPublicPath('assets');