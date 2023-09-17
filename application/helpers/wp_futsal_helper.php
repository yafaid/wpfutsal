<?php

function print_json($data, $status_code = null){
	$code = 200;
	if($status_code != null) 
		$code = $status_code;
	
    $_this =& get_instance();
    $_this->output
        ->set_status_header($code)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
    exit;
}

?>