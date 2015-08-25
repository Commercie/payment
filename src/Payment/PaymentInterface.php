<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Payment\PaymentInterface.
 */

namespace BartFeenstra\Payment\Payment;

use BartFeenstra\Payment\LineItem\LineItemCollectionInterface;
use BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface;
use BartFeenstra\Payment\PaymentStatus\PaymentStatusInterface;

/**
 * Defines a payment.
 */
interface PaymentInterface extends LineItemCollectionInterface
{

    /**
     * Sets a new payment status.
     *
     * Implementations MUST call
     * \BartFeenstra\Payment\EventDispatcher::postPaymentStatusChange().
     *
     * @param \BartFeenstra\Payment\PaymentStatus\PaymentStatusInterface $paymentStatus
     *
     * @return $this
     */
    public function setPaymentStatus(PaymentStatusInterface $paymentStatus);

    /**
     * Gets the current payment status.
     *
     * @return \BartFeenstra\Payment\PaymentStatus\PaymentStatusInterface
     */
    public function getPaymentStatus();

    /**
     * Gets the payment method.
     *
     * @return \BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface
     */
    public function getPaymentMethod();

    /**
     * Sets the payment method.
     *
     * @param \BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod);
}
