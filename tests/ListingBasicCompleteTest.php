<?php 

//require_once __DIR__ .'/../classes/ListingBasic.php';

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
			'image' => 'https://www.flickr.com/1234',
			'status' => 'basic'
		];
		$this->listing = new ListingBasic($data);
	}
	
	public function testNewListingOK()
	{
		$this->assertIsObject($this->listing);
	}
	
	public function testNewListingGetStatus() 
	{
		$this->assertEquals($this->listing->getStatus(), 'basic');
	}
	
	public function testNewListingGetters()
	{
		$this->assertEquals($this->listing->getId(), 1);
		$this->assertEquals($this->listing->getTitle(), 'LaraFest 2019');
		$this->assertEquals($this->listing->getWebsite(), 'https://www.larafest.org');
		$this->assertEquals($this->listing->getEmail(), 'larafest@example.com');
		$this->assertEquals($this->listing->getTwitter(),'larafest'); 
	}
	
	public function testNewListingToArray()
	{
		$newListingArray = [
			'id' => 1, 'title' => 'LaraFest 2019', 
		    'website' => 'https://www.larafest.org',
			'email' => 'larafest@example.com', 'twitter' => 'larafest',
			'status' => 'basic', 'image' => 'https://www.flickr.com/1234'
		];	
		asort($newListingArray);
		$listingToArray = $this->listing->toArray();
		asort($listingToArray);
		$this->assertEquals($newListingArray, $listingToArray);
	}
	
	public function testSetStatus()
	{
		$this->listing->setStatus('premium');
		$this->assertEquals($this->listing->getStatus(), 'premium');
		$this->listing->setStatus('');
		$this->assertEquals($this->listing->getStatus(), 'basic');
	}
	
	public function testSetWebsite()
	{
		$this->listing->setWebsite('');
		$this->assertEquals($this->listing->getWebsite(), null);
		$this->listing->setWebsite('www.example.com');
		$this->assertEquals($this->listing->getWebsite(), 'http://www.example.com');
	}
}