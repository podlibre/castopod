<?php

declare(strict_types=1);

/**
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace ActivityPub\Entities;

use Michalsn\Uuid\UuidEntity;

/**
 * @property int $actor_id
 * @property string $status_id
 */
class Favourite extends UuidEntity
{
    /**
     * @var string[]
     */
    protected $uuids = ['status_id'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'actor_id' => 'integer',
        'status_id' => 'string',
    ];
}
