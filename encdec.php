<?php
	/**
	* 
	*/
	class encdec
	{
		
		function __construct()
		{
			# code...
		}

		public function encrypt_decrypt($action, $string) {
		    $output = false;

		    $encrypt_method = "AES-256-CBC";
		    $skey = '!@#$';
		    $siv = '@#$%';

		    // hash
		    $key = hash('sha256', $skey);
		    
		    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
		    $iv = substr(hash('sha256', $siv), 0, 16);

		    if( $action == 'enc' ) {
		        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		        $output = base64_encode($output);
		    }
		    else if( $action == 'dec' ){
		        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		    }

		    return $output;
		}
	}
?>
