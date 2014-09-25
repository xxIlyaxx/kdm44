<?php

namespace App\Models;

use T4\Orm\Model;

class User
    extends Model
{
    public static $schema = [
        'table' => '__users',
        'columns' => [
            'email'     => ['type'=>'string'],
            'password'  => ['type'=>'string'],
        ],
        'relations' => [
            'role'=>[
                'type'=>self::BELONGS_TO,
                'model'=>'\App\Models\Role'
            ]
        ],
    ];

}