## As lightweight as it gets.

In writing a few projects, I found that many of the HTTP request libraries were a bit heavy for what I needed.
The answer was to create a super-lightweight CURL wrapper that would do the job.

Note: this package sends to a url with a POST payload, and that is it!

## Installation

This package is distributed using Packagist and Composer.

To your composer.json requires object add

`"Rtablada/SlimPost" : "*"`

Run `composer install` or `composer update`

## Using this package

In your sample file after autoloading SlimPost is super easy to use!

```php
<?php
use Rtablada\SlimPost;

$url = "http://somewebsite.co";
$data = array(
	'name'	=> 'Bob',
	'age'	=> 25
);

$results = SlimPost::create($url, $data)->send();
```
The results is untouched and ready for you to read however you see fit.