<?php
use PHPUnit\Framework\TestCase;
include_once 'dbfun.php';

class testCases extends TestCase {
    //checking if the data returned is empty
    public function testEmpty() {
        $result = getMovieId();
        $this->assertTrue($result === 114);
    }

    //testing if the function is returning result as array
    public function testAllRecords() {
        $result = allrecords('movie');
        // print_r($result);exit;
        $this->assertIsArray($result);
    }

    //testing if the function is returning array count
    public function testSingle() {
        $result= single('theatre',1);
        // print_r($result);exit;
        $expectedCount = 4;
  
        $this->assertCount(
            $expectedCount,
            $result, "testArray contains 4 element"
        );
    }

    //testing if the result returened is in string.
    public function testCountRecords() {
        $result= countrecords('food');
        $this->assertIsString($result);    
    }

    //testing to expect error when wrong params supplied
    public function testExpectError() {
        $result= single('movie');
        $this->expectError($result);
    }
}

?>