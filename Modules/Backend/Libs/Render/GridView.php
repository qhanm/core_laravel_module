<?php
namespace Modules\Backend\Libs\Render;

use Illuminate\Support\Facades\View;
use Kris\LaravelFormBuilder\Form;

class GridView
{
    public $icon_delete = '';
    public $icon_create = '';
    public $icon_edit = '';


    public function renderHeaderRightContent()
    {
    }

    public static function render(array $columns = [], array $option = [])
    {
        dd($columns);
        $headerRightContent = [
            'required' => [
                'select_paginate' => true,
            ],
            'options' => [

            ],
        ];

        return View::make('backend::layouts.grid_view', [
            'headerRightContent' => $headerRightContent,
        ])->render();
    }
}
