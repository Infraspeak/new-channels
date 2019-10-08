<?php

namespace NotificationChannels\Workplace;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\ServiceProvider;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;

class WorkplaceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Notification::resolved(function (ChannelManager $service) {
            $service->extend('workplace', function ($app) {
                return new WorkplaceChannel($app->make(HttpClient::class));
            });
        });
    }
}
