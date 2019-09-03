<?php

require_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicIncompleteTest extends TestCase
{
	public function testNewListingNoData()
	{
		$this->expectException(Exception::class);
		$this->expectExceptionMessage('Unable to create a listing, data unavailable');
		$listing = new ListingBasic();
	}
	
	public function testNewListingNoId()
	{
		$this->expectException(Exception::class);
		$this->expectExceptionMessage('Unable to create a listing, invalid id');
		$data = ['title' => 'This is a new listing'];
		$listing = new ListingBasic($data);
	}
	
	public function testNewListingNoTitle()
	{
		$this->expectException(Exception::class);
		$this->expectExceptionMessage('Unable to create a listing, invalid title');
		$data = ['id' => 1];
		$listing = new ListingBasic($data);
	}
}

