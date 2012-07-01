<?php defined('SYSPATH') or die('No direct script access.');

if ($file = Kohana::find_file('vendor', 'PiwikTracker'))
{
	require_once $file;
	$piwik_config = Kohana::$config->load('piwik');
	
	PiwikTracker::$URL = Arr::get($piwik_config, 'url', '');
}
