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
        {!!
            \Modules\Backend\Libs\Render\Breadcrumb ::render([
            ['name' => 'Dashboard', 'route' => route('backend.dashboard.index')],
            ['name' => 'Users'],
        ],  'Users')
        !!}

        {!! \Modules\Backend\Libs\Render\GridView::render([
                'id',
                [
                    'attribute' => 'avatar',
                    'value' => function($data) {
                        return $data;
                    }
                ]
            ])
        !!}

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
