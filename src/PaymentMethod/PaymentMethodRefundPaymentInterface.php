<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentMethod\PaymentMethodRefundPaymentInterface.
 */

namespace Commercie\Payment\PaymentMethod;

/**
 * Defines a payment method that can refund payments.
 */
interface PaymentMethodRefundPaymentInterface extends PaymentMethodInterface
{

    /**
     * Checks if the payment can be refunded.
     *
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::canRefundPayment().
     *
     * @return bool
     *   Whether the payment method can refund the payment.
     *
     * @see self::refundPayment
     */
    public function canRefundPayment();

    /**
     * Refunds the payment.
     *
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::preRefundPayment().
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
     *
     * @see self::refundPaymentAccess
     */
    public function refundPayment();

    /**
     * Gets the payment refund status.
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
     */
    public function getRefundPaymentResult();

}
