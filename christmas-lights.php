<?php
/*
Plugin Name: Christmas Lights
Plugin URI: http://www.wpmaniax.com/seasonal-plugins/
Description: Add nice looking animated Christmas lights to the top of your WP site and enjoy winter.
Author: Csaba Kissi
Version: 0.8.3
Author URI: http://www.wpmaniax.com/
License:GPL2
*/

function chl_scripts() {
   wp_enqueue_script('chl-christmaslights', plugins_url('js/christmaslights.js', __FILE__));
}

function chl_script() {
?>
<script type="text/javascript">
  var light_src="<?php echo  plugins_url('img/lights.gif', __FILE__); ?>";
</script>
<?php
}
add_action('wp_print_scripts','chl_script');
add_action('wp_enqueue_scripts', 'chl_scripts');

?>