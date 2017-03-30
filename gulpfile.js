var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(function(mix) {
  mix.sass('./scss/style.scss', './style.css');

  mix.scripts([
    './js/navigation.js',
    './js/skip-link-focus-fix.js'
  ],
    './scripts.js'
  );

  mix.version(['./style.css', './scripts.js']);

  mix.browserSync({
    notify: false,
    port: 9001,
    proxy: {
      target: 'whiteboard.dev'
    }
  });

  mix.livereload([
    './**/*.php',
    './*.css',
    './*.js'
  ]);
});
