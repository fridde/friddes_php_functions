<?php
	
	include("writer.class.php");
	
	class WriterTest extends PHPUnit_Framework_TestCase
	{
		public function test_write_sample_text()
		{
			$w = new Writer();
			$this->assertEquals("Some text", $w->write_sample_text());
		}
	
	}
	