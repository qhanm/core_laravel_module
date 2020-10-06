<?php
namespace Modules\Backend\Repositories\Eloquent;

use Modules\Backend\Repositories\Interfaces\RoleRepositoryInterface;
use Modules\Backend\Repositories\ParamRequest;
use Modules\Backend\Repositories\RepositoryAbstract;
use Spatie\Permission\Models\Role;

class RoleRepository extends RepositoryAbstract implements RoleRepositoryInterface
{
    public function getModel()
    {
        return Role::class;
    }

    public function getByUser($userId, array $params = [])
    {

    }

    public function getAll(ParamRequest $paramRequest)
    {
        dd(Role::all());
    }
}
