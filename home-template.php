<?php
/*
Template Name: Homepage
*/
?>

<?php 
get_header();
?>

<body <?php body_class(); ?>>

    <div id="loading">
        <div id="spinner"></div>
    </div>

    <div id="particles-js"></div>

    <div id="box">
        <div class="box1 onlywide animated bounceOutLeft" style="animation-delay:1.7s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.9s;"></div>
        <div class="box2 animated bounceOutRight" style="animation-delay:1.9s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.7s;"></div>
    </div>
    <a id="about" onclick="showabout()" class="animated fadeIn" style="animation-delay:2.2s;">about</a>
    <a id="work" onclick="showwork()" class="animated fadeIn" style="animation-delay:2.2s;">work</a>
    <a id="contact" onclick="showcontact()" class="animated fadeIn" style="animation-delay:2.2s;">contact</a>

        <div id="middle" class="animated slideInDown" style="animation-delay:2.0s;">
            <h1>Joshua Curtis.</h1>
            <h2>Software Developer / Life Long Student / Human</h2>

            <div id="menu">
                <a onclick="showabout()">about</a>
                <a onclick="showwork()">work</a>
                <a onclick="showcontact()">contact</a>
            </div>

            <table>
                    <tr>
                        <td class="animated zoomIn" style="animation-delay:2.8s;"><a href="https://joshuacurtis.dev/wp-content/uploads/2021/08/Joshua-Curtis.pdf" target="_blank" class="btn_one">My Resume</a></td>
                    </tr>
            </table>
        </div>

        <?php
		if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/work' );
			}
		} else {}
        ?>

        <?php
		if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/about' );
			}
		} else {}
		?>

        <div id="contact_container" class="container">
            <div onclick="closecontact()"><i class="fas fa-angle-down"></i></div>
            <h1>contact.</h1>
            <section>
                <h2>contact me</h2>
                <p>
                    <?php echo do_shortcode('[contact-form-7 id="7" title="Contact"]'); ?>
                </p>
            </section>
        </div>

        <div id="footer">
            made on earth by a human <br>
            <a href="https://github.com/JoshuaHavilandCurtis" target="_blank">Joshua Curtis</a></a>
        </div>


<?php get_footer(); ?>