 <?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Alfrancis
 * @since 1.0
 * @version 1.0
 */

?>
 <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#"><span class="glyphicon glyphicon-phone"></span>Mobile App</a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                   	<li role="presentation">
                       <?php wp_nav_menu( array(
                        'theme_location' => 'top',
                        'menu_id'        => 'alfrancis',
                        'menu_class' => 'nav navbar-nav navbar-right'
                    ) ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>