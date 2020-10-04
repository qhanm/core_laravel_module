<?php
namespace Modules\Backend\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface RoleRepositoryInterface
{
    /**
     * @param $userId
     * @param array $params
     * @return Collection
     */
    public function getByUser($userId, array $params = []);
}
