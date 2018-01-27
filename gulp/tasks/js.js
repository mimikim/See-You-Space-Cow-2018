let gulp = require( 'gulp' );

const eslint = require( 'gulp-eslint' ),
  concat = require( 'gulp-concat' ),
  uglify = require( 'gulp-uglify' ),
  rename = require( 'gulp-rename' ),
  babel = require( 'gulp-babel' ),
  order = require( 'gulp-order' );

module.exports = () => {
  return gulp.src( 'assets/js/src/**' )
    .pipe( eslint() )
    .pipe( babel() )
    .pipe( order( [

    ] ) )
    .pipe( concat( 'scripts.js' ) )
    .pipe( uglify() )
    .pipe( rename( 'scripts.min.js' ) )
    .pipe( gulp.dest( 'assets/js' ) );
};
