
sharievans/wordpress/admin/custom-background.php:119

```php

function take_action() {

// function name: take_action()
// variable: NULL

    	if ( empty($_POST) )
			return;

		if ( isset($_POST['reset-background']) ) {
			check_admin_referer('custom-background-reset', '_wpnonce-custom-background-reset');
			remove_theme_mod('background_image');
			remove_theme_mod('background_image_thumb');
			$this->updated = true;
			return;
		}

		if ( isset($_POST['remove-background']) ) {
			// @TODO: Uploaded files are not removed here.
			check_admin_referer('custom-background-remove', '_wpnonce-custom-background-remove');
			set_theme_mod('background_image', '');
			set_theme_mod('background_image_thumb', '');
			$this->updated = true;
			wp_safe_redirect( $_POST['_wp_http_referer'] );
			return;
		}

		if ( isset($_POST['background-repeat']) ) {
			check_admin_referer('custom-background');
			if ( in_array($_POST['background-repeat'], array('repeat', 'no-repeat', 'repeat-x', 'repeat-y')) )
				$repeat = $_POST['background-repeat'];
			else
				$repeat = 'repeat';
			set_theme_mod('background_repeat', $repeat);
		}

		if ( isset($_POST['background-position-x']) ) {
			check_admin_referer('custom-background');
			if ( in_array($_POST['background-position-x'], array('center', 'right', 'left')) )
				$position = $_POST['background-position-x'];
			else
				$position = 'left';
			set_theme_mod('background_position_x', $position);
		}

		if ( isset($_POST['background-attachment']) ) {
			check_admin_referer('custom-background');
			if ( in_array($_POST['background-attachment'], array('fixed', 'scroll')) )
				$attachment = $_POST['background-attachment'];
			else
				$attachment = 'fixed';
			set_theme_mod('background_attachment', $attachment);
		}

		if ( isset($_POST['background-color']) ) {
			check_admin_referer('custom-background');
			$color = preg_replace('/[^0-9a-fA-F]/', '', $_POST['background-color']);
			if ( strlen($color) == 6 || strlen($color) == 3 )
				set_theme_mod('background_color', $color);
			else
				set_theme_mod('background_color', '');
		}
        
        //guard 

		$this->updated = true;
	}
    //return value: $this->Updated = true

``` 
    
    
sharievans/wordpress/wp-admin/network.php:53
```php
    function allow_subdomain_install() {
    //function name: allow_subdomain_insall
    //variable: NULL
    
    
    $domain = preg_replace( '|https?://([^/]+)|', '$1', get_option( 'home' ) );

	if( parse_url( get_option( 'home' ), PHP_URL_PATH ) || 'localhost' == $domain || 
    preg_match( '|^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$|', $domain ) )
		return false;
        
        // return: false

	return true;
}

// return: true
    
```
    
   sharievans/wordpress/wp-admin/load-scripts.php:106
```php
   
    function get_file($path) {
    // function: get_file
    // variable: $path

    if ( function_exists('realpath') )
		$path = realpath($path);   

	if ( ! $path || ! @is_file($path) )
		return '';
        
        // return: NULL

	return @file_get_contents($path);
    // return: @file_get_contents($path)
}

```
    