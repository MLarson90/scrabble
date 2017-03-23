<?php
  require_once "src/Scabble.php";
  class ScabbleTest extends PHPUnit_Framework_TestCase
  {
    function test_array()
    {
      $test_Scrabble = new Scrabble;
      $input = "max";
      $result = $test_Scrabble->prepare($input);
      $this->assertEquals(['m', 'a', 'x'], $result);
    }
    function test_lower()
    {
      $test_Scrabble = new Scrabble;
      $input = "MAX";
      $result= $test_Scrabble->prepare($input);
      $this->assertEquals(['m', 'a', 'x'], $result);
    }
    function test_score()
    {
      $test_Scrabble = new Scrabble;
      $input = "Q";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(10, $result);
    }
    function test_j()
    {
      $test_Scrabble = new Scrabble;
      $input = "J";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(8, $result);
    }
    function test_k()
    {
      $test_Scrabble = new Scrabble;
      $input = "k";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(5, $result);
    }
    function test_f()
    {
      $test_Scrabble = new Scrabble;
      $input = "f";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(4, $result);
    }
    function test_b()
    {
      $test_Scrabble = new Scrabble;
      $input = "B";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(3, $result);
    }
    function test_d()
    {
      $test_Scrabble = new Scrabble;
      $input = "d";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(2, $result);
    }
    function test_other()
    {
      $test_Scrabble = new Scrabble;
      $input = "a";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(1, $result);
    }
    function test_total()
    {
      $test_Scrabble = new Scrabble;
      $input = "aBcD";
      $first_step = $test_Scrabble->prepare($input);
      $result = $test_Scrabble->addUp($first_step);
      $this->assertEquals(9, $result);
    }

  }
 ?>
