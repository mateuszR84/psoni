<?php

namespace Studiodevs\Toolbox\EventHandlers;

use App;
use RainLab\Blog\Models\Post;
use RainLab\Blog\Controllers\Posts;

class PostHandler
{
    public function subscribe($event)
    {
        if (App::runningInBackend()) {
            $this->extendPostModel($event);
        }
    }

    public function extendPostModel($event)
    {
        Posts::extendFormFields(function ($widget) {
            if (!$widget->model instanceof Post) {
                return;
            }
            $config = [
                'is_archived' => [
                    'label'     => 'Archiwizuj',
                    'tab'       => 'rainlab.blog::lang.post.tab_manage',
                    'type'      => 'switch',
                    'span'      => 'left',
                ],
            ];

            $widget->addSecondaryTabFields($config);
        });
    }
}
