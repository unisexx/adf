<!-- <script type="text/javascript" src="media/js/jquery-1.7.1.min.js"></script> -->
<!-- <script type="text/javascript" src="media/js/jquery-ui-1.8.16.min.js"></script> -->
<script type="text/javascript" src="media/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="media/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/js/tagmanager/bootstrap-tagmanager.js"></script>
<script type="text/javascript" src="media/js/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="themes/adfree/myscript.js"></script>
<?php echo js_notify(); ?>
<?php echo js_lightbox(); ?>

<script>
jQuery(document).ready(function($) {
      // Twitter Footer
        // $(".twitter").tweet({
        // join_text: "auto",
        // username: "wrapbootstrap",
        // avatar_size: 20,
        // count: 2,
        // auto_join_text_default: "we said,",
        // auto_join_text_ed: "we",
        // auto_join_text_ing: "we were",
        // auto_join_text_reply: "we replied",
        // auto_join_text_url: "we were checking out",
        // loading_text: "loading tweets..."
        // });

      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
       // To make dropdown actually work
       // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });

                $("a[data-pretty^='prettyPhoto']").prettyPhoto();
                
                $(".gallery:first a[data-pretty^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
                $(".gallery:gt(0) a[data-pretty^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
        
                $("#custom_content a[data-pretty^='prettyPhoto']:first").prettyPhoto({
                    custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                    changepicturecallback: function(){ initialize(); }
                });

                $("#custom_content a[data-pretty^='prettyPhoto']:last").prettyPhoto({
                    custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                    changepicturecallback: function(){ _bsap.exec(); }
                });

                
                
    $('iframe').each(function () {/*fix youtube z-index*/
        var url = $(this).attr("src");
        if (url.indexOf("youtube.com") >= 0) {
            if (url.indexOf("?") >= 0) {
                $(this).attr("src", url + "&wmode=transparent");
            } else {
                $(this).attr("src", url + "?wmode=transparent");
            }
        }
    });

    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn();
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut();
    });
    
    // tooltip
    $("a[data-rel^='tooltip']").tooltip();
    $('.tooltip').tooltip();
    
  $('#mainslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

});
</script>