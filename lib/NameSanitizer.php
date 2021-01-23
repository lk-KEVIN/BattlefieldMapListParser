<?php
function NameSanitizer($data = '') {
	$data = preg_replace('/[^\\pL\d_]+/u', '_', $data);
	$data = trim($data, "_");
	$data = iconv('utf-8', "us-ascii//TRANSLIT", $data);
	$data = strtolower($data);
	$data = preg_replace('/[^-a-z0-9_]+/', '', $data);

    return $data;
}
?>