<?php

namespace StudioDevs\Toolbox\Models;

use Model;

/**
 * SupportForm Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class SupportForm extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_toolbox_support_forms';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'name' => 'required',
        'program' => 'required'
    ];

    public $slugs = [
        'slug' => ['name', 'program'],
    ];

    public static function getProgramOptions(): array
    {
        return [
            'mt' => 'MT',
            'kt' => 'KT',
            'wsm' => 'WSM',
            'ord' => 'ORD'
        ];
    }

    public function scopeForProgram($query, string $program)
    {
        return $query->where('program', $program);
    }
}
