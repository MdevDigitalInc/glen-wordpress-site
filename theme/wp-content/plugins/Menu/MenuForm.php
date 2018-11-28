<?php
/*
Plugin Name: Menu Test
Description: Menu Test
Author: Graham
Author URI: http://example.com/menu-plugin
*/

//basics for ajax
//add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );



/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_menu_plugin' );
add_action( 'wp_ajax_my_action', 'my_menu_action' );




function my_menu_action() {
	global $wpdb; // this is how you get access to the database

  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));
  //echo stripslashes($_POST['query']);

	wp_die();
}

// //basics for ajax
// function ajax_test_enqueue_scripts() {
//   wp_enqueue_script( 'js-test', get_template_directory_uri() . '/wp-content/plugins/js-test.js', array('jquery'), '1.0', true );
// }


/** Step 1. basics for plugin */
function my_menu_plugin() {
	add_options_page( 'Menu Options', 'Menu', 'manage_options', 'menu-page', 'menu_options' );
}

/** Step 3. */
function menu_options() {
  wp_enqueue_script( 'js-test', get_template_directory_uri() . '/wp-content/plugins/Menu/Menu.js', array('jquery'), '1.0', true );
  //wp_localize_script( 'rml-script', 'readmelater_ajax', array( 'ajax_url' => admin_url('EmployeeForm.php')) );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  };
  global $wpdb;

  // $result = $wpdb->get_results ( "
  //   SELECT * FROM tblEmployees
  // " );

  // echo "<select id='ddEmp'>";
  // echo "<option value=0>Not Selected.</option>";
  // foreach ( $result as $page )
  // {
  //   echo "<option value='".$page->ID."'>".$page->Name."</option>";
  // }
  // echo "</select>";

  $days = array (
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
  );

  $test = array (
    1,3,5
  );

  echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
  echo "<input type='text' id='txt_desc' /><br/>";
  echo "<select id='ddWeek'>";
  for($i = 1; $i <= 50 ; $i++)
  {
    echo "<option value='".$i."'>Week ".$i."</option>";
  }
  echo "</select>";
  echo "<select id='ddDay'>";
  for($i = 0; $i < 7 ; $i++)
  {
    if(!in_array($i, $test))
    {
      echo "<option value='".$i."'>Week ".$i."</option>";  
    }
  }
  echo "</select>";
  echo "<select id='ddTOD'></select>";
  
  
  echo "<input type='button' id='btnCreate' value='Create' />";
  echo "<input type='button' id='btnUpdate' value='Update' /><br/><br/>";

  echo "<br/><br/>";
  echo "<br/><br/>";
  echo "<br/><br/>";



  $result = $wpdb->get_results ( "
  SELECT * FROM tblEmployees Where TeamID is null
" );


echo "<select id='something' multiple>";
echo "<option value=0>Not Selected.</option>";
foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Name."</option>";
  }
echo "</select>";

echo "<select id='ddTeam'>";
echo "<option value='0'>hello</option>";
echo "<option value='1'>team 1</option>";
echo "<option value='2'>team 2</option>";
echo "</select>";

echo "<select id='msTeamMemebers' multiple>";
echo "</select>";

echo "<input type='button' id='btnTeamAdd' value='Add to Team' />";
echo "<input type='button' id='btnTeamRemove' value='Remove from Team' />";

}

?>
