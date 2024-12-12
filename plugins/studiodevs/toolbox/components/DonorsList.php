<?php namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Donor;

/**
 * DonorsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class DonorsList extends ComponentBase
{
    public $active;

    public $donors;

    public function componentDetails()
    {
        return [
            'name' => 'Donors List Component',
            'description' => 'Lista darczyńców'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'active' => [
                'title' => 'Rok',
                'description' => 'Ustaw rok najnowszego sprawozdania',
                'default' => '2023',
                'type' => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $this->donors = Donor::orderBy('created_at', 'desc')->get();
        $this->active = $this->property('active');
    }
}
