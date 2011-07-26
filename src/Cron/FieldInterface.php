<?php

namespace Cron;

use DateTime;

/**
 * CRON field interface
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
interface FieldInterface
{
    /**
     * Check if the respective value of a DateTime field satisfies a CRON exp
     *
     * @param DateTime $date DateTime object to check
     * @param string $value CRON expression to test against
     *
     * @return bool Returns TRUE if satisfied, FALSE otherwise
     */
    function isSatisfiedBy(DateTime $date, $value);

    /**
     * When a CRON expression is not satisfied, this method is used to increment
     * a DateTime object by the unit of the cron field
     *
     * @param DateTime $date DateTime object to increment
     *
     * @return FieldInterface
     */
    function increment(DateTime $date);

    /**
     * Validates a CRON expression for a given field
     *
     * @param string $value CRON expression value to validate
     *
     * @return bool Returns TRUE if valid, FALSE otherwise
     */
    function validate($value);
}