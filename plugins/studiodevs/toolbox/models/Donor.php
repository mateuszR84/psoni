<?php namespace Studiodevs\Toolbox\Models;

use Model;

/**
 * Donor Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Donor extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_toolbox_donors';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $jsonable = [
        'donors'
    ];
}
