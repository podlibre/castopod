<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class AnalyticsController extends Controller
{
    protected Model $analyticsModel;
    protected string $methodName = '';

    public function _remap(string $method, string ...$params): mixed
    {
        if (count($params) < 2) {
            throw PageNotFoundException::forPageNotFound();
        }

        $this->analyticsModel = model('Analytics' . $params[1] . 'Model');
        $this->methodName = 'getData' . (count($params) >= 3 ? $params[2] : '');

        return $this->$method(
            $params[0],
            count($params) >= 4 ? $params[3] : null,
        );
    }

    public function getData(
        int $podcastId,
        ?int $episodeId = null
    ): ResponseInterface {
        $methodName = $this->methodName;

        if ($episodeId === null) {
            return $this->response->setJSON(
                $this->analyticsModel->$methodName($podcastId),
            );
        }

        return $this->response->setJSON(
            $this->analyticsModel->$methodName($podcastId, $episodeId),
        );
    }
}
