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
 * @property  int user_id
 * @method static Builder create($attributes)
 * @method static Builder|$this firstOrCreate(array $attributes)
 * @method static Builder|$this firstOrNew(array $attributes)
 * @method static Builder|$this fill(array $attributes)
 * @method static Builder|$this find(int $id)
 */
class AbstractRoom extends Model
{
    protected $guarded = ['id'];

    public $table = 'rooms';
}