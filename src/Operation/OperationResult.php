<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Operation\OperationResult.
 */

namespace BartFeenstra\Payment\Operation;

/**
 * Provides an operation result.
 */
class OperationResult implements OperationResultInterface
{

    /**
     * The completion URL.
     *
     * @var string|null
     *   The completion URL, or NULL if the operation cannot or does not need to
     *   be completed.
     */
    protected $completionUrl;

    /**
     * Constructs a new instance.
     *
     * @param string|null
     *   The completion URL, or NULL if the operation cannot or does not need to
     *   be completed.
     */
    public function __construct($completionUrl = null)
    {
        $this->completionUrl = $completionUrl;
    }

    public function isCompleted() {
        return !is_null($this->completionUrl);
    }

    public function getCompletionUrl() {
        return $this->completionUrl;
    }

}
