let gulp = require( 'gulp' );

const concat = require( 'gulp-concat' ),
  uglify = require( 'gulp-uglify' ),
  rename = require( 'gulp-rename' ),
  notify = require( 'gulp-notify' );

module.exports = () => {
  return gulp.src( [
    'assets/vendor/fullpage.js/dist/jquery.fullpage.min.js',
    'assets/vendor/animejs/anime.min.js',
    'assets/vendor/espi-a11y-dialog/a11y-dialog.min.js'
  ] )
    .pipe( concat( 'vendor.js' ) )
    .pipe( uglify() )
    .pipe( rename( 'vendors.min.js' ) )
    .pipe( notify( 'vendor scripts complete' ) )
    .pipe( gulp.dest( 'assets/js' ) );
};
