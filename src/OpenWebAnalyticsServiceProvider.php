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

namespace Hafael\OpenWebAnalytics\Laravel;

use Hafael\OpenWebAnalytics\OpenWebAnalytics;
use Illuminate\Support\ServiceProvider;

class OpenWebAnalyticsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerOpenWebAnalytics();

        $this->registerConfig();
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'openwebanalytics', 'openwebanalytics.config'
        ];
    }

    /**
     * Register the Open Web Analytics PHP Rest Client class.
     *
     * @return void
     */
    protected function registerOpenWebAnalytics()
    {
        $this->app->singleton('openwebanalytics', function ($app) {
            $config = $app['config']->get('services.owa');

            $baseUrl = isset($config['base_url']) ? $config['base_url'] : null;
            $apiKey = isset($config['api_key']) ? $config['api_key'] : null;
            $siteId = isset($config['site_id']) ? $config['site_id'] : null;
            $format = isset($config['rest_format']) ? $config['rest_format'] : null;

            return new OpenWebAnalytics($baseUrl, $apiKey, $siteId, $format);
        });

        $this->app->alias('openwebanalytics', 'Hafael\OpenWebAnalytics\OpenWebAnalytics');
    }

    /**
     * Register the config class.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->app->singleton('openwebanalytics.config', function ($app) {
            return $app['openwebanalytics']->getConfig();
        });

        $this->app->alias('openwebanalytics.config', 'Hafael\OpenWebAnalytics\Config');

        $this->app->alias('openwebanalytics.config', 'Hafael\OpenWebAnalytics\ConfigInterface');
    }
}