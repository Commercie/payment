<?php

/**
 * @file
 * Contains \Commercie\Payment\Operation\OperationContinuationInstruction.
 */

namespace Commercie\Payment\Operation;

/**
 * Provides operation continuation instruction.
 */
class OperationContinuationInstruction implements OperationContinuationInstructionInterface
{

    /**
     * The URL at which to continue the operation.
     *
     * @var string
     */
    protected $url;

    /**
     * Constructs a new instance.
     *
     * @param string $url
     *   The URL at which to continue the operation.
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

}
