<?php wp_footer(); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/index.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/particles.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/app.js' ?>"></script>

<script>
    // http://ahrengot.com/tutorials/greensock-javascript-animation

var $circle = $('.circle');

function moveCircle(e) {
	TweenLite.to($circle, 0.3, {
    css: {
      left: e.pageX,
      top: e.pageY
    }
  });
}

$(window).on('mousemove', moveCircle);

</script>

</body>
</html>