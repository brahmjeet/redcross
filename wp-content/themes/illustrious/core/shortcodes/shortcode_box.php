<?php 

/* Message Shortcode */
if(!function_exists('cpotheme_shortcode_message')){
	function cpotheme_shortcode_message($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'type' => ''), 
			$atts));
		
		$content = trim(strip_tags($content));	
		$type = trim(strip_tags($type));
		switch($type){
			case 'ok': $type = 'message_ok'; break;
			case 'error': $type = 'message_error'; break;
			case 'warning': $type = 'message_warn'; break;
			case 'info': $type = 'message_info'; break;
			default: $type = ''; break;
		}
		
		return '<span class="message_box '.$type.'">'.$content.'</span>';
	}
	add_shortcode('message', 'cpotheme_shortcode_message');
}