<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentStatus\PaymentStatusFactoryInterface.
 */

namespace Commercie\Payment\PaymentStatus;

/**
 * Defines a payment status factory.
 */
interface PaymentStatusFactoryInterface
{

    /**
     * Creates a new payment status.
     *
     * @param string $type
     *   The type of the payment status to create.
     * *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusInterface
     *
     * @throws \InvalidArgumentException
     *   Thrown if the type is no string.
     * @throws \Commercie\Payment\PaymentStatus\Exception\PaymentStatusTypeUnknownException
     *   Thrown if the type is unknown.
     */
    public function createPaymentStatus($type);

    /**
     * Checks if a new payment status type is known.
     *
     * @param string $type
     *   The type of the payment status to create.
     * *
     * @return bool
     *
     * @throws \InvalidArgumentException
     *   Thrown if the type is no string.
     */
    public function knowsPaymentStatusType($type);

}
