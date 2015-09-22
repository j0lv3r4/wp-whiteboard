import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import browserSync from 'browser-sync';
import del from 'del';

const devUrl = 'whiteboard.dev';
const themeName = 'whiteboard';
const $ = gulpLoadPlugins();
const reload = browserSync.reload;
const src = '.';
const dest = '../' + themeName;

var plumbErrorHandler = { 
  errorHandler: $.notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  }) 
};

gulp.task('sass', () => {
  return gulp.src(src + '/scss/**/*.scss')
    .pipe($.plumber(plumbErrorHandler))
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      outputStyle: 'expanded',
      includePaths: '/scss/'
    }))
    .pipe($.autoprefixer({browsers: ['last 1 version']}))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest(src))
    .pipe(reload({stream: true}));
});

gulp.task('serve', () => {
  browserSync({
    notify: false,
    port: 9001,
    proxy: {
      // baseDir: [src]
      target: devUrl
    }
  });

  gulp.watch([
    src + '/**/*.php',
    src + '/*.css',
    src + '/js/**/*.js',
    src + '/img/**/*'
  ]).on('change', reload);

  gulp.watch(src + '/scss/**/*.scss', ['sass']);
  gulp.watch('gulpfile.babel.js').on('change', reload);
});
