<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentStatus\Exception\PaymentStatusTypeUnknownException.
 */

namespace Commercie\Payment\PaymentStatus\Exception;

/**
 * Provides an exception to be thrown if a payment status type is unknown.
 */
class PaymentStatusTypeUnknownException extends \Exception
{

    /**
     * The payment status type.
     *
     * @var string
     */
    protected $paymentStatusType;

    /**
     * Constructs a new instance.
     *
     * @param string $paymentStatusType
     *   The unknown payment status type.
     * @param int $code
     *   [optional] The Exception code.
     * @param \Exception $previous
     *   [optional] The previous exception used for the exception chaining. Since 5.3.0
     */
    public function __construct($paymentStatusType, $code = 0, \Exception $previous = null) {
        $this->paymentStatusType = $paymentStatusType;
        $message = sprintf('The payment status type %s is unknown.', $paymentStatusType);
        parent::__construct($message, $code, $previous);
    }

    /**
     * Gets the unknown payment status type.
     *
     * @return string
     */
    public function getPaymentStatusType() {
        return $this->paymentStatusType;
    }

}
