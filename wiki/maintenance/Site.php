<?php
/**
 * @todo document
 * @ingroup Maintenance
 */
class Site {
	var $suffix, $lateral, $url;

	function __construct( $s, $l, $u ) {
		$this->suffix = $s;
		$this->lateral = $l;
		$this->url = $u;
	}

	function getURL( $lang, $urlprotocol ) {
		$xlang = str_replace( '_', '-', $lang );
		return "$urlprotocol//$xlang.{$this->url}/wiki/\$1";
	}
}
