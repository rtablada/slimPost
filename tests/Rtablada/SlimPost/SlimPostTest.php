<?php

include_once './vendor/autoload.php';

use Rtablada\SlimPost\SlimPost;

class SlimPostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if the SlimPost package is loaded and builds
     */
    public function testCanCreateRequest()
    {
    	$url = 'http://www.google.com';
    	$data = array('name'=>'bob');
    	$request = SlimPost::build($url, $data);
    }
}