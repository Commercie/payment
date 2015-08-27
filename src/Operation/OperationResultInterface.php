<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Operation\OperationResultInterface.
 */

namespace BartFeenstra\Payment\Operation;

/**
 * Defines an operation result.
 */
interface OperationResultInterface
{

    /**
     * Gets whether the operation is completed.
     *
     * @return bool
     *   Whether the operation is completed.
     */
    public function isCompleted();

    /**
     * Gets the instruction to continue the operation.
     *
     * @return \BartFeenstra\Payment\Operation\OperationContinuationInstructionInterface|null
     *   An instruction (only if self::isCompleted() returns FALSE) or NULL if
     *   the operation cannot be continued (anymore).
     */
    public function getContinuationInstruction();

}
