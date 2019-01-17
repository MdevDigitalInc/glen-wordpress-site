<?php
/*
Plugin Name: Emp Test
Description: Emp Test
Author: Graham
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_plugin_menu' );
add_action( 'wp_ajax_my_action', 'my_action' );

function my_action() {
	global $wpdb; // this is how you get access to the database

  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

/** Step 1. basics for plugin */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-team-page', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
  wp_enqueue_script( 'js-test', get_template_directory_uri() . '/wp-content/plugins/js-test.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }

	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
  echo '</div>';

  global $wpdb;

  $result = $wpdb->get_results ( "
    SELECT * FROM tblEmployees
  " );
  echo "<h3>Team Administration</h3>";
  echo "<select id='ddEmp'>";
  echo "<option value=0>Not Selected.</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Name."</option>";
  }
  echo "</select>";

  echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
  echo "<input type='text' id='txt_name' /><br/>";
  echo "<input type='text' id='txt_title' /><br/>";
  echo "<textarea id='txt_history'></textarea><br/>";
  echo "<textarea id='txt_quote' ></textarea><br/>";
  echo "<select id='dd_tid'>";
  echo "<option value='0'>Please Select a Team</option>";
  echo "<option value='1'>Management Team</option>";
  echo "<option value='2'>Support Team</option>";
  echo "<option value='3'>Preschool Educators</option>";
  echo "<option value='4'>Toddler Educators</option>";
  echo "<option value='5'>Infant Educators</option>";
  echo "</select><br/>";
  echo "<input type='text' id='txt_avatar' /><br/>";

  
  echo "<input type='button' id='btnCreate' value='Create' />";
  echo "<input type='button' id='btnUpdate' value='Update' /><br/><br/>";

  // FAQ Below

  $result = $wpdb->get_results ( "
    SELECT * FROM tblFAQ
  " );

  echo "<h3>FAQ Administration</h3>";

  echo "<p>Select:</p>";

  echo "<select id='ddFAQ'>";
  echo "<option value=0>Not Selected.</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Question."</option>";
  }
  echo "</select>";

  echo "<div class='input-group'>";
  echo "<input type='text' id='txt_FAQid' name='txt_FAQid' style='visibility: hidden; display: inline;' /><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_FAQquestion' style='display:block;'>Question: </label>";
  echo "<textarea id='txt_FAQquestion' style='width: 300px; height: 100px;'></textarea>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_FAQanswer' style='display:block;'>Answer: </label>";
  echo "<textarea id='txt_FAQanswer' style='width: 300px; height: 100px;'></textarea>";
  echo "</div>";
  
  echo "<input type='button' id='btnFAQCreate' value='Create' />";
  echo "<input type='button' id='btnFAQUpdate' value='Update' /><br/><br/>";
}
?>
