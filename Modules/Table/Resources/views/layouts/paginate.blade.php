<div class="qhn-paginate float-right">
    {!! $users->appends(\Request::except('page'))->render() !!}
</div>
