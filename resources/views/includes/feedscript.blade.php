<script type="text/javascript" >
    function fixFeeds() 
    {
        $("#instafeed a").each(
            function() {
                $(this).addClass("venobox");
                $(this).attr("data-type","inline");
                $(this).attr("href","#instagram-post");
                $(this).prepend('<div class="video-overlay"><div class="icn-zoom"></div><div class="icn-play-border"></div></div>');
                $("#instafeed").delay(500).animate({opacity:1},1000);
            }
        );
        $('.venobox').venobox({
            framewidth:'658px',
            frameheight: '100%',       // default: ''
            border: '10px',             // default: '0'
            bgcolor: '#fff',         // default: '#fff'
            titleattr: 'data-title',    // default: 'title'
            numeratio: false,            // default: false
            infinigall: false,            // default: false
            overlayClose:false}); 

        $("#instafeed a").click(function() {
            jpg = $(this).attr("data-image");
            $("#instagram-image").attr("src",jpg);
            $("#instagram-post-link,.ehInfoUsername").attr("href",$(this).attr("data-link"));
            $(".instagram-caption").html($(this).attr("data-caption"));
            $(".instagram-likes").html($(this).attr("data-likes"));
            $(".instagram-comments").html($(this).attr("data-comments"));
        });
        $("#instafeed").append("<div class='clearfix'></div>");
        $("#instafeed").delay(1600).fadeIn(400);
    }
    function showsubscribe()
    {
        $(".subscribe_overlay").show();
    }
    function overlay_close()
    {
        $(".subscribe_overlay").hide();
    }
    $(document).ready(function() {
        $(window).on('scroll', function(){
            windowPos = $(window).scrollTop();
        });
    });
</script>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>