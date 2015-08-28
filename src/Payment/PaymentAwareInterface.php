<?php

/**
 * @file
 * Contains \Commercie\Payment\Payment\PaymentAwareInterface.
 */

namespace Commercie\Payment\Payment;

/**
 * Defines a payment-aware object.
 */
interface PaymentAwareInterface
{

    /**
     * Sets the payment.
     *
     * @param \Commercie\Payment\Payment\PaymentInterface $payment
     *
     * @return $this
     */
    public function setPayment(PaymentInterface $payment);

    /**
     * Gets the payment.
     *
     * @return \Commercie\Payment\Payment\PaymentInterface
     */
    public function getPayment();

}
