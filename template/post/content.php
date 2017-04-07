<?php

?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h2 class="text-center">', '</h2>' ); ?>
    <blockquote>
    <p>	
       <div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'alfrancis' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'alfrancis' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
    </p>
</blockquote>
</article>

