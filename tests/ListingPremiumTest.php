<?php

//require_once __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
	protected $listing;
	
	protected function setUp() : void
	{
		$data = [
			'id' => 1,
			'title' => 'PHP Conference',
			'description' => 'A conference about PHP'
		];
		$this->listing = new ListingPremium($data);
	}
	
	public function testListingPremiumGetStatus()
	{
		$this->assertEquals($this->listing->getStatus(), 'premium');
	}
	
	public function testListingPremiumGetDescription()
	{
		$this->assertEquals($this->listing->getDescription(), 'A conference about PHP');
	}
}