<?php

/**
 * @file
 * Contains \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface.
 */

namespace Commercie\Payment\PaymentStatus;

/**
 * Defines a payment status type.
 */
interface PaymentStatusTypeInterface
{

    /**
     * Gets the parent type.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface
     *   The parent type.
     */
    function getParent();

    /**
     * Gets the ancestor types.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface[]
     *   The ancestor types.
     */
    function getAncestors();

    /**
     * Gets the child types.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface[]
     *   The child types.
     */
    public function getChildren();

    /**
     * Get the descendant types.
     *
     * @return \Commercie\Payment\PaymentStatus\PaymentStatusTypeInterface[]
     *   The descendant types.
     */
    function getDescendants();

}
