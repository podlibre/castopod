<?php

/**
 * Activity objects are specializations of the base Object type
 * that provide information about actions that have either
 * already occurred, are in the process of occurring,
 * or may occur in the future.
 *
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace ActivityPub\Core;

class Activity extends ObjectType
{
    protected string $type = 'Activity';
    protected string $actor;
    protected string|ObjectType $object;
}
