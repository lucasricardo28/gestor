<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Public;

/**
 * Class PublicTransformer.
 *
 * @package namespace App\Transformers;
 */
class PublicTransformer extends TransformerAbstract
{
    /**
     * Transform the Public entity.
     *
     * @param \App\Entities\Public $model
     *
     * @return array
     */
    public function transform(Public $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
