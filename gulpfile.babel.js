// js written in es6, using babel to compile gulpfile

let gulp = require( './gulp' )( [
  'image',
  'svg',
  'css',
  'js',
  'watch'
] );

gulp.task( 'default', [  'image', 'svg', 'css', 'js' ] );
