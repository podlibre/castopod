<?php

/**
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace ActivityPub\Entities;

use RuntimeException;
use Michalsn\Uuid\UuidEntity;

/**
 * @property string $id
 * @property int $actor_id
 * @property Actor $actor
 * @property int|null $target_actor_id
 * @property Actor|null $target_actor
 * @property string|null $note_id
 * @property Note|null $note
 * @property string $type
 * @property object $payload
 * @property string|null $status
 * @property Time|null $scheduled_at
 * @property Time $created_at
 */
class Activity extends UuidEntity
{
    protected ?Actor $actor;
    protected ?Actor $target_actor;
    protected ?Note $note;

    /**
     * @var string[]
     */
    protected $uuids = ['id', 'note_id'];

    /**
     * @var string[]
     */
    protected $dates = ['scheduled_at', 'created_at'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'actor_id' => 'integer',
        'target_actor_id' => '?integer',
        'note_id' => '?string',
        'type' => 'string',
        'payload' => 'json',
        'status' => '?string',
    ];

    public function getActor(): Actor
    {
        if ($this->actor_id === null) {
            throw new RuntimeException(
                'Activity must have an actor_id before getting the actor.',
            );
        }

        if ($this->actor === null) {
            $this->actor = model('ActorModel')->getActorById($this->actor_id);
        }

        return $this->actor;
    }

    public function getTargetActor(): Actor
    {
        if ($this->target_actor_id === null) {
            throw new RuntimeException(
                'Activity must have a target_actor_id before getting the target actor.',
            );
        }

        if ($this->target_actor === null) {
            $this->target_actor = model('ActorModel')->getActorById(
                $this->target_actor_id,
            );
        }

        return $this->target_actor;
    }

    public function getNote(): Note
    {
        if ($this->note_id === null) {
            throw new RuntimeException(
                'Activity must have a note_id before getting note.',
            );
        }

        if ($this->note === null) {
            $this->note = model('NoteModel')->getNoteById($this->note_id);
        }

        return $this->note;
    }
}
