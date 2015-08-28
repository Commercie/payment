<?php

/**
 * @file
 * Contains \Commercie\Tests\Payment\Payment\PaymentAwareTraitTest.
 */

namespace Commercie\Tests\Payment\Operation;

use Commercie\Payment\Payment\PaymentAwareTrait;
use Commercie\Payment\Payment\PaymentInterface;

/**
 * @coversDefaultClass \Commercie\Payment\Payment\PaymentAwareTrait
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

        /** @var \Commercie\Payment\Payment\PaymentAwareTrait $sut */
        $sut = $this->getMockForTrait(PaymentAwareTrait::class);

        $this->assertSame($sut, $sut->setPayment($payment));
        $this->assertSame($payment, $sut->getPayment());
    }

}
