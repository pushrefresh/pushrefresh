<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/app.js"></script>
    <script>
    	$(function() {
	    $( ".hamburger" ).click(function() {
	      $( ".pr-nav" ).toggleClass( "pr-nav-active", 2000 );
	    });
	  });
    </script>
    <script>
    	$(document).ready(function () { // when the document is loaded
		    var img;
		    $('.hamburger').on('click', '.pr-nav', function () {
		        img = 'hamburger-hover.svg';
		        $('.pr-nav-active').attr("src", img);
		        return false;
		    });
		});
    </script>
    <script>
    $(window).scroll(function() {
        $('.aegis-brand').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".aegis-brand").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.aegis-desc').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".aegis-desc").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.aegis-btn').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".aegis-btn").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.hb-brand').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".hb-brand").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.hb-desc').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".hb-desc").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.hb-btn').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".hb-btn").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.nn-brand').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".nn-brand").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.nn-desc').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".nn-desc").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.nn-btn').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".nn-btn").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.qrmg-brand').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".qrmg-brand").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.qrmg-desc').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".qrmg-desc").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        $('.qrmg-btn').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800) {
                $(".qrmg-btn").css("visibility", "visible");
                $(this).addClass("animated fadeInUp");
            }
            });
        var hamburger = $('.hamburger');
          hamburger.click(function() {
             hamburger.toggleClass('active');
             return false;
          });
        });
    </script>
    <script>
        $( document ).ready(function() {
  var hamburger = $('.hamburger');
  hamburger.click(function() {
     hamburger.toggleClass('active');
     return false;
  });
});
    </script>
    <script>
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".to-top").addClass("to-top-active");
            } else {
                $(".to-top").removeClass("to-top-active");
            }
        });
    </script>
    <script>
    $("#refresh-def").click(function(){
            $(".rando-1").addClass("fadeInUpBig");
            $(".exit").css("visibility", "visible");
        });
    $(".exit").click(function(){
            $(".rando-1").addClass("fadeOutDownBig");
            $(".exit").css("visibility", "hidden");
            setTimeout(function() {
               $(".rando-1").removeClass("fadeInUpBig");
           }, 300);
            setTimeout(function() {
               $(".rando-1").removeClass("fadeOutDownBig");
           }, 300);
        });
    $("#hip-def").click(function(){
            $(".rando-2").addClass("fadeInUpBig");
            $(".exit-2").css("visibility", "visible");
        });
    $(".exit-2").click(function(){
            $(".rando-2").addClass("fadeOutDownBig");
            $(".exit-2").css("visibility", "hidden");
            setTimeout(function() {
               $(".rando-2").removeClass("fadeInUpBig");
           }, 300);
            setTimeout(function() {
               $(".rando-2").removeClass("fadeOutDownBig");
           }, 300);
        });
    $("#thrilled-def").click(function(){
            $(".rando-3").addClass("fadeInUpBig");
            $(".exit-3").css("visibility", "visible");
        });
    $(".exit-3").click(function(){
            $(".rando-3").addClass("fadeOutDownBig");
            $(".exit-3").css("visibility", "hidden");
            setTimeout(function() {
               $(".rando-3").removeClass("fadeInUpBig");
           }, 300);
            setTimeout(function() {
               $(".rando-3").removeClass("fadeOutDownBig");
           }, 300);
        });
    $("#jedi-def").click(function(){
            $(".rando-4").addClass("fadeInUpBig");
            $(".exit-4").css("visibility", "visible");
        });
    $(".exit-4").click(function(){
            $(".rando-4").addClass("fadeOutDownBig");
            $(".exit-4").css("visibility", "hidden");
            setTimeout(function() {
               $(".rando-4").removeClass("fadeInUpBig");
           }, 300);
            setTimeout(function() {
               $(".rando-4").removeClass("fadeOutDownBig");
           }, 300);
        });
    </script>
    <script>
      smoothScroll.init();
    </script>
  </body>
</html>