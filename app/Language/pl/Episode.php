<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Sezon {seasonNumber}',
    'season_abbr' => 'S{seasonNumber}',
    'number' => 'Odcinek {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Sezon {seasonNumber}, odcinek {episodeNumber}',
    'season_episode_abbr' => 'S{seasonNumber}E{episodeNumber}',
    'back_to_episodes' => 'Wróć do odcinków {podcast}',
    'activity' => 'Activity',
    'description' => 'Opis',
    'total_favourites' => '{numberOfTotalFavourites, plural,
        one {# polubienie łącznie}
        few {# polubienia łącznie}
        many {# polubień łącznie}
        other {# polubienia łącznie}
    }',
    'total_reblogs' => '{numberOfTotalReblogs, plural,
        one {# udostępnienie łącznie}
        few {# udostępnienia łącznie}
        many {# udostępnień łącznie}
        other {# udostępnienia łącznie}
    }',
    'total_notes' => '{numberOfTotalNotes, plural,
        one {# wpis}
        few {# wpisy łącznie}
        many {# wpisów łącznie}
        other {# wpisy łącznie}
    }',
    'all_podcast_episodes' => 'Wszystkie odcinki podcastu',
    'back_to_podcast' => 'Wróć do podcastu',
    'edit' => 'Edytuj',
    'publish' => 'Publikuj',
    'publish_edit' => 'Edytuj publikację',
    'unpublish' => 'Cofnij publikację',
    'delete' => 'Usuń',
    'go_to_page' => 'Przejdź na stronę',
    'create' => 'Dodaj odcinek',
    'publication_status' => [
        'published' => 'Opublikowano {0}',
        'scheduled' => 'Zaplanowano na {0}',
        'not_published' => 'Nie opublikowano',
    ],
    'form' => [
        'warning' =>
            'In case of fatal error, try increasing the `memory_limit`, `upload_max_filesize` and `post_max_size` values in your php configuration file then restart your web server.<br />These values must be higher than the audio file you wish to upload.',
        'enclosure' => 'Plik dźwiękowy',
        'enclosure_hint' => 'Wybierz plik dźwiękowy .mp3 lub .m4a.',
        'info_section_title' => 'Informacje o odcinku',
        'info_section_subtitle' => '',
        'image' => 'Obraz okładki',
        'image_hint' =>
            'Jeżeli nie ustawiono obrazu, zostanie wykorzystana okładka podcastu.',
        'title' => 'Tytuł',
        'title_hint' =>
            'Should contain a clear and concise episode name. Do not specify the episode or season numbers here.',
        'slug' => 'Slug',
        'slug_hint' => 'Wykorzystywany do generowania adresu URL odcinka.',
        'season_number' => 'Sezon',
        'episode_number' => 'Odcinek',
        'type' => [
            'label' => 'Rodzaj',
            'hint' =>
                '- <strong>full</strong>: complete content the episode.<br/>- <strong>trailer</strong>: short, promotional piece of content that represents a preview of the current show.<br/>- <strong>bonus</strong>: extra content for the show (for example, behind the scenes info or interviews with the cast) or cross-promotional content for another show.',
            'full' => 'Pełny',
            'trailer' => 'Zapowiedź',
            'bonus' => 'Bonus',
        ],
        'parental_advisory' => [
            'label' => 'Parental advisory',
            'hint' => 'Does the episode contain explicit content?',
            'undefined' => 'undefined',
            'clean' => 'Clean',
            'explicit' => 'Explicit',
        ],
        'show_notes_section_title' => 'Show notes',
        'show_notes_section_subtitle' =>
            'Up to 4000 characters, be clear and concise. Show notes help potential listeners in finding the episode.',
        'description' => 'Opis',
        'description_footer' => 'Stopka opisu',
        'description_footer_hint' =>
            'This text is added at the end of each episode description, it is a good place to input your social links for example.',
        'additional_files_section_title' => 'Dodatkowe pliki',
        'additional_files_section_subtitle' =>
            'These files may be used by other platforms to provide better experience to your audience.<br />See the {podcastNamespaceLink} for more information.',
        'location_section_title' => 'Miejsce',
        'location_section_subtitle' => 'Jakiego miejsca dotyczy ten odcinek?',
        'location_name' => 'Nazwa lub adres lokalizacji',
        'location_name_hint' => 'Może to być rzeczywiste lub fikcyjne miejsce',
        'transcript' => 'Transkrypcja lub napisy',
        'transcript_hint' => 'Dozwolone formaty to txt, html, srt i json.',
        'transcript_delete' => 'Usuń transkrypcję',
        'chapters' => 'Rozdziały',
        'chapters_hint' => 'Plik powinien być w formacie JSON Chapters.',
        'chapters_delete' => 'Usuń rozdziały',
        'advanced_section_title' => 'Zaawansowane parametry',
        'advanced_section_subtitle' =>
            'Jeżeli potrzebujesz tagów RSS nieobsługiwanych przez Castopod, ustaw je tutaj.',
        'custom_rss' => 'Niestandardowe tagi RSS dla odcinka',
        'custom_rss_hint' => 'Zostanie to umieszczone wewnątrz tagu ❬channel❭.',
        'block' => 'Odcinek będzie ukryty na wszystkich platformach',
        'block_hint' =>
            'The episode show or hide status. If you want this episode removed from the Apple directory, toggle this on.',
        'submit_create' => 'Utwórz odcinek',
        'submit_edit' => 'Zapisz odcinek',
    ],
    'publish_form' => [
        'note' => 'Twój wpis',
        'note_hint' =>
            'Wiadomość którą napiszesz zostanie wysłana wszystkim obserwującym w Fediwersum.',
        'publication_date' => 'Data publikacji',
        'publication_method' => [
            'now' => 'Teraz',
            'schedule' => 'Zaplanuj',
        ],
        'scheduled_publication_date' => 'Data zaplanowanej publikacji',
        'scheduled_publication_date_clear' => 'Wyczyść datę publikacji',
        'scheduled_publication_date_hint' =>
            'You can schedule the episode release by setting a future publication date. This field must be formatted as YYYY-MM-DD HH:mm',
        'submit' => 'Publikuj',
        'submit_edit' => 'Edytuj publikację',
    ],
    'unpublish_form' => [
        'disclaimer' =>
            'Unpublishing the episode will delete all the notes associated with the episode and remove it from the podcast\'s RSS feed.',
        'understand' => 'Rozumiem, chcę cofnąć publikację tego odcinka',
        'submit' => 'Cofnij publikację',
    ],
    'soundbites' => 'Soundbites',
    'soundbites_form' => [
        'title' => 'Edit soundbites',
        'info_section_title' => 'Episode soundbites',
        'info_section_subtitle' => 'Add, edit or delete soundbites',
        'start_time' => 'Początek',
        'start_time_hint' =>
            'The first second of the soundbite, it can be a decimal number.',
        'duration' => 'Czas trwania',
        'duration_hint' =>
            'The duration of the soundbite (in seconds), it can be a decimal number.',
        'label' => 'Podpis',
        'label_hint' => 'Tekst, który będzie wyświetlany.',
        'play' => 'Play soundbite',
        'delete' => 'Delete soundbite',
        'bookmark' =>
            'Click while playing to get current position, click again to get duration.',
        'submit_edit' => 'Save all soundbites',
    ],
    'embeddable_player' => [
        'add' => 'Dodaj zagnieżdżany odtwarzacz',
        'title' => 'Zagnieżdżany odtwarzacz',
        'label' =>
            'Wybierz kolor motywu, skopiuj zagnieżdżany odtwarzaczc do schowka i wklej go na swojej stronie.',
        'clipboard_iframe' => 'Skopiuj zagnieżdżany odtwarzacz do schowka',
        'clipboard_url' => 'Skopiuj adres do schowka',
        'dark' => 'Ciemny',
        'dark-transparent' => 'Ciemny przezroczysty',
        'light' => 'Jasny',
        'light-transparent' => 'Jasny przezroczysty',
    ],
];