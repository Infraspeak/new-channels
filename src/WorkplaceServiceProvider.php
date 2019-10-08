<?php

namespace NotificationChannels\Workplace;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;
use NotificationChannels\Workplace\WorkplaceChannel;

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
