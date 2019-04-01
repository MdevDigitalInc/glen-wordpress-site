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
add_action( 'wp_ajax_glen_downloads_action', 'glen_downloads_action' );

function glen_action() {
  
	global $wpdb; // this is how you get access to the database
  
  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

function glen_downloads_action()
{
  global $wpdb;
    define ('SITE_ROOT', realpath(dirname(__FILE__)."/../../"));
  
    $target_file = "";
    if($_FILES["file"]["name"] != '') {
      ///var/www/html/wp-content/themes/mdev-theme/wp-content/uploads
      $target_dir = SITE_ROOT."/themes/arbor-glen-theme/uploads/";//mdev-theme// /themes/arbor-glen-theme
      $target_file = $target_dir . basename($_FILES["file"]["name"]);//$submitted .
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $error = "";
      // Check if image file is a actual image or fake image
      if($uploadOk == 1) {
      //Check if file already exists
      if (file_exists($target_file)) {
        unlink($target_file);
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        $_SESSION["error"] = "Sorry, your file was not uploaded.";
        wp_die($_SESSION["error"]);
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $target_file = '/uploads/' . basename($_FILES["file"]["name"]);
        } else {
            $_SESSION["error"] =  "Sorry, there was an error uploading your file.";
            wp_die($_SESSION["error"]);    
        }
      }
    }
  }

  $query = "select FlagStringValue from tblSiteConfig where ID = ". $_POST["fileNum"];
  $results = $wpdb->get_results($query);

  
  if ($results[0]->FlagStringValue != "" &&  $results[0]->FlagStringValue != $target_file) {
    unlink(SITE_ROOT."/themes/arbor-glen-theme/".$results[0]->FlagStringValue);
  }

  
  $query = "update tblSiteConfig set FlagStringValue = '" . $target_file . "' where ID = " . $_POST["fileNum"];
  $results = $wpdb->get_results($query);

  wp_die($target_file);
}

/** Step 1. basics for plugin */
function my_plugin_menus() {
  //add_options_page( 'My Plugin Options', 'Updates For', 'manage_options', 'glen-data-form', 'my_bulk_options' );

  add_options_page( 'Glen Menu Options', 'Update Menu', 'manage_options', 'glen-menu-data', 'menu_plugin_options' );
  add_options_page( 'Glen Reviews Options', 'Update Reviews', 'manage_options', 'glen-reviews-data', 'testimony_plugin_options' );
  add_options_page( 'Glen FAQ Options', 'Update FAQ', 'manage_options', 'glen-faq-data', 'faq_plugin_options' );
  add_options_page( 'Glen Employee Options', 'Update Employees', 'manage_options', 'glen-employee-data', 'employee_plugin_options' );
  add_options_page( 'Glen Director Options', 'Update Directors', 'manage_options', 'glen-director-data', 'director_plugin_options' );
  add_options_page( 'Glen Download Options', 'Update Downloadables', 'manage_options', 'glen-download-data', 'download_plugin_options' );
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


$season = $wpdb->get_results ( "
SELECT * FROM tblSiteConfig where ID = 1;" )[0];

echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

echo "<h3>Menu Title Administration</h3>";
echo "<div>";
echo "<select id='ddSeasons'>";
if($season->FlagValue == 1) {
echo "<option value='1' selected>Fall/Winter</option>";
echo "<option value='2'>Spring/Summer</option>";
}
else{
echo "<option value='1'>Fall/Winter</option>";
echo "<option value='2' selected>Spring/Summer</option>";
}
echo "</select>";
echo "</div>";
echo "<input type='button' id='btnSeasonUpdate' value='Update' style='margin-right: 5px;'/>";


echo "</div>";

echo "<div class='admin-group' style='width:40%;border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

$result = $wpdb->get_results ( "
SELECT * FROM tblMenu
" );


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
  define ('MENU_ROOT', realpath(dirname(__FILE__)."/../../"));
  // echo SITE_ROOT;
  

















































  global $wpdb;

  if($_POST["subType"] == "Create" || $_POST["subType"] == "Update")
  {
    
    $target_file = "";
    if($_FILES["fileToUpload"]["name"]) {
      $target_dir = MENU_ROOT."/themes/arbor-glen-theme/img/avatars/uploads/";//mdev-theme
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//$submitted .
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $error = "";
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) 
      {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $_SESSION["error"] = "File is an image - " . $check["mime"] . ".";
            die($_SESSION["error"]);  
            $uploadOk = 1;
        } else {
          $_SESSION["error"] = "File is not an image.";
          die($_SESSION["error"]);
          $uploadOk = 0;
        }
      }
      if($uploadOk == 1) {
      //Check if file already exists
      if (file_exists($target_file)) {
        $_SESSION["error"] = "Sorry, file already exists.". $taget_file ."<br/>";
        die($_SESSION["error"]);
        $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 200000) {
        $_SESSION["error"] =  "Sorry, your file is too large.";
        die($_SESSION["error"]);
        $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $_SESSION["error"] =  "Sorry, only JPG, JPEG, & PNG files are allowed.";
        die($_SESSION["error"]);
        $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        $_SESSION["error"] = "Sorry, your file was not uploaded.";
        die($_SESSION["error"]);
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $target_file = "/img/avatars/uploads/".basename($_FILES["fileToUpload"]["name"]);

        } else {
            $_SESSION["error"] =  "Sorry, there was an error uploading your file.";
            die($_SESSION["error"]);    
        }
      }
    }
  }



  if($_POST["subType"] == "Create") { 
    $query = 'INSERT INTO tblEmployees (Name, Title, History, Quote, TeamID, Avatar, avatarImage) VALUES ( "' . $_POST["name"] . '", "' . $_POST["title"] . '", "' . $_POST["history"] .'","' . $_POST["quote"] . '",' . $_POST["dd_tid"] . ', "' .$_POST["dd_avatar"] . '", "'.$target_file.'");';
    $result = $wpdb->get_results ( $query );
  } else if ($_POST["subType"] == "Update") {
    $query = 'UPDATE tblEmployees SET Name = "' . $_POST["name"] . '", Title = "' . $_POST["title"] . '", History = "' . $_POST["history"] . '", Quote = "' . $_POST["quote"] . '", TeamID = ' .$_POST["dd_tid"]. ', Avatar = "' .$_POST["dd_avatar"]. '", avatarImage="'.$target_file.'" WHERE ID = ' . $_POST["id"] . ';';
    $result = $wpdb->get_results ( $query );
  }

  










































































  }


  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- [ JQUERY ] -->
  <style> 
  .mdev-error {
      border-top: 4px solid red !important;
      border-bottom: 4px solid red !important;
      color: red!important;
    }
  </style>
  <script>

function clearErrors(){
    $('.mdev-error').removeClass('mdev-error');
  }


  function validateFields(payload, error){
      // Initiate Loop Var
      var i;
      // Error Flag
      var errorPresent = false;

      // Check for Empty Fields
      for (i = 0; i < payload.length; i++){
        if (payload[i].value === "" || payload[i].value == 0){
          errorPresent = true;
          $(payload[i]).addClass('mdev-error');
        }
      }
      // Return Errors
      if (errorPresent === true) {
        alertify.error(error);
        return false;
      }
      else {
        return true;
      }
  }
  function submitForm(subType) {
    // Clear Errors First
    this.clearErrors();
    // Collect Fields
    let formFields = $('[data-required]');
    // Validate fields and store result
    let fieldsValid = this.validateFields(formFields, "Please fill in the highlighted fields.");//validation.errors.form");
      let callback = this.formSubmitted;
    // // Checks: Fields are filled, Email is Valid, Phone is Valid, No Spam.
    if ( fieldsValid ) {
      // Flip flag for UX animations
      this.loading = true;
      
      var myForm = document.getElementById("empForm");
      myForm.action = "options-general.php?page=glen-employee-data";


      $('<input />').attr('type', 'hidden')
      .attr('name', "subType")
      .attr('value', subType)
      .appendTo('#empForm');


      myForm.submit();
    }
    // Else, likely SPAM
    else {
      // $(".mdev-error-group").addClass('active');
      console.log('Submission flagged as spam');
    }
  }

  </script>
  <?php



  
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // Team Member Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblEmployees
  " );

  echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";
  echo "<form id=\"empForm\" method=\"post\" enctype=\"multipart/form-data\">";
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
  echo "<input type='text' id='txt_id' name='id' style='visibility: hidden;' /><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_name' style='display:block;'>Name: </label>";
  echo "<input type='text' id='txt_name' name='name' style='margin-bottom: 6px;' data-required/>";
  echo "</div>";

  echo "<div class'input-group'>";
  echo "<label for='txt_title' style='display:block;'>Title: </label>";
  echo "<input type='text' id='txt_title' name='title' style='margin-bottom: 6px;' />";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_history' style='display:block;'>History: </label>";
  echo "<textarea id='txt_history' name='history' style='width: 400px; height: 125px; margin-bottom: 6px;' data-required></textarea><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_quote' style='display:block;'>Quote: </label>";
  echo "<textarea id='txt_quote' name='quote' style='width: 400px; height: 125px; margin-bottom: 6px;' data-required></textarea><br/>";
  echo "</div>";

  echo "<div class='input-group'>";
  echo "<label for='txt_quote' style='display:block;'>Page Placement: </label>";
  echo "<select id='dd_tid' name='dd_tid' style='margin-bottom: 6px;' data-required>";
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
  echo "<select id='dd_avatar' name='dd_avatar' style='margin-bottom: 6px;' data-required>";
  echo "<option value=''>Please Select a Colour</option>";
  echo "<option value='blue'>Blue</option>";
  echo "<option value='green'>Green</option>";
  echo "<option value='purple'>Purple</option>";
  echo "<option value='red'>Red</option>";
  echo "</select>";
  echo "</div>";

  echo "<div>";
  echo "<input type=\"file\" id=\"fileToUpload\" name=\"fileToUpload\" >";
  echo "</div>";
  echo "<div>";
  echo "<img id=\"imgCurrent\" height=\"20%\" width=\"20%\" />";
  echo "</div>";

  
  echo "<button type=\"button\" onclick='submitForm(\"Update\")' Name='btnFUpdate'>Update</button>";
  echo "<button type=\"button\" onclick='submitForm(\"Create\")' name='btnFCreate'>Create</button>";
  echo "<input type='button' id='btnDelete' value='Delete' />";
  

  echo "</form>";
  
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
  echo "<option value='6'>Executive Director</option>";
  echo "</select>";
  echo "</div>";

  
  
  echo "<input type='button' id='btnDirCreate' value='Create' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnDirUpdate' value='Update' style='margin-right: 5px;'/>";
  echo "<input type='button' id='btnDirDelete' value='Delete' />";

  echo "</div>";

  echo "</div>";
}



function download_plugin_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/DataForms/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms

  global $wpdb;
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  // Team Member Admin Forms

  $result = $wpdb->get_results ( "
    SELECT * FROM tblSiteConfig
  " );

  echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";

  echo "<h3>Board of Directors Administration</h3>";
  $filePath = get_bloginfo('template_url', 'display');
  
  echo "<div>";
  echo "<label for=\"fileHandbook\">Handbook pdf</label>";
  echo "<input type=\"file\" id=\"fileHandbook\" name=\"fileHandbook\" accept=\".pdf\" >";
  echo "</div>";
  echo "<div>";
  echo "<a href=\"" . $filePath . $result[1]->FlagStringValue . "\" target=\"_blank\" id=\"lnkHandbook\">PARENT HANDBOOK</a>";
  echo "</div>";
  


  echo "<br/><div>";
  echo "<div>";
  echo "<label for=\"fileMenu\">Menu pdf</label>";
  echo "<input type=\"file\" id=\"fileMenu\" name=\"fileMenu\" accept=\".pdf\">";
  echo "</div>";
  echo "<div>";
  echo "<a  href=\"" . $filePath . $result[2]->FlagStringValue . "\" target=\"_blank\" id=\"lnkMenu\">MENU</a>";
  echo "</div>";
  echo "</div>";


  echo "<br/><div>";
  echo "<div>";
  echo "<label for=\"fileOpportunity\">Job Opportunities pdf</label>";
  echo "<input type=\"file\" id=\"fileOpportunity\" name=\"fileOpportunity\" accept=\".pdf\">";
  echo "</div>";
  echo "<div>";
  echo "<a  href=\"" . $filePath . $result[3]->FlagStringValue . "\" target=\"_blank\" id=\"lnkOpportunity\">JOB OPPORTUNITIES</a>";
  echo "</div>";
  echo "</div>";


  

  echo "</div>";
}

?>
