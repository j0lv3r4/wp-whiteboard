var elixir = require('laravel-elixir');
require('laravel-elixir-browsersync-official');

elixir(function(mix) {
  mix.sass('./scss/style.scss', './style.css');

  mix.scripts([
    './js/scripts.js',
    './js/navigation.js',
    './js/skip-link-focus-fix.js'
  ],
    './scripts.js'
  );

  mix.browserSync({
    notify: false,
    port: 9001,
    proxy: {
	  target: 'missyherndon.dev'
    },
    files: [
      './**/*.php',
      './*.css',
      './*.js'
    ]
  });
});
