<?php

/**
 * @file
 * Tests for ChapterThree\AppleNews\Document\Behaviors\Motion.
 */

use ChapterThree\AppleNews\Document\Behaviors\Motion;

/**
 * Tests for the Motion class.
 */
class MotionTest extends PHPUnit_Framework_TestCase {

  /**
   * Setting properties and outputting json.
   */
  public function testSetters() {

    $expected = '{"type":"motion"}';

    $obj = new Motion();
    $this->assertJsonStringEqualsJsonString($expected, $obj->json());

  }

}
