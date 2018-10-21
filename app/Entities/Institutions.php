<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Institutions.
 *
 * @package namespace App\Entities;
 */
class Institutions extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['public_target_id','name','contact','address','number','complement','neighborhood','developed_projects','number_of_members','need'];

    public function publicTarget(){
        return $this->belongsTo(PublicTarget::class);
    }

}
