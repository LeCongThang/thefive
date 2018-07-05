<?php
/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 10:17 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'profile';

    protected $fillable = [
        'left_content_vi', 'left_content_en'
    ];
    public $timestamps = true;
}