<?php namespace Studiodevs\Toolbox\Models;

use Model;

/**
 * Dashboard Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Dashboard extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_toolbox_dashboards';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'required',
        'project' => 'required'
    ];

    public $attachOne = [
        'image' => \System\Models\File::class
    ];

    public static function getProjectOptions(): array
    {
        return [
            'wsm' => 'WSM',
            'pu-wsm' => 'PU-WSM'
        ];
    }

    public function scopeForProject($query, string $project)
    {
        return $query->where('project', $project);
    }
}
