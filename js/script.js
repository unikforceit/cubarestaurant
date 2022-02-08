
/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function($) {

    "use strict";

    var Cube = {
        init: function() {
            this.Basic.init();
        },

        Basic: {
            init: function() {
                this.Global();
            },
            //* Navbar Fixed  
            Global: function (){
                $('[data-background]').each(function() {
                    $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
                });
            },


        }
    };
    jQuery(document).ready(function (){
        Cube.init();
    });
})(jQuery);

