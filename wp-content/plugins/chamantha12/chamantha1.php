<?php
/**
 * Plugin Name: chamantha1
 * Description: This is my first wordpress plugin
 * Version: 1.0.0
 * Author: Chamantha Welikala
 * License: GPL2
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
require_once 'mailing.class.php';
class chamantha1 {
	static function send($post_ID)  {
		$friends = 'chamanthaw@itelasoft.com';
		//mail($friends,"Chamantha's blog updated",'I just put something on my blog: http://blog.example.com');
		$body = "Chamantha's blog updated. I just put something on my blog.";
		mailing::html_mail($friends,'blog posted>'.$post_ID,$body);
		return $post_ID;
	}
}

add_action('publish_post', array('chamantha1', 'send'));
?>