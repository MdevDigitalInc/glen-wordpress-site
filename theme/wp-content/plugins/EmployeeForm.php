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
class Emp {
  public $Avatar;
  public $Name;
  public $Title;
  public $History;
  public $Quote;
  public $TeamID;

  function Emp($a,$n,$t,$h,$q,$te)
  {
    $this->Avatar = $a;
    $this->Name = $n;
    $this->Title = $t;
    $this->History = $h;
    $this->Quote = $q;
    $this->TeamID = $te;
  }

}

  // $sqls = array (

  //   new Emp(    
  //     "green",
  //     "Elaine",
  //     "Dietary Planner",
  //     "Elaine has been in professional food services since 1993 and with Arbour Glen since 1997.",
  //     "I love when a child is beaming with pride to share something they accomplished that day or asks me for a hug before they leave for the day. And of course, “I loved your lunch!” is always great to hear.",
  //     2
  //   ),

  //   new Emp(
  //     "blue",
  //     "Esperanza",
  //     "Custodian",
  //     "Esperanza has custodial experienced since 1980’s and with Arbour Glen since 2008.",
  //     "Our family has been involved with Arbour Glen since the 1980's. My mother was the custodian at the centre before I was, and it is a pleasure to continue here after her retirement. We dust and clean to make Arbour Glen sparkle, just as she did back then.",
  //     2
  //   ),
  //   new Emp(
  //     "red",
  //     "Andrea",
  //     "ECE Apprentice",
  //     "Andrea has been an ECE Apprentice with Arbour Glen since 2016.",
  //     "I love watching the children explore and make their own discoveries! It makes my work with them so meaningful.",
  //     2
  //   )
  // );

  // foreach($sqls as $sql)
  // {
  //   echo 'INSERT INTO tblEmployees (Name, Title, History, Quote, TeamID, Avatar) VALUES( "'.$sql->Name.'", "'.$sql->Title.'", "'.$sql->History.'","'.$sql->Quote.'", '.$sql->TeamID.', "'.$sql->Avatar.'");';
  //   echo "<br/>";
  //   echo "<br/>";
  // }








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
  echo "<input type='text' id='txt_title' /><br/>";
  echo "<textarea id='txt_history'></textarea><br/>";
  echo "<textarea id='txt_quote' ></textarea><br/>";
  //echo "<input type='text' id='txt_tid' /><br/>";
  echo "<select id='dd_tid'>";
  echo "<option value='0'>hello</option>";
  echo "<option value='1'>team 1</option>";
  echo "<option value='2'>team 2</option>";
  echo "</select><br/>";
  echo "<input type='text' id='txt_avatar' /><br/>";

  
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
