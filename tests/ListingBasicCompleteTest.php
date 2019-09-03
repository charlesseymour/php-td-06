<?php 

require_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicCompleteTest extends TestCase
{
	protected $listing;
	
	protected function setUp(): void
	{
		$data = [
			'id' => 1, 'title' => 'LaraFest 2019', 
		    'website' => 'https://www.larafest.org',
			'email' => 'larafest@example.com', 'twitter' => '@larafest',
			'status' => 'upcoming', 'image' => 'https://www.flickr.com/1234'
		];
		$this->listing = new ListingBasic($data);
	}
	
	public function testNewListingOK()
	{
		$this->assertIsObject($this->listing);
	}
}