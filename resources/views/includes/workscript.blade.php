<script>
    jQuery(window).on( 'load', function(){
        var $container = $('#portfolio');
        $container.infiniteScroll({
            path: '.load-next-posts',
            history: false,
            status: '.page-load-status',
            loadOnScroll: true,
            append:'post',
            prefill: true
            
        });
        $container.on( 'load.infiniteScroll', function( event, response, path ) {
            var $items = $( response ).find('.portfolio-item');
            $items.imagesLoaded( function() {
                $container.append( $items );
                $container.isotope( 'insert', $items );
                setTimeout( function(){
                    $container.isotope('layout');
                    SEMICOLON.initialize.resizeVideos();
                    SEMICOLON.widget.loadFlexSlider();
                    SEMICOLON.widget.masonryThumbs();
                }, 1000 );
            });
            $items.on("contextmenu",function(e){
                   return false;
            });
        });
    });
</script>
<script>
     lightbox.option({
      'disableScrolling': false,
      'imageFadeDuration':0,
      'positionFromTop':50,
      'showImageNumberLabel':false,
    });
</script>