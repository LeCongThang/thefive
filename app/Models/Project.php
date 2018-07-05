<?php
/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 10:17 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $fillable = [
        'name_vi', 'description_vi'
    ];
    public $timestamps = true;
}