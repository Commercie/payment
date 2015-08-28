<?php

/**
 * @file
 * Contains \Commercie\Payment\Payment\PaymentInterface.
 */

namespace Commercie\Payment\Payment;

use Commercie\Payment\LineItem\LineItemCollectionInterface;
use Commercie\Payment\PaymentMethod\PaymentMethodInterface;
use Commercie\Payment\PaymentStatus\PaymentStatusInterface;

/**
 * Defines a payment.
 */
interface PaymentInterface extends LineItemCollectionInterface
{

    /**
     * Sets a new payment status.
     *
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::postPaymentStatusChange().
     *
     * @param \Commercie\Payment\PaymentStatus\PaymentStatusInterface $paymentStatus
     *
     * @return $this
     */
    public function setPaymentStatus(PaymentStatusInterface $paymentStatus);

    /**
     * Gets the current payment status.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusInterface
     */
    public function getPaymentStatus();

    /**
     * Gets the payment method.
     *
     * @return \Commercie\Payment\PaymentMethod\PaymentMethodInterface
     */
    public function getPaymentMethod();

    /**
     * Sets the payment method.
     *
     * @param \Commercie\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod);
}
