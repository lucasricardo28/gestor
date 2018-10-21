<?php

namespace App\Presenters;

use App\Transformers\RegionalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class RegionalPresenter.
 *
 * @package namespace App\Presenters;
 */
class RegionalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RegionalTransformer();
    }
}
