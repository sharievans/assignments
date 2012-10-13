## Homework 6.1: Follow the Arrows!

* Use your upstream remote to pull homework-6.1.md into your workspace on Cloud9 (hint: git pull upstream master).
 
* Find a section in your projects that has some decent looping and branching code: at least five branches that you can diagram.
* Copy-paste your example into homework-6.1.md and attempt to identify the loop conditions with comments e.g. 

```php
while ( $count < $max ) {
// while $count is less than $max

foreach ( $collection as $item ) {
// until there are no more $items in the $collection"
```

* Save your file locally, git add and git commit it (don't forget: -m 'explain why!'), and git push your changes to your Github account.
* **Bonus points:** open a pull request back to the original repo.


sharievans/wordpress/wp-cron.php/72
```php
if ( $doing_cron_transient != $doing_wp_cron )
    return;

foreach ( $crons as $timestamp => $cronhooks ) { //loop 1
	if ( $timestamp > $gmt_time )
		break;

	foreach ( $cronhooks as $hook => $keys ) { // loop 2 to loop 1

		foreach ( $keys as $k => $v ) { // loop 3 to loop 2

			$schedule = $v['schedule'];

			if ( $schedule != false ) {
				$new_args = array($timestamp, $schedule, $hook, $v['args']);
				call_user_func_array('wp_reschedule_event', $new_args);
			}

			wp_unschedule_event( $timestamp, $hook, $v['args'] );

 			do_action_ref_array( $hook, $v['args'] );

			// If the hook ran too long and another cron process stole the lock, quit.
			if ( _get_cron_lock() != $doing_wp_cron )
				return;
		}
	}
}
```