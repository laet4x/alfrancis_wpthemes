<?php

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
 <div class="col-md-4"> 
  	<?php dynamic_sidebar( 'sidebar' ); ?>  
</div>