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
    .pipe(wiredep())
    .pipe(gulp.dest(src + '/scss'));
});

gulp.task('inject', () => {
  gulp.src(src + '/functions.php')
    .pipe($.inject(gulp.src([src + '/js/vendors/**/*.js']), {
      starttag: '// scripts',
      endtag: '// endscripts',
      transform: (filePath, file) => {
        return "wp_enqueue_script( 'whiteboard-" + filePath.split('/')[3] + "', get_template_directory_uri() . '" + filePath + "', array(), '20130115', true );";
      }
    }))
    .pipe(gulp.dest(src + '/'));
});

gulp.task('serve', ['wiredep', 'inject', 'sass'], () => {
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
  gulp.watch(src + '/js/**/*.js', ['inject']);
  gulp.watch('bower.json', ['wiredep']);
  gulp.watch('gulpfile.babel.js').on('change', reload);
});
