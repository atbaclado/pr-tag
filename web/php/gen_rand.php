<?php 
	function rand_password($length) {
	    $key = '';
	    $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}

	function rand_prid($length) {
	    $key = '2016';
	    $keys = array_merge(range(0, 9));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}

	function rand_ofcid($length) {
	    $key = 'ofc';
	    $keys = array_merge(range(0, 9));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}
?>