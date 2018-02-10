let gulp = require( 'gulp' );

const eslint = require( 'gulp-eslint' ),
  concat = require( 'gulp-concat' ),
  uglify = require( 'gulp-uglify' ),
  rename = require( 'gulp-rename' ),
  babel = require( 'gulp-babel' ),
  notify = require( 'gulp-notify' );

const path = 'assets/js/src/';

let jsfiles = [
  {
    src: [
      path + 'navigation.js',
      path + 'helpers.js',
    ],
    filename: 'general'
  },
  {
    src: [
      path + 'frontpage/cow-animation.js',
      path + 'frontpage/homepage-scroller.js',
    ],
    filename: 'frontpage'
  },
  {
    src: [
      path + 'portfolio.js'
    ],
    filename: 'portfolio'
  },
];

const jstask = ( srcArray, filename ) => {
  return gulp.src( srcArray )
    .pipe( eslint() )
    .pipe( babel() )
    .pipe( concat( filename + '.js' ) )
    .pipe( uglify() )
    .pipe( rename( filename + '.min.js' ) )
    .pipe( notify( 'js complete' ) )
    .pipe( gulp.dest( 'assets/js' ) );
};

module.exports = () => {
  jsfiles.forEach( ( { src, filename } ) => {
    jstask( src, filename );
  });
};

