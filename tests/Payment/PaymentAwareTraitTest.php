<?php

/**
 * @file
 * Contains \BartFeenstra\Tests\Payment\Payment\PaymentAwareTraitTest.
 */

namespace BartFeenstra\Tests\Payment\Operation;

use BartFeenstra\Payment\Payment\PaymentAwareTrait;
use BartFeenstra\Payment\Payment\PaymentInterface;

/**
 * @coversDefaultClass \BartFeenstra\Payment\Payment\PaymentAwareTrait
 *
 * @group Payment
 */
class PaymentAwareTraitTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::getPayment
     * @covers ::setPayment
     */
    public function testGetPayment()
    {
        $payment = $this->getMock(PaymentInterface::class);

        /** @var \BartFeenstra\Payment\Payment\PaymentAwareTrait $sut */
        $sut = $this->getMockForTrait(PaymentAwareTrait::class);

        $this->assertSame($sut, $sut->setPayment($payment));
        $this->assertSame($payment, $sut->getPayment());
    }

}
