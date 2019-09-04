<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ .'/../classes/ListingFeatured.php';

class ListingFeaturedTest extends TestCase
{
	protected $listing;
	
	protected function setUp() : void
	{
		$data = [
			'id' => 1,
			'title' => 'PHP Conference',
			'description' => 'A conference about PHP',
			'coc' => 'asdfsd'
		];
		$this->listing = new ListingFeatured($data);
	}
	
	public function testListingFeaturedGetStatus()
	{
		$this->assertEquals($this->listing->getStatus(), 'featured');
	}
	
	public function testListingFeaturedGetCoc()
	{
		$this->assertEquals($this->listing->getCoc(), 'asdfsd');
	}
}