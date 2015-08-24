<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface.
 */

namespace BartFeenstra\Payment\PaymentMethod;

use BartFeenstra\Payment\Payment\PaymentAwareInterface;

/**
 * Defines a payment method.
 *
 * Implementations can additionally implement the following interfaces:
 * - \BartFeenstra\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface:
 *   This interface lets payment methods capture payments.
 * - \BartFeenstra\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface:
 *   This interface lets payment methods refund payments.
 */
interface PaymentMethodInterface extends PaymentAwareInterface
{

    /**
     * Checks if the payment can be executed.
     *
     * @return bool
     *   Whether the payment method can execute the payment.
     */
    public function canExecutePayment();

    /**
     * Executes the payment.
     *
     * When executing a payment, it may be authorized, or authorized and captured.
     * After calling this method, more action may be required depending on the
     * return value of self::getExecutePaymentResult().
     *
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     *
     * @see self::canExecutePayment
     */
    public function executePayment();

    /**
     * Gets the payment execution result.
     *
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     */
    public function getExecutePaymentResult();

    /**
     * Returns the statuses that can be set on the payment.
     *
     * @return string[]
     *   The IDs of the settable payment statuses.
     */
    public function getSettablePaymentStatusIds();

}
