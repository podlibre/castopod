<?= $this->extend('admin/_layout') ?>

<?= $this->section('title') ?>
<?= lang('Podcast.import') ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('Podcast.import') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= form_open_multipart(route_to('podcast-import'), [
    'method' => 'post',
    'class' => 'flex flex-col items-start',
]) ?>
<?= csrf_field() ?>

<?= form_section(
    lang('PodcastImport.old_podcast_section_title'),
    lang('PodcastImport.old_podcast_section_subtitle')
) ?>

<?= form_label(
    lang('PodcastImport.imported_feed_url'),
    'imported_feed_url',
    [],
    lang('PodcastImport.imported_feed_url_hint')
) ?>
<?= form_input([
    'id' => 'imported_feed_url',
    'name' => 'imported_feed_url',
    'class' => 'form-input',
    'value' => old('imported_feed_url'),
    'placeholder' => 'https://...',
    'type' => 'url',
    'required' => 'required',
]) ?>

<?= form_section_close() ?>


<?= form_section(
    lang('PodcastImport.new_podcast_section_title'),
    lang('PodcastImport.new_podcast_section_subtitle')
) ?>

<?= form_label(
    lang('PodcastImport.name'),
    'name',
    [],
    lang('PodcastImport.name_hint')
) ?>
<?= form_input([
    'id' => 'name',
    'name' => 'name',
    'class' => 'form-input mb-4',
    'value' => old('name'),
    'required' => 'required',
]) ?>

<?= form_label(lang('Podcast.form.language'), 'language') ?>
<?= form_dropdown('language', $languageOptions, old('language', $browserLang), [
    'id' => 'language',
    'class' => 'form-select mb-4',
    'required' => 'required',
]) ?>

<?= form_label(lang('Podcast.form.category'), 'category') ?>
<?= form_dropdown('category', $categoryOptions, old('category'), [
    'id' => 'category',
    'class' => 'form-select mb-4',
    'required' => 'required',
]) ?>

<?= form_section_close() ?>


<?= form_section(
    lang('PodcastImport.advanced_params_section_title'),
    lang('PodcastImport.advanced_params_section_subtitle')
) ?>

<?= form_fieldset('', ['class' => 'flex flex-col mb-4']) ?>
    <legend><?= lang('PodcastImport.slug_field.label') ?></legend>
    <label for="link" class="inline-flex items-center">
        <?= form_radio(
            [
                'id' => 'link',
                'name' => 'slug_field',
                'class' => 'form-radio text-green-500',
            ],
            'link',
            old('slug_field') ? old('slug_field') == 'link' : true
        ) ?>
        <span class="ml-2"><?= lang('PodcastImport.slug_field.link') ?></span>
    </label>
    <label for="title" class="inline-flex items-center">
        <?= form_radio(
            [
                'id' => 'title',
                'name' => 'slug_field',
                'class' => 'form-radio text-green-500',
            ],
            'title',
            old('slug_field') ? old('slug_field') == 'title' : false
        ) ?>
        <span class="ml-2"><?= lang('PodcastImport.slug_field.title') ?></span>
    </label>
<?= form_fieldset_close() ?>

<?= form_fieldset('', ['class' => 'flex flex-col mb-4']) ?>
    <legend><?= lang('PodcastImport.description_field.label') ?></legend>
    <label for="description" class="inline-flex items-center">
        <?= form_radio(
            [
                'id' => 'description',
                'name' => 'description_field',
                'class' => 'form-radio text-green-500',
            ],
            'description',
            old('description_field')
                ? old('description_field') == 'description'
                : true
        ) ?>
        <span class="ml-2"><?= lang(
            'PodcastImport.description_field.description'
        ) ?></span>
    </label>
    <label for="summary" class="inline-flex items-center">
        <?= form_radio(
            [
                'id' => 'summary',
                'name' => 'description_field',
                'class' => 'form-radio text-green-500',
            ],
            'summary',
            old('description_field')
                ? old('description_field') == 'summary'
                : false
        ) ?>
        <span class="ml-2"><?= lang(
            'PodcastImport.description_field.summary'
        ) ?></span>
    </label>
    <label for="subtitle_summary" class="inline-flex items-center">
        <?= form_radio(
            [
                'id' => 'subtitle_summary',
                'name' => 'description_field',
                'class' => 'form-radio text-green-500',
            ],
            'subtitle_summary',
            old('description_field')
                ? old('description_field') == 'subtitle_summary'
                : false
        ) ?>
        <span class="ml-2"><?= lang(
            'PodcastImport.description_field.subtitle_summary'
        ) ?></span>
    </label>
<?= form_fieldset_close() ?>


<label class="inline-flex items-center mb-4">
    <?= form_checkbox(
        [
            'id' => 'force_renumber',
            'name' => 'force_renumber',
            'class' => 'form-checkbox text-green-500',
        ],
        'yes',
        old('force_renumber', false)
    ) ?>
    <span class="ml-2"><?= lang('PodcastImport.force_renumber') ?></span>
    <?= hint_tooltip(lang('PodcastImport.force_renumber_hint'), 'ml-1') ?>
</label>

<?= form_label(
    lang('PodcastImport.season_number'),
    'season_number',
    [],
    lang('PodcastImport.season_number_hint')
) ?>
<?= form_input([
    'id' => 'season_number',
    'name' => 'season_number',
    'class' => 'form-input mb-4',
    'value' => old('season_number'),
    'type' => 'number',
]) ?>

<?= form_label(
    lang('PodcastImport.max_episodes'),
    'max_episodes',
    [],
    lang('PodcastImport.max_episodes_hint')
) ?>
<?= form_input([
    'id' => 'max_episodes',
    'name' => 'max_episodes',
    'class' => 'form-input mb-4',
    'value' => old('max_episodes'),
    'type' => 'number',
]) ?>

<?= form_section_close() ?>

<?= button(
    lang('PodcastImport.submit'),
    null,
    ['variant' => 'primary'],
    ['type' => 'submit', 'class' => 'self-end']
) ?>

<?= form_close() ?>


<?= $this->endSection() ?>