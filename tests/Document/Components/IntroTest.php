<?php

/**
 * @file
 * Tests for ChapterThree\AppleNews\Document\Components\Intro.
 */

use ChapterThree\AppleNews\Document\Components\Intro;

/**
 * Tests for the Intro class.
 */
class IntroTest extends PHPUnit_Framework_TestCase {

  /**
   * Setting properties and outputting json.
   */
  public function testSetters() {

    $obj = new Intro('some intro text.');

    // Optional properties.
    $expected = '{"role":"intro","text":"some intro text."}';
    $this->assertJsonStringEqualsJsonString($expected, $obj->json());

  }

}
