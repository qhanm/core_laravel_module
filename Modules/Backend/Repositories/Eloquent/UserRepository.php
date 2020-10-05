<?php
namespace Modules\Backend\Repositories\Eloquent;

use Modules\Backend\Entities\User;
use Modules\Backend\Repositories\Interfaces\UserRepositoryInterface;
use Modules\Backend\Repositories\RepositoryAbstract;

class UserRepository extends RepositoryAbstract implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }

    public function all(array $params = [])
    {
        $users = User::where('id', '>', 30)->sortable()->paginate(10);

        return $users;
    }
}
