<?php

declare(strict_types=1);

/**
 * Class AddAddPodcastsPlatforms Creates podcasts_platforms table in database
 *
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPodcastsPlatforms extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'podcast_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'platform_slug' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'link_url' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'link_content' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
            ],
            'is_visible' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'is_on_embeddable_player' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
        ]);

        $this->forge->addPrimaryKey(['podcast_id', 'platform_slug']);
        $this->forge->createTable('podcasts_platforms');
    }

    public function down(): void
    {
        $this->forge->dropTable('podcasts_platforms');
    }
}
