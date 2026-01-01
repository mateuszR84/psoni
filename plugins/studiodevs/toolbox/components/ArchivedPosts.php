<?php

namespace StudioDevs\Toolbox\Components;

use RainLab\Blog\Components\Posts;

/**
 * ArchivedPosts Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ArchivedPosts extends Posts
{
    public function componentDetails()
    {
        return [
            'name' => 'Archived Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        $parentProperties = parent::defineProperties();

        $properties = array_merge($parentProperties,
            [
                'is_archived' => [
                    'title' => 'studiodevs.toolbox::lang.components.posts.properties.is_archived',
                    'description' => 'studiodevs.toolbox::lang.components.posts.properties.is_archived_description',
                    'type' => 'checkbox',
                ],
            ]
            );

        return is_array($properties) ? $properties : $parentProperties;
    }
}
