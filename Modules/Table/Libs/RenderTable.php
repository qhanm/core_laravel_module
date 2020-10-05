<?php
namespace Modules\Table\Libs;

use Illuminate\Support\Facades\View;

class RenderTable
{
    protected $table_class = '';
    protected $columns = [];
    protected $header = [];
    protected $options = [];

    public function __construct(array $columns = [], array $header = [], array $options = [])
    {
        $this->header = $header;
        $this->columns = $columns;
        $this->options = $options;
    }

    public function renderHeaderLeft()
    {
        View::make('', []);
    }

    public function renderHeaderRight()
    {

    }

    public function renderBody()
    {

    }

    public function render()
    {

    }
}
