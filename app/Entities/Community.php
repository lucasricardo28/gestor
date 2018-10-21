<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Community.
 *
 * @package namespace App\Entities;
 */
class Community extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','contact','email', 'address', 'number', 'complement', 'neighborhood','regional_id','occupation_area'];

    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }

}
