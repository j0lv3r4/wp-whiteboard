var mix = require('laravel-mix');

mix.sass(
    './scss/style.scss',
    './style.css'
);

mix.js([
    	'./js/scripts.js',
		'./js/navigation.js',
		'./js/skip-link-focus-fix.js'
	],
    './scripts.js'
).sourceMaps();

mix.browserSync({
    /*
    proxy: {
        target: 'whiteboard.dev',
    },
    */
    files: [
      './style.css',
      './*.js',
      './**/*.php'
    ],
    logLevel: 'debug'
});