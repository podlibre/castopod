<?= $this->extend('admin/_layout') ?>

<?= $this->section('title') ?>
<?= lang('Episode.publish') ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('Episode.publish') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<?= anchor(
    route_to('episode-view', $podcast->id, $episode->id),
    icon('arrow-left', 'mr-2 text-lg') . lang('Episode.publish_form.back_to_episode_dashboard'),
    ['class' => 'inline-flex items-center font-semibold mr-4 text-sm'],
) ?>

<?= form_open(route_to('episode-publish', $podcast->id, $episode->id), [
    'method' => 'post',
    'class' => 'mx-auto flex flex-col max-w-xl items-start',
    'data-submit' => 'validate-message'
]) ?>
<?= csrf_field() ?>
<?= form_hidden('client_timezone', 'UTC') ?>


<label for="message" class="text-lg font-semibold"><?= lang(
                                                        'Episode.publish_form.status',
                                                    ) ?></label>
<small class="max-w-md mb-2 text-gray-600"><?= lang('Episode.publish_form.status_hint') ?></small>
<div class="mb-8 overflow-hidden bg-white shadow-md rounded-xl">
    <div class="flex px-4 py-3">
        <img src="<?= $podcast->actor->avatar_image_url ?>" alt="<?= $podcast
                                                                        ->actor->display_name ?>" class="w-12 h-12 mr-4 rounded-full" />
        <p class="flex items-baseline min-w-0">
            <span class="mr-2 font-semibold truncate"><?= $podcast->actor
                                                            ->display_name ?></span>
            <span class="text-sm text-gray-500 truncate">@<?= $podcast->actor
                                                                ->username ?></span>
        </p>
    </div>
    <div class="px-4 mb-2">
        <?= form_textarea(
            [
                'id' => 'message',
                'name' => 'message',
                'class' => 'form-textarea min-w-0 w-full',
                'placeholder' => 'Write your message...',
                'autofocus' => ''
            ],
            old('message', '', false),
            ['rows' => 2],
        ) ?>
    </div>
    <div class="flex">
        <img src="<?= $episode->image->thumbnail_url ?>" alt="<?= $episode->title ?>" class="w-24 h-24" />
        <div class="flex flex-col flex-1">
            <a href="<?= $episode->link ?>" class="flex-1 px-4 py-2 bg-gray-100">
                <div class="flex items-baseline">
                    <span class="flex-1 w-0 mr-2 text-sm font-semibold truncate"><?= $episode->title ?></span>
                    <?= episode_numbering(
                        $episode->number,
                        $episode->season_number,
                        'text-xs font-semibold text-gray-600',
                        true,
                    ) ?>
                </div>
                <div class="text-xs text-gray-600">
                    <time datetime="PT<?= $episode->audio_file_duration ?>S">
                        <?= format_duration($episode->audio_file_duration) ?>
                    </time>
                </div>
            </a>
            <audio controls preload="none" class="w-full mt-auto">
                <source src="<?= $episode->audio_file_url ?>" type="<?= $episode->audio_file_mimetype ?>">
                Your browser does not support the audio tag.
            </audio>
        </div>
    </div>
    <footer class="flex justify-around px-6 py-3">
        <span class="inline-flex items-center"><?= icon(
                                                    'chat',
                                                    'text-xl mr-1 text-gray-400',
                                                ) . '0' ?></span>
        <span class="inline-flex items-center"><?= icon(
                                                    'repeat',
                                                    'text-xl mr-1 text-gray-400',
                                                ) . '0' ?></span>
        <span class="inline-flex items-center"><?= icon(
                                                    'heart',
                                                    'text-xl mr-1 text-gray-400',
                                                ) . '0' ?></span>
    </footer>
</div>

<?= form_fieldset('', ['class' => 'flex flex-col mb-4']) ?>
<legend class="text-lg font-semibold"><?= lang(
                                            'Episode.publish_form.publication_date',
                                        ) ?></legend>
<label for="now" class="inline-flex items-center">
    <?= form_radio(
        [
            'id' => 'now',
            'name' => 'publication_method',
            'class' => 'text-pine-700',
        ],
        'now',
        old('publication_method') ? old('publish') === 'now' : true,
    ) ?>
    <span class="ml-2"><?= lang(
                            'Episode.publish_form.publication_method.now',
                        ) ?></span>
</label>
<div class="inline-flex flex-wrap items-center radio-toggler">
    <?= form_radio(
        [
            'id' => 'schedule',
            'name' => 'publication_method',
            'class' => 'text-pine-700',
        ],
        'schedule',
        old('publication_method') &&
            old('publication_method') === 'schedule',
    ) ?>
    <label for="schedule" class="ml-2"><?= lang(
                                            'Episode.publish_form.publication_method.schedule',
                                        ) ?></label>
    <div class="w-full mt-2 radio-toggler-element">
        <?= form_label(
            lang('Episode.publish_form.scheduled_publication_date'),
            'scheduled_publication_date',
            [],
            lang('Episode.publish_form.scheduled_publication_date_hint'),
        ) ?>
        <div class="flex" data-picker="datetime">
            <?= form_input([
                'id' => 'scheduled_publication_date',
                'name' => 'scheduled_publication_date',
                'class' => 'form-input rounded-r-none flex-1',
                'value' => old('scheduled_publication_date', ''),
                'data-input' => '',
            ]) ?>
            <button class="p-3 border border-l-0 border-gray-500 bg-pine-100 focus:outline-none rounded-r-md hover:bg-pine-200 focus:ring" type="button" title="<?= lang(
                                                                                                                                                                    'Episode.publish_form.scheduled_publication_date_clear',
                                                                                                                                                                ) ?>" data-clear=""><?= icon('close') ?></button>
        </div>
    </div>
</div>
<?= form_fieldset_close() ?>

<div id="publish-warning" class="inline-flex flex-col hidden p-4 text-black bg-yellow-300 border-2 border-yellow-900 rounded-md" role="alert">
    <p class="flex items-baseline font-semibold">
        <?= icon('alert', 'mr-2 text-lg flex-shrink-0') . lang(
            'Episode.publish_form.message_warning',
        ) ?></p>
    <p>
        <?= lang(
            'Episode.publish_form.message_warning_hint',
        ) ?>
    </p>
</div>

<?= button(
    lang('Episode.publish_form.submit'),
    '',
    ['variant' => 'primary'],
    [
        'class' => 'self-end mt-4',
        'type' => 'submit',
        'data-btn-text-warning' => lang('Episode.publish_form.message_warning_submit'),
        'data-btn-text' => lang('Episode.publish_form.submit_edit')
    ],
) ?>

<?= form_close() ?>

<?= $this->endSection() ?>
