<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12.11.2019 г.
 * Time: 22:19
 */

namespace App\Models\Base;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @property  int id
 * @property  string name
 * @property  string password
 * @method static Builder create($attributes)
 * @method static Builder|$this firstOrCreate(array $attributes, array $values = [])
 * @method static Builder|$this fill(array $attributes)
 */
class AbstractRoom extends Model
{
    protected $guarded = ['id'];

    public $table = 'rooms';
}