<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentMethod\PaymentMethodCapturePaymentInterface.
 */

namespace Commercie\Payment\PaymentMethod;

/**
 * Defines a payment method that can capture authorized payments.
 */
interface PaymentMethodCapturePaymentInterface extends PaymentMethodInterface
{

    /**
     * Checks if the payment can be captured.
     *
     * Implementations MUST call
     * \Commercie\Payment\EventDispatcher::canCapturePayment().
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
     * \Commercie\Payment\EventDispatcher::preCapturePayment().
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
     *
     * @see self::capturePaymentAccess
     */
    public function capturePayment();

    /**
     * Gets the payment capture status.
     *
     * @return \Commercie\Payment\Operation\OperationResultInterface
     */
    public function getCapturePaymentResult();

}
