let gulp = require( 'gulp' ),
  svgmin = require( 'gulp-svgmin' ),
  notify = require( 'gulp-notify' );

module.exports = function() {
  return gulp.src( 'assets/svg/src/*.svg' )
    .pipe(svgmin( {
      plugins: [ {
        removeDoctype: true
      }, {
        removeComments: true
      }, {
        cleanupNumericValues: {
          floatPrecision: 2
        }
      }, {
        convertColors: {
          names2hex: false,
          rgb2hex: false
        }
      }, {
        cleanupIDs: false
      } ]
    } ) )
    .pipe( notify( 'svg complete' ) )
    .pipe( gulp.dest( 'assets/svg' ) );
};

