<?php

/**
 * @file
 * Contains \BartFeenstra\Tests\Payment\EventDispatcherCollectionTest.
 */

namespace BartFeenstra\Tests\Payment;

use BartFeenstra\Payment\EventDispatcherCollection;
use BartFeenstra\Payment\EventDispatcherInterface;
use BartFeenstra\Payment\Payment\PaymentInterface;
use BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface;

/**
 * @coversDefaultClass \BartFeenstra\Payment\EventDispatcherCollection
 *
 * @group Payment
 */
class EventDispatcherCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The subject under test.
     *
     * @var \BartFeenstra\Payment\EventDispatcherCollection
     */
    protected $sut;

    public function setUp()
    {
        $this->sut = new EventDispatcherCollection();
    }

    /**
     * Provides data to self::testCanExecutePayment(),
     * self::testCanCapturedPayment(), and self::testCanRefundPayment().
     */
    public function providerCanOperationPayment()
    {
        return [
          [true, true, true],
          [true, true, null],
          [true, null, true],
          [null, null, null],
          [false, null, false],
          [false, false, true],
          [false, false, null],
          [false, false, false],
        ];
    }

    /**
     * @covers ::postPaymentStatusChange
     * @covers ::addEventDispatcher
     */
    public function testPostPaymentStatusChange()
    {
        $payment = $this->getMock(PaymentInterface::class);

        $event_dispatcher_a = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_a->expects($this->atLeastOnce())
          ->method('postPaymentStatusChange')
          ->with($payment);
        $event_dispatcher_b = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_b->expects($this->atLeastOnce())
          ->method('postPaymentStatusChange')
          ->with($payment);

        $this->sut->addEventDispatcher($event_dispatcher_a);
        $this->sut->addEventDispatcher($event_dispatcher_b);

        $this->sut->postPaymentStatusChange($payment);
    }

    /**
     * @covers ::canExecutePayment
     * @covers ::addEventDispatcher
     * @covers ::aggregateTernaryValues
     *
     * @dataProvider providerCanOperationPayment
     *
     * @param bool|null $expectedResult
     *   TRUE for allowed, NULL for neutral, FALSE for forbidden.
     * @param bool|null $eventDispatcherResultA
     * @param bool|null $eventDispatcherResultB
     */
    public function testCanExecutePayment(
      $expectedResult,
      $eventDispatcherResultA,
      $eventDispatcherResultB
    ) {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $eventDispatcherA = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherA->expects($this->atLeastOnce())
          ->method('canExecutePayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultA);
        $eventDispatcherB = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherB->expects($this->atLeastOnce())
          ->method('canExecutePayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultB);

        $this->sut->addEventDispatcher($eventDispatcherA);
        $this->sut->addEventDispatcher($eventDispatcherB);

        $result = $this->sut->canExecutePayment($paymentMethod);
        $this->assertSame($expectedResult, $result);
    }

    /**
     * @covers ::preExecutePayment
     * @covers ::addEventDispatcher
     *
     */
    public function testPreExecutePayment()
    {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $event_dispatcher_a = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_a->expects($this->atLeastOnce())
          ->method('preExecutePayment')
          ->with($paymentMethod);
        $event_dispatcher_b = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_b->expects($this->atLeastOnce())
          ->method('preExecutePayment')
          ->with($paymentMethod);

        $this->sut->addEventDispatcher($event_dispatcher_a);
        $this->sut->addEventDispatcher($event_dispatcher_b);

        $this->sut->preExecutePayment($paymentMethod);
    }

    /**
     * @covers ::canCapturePayment
     * @covers ::addEventDispatcher
     * @covers ::aggregateTernaryValues
     *
     * @dataProvider providerCanOperationPayment
     *
     * @param bool|null $expectedResult
     *   TRUE for allowed, NULL for neutral, FALSE for forbidden.
     * @param bool|null $eventDispatcherResultA
     * @param bool|null $eventDispatcherResultB
     */
    public function testCanCapturePayment(
      $expectedResult,
      $eventDispatcherResultA,
      $eventDispatcherResultB
    ) {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $eventDispatcherA = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherA->expects($this->atLeastOnce())
          ->method('canCapturePayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultA);
        $eventDispatcherB = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherB->expects($this->atLeastOnce())
          ->method('canCapturePayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultB);

        $this->sut->addEventDispatcher($eventDispatcherA);
        $this->sut->addEventDispatcher($eventDispatcherB);

        $result = $this->sut->canCapturePayment($paymentMethod);
        $this->assertSame($expectedResult, $result);
    }

    /**
     * @covers ::preCapturePayment
     * @covers ::addEventDispatcher
     *
     */
    public function testPreCapturePayment()
    {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $event_dispatcher_a = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_a->expects($this->atLeastOnce())
          ->method('preCapturePayment')
          ->with($paymentMethod);
        $event_dispatcher_b = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_b->expects($this->atLeastOnce())
          ->method('preCapturePayment')
          ->with($paymentMethod);

        $this->sut->addEventDispatcher($event_dispatcher_a);
        $this->sut->addEventDispatcher($event_dispatcher_b);

        $this->sut->preCapturePayment($paymentMethod);
    }

    /**
     * @covers ::canRefundPayment
     * @covers ::addEventDispatcher
     * @covers ::aggregateTernaryValues
     *
     * @dataProvider providerCanOperationPayment
     *
     * @param bool|null $expectedResult
     *   TRUE for allowed, NULL for neutral, FALSE for forbidden.
     * @param bool|null $eventDispatcherResultA
     * @param bool|null $eventDispatcherResultB
     */
    public function testCanRefundPayment(
      $expectedResult,
      $eventDispatcherResultA,
      $eventDispatcherResultB
    ) {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $eventDispatcherA = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherA->expects($this->atLeastOnce())
          ->method('canRefundPayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultA);
        $eventDispatcherB = $this->getMock(EventDispatcherInterface::class);
        $eventDispatcherB->expects($this->atLeastOnce())
          ->method('canRefundPayment')
          ->with($paymentMethod)
          ->willReturn($eventDispatcherResultB);

        $this->sut->addEventDispatcher($eventDispatcherA);
        $this->sut->addEventDispatcher($eventDispatcherB);

        $result = $this->sut->canRefundPayment($paymentMethod);
        $this->assertSame($expectedResult, $result);
    }

    /**
     * @covers ::preRefundPayment
     * @covers ::addEventDispatcher
     *
     */
    public function testPreRefundPayment()
    {
        $paymentMethod = $this->getMock(PaymentMethodInterface::class);

        $event_dispatcher_a = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_a->expects($this->atLeastOnce())
          ->method('preRefundPayment')
          ->with($paymentMethod);
        $event_dispatcher_b = $this->getMock(EventDispatcherInterface::class);
        $event_dispatcher_b->expects($this->atLeastOnce())
          ->method('preRefundPayment')
          ->with($paymentMethod);

        $this->sut->addEventDispatcher($event_dispatcher_a);
        $this->sut->addEventDispatcher($event_dispatcher_b);

        $this->sut->preRefundPayment($paymentMethod);
    }

}
