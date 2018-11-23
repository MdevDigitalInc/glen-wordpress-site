jQuery( document ).on( 'click', '.submit-button', function() {
  var post_id = jQuery(this).data('txt_name');
  
  alert(post_id);
	// jQuery.ajax({
	// 	url : postlove.ajax_url,
	// 	type : 'post',
	// 	data : {
	// 		action : 'post_love_add_love',
	// 		post_id : post_id
	// 	},
	// 	success : function( response ) {
	// 		alert(response)
	// 	}
	// });
})