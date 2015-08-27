<?php

/**
 * Contains \BartFeenstra\Payment\Payment\PaymentAwareTrait.
 */

namespace BartFeenstra\Payment\Payment;

/**
 * Provides a default implementation of \BartFeenstra\Payment\Payment\PaymentAwareInterface.
 */
trait PaymentAwareTrait
{

    /**
     * The payment.
     *
     * @var \BartFeenstra\Payment\Payment\PaymentInterface
     */
    protected $payment;

    /**
     * Implements \BartFeenstra\Payment\Payment\PaymentAwareInterface::getPayment().
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Implements \BartFeenstra\Payment\Payment\PaymentAwareInterface::setPayment().
     */
    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;

        return $this;
    }

}
