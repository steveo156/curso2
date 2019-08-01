/*let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/

let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js');
mix.sass('resources/assets/sass/app.scss', 'public/css');

// mix.js('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js','public/js');

mix.js([
	'public/js/bootstrap.js',
	'public/js/jquery.js',
	'public/js/app.js'
	],'public/js/all.js','./');

mix.bowserSync({
	proxy: 'http://127.0.0.1:8000'
});


/*mix.js([
 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
 'node_modules/jquery/dist/jquery.js',
 ],'public/js/all.js','./');
*/
// mix.js([
//  'bootstrap-sass/assets/javascripts/bootstrap.js',
//  'jquery/dist/jquery.js',
//  ],'public/js/all.js','node_modules');