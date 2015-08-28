<?php

/**
 * @file
 * Contains \Commercie\Payment\Operation\OperationResult.
 */

namespace Commercie\Payment\Operation;

/**
 * Provides an operation result.
 */
class OperationResult implements OperationResultInterface
{

    /**
     * The operation continuation instruction.
     *
     * @var \Commercie\Payment\Operation\OperationContinuationInstructionInterface|null
     *   The continuation instruction, or NULL if the operation cannot or does
     *   not need to be continued.
     */
    protected $instruction;

    /**
     * Constructs a new instance.
     *
     * @param \Commercie\Payment\Operation\OperationContinuationInstructionInterface $instruction
     *   The continuation instruction, or NULL if the operation cannot or does
     *   not need to be continued.
     */
    public function __construct(OperationContinuationInstructionInterface $instruction = null)
    {
        $this->instruction = $instruction;
    }

    public function isCompleted() {
        return is_null($this->instruction);
    }

    public function getContinuationInstruction() {
        return $this->instruction;
    }

}
