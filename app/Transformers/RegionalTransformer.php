<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Regional;

/**
 * Class RegionalTransformer.
 *
 * @package namespace App\Transformers;
 */
class RegionalTransformer extends TransformerAbstract
{
    /**
     * Transform the Regional entity.
     *
     * @param \App\Entities\Regional $model
     *
     * @return array
     */
    public function transform(Regional $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
