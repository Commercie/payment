<?php

/**
 * @file
 * Contains \BartFeenstra\Tests\Payment\Operation\OperationResultTest.
 */

namespace BartFeenstra\Tests\Payment\Operation;

use BartFeenstra\Payment\Operation\OperationContinuationInstructionInterface;
use BartFeenstra\Payment\Operation\OperationResult;

/**
 * @coversDefaultClass \BartFeenstra\Payment\Operation\OperationResult
 *
 * @group Payment
 */
class OperationResultTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Provides data to self::testIsCompleted().
     */
    public function providerIsCompleted()
    {
        return [
          [false, $this->getMock(OperationContinuationInstructionInterface::class)],
          [true, null],
        ];
    }

    /**
     * @covers ::isCompleted
     * @covers ::__construct
     *
     * @dataProvider providerIsCompleted
     */
    public function testIsCompleted($expected, $instruction)
    {
        $sut = new OperationResult($instruction);

        $this->assertSame($expected, $sut->isCompleted());
    }

    /**
     * Provides data to self::testGetContinuationInstruction().
     */
    public function providerGetContinuationInstruction()
    {
        $instruction = $this->getMock(OperationContinuationInstructionInterface::class);
        return [
          [$instruction, $instruction],
          [null, null],
        ];
    }

    /**
     * @covers ::getContinuationInstruction
     * @covers ::__construct
     *
     * @dataProvider providerGetContinuationInstruction
     */
    public function testGetContinuationInstruction($expected, OperationContinuationInstructionInterface $instruction = null)
    {
        $sut = new OperationResult($instruction);

        $this->assertSame($expected, $sut->getContinuationInstruction());
    }

}
