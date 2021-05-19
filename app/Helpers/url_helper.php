<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

use CodeIgniter\HTTP\URI;

if (! function_exists('host_url')) {
    /**
     * Return the host URL to use in views
     */
    function host_url(): ?string
    {
        if (isset($_SERVER['HTTP_HOST'])) {
            $protocol =
                (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
                $_SERVER['SERVER_PORT'] === 443
                    ? 'https://'
                    : 'http://';
            return $protocol . $_SERVER['HTTP_HOST'] . '/';
        }

        return null;
    }
}

//--------------------------------------------------------------------

if (! function_exists('extract_params_from_episode_uri')) {
    /**
     * Returns podcast name and episode slug from episode string
     *
     * @return array<string, string>|null
     */
    function extract_params_from_episode_uri(URI $episodeUri): ?array
    {
        preg_match(
            '~@(?P<podcastName>[a-zA-Z0-9\_]{1,32})\/episodes\/(?P<episodeSlug>[a-zA-Z0-9\-]{1,191})~',
            $episodeUri->getPath(),
            $matches,
        );

        if ($matches === []) {
            return null;
        }

        if (
            ! array_key_exists('podcastName', $matches) ||
            ! array_key_exists('episodeSlug', $matches)
        ) {
            return null;
        }

        return [
            'podcastName' => $matches['podcastName'],
            'episodeSlug' => $matches['episodeSlug'],
        ];
    }
}
