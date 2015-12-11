import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import browserSync from 'browser-sync';
import del from 'del';
import {stream as wiredep} from 'wiredep';

const devUrl = 'whiteboard.dev';
const themeName = 'whiteboard';
const $ = gulpLoadPlugins();
const reload = browserSync.reload;
const src = '.';
const dest = '../' + themeName;

gulp.task('sass', () => {
  gulp.src(src + '/scss/**/*.scss')
    .pipe($.plumber())
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

gulp.task('wiredep', () => {
  gulp.src(src + '/scss/style.scss')
    .pipe(wiredep({
      ignorePath: /^(\.\.\/)+/
    }))
    .pipe(gulp.dest(src + '/scss'));
});

gulp.task('serve', ['wiredep', 'sass'], () => {
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
  gulp.watch('bower.json', ['wiredep']);
  gulp.watch('gulpfile.babel.js').on('change', reload);
});
