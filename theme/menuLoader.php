
<?php

//function menu_load_action() {
	//global $wpdb; // this is how you get access to the database

  header('Content-Type: application/json');

  $query = "select * from tblMenu where Week = ".$_POST['week']." and DOW = ".$_POST['dow'];
  echo json_encode($wpdb->get_results($query));

	die();
//}
?>