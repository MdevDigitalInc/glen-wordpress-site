<?php
/*
Plugin Name: Menu Test
Description: Menu Test
Author: Graham
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_plugin_menu' );

//basics for ajax
add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );

//basics for ajax
function ajax_test_enqueue_scripts() {
	wp_enqueue_script( 'js-test', plugins_url( '/js-test.js', __FILE__ ), array('jquery'), '1.0', true );
}



/** Step 1. basics for plugin */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-team-page', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
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

  foreach ( $result as $page )
  {
    echo $page->ID.'<br/>';
    echo $page->Name.'<br/>';
    echo $page->Quote.'<br/>';
    echo $page->History.'<br/>';
    echo $page->TeamID.'<br/>';
  }
  //<?php $wpdb->update( $table, $data, $where, $format = null, $where_format = null );

  $wpdb->update( 
    'tblEmployees', 
    array( 
      'TeamID' => 2,	// string
    ), 
    array( 'ID' => 1 )
  );


  $result = $wpdb->get_results ( "
    SELECT * FROM tblEmployees
" );

  foreach ( $result as $page )
  {
    echo $page->ID.'<br/>';
    echo $page->Name.'<br/>';
    echo $page->Quote.'<br/>';
    echo $page->History.'<br/>';
    echo $page->TeamID.'<br/>';
  }

  $wpdb->update( 
    'tblEmployees', 
    array( 
      'TeamID' => 1,	// string
    ), 
    array( 'ID' => 1 )
  );


  echo  "<input type='text' id='txt_name'  />";
  echo "<textarea name='txt_history'> </textarea>";
  echo "<textarea name='txt_quote'> </textarea>";

  echo "<input type='button' value='Status Update'>";
}
?>
