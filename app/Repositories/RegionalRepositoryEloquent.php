<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RegionalRepository;
use App\Entities\Regional;
use App\Validators\RegionalValidator;

/**
 * Class RegionalRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RegionalRepositoryEloquent extends BaseRepository implements RegionalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Regional::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RegionalValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
