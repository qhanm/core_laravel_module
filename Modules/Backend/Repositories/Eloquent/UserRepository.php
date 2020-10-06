<?php
namespace Modules\Backend\Repositories\Eloquent;

use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\User;
use Modules\Backend\Repositories\Interfaces\UserRepositoryInterface;
use Modules\Backend\Repositories\ParamRequest;
use Modules\Backend\Repositories\RepositoryAbstract;

class UserRepository extends RepositoryAbstract implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }

    public function getAll(ParamRequest $paramRequest)
    {
        //DB::enableQueryLog();
        //dd($paramRequest);

        $users = User::where(function ($query) use($paramRequest) {
            $query->orWhere('username', 'like', "%{$paramRequest->search}%")
                ->orWhere('email', 'like', "%{$paramRequest->search}%")
                ->orWhere('name', 'like', "%{$paramRequest->search}%");
        });

        if(!empty($paramRequest->status) && $paramRequest->status != 'all')
        {
            $statusList = array_flip(User::getNameStatus());
            $status = $statusList[ucfirst($paramRequest->status)];
            $users->where('status', $status);
        }
        $users = $users->sortable()->paginate($paramRequest->pageSize);
        //dd(DB::getQueryLog());
        return $users;
    }
}
