<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface.
 */

namespace BartFeenstra\Payment\PaymentMethod;

/**
 * Defines a payment method that can capture authorized payments.
 */
interface PaymentMethodCapturePaymentInterface extends PaymentMethodInterface
{

    /**
     * Checks if the payment can be captured.
     *
     * @return bool
     *   Whether the payment method can capture the payment.
     *
     * @see self::capturePayment
     */
    public function canCapturePayment();

    /**
     * Captures the payment.
     *
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     *
     * @see self::capturePaymentAccess
     */
    public function capturePayment();

    /**
     * Gets the payment capture status.
     *
     * @return \BartFeenstra\Payment\Operation\OperationResultInterface
     */
    public function getCapturePaymentResult();

}
