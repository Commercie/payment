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
     * Implementations MUST call
     * \BartFeenstra\Payment\EventDispatcher::canCapturePayment().
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
     * Implementations MUST call
     * \BartFeenstra\Payment\EventDispatcher::preCapturePayment().
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
