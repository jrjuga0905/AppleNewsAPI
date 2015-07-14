<?php

/**
 * @file
 * Tests for ChapterThree\AppleNews\Document\Components\Tweet.
 */

use ChapterThree\AppleNews\Document\Components\Tweet;

/**
 * Tests for the Tweet class.
 */
class TweetTest extends PHPUnit_Framework_TestCase {

  /**
   * Setting properties and outputting json.
   */
  public function testSetters() {

    $obj = new Tweet('https://twitter.com/NASAhistory/status/617747276635635714');

    // Optional properties.
    $expected = '{"role":"tweet","url":"https://twitter.com/NASAhistory/status/617747276635635714"}';
    $this->assertJsonStringEqualsJsonString($expected, $obj->json());

  }

}
