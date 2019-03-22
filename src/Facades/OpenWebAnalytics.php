<?php
/**
 * Part of the Open Web Analytics PHP REST Client for Laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Open Web Analytics PHP REST Client for Laravel
 * @version    0.1.0
 * @author     VerdeIT
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, VerdeIT
 * @link       https://github.com/hafael/owa-laravel-client
 */

namespace Hafael\OpenWebAnalytics\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class OpenWebAnalytics extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'openwebanalytics';
    }
}