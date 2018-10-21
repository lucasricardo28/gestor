<?php

namespace App\Presenters;

use App\Transformers\PublicTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PublicPresenter.
 *
 * @package namespace App\Presenters;
 */
class PublicPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PublicTransformer();
    }
}
