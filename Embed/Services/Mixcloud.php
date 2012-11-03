<?php
namespace Embed\Services;

class Mixcloud extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.mixcloud.com/oembed/',
			'patterns' => array(
				'http://www.mixcloud.com/*/*'
			)
		)
	);
}