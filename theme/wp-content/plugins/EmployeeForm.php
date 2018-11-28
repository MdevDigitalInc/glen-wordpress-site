<?php
/*
Plugin Name: Emp Test
Description: Emp Test
Author: Graham
Author URI: http://example.com/my-team-plugin
*/

//basics for ajax
//add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );



/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_plugin_menu' );
add_action( 'wp_ajax_my_action', 'my_action' );
add_action( 'wp_ajax_my_action', 'databaseExecute' );



function my_action() {
	global $wpdb; // this is how you get access to the database

  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

// //basics for ajax
// function ajax_test_enqueue_scripts() {
//   wp_enqueue_script( 'js-test', get_template_directory_uri() . '/wp-content/plugins/js-test.js', array('jquery'), '1.0', true );
// }


/** Step 1. basics for plugin */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-team-page', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
  wp_enqueue_script( 'js-test', get_template_directory_uri() . '/wp-content/plugins/js-test.js', array('jquery'), '1.0', true );
  //wp_localize_script( 'rml-script', 'readmelater_ajax', array( 'ajax_url' => admin_url('EmployeeForm.php')) );
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

  echo "<select id='ddEmp'>";
  echo "<option value=0>Not Selected.</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Name."</option>";
  }
  echo "</select>";


  echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
  echo "<input type='text' id='txt_name' /><br/>";
  echo "<textarea id='txt_history'></textarea><br/>";
  echo "<textarea id='txt_quote' ></textarea><br/>";
  echo "<input type='text' id='txt_tid' /><br/>";

  
  echo "<input type='button' id='btnCreate' value='Create' />";
  echo "<input type='button' id='btnUpdate' value='Update' /><br/><br/>";

  //echo "alert(".$result[0]->TeamID.")";

  // echo "<input type='text' id='txt_id' style='visibility: hidden;' value=".$result[0]->ID." /><br/>";
  // echo "<input type='text' id='txt_name' value='".$result[0]->Name."' /><br/>";
  // echo "<textarea id='txt_history'>".$result[0]->History."</textarea><br/>";
  // echo "<textarea id='txt_quote' >".$result[0]->Quote."</textarea><br/>";
  // echo "<input type='text' id='txt_tid' value=".$result[0]->TeamID." /><br/>";
  // echo "<input type='button' id='btnCreate' value='Create' />";
  // echo "<input type='button' id='btnUpdate' value='Update' /><br/><br/>";

  // foreach ( $result as $page )
  // {
  //   echo $page->ID.'<br/>';
  //   echo $page->Name.'<br/>';
  //   echo $page->History.'<br/>';
  //   echo $page->Quote.'<br/>';
  //   echo $page->TeamID.'<br/>';
  // }
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
  //<?php $wpdb->update( $table, $data, $where, $format = null, $where_format = null );

//   $wpdb->update( 
//     'tblEmployees', 
//     array( 
//       'TeamID' => 2,	// string
//     ), 
//     array( 'ID' => 1 )
//   );


//   $result = $wpdb->get_results ( "
//     SELECT * FROM tblEmployees
// " );
// echo "alert(".$result[0]->TeamID.")";

//   foreach ( $result as $page )
//   {
//     echo $page->ID.'<br/>';
//     echo $page->Name.'<br/>';
//     echo $page->History.'<br/>';
//     echo $page->Quote.'<br/>';
//     echo $page->TeamID.'<br/>';
//   }

//   $wpdb->update( 
//     'tblEmployees', 
//     array( 
//       'TeamID' => 1,	// string
//     ), 
//     array( 'ID' => 1 )
//   );

?>
