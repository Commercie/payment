<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\PaymentMethod\PaymentMethodRefundPaymentInterface.
 */

namespace BartFeenstra\Payment\PaymentMethod;

/**
 * Defines a payment method that can refund payments.
 */
interface PaymentMethodRefundPaymentInterface extends PaymentMethodInterface
{

    /**
     * Checks if the payment can be refunded.
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
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     *
     * @see self::refundPaymentAccess
     */
    public function refundPayment();

    /**
     * Gets the payment refund status.
     *
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     */
    public function getRefundPaymentResult();

}
