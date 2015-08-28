<?php

/**
 * @file
 * Contains \Commercie\Payment\EventDispatcherInterface.
 */

namespace Commercie\Payment;

use Commercie\Payment\Payment\PaymentInterface;
use Commercie\Payment\PaymentMethod\PaymentMethodInterface;

/**
 * Defines an event dispatcher.
 *
 * Because new events may be added in minor releases, this interface and all
 * classes that implemented are considered unstable forever. If you write an
 * event dispatcher, you must be prepared to update it in minor releases.
 */
interface EventDispatcherInterface
{

    /**
     * Responds to a new payment status being set.
     *
     * @param \Commercie\Payment\Payment\PaymentInterface $payment
     *   The payment on which the new status has been set.
     */
    public function postPaymentStatusChange(PaymentInterface $payment);

    /**
     * Checks whether a payment method can execute a payment.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will execute the payment.
     *
     * @return bool|null
     *   TRUE or FALSE if the payment method can or cannot execute the payment.
     *   NULL if insure.
     */
    public function canExecutePayment(PaymentMethodInterface $paymentMethod);

    /**
     * Fires right before a payment will be executed.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will execute the payment.
     */
    public function preExecutePayment(PaymentMethodInterface $paymentMethod);

    /**
     * Checks whether a payment method can capture a payment.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will capture the payment.
     *
     * @return |null
     *   TRUE or FALSE if the payment method can or cannot capture the payment.
     *   NULL if insure.
     */
    public function canCapturePayment(PaymentMethodInterface $paymentMethod);

    /**
     * Fires right before a payment will be captured.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will capture the payment.
     */
    public function preCapturePayment(PaymentMethodInterface $paymentMethod);

    /**
     * Checks whether a payment method can refund a payment.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will refund the payment.
     *
     * @return |null
     *   TRUE or FALSE if the payment method can or cannot refund the payment.
     *   NULL if insure.
     */
    public function canRefundPayment(PaymentMethodInterface $paymentMethod);

    /**
     * Fires right before a payment will be refunded.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *   The payment method that will refund the payment.
     */
    public function preRefundPayment(PaymentMethodInterface $paymentMethod);

}
