<?php

/**
 * @file
 * Contains \BartFeenstra\Payment\Operation\OperationResultInterface.
 */

namespace BartFeenstra\Payment\Operation;

/**
 * Defines an operation result.
 *
 * When operations can be initialized programmatically, but may require human
 * interaction to be completed, this interface provides calling code with
 * information to continue the human part of the operation.
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
     * Gets the URL where the user can complete the operation.
     *
     * @return string|null
     *   A URL (only if self::isCompleted() returns FALSE) or NULL if the
     *   operation cannot be completed (anymore).
     */
    public function getCompletionUrl();

}
