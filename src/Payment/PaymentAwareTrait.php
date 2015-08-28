<?php

/**
 * Contains \Commercie\Payment\Payment\PaymentAwareTrait.
 */

namespace Commercie\Payment\Payment;

/**
 * Provides a default implementation of \Commercie\Payment\Payment\PaymentAwareInterface.
 */
trait PaymentAwareTrait
{

    /**
     * The payment.
     *
     * @var \Commercie\Payment\Payment\PaymentInterface
     */
    protected $payment;

    /**
     * Implements \Commercie\Payment\Payment\PaymentAwareInterface::getPayment().
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Implements \Commercie\Payment\Payment\PaymentAwareInterface::setPayment().
     */
    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;

        return $this;
    }

}
