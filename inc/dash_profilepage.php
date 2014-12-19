<?php

function dash_contact_methods( $contactmethods ) {
 
	// Remove we what we don't want
	unset( $contactmethods[ 'aim' ] );
	unset( $contactmethods[ 'yim' ] );
	unset( $contactmethods[ 'jabber' ] );

	// Add some useful ones
	$contactmethods[ 'adress' ] = 'Adres';
	$contactmethods[ 'city' ] = 'Plaats';

	return $contactmethods;
}


// remove personal options block
if(is_admin()){
  remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
  add_action( 'personal_options', 'prefix_hide_personal_options' );
}
function prefix_hide_personal_options() {
?>
<script type="text/javascript">
  jQuery(document).ready(function( $ ){

  	$( "#user_login" ).closest('tr').remove();
   //  $( "#nickname" ).closest('tr').remove();
    $( "#display_name" ).closest('tr').remove();
    $( "#first_name" ).closest('tr').remove();
    $( "#last_name" ).closest('tr').remove();

  });
</script>
<?php
}
?>