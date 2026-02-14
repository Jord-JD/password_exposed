<?php

namespace JordJD\PasswordExposed\Enums;

use JordJD\PasswordExposed\Interfaces\PasswordExposedCheckerInterface;

/**
 * Class PasswordStatus.
 */
abstract class PasswordStatus
{
    public const NOT_EXPOSED = PasswordExposedCheckerInterface::NOT_EXPOSED;
    public const EXPOSED = PasswordExposedCheckerInterface::EXPOSED;
    public const UNKNOWN = PasswordExposedCheckerInterface::UNKNOWN;
}
