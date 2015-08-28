<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentMethod\PaymentMethodInterface.
 */

namespace Commercie\Payment\PaymentMethod;

use Commercie\Payment\Payment\PaymentAwareInterface;

/**
 * Defines a payment method.
 *
 * Implementations can additionally implement the following interfaces:
 * - \Commercie\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface:
 *   This interface lets payment methods capture payments.
 * - \Commercie\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface:
 *   This interface lets payment methods refund payments.
 */
interface PaymentMethodInterface extends PaymentAwareInterface
{

    /**
     * Checks if the payment can be executed.
     *
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::canExecutePayment().
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
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::preExecutePayment().
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
     *
     * @see self::canExecutePayment
     */
    public function executePayment();

    /**
     * Gets the payment execution result.
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
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
