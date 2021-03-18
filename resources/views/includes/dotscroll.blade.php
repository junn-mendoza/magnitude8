<!--Use this script to scroll between pages -->
<script type="text/javascript">
    /*!
     * jquery.scrollto.js 0.0.1 - https://github.com/yckart/jquery.scrollto.js
     * Scroll smooth to any element in your DOM.
     *
     * Copyright (c) 2012 Yannick Albert (http://yckart.com)
     * Licensed under the MIT license (https://www.opensource.org/licenses/mit-license.php).
     * 2013/02/17
     **/
    $(document).ready(function(){

        $.scrollTo = $.fn.scrollTo = function(x, y, options, offset2){
            if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);
            options = $.extend({}, {
                gap: {
                    x: 0,
                    y: 0
                },
                animation: {
                    easing: 'swing',
                    duration: 600,
                    complete: $.noop,
                    step: $.noop
                }
            }, options);
            return this.each(function(){
                var elem = $(this);
                elem.stop().animate({
                    scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
                    scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y - offset2 
                }, options.animation);
            });
        };
        var aChildren = $(".dotmenu li").children();
        var aArray = [];
        var offsetArray = [];
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            var offset_page = $(aChild).attr('data-offset');
            aArray.push(ahref);
            offsetArray.push(parseInt(offset_page)); 
            span = $(aChild).find('span');
            $(span).css("left",-1 *( $(span).width()+55));
            
        }     
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop();
            var windowHeight = $(window).height();
            var docHeight = $(document).height() ;
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var theOffset = offsetArray[i];
                
                var divPos = $(theID).offset().top - theOffset; 
                var divHeight = $(theID).height() - (theID=='.team_page'?offsetArray[i+1]:0); 

                if (windowPos >= (divPos  ) && windowPos < (divPos + divHeight)) {
                        $("a[href='" + theID + "']").addClass("name-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("name-active");
                }
                
            }

        });
        $(".dotmenu a").click(function(evn){
            evn.preventDefault();
            offset = $(this).attr('data-offset');
            theID = $(this).attr('href');
            $('html,body').scrollTo($(this).attr('href'), $(this).attr('href'),50,parseInt(offset));
            $("a[href='" + theID + "']").addClass("name-active");
        });
    });

</script>