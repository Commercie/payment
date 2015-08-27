<?php

/**
 * @file
 * Contains \BartFeenstra\Tests\Payment\Operation\OperationContinuationInstructionTest.
 */

namespace BartFeenstra\Tests\Payment\Operation;

use BartFeenstra\Payment\Operation\OperationContinuationInstruction;

/**
 * @coversDefaultClass \BartFeenstra\Payment\Operation\OperationContinuationInstruction
 *
 * @group Payment
 */
class OperationContinuationInstructionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::getUrl
     * @covers ::__construct
     */
    public function testGetUrl()
    {
        $url = 'http://example.com/' . mt_rand();

        $sut = new OperationContinuationInstruction($url);

        $this->assertSame($url, $sut->getUrl());
    }

}
