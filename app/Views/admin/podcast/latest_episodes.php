<section class="flex flex-col">
    <header class="flex justify-between py-2">
        <h1 class="text-xl"><?= lang('Podcast.latest_episodes') ?></h1>
        <a href="<?= route_to(
            'episode-list',
            $podcast->id
        ) ?>" class="inline-flex items-center text-sm underline hover:no-underline">
            <?= lang('Podcast.see_all_episodes') ?>
            <?= icon('chevron-right', 'ml-2') ?>
        </a>
    </header>
    <?php if ($episodes): ?>
        <div class="flex justify-between gap-4 overflow-x-auto">
        <?php foreach ($episodes as $episode): ?>
            <article class="flex flex-col w-56 mb-4 bg-white border rounded shadow" style="min-width: 12rem;">
                <img
                src="<?= $episode->image->thumbnail_url ?>"
                alt="<?= $episode->title ?>" class="object-cover" />
                <div class="flex justify-between p-2">
                    <div class="flex flex-col">
                        <a href="<?= route_to(
                            'episode-view',
                            $podcast->id,
                            $episode->id
                        ) ?>"
                        class="text-sm font-semibold hover:underline"
                        ><?= $episode->title ?>
                        </a>
                        <div class="text-xs">
                            <?php if (
                                $episode->season_number &&
                                $episode->number
                            ): ?>
                                    <abbr class="font-bold text-gray-600" title="<?= lang(
                                        'Episode.season_episode',
                                        [
                                            'seasonNumber' =>
                                                $episode->season_number,
                                            'episodeNumber' => $episode->number,
                                        ]
                                    ) ?>"><?= lang(
    'Episode.season_episode_abbr',
    [
        'seasonNumber' => $episode->season_number,
        'episodeNumber' => $episode->number,
    ]
) ?></abbr>
                            <?php elseif (
                                !$episode->season_number &&
                                $episode->number
                            ): ?>
                                <abbr class="font-bold text-gray-600" title="<?= lang(
                                    'Episode.number',
                                    [
                                        'episodeNumber' => $episode->number,
                                    ]
                                ) ?>"><?= lang('Episode.number_abbr', [
    'episodeNumber' => $episode->number,
]) ?></abbr>
                            <?php endif; ?>
                            <span class="mx-1">•</span>
                            <time
                            pubdate
                            datetime="<?= $episode->published_at->toDateTimeString() ?>"
                            title="<?= $episode->published_at ?>">
                            <?= lang('Common.mediumDate', [
                                $episode->published_at,
                            ]) ?>
                            </time>
                        </div>
                    </div>
                    <div class="relative" data-toggle="dropdown">
                        <button type="button" class="inline-flex items-center p-1 outline-none focus:shadow-outline" id="moreDropdown" data-popper="button" aria-haspopup="true" aria-expanded="false">
                            <?= icon('more') ?>
                        </button>
                        <nav class="absolute z-10 flex-col hidden py-2 text-black whitespace-no-wrap bg-white border rounded shadow" aria-labelledby="moreDropdown" data-popper="menu" data-popper-placement="top-end" data-popper-offset-x="0" data-popper-offset-y="-24" >
                                <a class="px-4 py-1 hover:bg-gray-100" href="<?= route_to(
                                    'episode-edit',
                                    $podcast->id,
                                    $episode->id
                                ) ?>"><?= lang('Episode.edit') ?></a>
                                <a class="px-4 py-1 hover:bg-gray-100" href="<?= route_to(
                                    'episode',
                                    $podcast->name,
                                    $episode->slug
                                ) ?>"><?= lang('Episode.go_to_page') ?></a>
                                <a class="px-4 py-1 hover:bg-gray-100" href="<?= route_to(
                                    'episode-delete',
                                    $podcast->id,
                                    $episode->id
                                ) ?>"><?= lang('Episode.delete') ?></a>
                        </nav>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="italic"><?= lang('Podcast.no_episode') ?></p>
    <?php endif; ?>
</section>