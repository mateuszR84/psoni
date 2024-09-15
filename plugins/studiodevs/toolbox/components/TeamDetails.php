<?php

namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Team;

/**
 * TeamsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class TeamDetails extends ComponentBase
{
    public $team;

    public function componentDetails()
    {
        return [
            'name' => 'Teams List Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'code' => [
                'title' => 'Placówka',
                'description' => 'Wybierz placówkę, której kadrę chcesz wyświetlić',
                'type' => 'dropdown',
            ]
        ];
    }

    public function getCodeOptions(): array
    {
        return Team::getCodeOptions();
    }

    public function onRun()
    {
        $team = Team::where('code', $this->property('code'))->first();       
        $this->team = $team;
    }
}   
