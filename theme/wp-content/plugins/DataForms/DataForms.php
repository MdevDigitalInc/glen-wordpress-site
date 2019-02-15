<?php
/*
Plugin Name: GLEN Admin Portal Forms
Description: CRUD for GLEN Web DB
Author: Graham C
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_plugin_menus' );
add_action( 'wp_ajax_glen_action', 'glen_action' );

function glen_action() {
	global $wpdb; // this is how you get access to the database

  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

/** Step 1. basics for plugin */
function my_plugin_menus() {
  //add_options_page( 'My Plugin Options', 'Updates For', 'manage_options', 'glen-data-form', 'my_bulk_options' );

  add_options_page( 'Glen Menu Options', 'Updates Menu', 'manage_options', 'glen-menu-data', 'menu_plugin_options' );
  add_options_page( 'Glen Reviews Options', 'Updates Reviews', 'manage_options', 'glen-reviews-data', 'testimony_plugin_options' );
  add_options_page( 'Glen FAQ Options', 'Updates FAQ', 'manage_options', 'glen-faq-data', 'faq_plugin_options' );
  add_options_page( 'Glen Employee Options', 'Updates Employees', 'manage_options', 'glen-employee-data', 'employee_plugin_options' );

  add_options_page( 'Glen Director Options', 'Updates Directors', 'manage_options', 'glen-director-data', 'director_plugin_options' );
  
}

/** Step 3. */
// function my_bulk_options() {
//   wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '/wp-content/plugins/DataConnection.js', array('jquery'), '1.0', true );
// 	if ( !current_user_can( 'manage_options' ) )  {
// 		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
//   }

//   global $wpdb;

//   // Beginning of Admin Forms

//   echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";

//   // Team Member Admin Forms

//   $result = $wpdb->get_results ( "
//     SELECT * FROM tblEmployees
//   " );

//   echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

//   echo "<h3>Team Administration</h3>";

//   echo "<p><em>Choose from the dropdown to edit an existing team member.</em></p>";

//   echo "<p>Existing Entries:</p>";

//   echo "<select id='ddEmp'>";
//   echo "<option value=0>Not Selected.</option>";
//   foreach ( $result as $page )
//   {
//     echo "<option value='".$page->ID."'>".$page->Name."</option>";
//   }
//   echo "</select>";

//   echo "<div class='input-group'>";
//   echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_name' style='display:block;'>Name: </label>";
//   echo "<input type='text' id='txt_name' style='margin-bottom: 6px;'/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_title' style='display:block;'>Title: </label>";
//   echo "<input type='text' id='txt_title' style='margin-bottom: 6px;'/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_history' style='display:block;'>History: </label>";
//   echo "<textarea id='txt_history' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea><br/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_quote' style='display:block;'>Quote: </label>";
//   echo "<textarea id='txt_quote' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea><br/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_quote' style='display:block;'>Team Membership: </label>";
//   echo "<select id='dd_tid' style='margin-bottom: 6px;'>";
//   echo "<option value='0'>Please Select a Team</option>";
//   echo "<option value='1'>Management Team</option>";
//   echo "<option value='2'>Support Team</option>";
//   echo "<option value='3'>Preschool Educators</option>";
//   echo "<option value='4'>Toddler Educators</option>";
//   echo "<option value='5'>Infant Educators</option>";
//   echo "</select>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_avatar' style='display:block;'>Avatar Colour: </label>";
//   echo "<input type='text' id='txt_avatar' style='margin-bottom: 6px;'/>";
//   echo "</div>";

  
//   echo "<input type='button' id='btnCreate' value='Create' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnUpdate' value='Update' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnDelete' value='Delete' />";

//   echo "</div>";

//   // FAQ Admin Forms

//   $result = $wpdb->get_results ( "
//     SELECT * FROM tblFAQ
//   " );

//   echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

//   echo "<h3>FAQ Administration</h3>";

//   echo "<p><em>Choose from the dropdown to edit an existing question.</em></p>";

//   echo "<p>Existing Entries:</p>";

//   echo "<select id='ddFAQ'>";
//   echo "<option value=0>- None Selected -</option>";
//   foreach ( $result as $page )
//   {
//     echo "<option value='".$page->ID."'>".$page->Question."</option>";
//   }
//   echo "</select>";

//   echo "<div class='input-group'>";
//   echo "<input type='text' id='txt_FAQid' name='txt_FAQid' style='visibility: hidden; display: inline;' /><br/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_FAQquestion' style='display:block;'>Question: </label>";
//   echo "<textarea id='txt_FAQquestion' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_FAQanswer' style='display:block;'>Answer: </label>";
//   echo "<textarea id='txt_FAQanswer' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
//   echo "</div>";
  
//   echo "<input type='button' id='btnFAQCreate' value='Create' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnFAQUpdate' value='Update' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnFAQDelete' value='Delete' />";

//   echo "</div>";
//   // End of Admin Forms



//   // Review Admin Forms

//   $result = $wpdb->get_results ( "
//     SELECT * FROM tblTestimony
//   " );

//   echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

//   echo "<h3>Testimony Administration</h3>";

//   echo "<p><em>Choose from the dropdown to edit an existing question.</em></p>";

//   echo "<p>Existing Entries:</p>";

//   echo "<select id='ddTest'>";
//   echo "<option value=0>- None Selected -</option>";
//   foreach ( $result as $page )
//   {
//     echo "<option value='".$page->ID."'>".$page->Author."</option>";
//   }
//   echo "</select>";

//   echo "<div class='input-group'>";
//   echo "<input type='text' id='txt_Testid' name='txt_Testid' style='visibility: hidden; display: inline;' /><br/>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_Testauthor' style='display:block;'>Family Name: </label>";
//   echo "<textarea id='txt_Testauthor' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='txt_Testtext' style='display:block;'>Answer: </label>";
//   echo "<textarea id='txt_Testtext' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
//   echo "</div>";

//   echo "<div class='input-group'>";
//   echo "<label for='dd_Testid' style='display:block;'>To Display On: </label>";
//   echo "<select id='dd_Testid' style='margin-bottom: 6px;'>";
//   echo "<option value='0'>Please Select a page</option>";
//   echo "<option value='1'>Welcome Page</option>";
//   echo "<option value='2'>Infant Page</option>";
//   echo "<option value='3'>Toddler Page</option>";
//   echo "<option value='4'>Preschool Page</option>";
//   echo "</select>";
//   echo "</div>";
  
//   echo "<input type='button' id='btnTestCreate' value='Create' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnTestUpdate' value='Update' style='margin-right: 5px;'/>";
//   echo "<input type='button' id='btnTestDelete' value='Delete' />";

//   echo "</div>";
//   // End of Review Admin Forms
//   echo "</div>";
// }


function menu_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";

  $result = $wpdb->get_results ( "
  SELECT * FROM tblMenu
" );

echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

echo "<h3>Menu Administration</h3>";

echo "<p><em>Choose from the dropdown to edit an existing option.</em></p>";

echo "<p>Existing Entries:</p>";

// echo "<select id='ddMenu'>";
// echo "<option value=0>- None Selected -</option>";
// foreach ( $result as $page )
// {
//   echo "<option value='".$page->ID."'>".$page->Week.$page->DOW.$page->TOD."</option>";
// }
// echo "</select>";


echo "<select id='ddMenuWeek'>";
echo "<option value=0>- None Selected -</option>";
echo "<option value='1'>Week 1</option>";
echo "<option value='2'>Week 2</option>";
echo "<option value='3'>Week 3</option>";
echo "<option value='4'>Week 4</option>";
echo "<option value='5'>Week 5</option>";
echo "<option value='6'>Week 6</option>";
echo "</select>";


echo "<select id='ddMenuDay'>";
echo "<option value=0>- None Selected -</option>";
echo "<option value='1'>Monday</option>";
echo "<option value='2'>Tuesday</option>";
echo "<option value='3'>Wednesday</option>";
echo "<option value='4'>Thursday</option>";
echo "<option value='5'>Friday</option>";
echo "</select>";


echo "<select id='ddMenuTime'>";
echo "<option value=0>- None Selected -</option>";
echo "<option value='1'>Morning Snack</option>";
echo "<option value='2'>Lunch</option>";
echo "<option value='3'>Afternoon Snack</option>";
echo "</select>";







echo "<div class='input-group'>";
echo "<input type='text' id='txt_Menuid' name='txt_Menuid' style='visibility: hidden; display: inline;' /><br/>";
echo "</div>";

echo "<div class='input-group'>";
echo "<label for='txt_Menutext' style='display:block;'>Menu Item(s): </label>";
echo "<textarea id='txt_Menutext' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
echo "</div>";

// echo "<input type='button' id='btnMenuCreate' value='Create' style='margin-right: 5px;'/>";
echo "<input type='button' id='btnMenuUpdate' value='Update' style='margin-right: 5px;'/>";
// echo "<input type='button' id='btnMenuDelete' value='Delete' />";

echo "</div>";
// End of Review Admin Forms
}





function testimony_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // Review Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblTestimony
  " );

  echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

  echo "<h3>Testimony Administration</h3>";

  echo "<p><em>Choose from the dropdown to edit an existing review or create a new one.</em></p>";

  echo "<p>Existing Entries:</p>";

  echo "<select id='ddTest'>";
  echo "<option value=0>- None Selected -</option>";
  echo "<option value=0>- Create New -</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Author."</option>";
  }
  echo "</select>";

  echo "<div class='input-group'>";
  echo "<input type='text' id='txt_Testid' name='txt_Testid' style='visibility: hidden; display: inline;' /><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_Testauthor' style='display:block;'>Name: </label>";
  echo "<input type='text' id='txt_Testauthor' />";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_Testtext' style='display:block;'>Testimonial: </label>";
  echo "<textarea id='txt_Testtext' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='dd_Testid' style='display:block;'>To Display On: </label>";
  echo "<select id='dd_Testid' style='margin-bottom: 6px;'>";
  echo "<option value='0'>Please Select a page</option>";
  echo "<option value='1'>Welcome Page</option>";
  echo "<option value='2'>Infant Page</option>";
  echo "<option value='3'>Toddler Page</option>";
  echo "<option value='4'>Preschool Page</option>";
  echo "</select>";
  echo "</div>";
  
  echo "<input type='button' id='btnTestCreate' value='Create' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnTestUpdate' value='Update' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnTestDelete' value='Delete' />";

  echo "</div>";
  // End of Review Admin Forms

  
// End of Review Admin Forms
}


function faq_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // FAQ Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblFAQ
  " );

  echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

  echo "<h3>FAQ Administration</h3>";

  echo "<p><em>Choose from the dropdown to edit an existing question or create a new one.</em></p>";

  echo "<p>Existing Entries:</p>";

  echo "<select id='ddFAQ'>";
  echo "<option value=0>- None Selected -</option>";
  echo "<option value=0>- Create New -</option>";
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
  echo "<textarea id='txt_FAQquestion' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_FAQanswer' style='display:block;'>Answer: </label>";
  echo "<textarea id='txt_FAQanswer' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea>";
  echo "</div>";
  
  echo "<input type='button' id='btnFAQCreate' value='Create' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnFAQUpdate' value='Update' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnFAQDelete' value='Delete' />";

  echo "</div>";
  // End of Admin Forms
}






function employee_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // Team Member Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblEmployees
  " );

  echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

  echo "<h3>Team Administration</h3>";

  echo "<p><em>Choose from the dropdown below to edit an existing team member or create a new one.</em></p>";

  echo "<p>Team Members:</p>";

  echo "<select id='ddEmp'>";
  echo "<option value=0>Not Selected.</option>";
  echo "<option value=0>Create New.</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Name."</option>";
  }
  echo "</select>";

  echo "<div class='input-group'>";
  echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_name' style='display:block;'>Name: </label>";
  echo "<input type='text' id='txt_name' style='margin-bottom: 6px;'/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_title' style='display:block;'>Title: </label>";
  echo "<input type='text' id='txt_title' style='margin-bottom: 6px;'/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_history' style='display:block;'>History: </label>";
  echo "<textarea id='txt_history' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_quote' style='display:block;'>Quote: </label>";
  echo "<textarea id='txt_quote' style='width: 400px; height: 125px; margin-bottom: 6px;'></textarea><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_quote' style='display:block;'>Page Placement: </label>";
  echo "<select id='dd_tid' style='margin-bottom: 6px;'>";
  echo "<option value='0'>Please Select a Page</option>";
  echo "<option value='1'>Management Team</option>";
  echo "<option value='2'>Support Team</option>";
  echo "<option value='3'>Preschool Educators</option>";
  echo "<option value='4'>Toddler Educators</option>";
  echo "<option value='5'>Infant Educators</option>";
  echo "</select>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='dd_avatar' style='display:block;'>Avatar Colour: </label>";
  echo "<select id='dd_avatar' style='margin-bottom: 6px;'>";
  echo "<option value=''>Please Select a Colour</option>";
  echo "<option value='blue'>Blue</option>";
  echo "<option value='green'>Green</option>";
  echo "<option value='purple'>Purple</option>";
  echo "<option value='red'>Red</option>";
  echo "</select>";
  echo "</div>";

  
  echo "<input type='button' id='btnCreate' value='Create' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnUpdate' value='Update' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnDelete' value='Delete' />";

  echo "</div>";

  echo "</div>";
}




function director_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // Team Member Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblDirectors
  " );

  echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

  echo "<h3>Board of Directors Administration</h3>";

  echo "<p><em>Choose from the dropdown to edit an existing board member.</em></p>";

  echo "<p>Existing Entries:</p>";

  echo "<select id='ddDir'>";
  echo "<option value=0>Not Selected.</option>";
  echo "<option value='0'>Please Create New</option>";
  foreach ( $result as $page )
  {
    echo "<option value='".$page->ID."'>".$page->Name."</option>";
  }
  echo "</select>";

  echo "<div class='input-group'>";
  echo "<input type='text' id='txt_id' style='visibility: hidden;' /><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_name' style='display:block;'>Name: </label>";
  echo "<input type='text' id='txt_name' style='margin-bottom: 6px;'/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='dd_title' style='display:block;'>Title </label>";
  echo "<select id='dd_title' style='margin-bottom: 6px;'>";
  echo "<option value='0'>Please Select a Title</option>";
  echo "<option value='1'>President</option>";
  echo "<option value='2'>Secretary</option>";
  echo "<option value='3'>Treasurer</option>";
  echo "<option value='4'>Community Member</option>";
  echo "<option value='5'>Parent Member</option>";
  echo "</select>";
  echo "</div>";

  
  
  echo "<input type='button' id='btnDirCreate' value='Create' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnDirUpdate' value='Update' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnDirDelete' value='Delete' />";

  echo "</div>";

  echo "</div>";
}


?>
