<?php

/**
 * @file
 * Contains \BartFeenstra\Tests\Payment\Operation\OperationResultTest.
 */

namespace BartFeenstra\Tests\Payment\Operation;

use BartFeenstra\Payment\Operation\OperationResult;

/**
 * @coversDefaultClass \BartFeenstra\Payment\Operation\OperationResult
 *
 * @group Payment
 */
class OperationResultTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Provides self::testIsCompleted().
     */
    public function providerIsCompleted()
    {
        return [
          [true, 'http://example.com' . mt_rand()],
          [false, null],
        ];
    }

    /**
     * @covers ::isCompleted
     * @covers ::__construct
     *
     * @dataProvider providerIsCompleted
     */
    public function testIsCompleted($expected, $completionUrl)
    {
        $sut = new OperationResult($completionUrl);

        $this->assertSame($expected, $sut->isCompleted());
    }

    /**
     * Provides self::testGetCompletionUrl().
     */
    public function providerGetCompletionUrl()
    {
        $url = 'http://example.com' . mt_rand();
        return [
          [$url, $url],
          [null, null],
        ];
    }

    /**
     * @covers ::getCompletionUrl
     * @covers ::__construct
     *
     * @dataProvider providerGetCompletionUrl
     */
    public function testGetCompletionUrl($expected, $completionUrl)
    {
        $sut = new OperationResult($completionUrl);

        $this->assertSame($expected, $sut->getCompletionUrl());
    }

}
