<?php namespace Studiodevs\Toolbox\Models;

use Model;

/**
 * Report Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Report extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_toolbox_reports';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $jsonable = [
        'additional_fields'
    ];
}
