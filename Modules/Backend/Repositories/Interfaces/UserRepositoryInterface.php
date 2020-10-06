<?php
namespace Modules\Backend\Repositories\Interfaces;

use Modules\Backend\Repositories\ParamRequest;

interface UserRepositoryInterface
{
    public function getAll(ParamRequest $paramRequest);
}
