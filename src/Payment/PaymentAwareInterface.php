<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Payment\PaymentAwareInterface.
 */

namespace BartFeenstra\Payment\Payment;

/**
 * Defines a payment-aware object.
 */
interface PaymentAwareInterface
{

    /**
     * Sets the payment.
     *
     * @param \BartFeenstra\Payment\Payment\PaymentInterface $payment
     *
     * @return $this
     */
    public function setPayment(PaymentInterface $payment);

    /**
     * Gets the payment.
     *
     * @return \BartFeenstra\Payment\Payment\PaymentInterface
     */
    public function getPayment();

}
