<?php namespace Studiodevs\Toolbox\Models;

use Model;

/**
 * Team Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_toolbox_teams';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $jsonable = [
        'team'
    ];

    public static function getCodeOptions() :array 
    {
        return [
            'OREW' => 'OREW',
            'NPS' => 'NPS',
            'SDS' => 'ŚDS',
        ];   
    }
}
