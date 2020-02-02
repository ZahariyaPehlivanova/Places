<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12.11.2019 г.
 * Time: 22:19
 */

namespace App\Models;

use App\Models\Base\AbstractRoom;

class Room extends AbstractRoom
{
    public function owner(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}