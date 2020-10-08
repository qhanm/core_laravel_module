@extends('backend::layouts.master')

@section('content')
    <?php
    use \Modules\Backend\Entities\User;
    ?>
    <div class="container-fluid" id="pjax-container-users">
        {!!
            \Modules\Backend\Libs\Render\Breadcrumb ::render([
            ['name' => 'Dashboard', 'route' => route('backend.dashboard.index')],
            ['name' => 'Roles'],
        ],  'Roles')
        !!}

        {!! \Modules\Backend\Libs\Render\GridView::render() !!}

    </div>

@endsection

@section('scripts')

@endsection
