<?php get_header(); ?>
<body>
    <?php if ( has_nav_menu( 'top' ) ) : ?>
        <?php get_template_part( 'template/navigation/navigation', 'top' ); ?>
    <?php endif; ?>
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/iphone.svg" class="device">
                        <div class="screen"></div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1>Our Fantastic App</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="#"><span class="fa fa-apple"></span> Available on the App Store</a><a class="btn btn-success btn-lg" role="button" href="#"><span class="fa fa-google"></span> Available on Google Play</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template/page/content', 'page' );
		endif; ?>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Fantastic Features</h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><span class="glyphicon glyphicon-cloud"></span>
                            <p>Cloud-ready </p>
                        </div>
                        <div class="col-xs-4 icon-feature"><span class="glyphicon glyphicon-piggy-bank"></span>
                            <p>Saves You Money</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><span class="glyphicon glyphicon-fire"></span>
                            <p>Fire Proof</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
