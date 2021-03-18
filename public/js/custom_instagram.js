$(document).ready(function(){
	
    tmplate =  '<article class="portfolio-item" style="padding: 0px 6px 6px 0px !important;">';
    tmplate += '  <div class="portfolio-image">';
    tmplate += '     ';
    tmplate += '        <img src="{{image}}" alt="Locked Steel Gate">';
    tmplate += '     ';
    
    tmplate += '     <a class="venobox " data-vbtype="inline" data-image="{{image}}" href=".inline" data-caption="{{caption}}" data-link="{{link}}" data-likes="{{likes}}" data-comments="{{comments}}"><div class="portfolio-overlay" data-lightbox="gallery">';
    tmplate += '        <div class="portfolio-desc">';
    tmplate += '            <h3></h3>';
    tmplate += '            <p></p>';
    tmplate += '        </div>';
    tmplate += '     </div></a>';
    
    /*tmplate += '<a data-lightbox="feeds" data-title="{{caption}}" href="{{image}}">';
    tmplate += '   <div class="portfolio-overlay">';
    tmplate += '       <div class="portfolio-desc" data-image="{{image}}" >';
    tmplate += '          <span><i class="icon-heart2"></i>&nbsp;{{likes}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-bubble "></i>&nbsp;{{comments}}</span>';
    tmplate += '       </div>';
    tmplate += '     </div>';
    tmplate += '</a>';*/


    tmplate += '  </div>';
    tmplate += '</article>';
   
        
    

    var userFeed = new Instafeed({
		get:'user',
        userId:'624776580',
        limit:33,
        resolution:'standard_resolution',
		sortBy:'most-recent',
		accessToken:'624776580.017a24c.a0e5d95199f840aa861508e4796b26f4',
        template:tmplate,
        //template: '<a href="{{link}}" target="_blank" class="wow fadeIn" style="background-image:url({{image}})"><img src="{{image}}" alt="{{caption}}" data-link="{{link}}" data-likes="{{likes}}" data-comments="{{comments}}" /><p class="instacaption hidden">{{caption}}</p></a>',
        success :fixFeeds(),
        /*after: function() {
            // disable button if no more results to load
            if (!this.hasNext()) {
              btnInstafeedLoad.setAttribute('disabled', 'disabled');
            }
          },*/
    }); 
    //'<article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;"><div class="portfolio-image"><a href="portfolio-single.html"><img src="{{image}}" alt="{{caption}}"></a><div class="portfolio-overlay"><a href="{{link}}" target="_BLANK" title="IMage">{{caption}}</a></div></div></article>'
    userFeed.run();

    
    setTimeout(function(){fixFeeds();},1500);
});