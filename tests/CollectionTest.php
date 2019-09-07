<?php
session_start();
require_once __DIR__ .'/../classes/Collection.php';
require_once __DIR__ . '/../classes/Connection.php';

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
	protected static $db;
	
	public static function setUpBeforeClass() : void
	{
		self::$db = new Connection('sqlite:./tests/mock_db.db');
	}
	
	public static function tearDownAfterClass(): void
    {
        self::$db = null;
    }
	
	protected $collection;
	
	protected function setUp(): void
	{
		$this->collection = new Collection(self::$db);
	}
	
	public function testSelectListingsNoFilter()
	{
		$allListings = $this->collection->selectListings();
		$this->assertEquals($allListings, 3);
	}
	
}
