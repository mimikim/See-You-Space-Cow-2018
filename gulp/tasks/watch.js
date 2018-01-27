let gulp = require('gulp');

module.exports = () => {
  gulp.watch( 'assets/image/src/**', [ 'image' ] );
  gulp.watch( 'assets/svg/src/**', [ 'svg' ] );
  gulp.watch( 'assets/css/scss/**', [ 'css' ] );
  gulp.watch( 'assets/js/src/**', [ 'js' ] );
};
