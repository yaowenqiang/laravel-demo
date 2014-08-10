<?php

class AssertTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testAssert()
	{
        //$theTruth = true;
        $theString = 'Roux Academy of Art and Science';
        //$this->assertFalse($theTruth);
        //$this->assertSame('Roux Academy of Art and Science',$theString);
        //$this->assertContains('Art',$theString);
        //$this->assertContains('Joe',$theString);
        $this->assertArrayHasKey('myKey',array('key'=>'myarray'));
	}

}
