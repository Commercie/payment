<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentStatus\PaymentStatusInterface.
 */

namespace Commercie\Payment\PaymentStatus;

use Commercie\Payment\Payment\PaymentAwareInterface;

/**
 * Defines a payment status.
 */
interface PaymentStatusInterface extends PaymentAwareInterface
{

    /**
     * Sets the time the payment changed to this status.
     *
     * @param string $time
     *   A Unix timestamp.
     * *
     * @return static
     */
    public function setStatusTime($time);

    /**
     * Gets the time the payment changed to this status.
     *
     * @return string
     *   A Unix timestamp.
     */
    public function getStatusTime();

    /**
     * Gets the status' type.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface
     */
    public function getType();

}
