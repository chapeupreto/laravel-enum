<?php

namespace BenSampo\Enum\Tests;

use BenSampo\Enum\Enum;

final class UserType extends Enum
{
    const Administrator = 0;
    const Moderator = 1;
    const Subscriber = 2;
    const SuperAdministrator = 3;
    const StringKey = 'StringValue';

    public static function getDescription($value): string
    {
        if ($value === self::SuperAdministrator) {
            return 'Super admin';
        }

        return parent::getDescription($value);
    }
}
