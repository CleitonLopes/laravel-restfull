<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class AccountsController extends Controller
{

    use \App\Traits\ApiControllerTrait;

    protected $model;
    protected $relationships = ['bank'];

    public function __construct(\App\Account $model)
    {
        $this->model = $model;
    }
}
