<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\PaymentStatus\PaymentStatusInterface.
 */

namespace BartFeenstra\Payment\PaymentStatus;

use BartFeenstra\Payment\Payment\PaymentAwareInterface;

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
     * Gets this payment status's ancestors.
     *
     * @return string[]
     *   The IDs of this status's ancestors.
     */
    function getAncestorIds();

    /**
     * Gets this payment status's children.
     *
     * @return string[]
     *   The IDs of this status's direct children.
     */
    public function getChildIds();

    /**
     * Get this payment status's descendants.
     *
     * @return string[]
     *   The IDs of this status's descendants.
     */
    function getDescendantIds();

    /**
     * Checks if the status has a given other status as one of its ancestors.
     *.
     * @param string $paymentStatusId
     *   The payment status ID to check against.
     *
     * @return boolean
     */
    function hasAncestor($paymentStatusId);

    /**
     * Checks if the status is equal to a given other status or has it one of
     * its ancestors.
     *
     * @param string $paymentStatusId
     *   The payment status ID to check against.
     *
     * @return boolean
     */
    function isOrHasAncestor($paymentStatusId);

}
