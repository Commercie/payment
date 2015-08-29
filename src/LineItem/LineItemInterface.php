<?php

/**
 * @file
 * Contains \Commercie\Payment\LineItem\LineItemInterface.
 */

namespace Commercie\Payment\LineItem;

use Commercie\Payment\Payment\PaymentAwareInterface;

/**
 * Defines a payment line item.
 */
interface LineItemInterface extends PaymentAwareInterface
{

    /**
     * Gets the line item's total amount.
     *
     * @return \Commercie\Money\AmountInterface
     */
    public function getAmount();

    /**
     * Gets theline item's unit amount.
     *
     * @return \Commercie\Money\AmountInterface
     */
    public function getUnitAmount();

    /**
     * Sets the machine name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Gets the machine name.
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the line item description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets the quantity.
     *
     * @param int|float $quantity
     *
     * @return static
     */
    public function setQuantity($quantity);

    /**
     * Gets the quantity.
     *
     * @return int|float
     */
    public function getQuantity();

}
