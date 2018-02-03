/**
 * Created by alexmadrzyk on 2/4/17.
 */

(function () {

    'use strict';

    // iPad and iPod detection
    var isiPad = function(){
        return (navigator.platform.indexOf("iPad") != -1);
    };

    var isiPhone = function(){
        return (
            (navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPod") != -1)
        );
    };

    // Animations

    var contentWayPoint = function() {
        var i = 0;
        $('.animate-box').waypoint( function( direction ) {

            if( direction === 'down' && !$(this.element).hasClass('animated') ) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function(){

                    $('body .animate-box.item-animate').each(function(k){
                        var el = $(this);
                        setTimeout( function () {
                            var effect = el.data('animate-effect');
                            if ( effect === 'fadeIn') {
                                el.addClass('fadeIn animated');
                            } else {
                                el.addClass('fadeInUp animated');
                            }

                            el.removeClass('item-animate');
                        },  k * 200, 'easeInOutExpo' );
                    });

                }, 100);

            }

        } , { offset: '85%' } );
    };



    // Document on load.
    $(function(){
        contentWayPoint();
    });


}());