// homepage cow animation

(() => {
  "use strict";

  if ( ! document.body.classList.contains( 'home' ) ) {
    return false;
  }

  class Cow {
    constructor() {
      this.face();
    }

    // animations on the face
    face() {
      let randomTime = Math.floor( Math.random() * 3000 ) + 800;

      setTimeout( () => {
        this.blink();
        this.face();
      }, randomTime );

    }

    blink() {
      let eyes_opened = document.getElementById("g-eyes-open");
      let eyes_down = document.getElementById("g-eyes-down");

      eyes_opened.classList.add( 'hidden' );
      eyes_down.classList.add( 'show' );

      setTimeout( () => {
        eyes_opened.classList.remove( 'hidden' );
        eyes_down.classList.remove( 'show' );
      }, 500 );
    }
  }

  document.getElementById( 'cow-animated' ).addEventListener( 'load', () => {
    new Cow();
  }, false);

})();