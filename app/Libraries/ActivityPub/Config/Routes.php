<?php

declare(strict_types=1);

/**
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

$routes->addPlaceholder('actorUsername', '[a-zA-Z0-9\_]{1,32}');
$routes->addPlaceholder(
    'uuid',
    '[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-4[0-9A-Fa-f]{3}-[89ABab][0-9A-Fa-f]{3}-[0-9A-Fa-f]{12}',
);
$routes->addPlaceholder('statusAction', '\bfavourite|\breblog|\breply');

/**
 * ActivityPub routes file
 */

$routes->group('', [
    'namespace' => 'ActivityPub\Controllers',
], function ($routes): void {
    // webfinger
    $routes->get('.well-known/webfinger', 'WebFingerController', [
        'as' => 'webfinger',
    ]);

    // Actor
    $routes->group('@(:actorUsername)', function ($routes): void {
        // Actor
        $routes->get('/', 'ActorController/$1', [
            'as' => 'actor',
        ]);
        $routes->post('inbox', 'ActorController::inbox/$1', [
            'as' => 'inbox',
            'filter' =>
                'activity-pub:verify-activitystream,verify-blocks,verify-signature',
        ]);
        $routes->get('outbox', 'ActorController::outbox/$1', [
            'as' => 'outbox',
            'filter' => 'activity-pub:verify-activitystream',
        ]);
        $routes->get('followers', 'ActorController::followers/$1', [
            'as' => 'followers',
            'filter' => 'activity-pub::activity-stream',
        ]);
        $routes->post('follow', 'ActorController::attemptFollow/$1', [
            'as' => 'attempt-follow',
        ]);
        $routes->get('activities/(:uuid)', 'ActorController::activity/$1/$2', [
            'as' => 'activity',
        ]);
    });

    // Status
    $routes->post('statuses/new', 'StatusController::attemptCreate/$1', [
        'as' => 'status-attempt-create',
    ]);

    $routes->get('statuses/(:uuid)', 'StatusController/$1', [
        'as' => 'status',
    ]);

    $routes->get('statuses/(:uuid)/replies', 'StatusController/$1', [
        'as' => 'status-replies',
    ]);

    $routes->post(
        'statuses/(:uuid)/remote/(:statusAction)',
        'StatusController::attemptRemoteAction/$1/$2/$3',
        [
            'as' => 'status-attempt-remote-action',
        ],
    );

    // Blocking actors and domains
    $routes->post(
        'fediverse-block-actor',
        'BlockController::attemptBlockActor',
        [
            'as' => 'fediverse-attempt-block-actor',
        ],
    );

    $routes->post(
        'fediverse-block-domain',
        'BlockController::attemptBlockDomain',
        [
            'as' => 'fediverse-attempt-block-domain',
        ],
    );

    $routes->post(
        'fediverse-unblock-actor',
        'BlockController::attemptUnblockActor',
        [
            'as' => 'fediverse-attempt-unblock-actor',
        ],
    );

    $routes->post(
        'fediverse-unblock-domain',
        'BlockController::attemptUnblockDomain',
        [
            'as' => 'fediverse-attempt-unblock-domain',
        ],
    );

    $routes->cli('scheduled-activities', 'SchedulerController::activity');
});
