<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\InstitutionsRepository;
use App\Entities\Institutions;
use App\Validators\InstitutionsValidator;

/**
 * Class InstitutionsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class InstitutionsRepositoryEloquent extends BaseRepository implements InstitutionsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Institutions::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return InstitutionsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
