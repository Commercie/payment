<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\EventDispatcherCollection.
 */

namespace BartFeenstra\Payment;

use BartFeenstra\Payment\Payment\PaymentInterface;
use BartFeenstra\Payment\PaymentMethod\PaymentMethodInterface;

/**
 * Dispatches events to a collection of event dispatchers.
 */
class EventDispatcherCollection implements EventDispatcherInterface
{

    /**
     * The event dispatchers.
     *
     * @var \BartFeenstra\Payment\EventDispatcherInterface[]
     */
    protected $eventDispatchers = [];

    /**
     * Adds an event dispatcher to the collection.
     *
     * @param \BartFeenstra\Payment\EventDispatcherInterface $eventDispatcher
     *
     * @return $this
     */
    public function addEventDispatcher(
      EventDispatcherInterface $eventDispatcher
    ) {
        $this->eventDispatchers[] = $eventDispatcher;

        return $this;
    }

    /**
     * Aggregates a list of ternary values.
     *
     * @param bool[]|null[] $values
     *
     * @return bool|null
     */
    protected function aggregateTernaryValues(array $values)
    {
        if (in_array(false, $values, true)) {
            return false;
        } elseif (in_array(true, $values, true)) {
            return true;
        } else {
            return null;
        }
    }

    public function postPaymentStatusChange(PaymentInterface $payment)
    {
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $eventDispatcher->postPaymentStatusChange($payment);
        }
    }

    public function canExecutePayment(PaymentMethodInterface $paymentMethod)
    {
        $results = [];
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $results[] = $eventDispatcher->canExecutePayment($paymentMethod);
        }

        return $this->aggregateTernaryValues($results);
    }

    public function preExecutePayment(PaymentMethodInterface $paymentMethod)
    {
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $eventDispatcher->preExecutePayment($paymentMethod);
        }
    }

    public function canCapturePayment(PaymentMethodInterface $paymentMethod)
    {
        $results = [];
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $results[] = $eventDispatcher->canCapturePayment($paymentMethod);
        }

        return $this->aggregateTernaryValues($results);
    }

    public function preCapturePayment(PaymentMethodInterface $paymentMethod)
    {
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $eventDispatcher->preCapturePayment($paymentMethod);
        }
    }

    public function canRefundPayment(PaymentMethodInterface $paymentMethod)
    {
        $results = [];
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $results[] = $eventDispatcher->canRefundPayment($paymentMethod);
        }

        return $this->aggregateTernaryValues($results);
    }

    public function preRefundPayment(PaymentMethodInterface $paymentMethod)
    {
        foreach ($this->eventDispatchers as $eventDispatcher) {
            $eventDispatcher->preRefundPayment($paymentMethod);
        }
    }

}
