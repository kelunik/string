<?php

if (!function_exists("startsWith")) {
	function startsWith($haystack, $needle) {
	    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
	}
}

if (!function_exists("endsWith")) {
	function endsWith($haystack, $needle) {
		return $needle === "" || (($offset = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $offset) !== false);
	}
}
