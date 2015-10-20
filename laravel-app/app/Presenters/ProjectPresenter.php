<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 20/10/2015
 * Time: 09:12
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ProjectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {

        return new ProjectTransformer();

    }

}