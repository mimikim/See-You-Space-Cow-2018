let gulp = require( 'gulp' ),
  imagemin = require( 'gulp-imagemin' ),
  changed = require( 'gulp-changed' ),
  notify = require( 'gulp-notify' );

module.exports = function() {
  return gulp.src( 'assets/images/**' )
    .pipe( changed('assets/images' ) )
    .pipe( imagemin() )
    .pipe( notify( 'svg complete' ) )
    .pipe( gulp.dest( 'assets/images' ) );
};

