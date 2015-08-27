<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Operation\OperationContinuationInstructionInterface.
 */

namespace BartFeenstra\Payment\Operation;

/**
 * Defines an operation continuation instruction.
 *
 * When operations can be initialized programmatically, but may require human
 * interaction to be continued, this interface provides calling code with
 * an instruction to continue the human part of the operation.
 */
interface OperationContinuationInstructionInterface
{

    /**
     * Gets the URL at which to continue the operation.
     *
     * @return string
     */
    public function getUrl();

}
