<?php
namespace Modules\Backend\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParamRequest
 * @package Modules\Backend\Repositories
 * @property string $search
 * @property integer $pageSize;
 * @property string $status
 */
class ParamRequest extends Model
{
    protected $fillable = [
        'search',
        'pageSize',
        'status',
    ];

    protected $attributes = [
        'pageSize' => 20,
        'status' => 'active'
    ];

}
