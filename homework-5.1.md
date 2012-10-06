## Homework 5.1: Starting to understand more complex French

* Login to Github and approve my pull request to get the file `homework-5.1.md` in your `assignments` repository.
* Log into Cloud9 and use `git pull` to get the file into your workspace.
 
* Find [the Wordpress project on Github][wordpress], fork it into your own account, and clone it into a Cloud9 workspace.
* Open your Wordpress workspace and find a file that has some branching _if-then-else_ logic; look for some juicy conditionals and guard clauses.
* Copy-paste your examples into `homework-5.1.md` (this file) and attempt to identify the conditions with comments like so:
* 
> USERNAME/Wordpress/path/to/file.php:00
> ```php
>   if ( $mom_says == 'yes' ) // if mom says yes
> ```

* Save your file locally, add and commit it with git, and push your changes to your Github account.
* **Bonus points**: open a pull request back to the original repo with your work to date.

[wordpress]:https://github.com/Wordpress/Wordpress/



sharevans/Wordpress/wp-login.php:105

```php

       if ( !empty( $message ) )
		echo $message . "\n";   // if empty message there is null

	// In case a plugin uses $error rather than the $wp_errors object
    
    
	if ( !empty( $error ) ) {
		$wp_error->add('error', $error);
		unset($error); // if empty with error its an error
	}

	if ( $wp_error->get_error_code() ) {
		$errors = '';
		$messages = '';
		foreach ( $wp_error->get_error_codes() as $code ) {
			$severity = $wp_error->get_error_data($code);
			foreach ( $wp_error->get_error_messages($code) as $error ) {
				if ( 'message' == $severity )
					$messages .= '	' . $error . "<br />\n";
				else
					$errors .= '	' . $error . "<br />\n"; // if wordpress error get code, add message severity
			}
		}
		if ( !empty($errors) )
			echo '<div id="login_error">' . apply_filters('login_errors', $errors) . "</div>\n";
		if ( !empty($messages) )
			echo '<p class="message">' . apply_filters('login_messages', $messages) . "</p>\n";  // if empty with multiple errors its a login error
	}
} // End of login_header()

```
    
sharevans/Wordpress/wp-activate.php:76

```php
    
        if ( is_wp_error($result) ) {
			if ( 'already_active' == $result->get_error_code() || 'blog_taken' == $result->get_error_code() ) {
			    $signup = $result->get_error_data();
				?>
				<h2><?php _e('Your account is now active!'); ?></h2>
				<?php
				echo '<p class="lead-in">'; // if already active, add error code: blog taken, signup result, get error data
                
                
				if ( $signup->domain . $signup->path == '' ) {
					printf( __('Your account has been activated. You may now <a href="%1$s">log in</a> 
                    to the site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s 
                    for your password and login instructions. If you do not receive an email, please check your junk or spam folder. 
                    If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.'), 
                    network_site_url( 'wp-login.php', 'login' ), $signup->user_login, $signup->user_email, wp_lostpassword_url() ); // if signup, activate account
                    
                    
				} else {
					printf( __('Your site at <a href="%1$s">%2$s</a> is active. You may now log in to your site using your 
                    chosen username of &#8220;%3$s&#8221;. Please check your email inbox at %4$s for your password and login instructions. 
                    If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, 
                    you can <a href="%5$s">reset your password</a>.'), 'http://' . $signup->domain, $signup->domain, $signup->user_login, 
                    $signup->user_email, wp_lostpassword_url() ); 
				}
				echo '</p>';  // your site is now active
                
                
			} else {
				?>
				<h2><?php _e('An error occurred during the activation'); ?></h2>
				<?php
			    echo '<p>'.$result->get_error_message().'</p>';
			} 
            
            // if error occurs during account activation, result in error message
            
            
            
		} else {
			extract($result);
			$url = get_blogaddress_by_id( (int) $blog_id);
			$user = get_userdata( (int) $user_id);
			?>
			<h2><?php _e('Your account is now active!'); ?></h2>

			<div id="signup-welcome">
				<p><span class="h3"><?php _e('Username:'); ?></span> <?php echo $user->user_login ?></p>
				<p><span class="h3"><?php _e('Password:'); ?></span> <?php echo $password; ?></p>
			</div>
            

			<?php if ( $url != network_home_url('', 'http') ) : ?>
				<p class="view"><?php printf( __('Your account is now activated. <a href="%1$s">View your site</a> or <a href="%2$s">Log in</a>'), $url, $url . 'wp-login.php' ); ?></p>
			<?php else: ?>
				<p class="view"><?php printf( __('Your account is now activated. <a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.' ), network_site_url('wp-login.php', 'login'), network_home_url() ); ?></p>
			<?php endif;
		}
	}
	?> //extract results and add to signupwelcome page.
    
```