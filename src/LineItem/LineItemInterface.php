<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\LineItem\LineItemInterface.
 */

namespace BartFeenstra\Payment\LineItem;

use BartFeenstra\Payment\Payment\PaymentAwareInterface;

/**
 * Defines a payment line item.
 */
interface LineItemInterface extends PaymentAwareInterface
{

    /**
     * Gets the amount.
     *
     * @return float|int|string
     *   A numeric value.
     */
    public function getAmount();

    /**
     * Return this line item's total amount.
     *
     * @return float
     */
    function getTotalAmount();

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
     * Gets the currency_code.
     *
     * @return string
     */
    public function getCurrencyCode();

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
