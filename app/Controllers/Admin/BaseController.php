<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components and performing functions that are needed by all
 * your controllers. Extend this class in any new controllers: class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
    /**
     * An array of helpers to be loaded automatically upon class instantiation. These helpers will be available to all
     * other controllers that extend BaseController.
     *
     * @var string[]
     */
    protected $helpers = ['auth', 'breadcrumb', 'svg', 'components', 'misc'];

    /**
     * Constructor.
     */
    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger
    ): void {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
    }
}
