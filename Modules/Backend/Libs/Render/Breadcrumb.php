<?php
namespace Modules\Backend\Libs\Render;

use Illuminate\Support\Facades\View;

class Breadcrumb
{
    public static function render(array $list = [], string $mainPage = '')
    {
        return View::make('backend::layouts.breadcrumb', [
            'mainPage' => $mainPage,
            'list' => $list
        ])->render();
    }
}
