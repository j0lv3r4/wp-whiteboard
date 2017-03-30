var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.sass('./scss/style.scss', './style.css')
    .scripts([
      './js/customizer.js',
      './js/navigation.js',
      './js/skip-link-focus-fix.js'],
      './scripts.js')
    .version(['./style.css', './scripts.js'])
    .browserSync({
      notify: false,
      port: 9001,
      proxy: {
        target: 'whiteboard.dev'
      }
    });
});
