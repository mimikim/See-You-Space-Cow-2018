// frontpage full page scroller
// https://github.com/alvarotrigo/fullPage.js

( ( $ ) => {
  "use strict";

  let body = document.body,
    header = document.getElementById( 'js-header' );

  if ( ! body.classList.contains( 'home' ) ) {
    return false;
  }

  // first svg animation
  let first_cow_paths = [
    document.querySelector( '#body-outline' ),
    document.querySelector( '#helmet-outline' ),
    document.querySelector( '#tail-path' ),
    document.querySelector( '#face-path' ),
    document.querySelector( '#left-ear' )
  ];

  anime.timeline().add( [ {
      targets: first_cow_paths,
      strokeDashoffset: [ anime.setDashoffset, 0 ],
      easing: 'easeInOutSine',
      duration: 800,
      delay: 400
    }
  ] );

  let animateBadge = () => {
    let badge = document.querySelector( '#space-trek #Badge' );
    let timeline = anime.timeline();

    anime.timeline().add( [

      {
        targets: '.card-container .card',
        translateY: [ -150, 0 ],
        opacity: [ 0, 1 ],
        duration: function(el, i, l) {
          return 2000 + (i * 1000);
        },
        delay: 900
      }

    ] );

    timeline.add( [
      {
        targets: badge,
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        duration: 1000,
        delay: 600
      }, {
        targets: badge,
        easing: 'easeOutCirc',
        fill: '#CCD1D4',
        fillOpacity: [ 0, 1 ],
        duration: 300
      }, {
        targets: document.querySelector( '#space-trek #highlight' ),
        easing: [0.000, 1.485, 0.710, 0.665],
        opacity: [ 0, 1 ],
        duration: 400
      }, {
        targets: document.querySelector( '#space-trek #cow-head' ),
        easing: 'easeOutCubic',
        opacity: [ 0, 1 ],
        duration: 300,
        complete: () => {
          let closed_eyes = document.querySelector( '#space-trek #closed-eyes' );
          let opened_eyes = document.querySelector( '#space-trek #eyes' );

          opened_eyes.classList.add( 'hidden' );
          closed_eyes.classList.add( 'show' );

          setTimeout( () => {
            opened_eyes.classList.remove( 'hidden' );
            closed_eyes.classList.remove( 'show' );
          }, 1250 );
        }
      }, {
      targets: document.getElementById( 'space-trek' ),
        easing: 'linear',
        rotateY: [ 0, 360, 0 ],
        duration: 500
      }
    ] );
  };

  let configObj = {
    scrollingSpeed: 1500,
    easingcss3: 'cubic-bezier(1.000, 0.000, 0.000, 1.000)',
    onLeave: function( anchorLink, index, direction ) {

      // do not scroll if overlay is open
      if ( document.body.classList.contains( 'opened' ) ) {
        return false;
      }

      // add fixed header if scrolling from first slide
      if ( anchorLink === 1 ) {
        header.classList.add( 'fixed' );
      } else if ( index === 1 )  {
        header.classList.remove( 'fixed' );
      }

      if ( anchorLink === 1 && index === 2 && direction === 'down' ) {
        animateBadge();
      }
    }
  };

  $ ( document ).ready( function() {
    animateBadge();
    //$( '#js-fullpage-container' ).fullpage( configObj );
  } );


} )( jQuery );