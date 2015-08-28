<?php

/**
 * @file
 * Contains \Commercie\Tests\Payment\Operation\OperationContinuationInstructionTest.
 */

namespace Commercie\Tests\Payment\Operation;

use Commercie\Payment\Operation\OperationContinuationInstruction;

/**
 * @coversDefaultClass \Commercie\Payment\Operation\OperationContinuationInstruction
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
