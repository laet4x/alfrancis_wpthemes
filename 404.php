<?php get_header(); ?>
<body>
    <?php if ( has_nav_menu( 'top' ) ) : ?>
        <?php get_template_part( 'template/navigation/navigation', 'top' ); ?>
    <?php endif; ?>
     <div class="jumbotron">
        <div class="container">
               <center> <h1 class="page-title"><?php printf( __( '404', 'alfrancis' ))?></h1> </center>
        </div>
    </div>
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
