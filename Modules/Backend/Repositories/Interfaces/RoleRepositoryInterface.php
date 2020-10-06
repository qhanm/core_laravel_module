<?php
namespace Modules\Backend\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Modules\Backend\Repositories\ParamRequest;

interface RoleRepositoryInterface
{
    /**
     * @param $userId
     * @param array $params
     * @return Collection
     */
    public function getByUser($userId, array $params = []);

    public function getAll(ParamRequest $paramRequest);
}
