<?php

?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h2 class="text-center">', '</h2>' ); ?>
    <blockquote>
    <p>	
        <?php
        the_content();
        ?>
    </p>
</blockquote>
</article>

