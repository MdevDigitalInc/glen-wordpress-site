<?php 
function databaseExecute() {
	global $wpdb; // this is how you get access to the database

  echo $_POST['query'];

	wp_die(); // this is required to terminate immediately and return a proper response
}
?>