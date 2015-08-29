<?php

/**
 * @file
 * Contains \Commercie\LineItem\LineItemCollectionInterface.
 */

namespace Commercie\Payment\LineItem;

/**
 * Defines a line item collection.
 */
interface LineItemCollectionInterface
{

    /**
     * Gets the line items' total amount.
     *
     * @return \Commercie\Money\AmountInterface
     */
    public function getAmount();

    /**
     * Sets line items.
     *
     * @param \Commercie\Payment\LineItem\LineItemInterface[] $lineItems
     *
     * @return static
     */
    public function setLineItems(array $lineItems);

    /**
     * Sets a line item.
     *
     * @param \Commercie\Payment\LineItem\LineItemInterface $lineItem
     *
     * @return static
     */
    public function setLineItem(LineItemInterface $lineItem);

    /**
     * Unsets a line item.
     *
     * @param string $name
     *   The line item's name.
     *
     * @return static
     */
    public function unsetLineItem($name);

    /**
     * Gets all line items.
     *
     * @return \Commercie\Payment\LineItem\LineItemInterface[]
     */
    public function getLineItems();

    /**
     * Gets a line item.
     *
     * @param string $name
     *   The line item's machine name.
     *
     * @return \Commercie\Payment\LineItem\LineItemInterface
     */
    public function getLineItem($name);

}
