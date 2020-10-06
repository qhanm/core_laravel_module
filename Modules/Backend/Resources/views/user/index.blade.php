<?php

    /* @var array $users **/
    /* @var \Modules\Backend\Repositories\ParamRequest $params **/
?>
@extends('backend::layouts.master')

@section('content')
    <?php
        use \Modules\Backend\Entities\User;
    ?>
    <div class="container-fluid" id="pjax-container-users">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                            <li class="breadcrumb-item active">Active</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="button-items">
                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-plus-medical font-size-16 align-middle mr-2"></i>{{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="" class="float-right">
                                    <form action="{{ route('backend.user.index') }}" method="get" data-pjax=true>
                                        <div class="input-group mb-2 mr-sm-3" >
                                            <div class="qhn-div-paginate">
                                                {!! Form::select('status', [
                                                    strtolower(\Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_ALL]) => \Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_ALL],
                                                    strtolower(\Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_ACTIVE]) => \Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_ACTIVE],
                                                    strtolower(\Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_BLOCK]) => \Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_BLOCK],
                                                    strtolower(\Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_TRASH]) => \Modules\Backend\Entities\User::getNameStatus()[\Modules\Backend\Entities\User::STATUS_TRASH],
                                                ], $params->status,['class' => 'form-control']) !!}
                                            </div>
                                            <div class="qhn-div-paginate">
                                                {!! Form::select('pageSize', [10 => 10, 20 => 20, 50 => 50, 100 => 100], $params->pageSize, ['class' => 'form-control', 'id' => 'pageSize']); !!}
                                            </div>
                                            <input type="text" class="form-control" id="search" name="search" value="{{ $params->search }}" placeholder="{{__('search')}}" />
                                            <div class="input-group-append">
                                                <button class="input-group-text" type="submit" id="btn-search-content">
                                                    <i class="bx bx-search-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <td>@sortablelink('id')</td>
                                    <td>@sortablelink('avatar')</td>
                                    <td>@sortablelink('name')</td>
                                    <td>@sortablelink('username')</td>
                                    <td>@sortablelink('email')</td>
                                    <td>@sortablelink('created_at')</td>
                                    <td>@sortablelink('status')</td>
                                    <td></td>
                                </tr>
                                </thead>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <?php
                                                if(empty($user->avatar)){
                                                    $user->avatar = \Modules\Backend\Constant\QHNDefault::AVATAR_DEFAULT;
                                                }
                                            ?>
                                                <img src="{{Module::asset($user->avatar)}}" alt="{{$user->name}}" width="30px" height="30px">
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <span class="{{ \Modules\Backend\Entities\User::getCssStatus()[$user->status] }}">
                                                {{ \Modules\Backend\Entities\User::getNameStatus()[$user->status] }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="dripicons-document-edit"></i>
                                            </a>
                                            <a href="" class="text-danger">
                                                <i class="dripicons-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="qhn-paginate float-right">
                                {!! $users->appends(\Request::except('page'))->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).pjax('a', '#pjax-container-users');

        $(document).on('change', 'form[data-pjax]', function(event) {
            event.preventDefault();
            $.pjax.submit(event, '#pjax-container-users')
        })

    </script>
@endsection
