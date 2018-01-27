let gulp = require( 'gulp' ),
  imagemin = require( 'gulp-imagemin' ),
  changed = require( 'gulp-changed' );

module.exports = function() {
  return gulp.src( 'assets/images/**' )
    .pipe( changed('assets/images' ) )
    .pipe( imagemin() )
    .pipe( gulp.dest( 'assets/images' ) );
};

