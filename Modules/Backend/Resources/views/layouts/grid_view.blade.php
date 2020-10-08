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
                                    @if($headerRightContent['required']['select_paginate'] == true)
                                        <div class="qhn-div-paginate">
                                        {!! Form::select('pageSize', [10 => 10, 20 => 20, 50 => 50, 100 => 100], 20, ['class' => 'form-control', 'id' => 'pageSize']) !!}
                                        </div>
                                    @endif
                                    @foreach($headerRightContent['options'] as $rightContent)
                                        <div class="qhn-div-paginate">
                                            {!! $rightContent !!}
                                        </div>
                                    @endforeach
                                    <input type="text" class="form-control" id="search" name="search" value="" placeholder="{{__('search')}}" />
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

                    </table>
                    <div class="qhn-paginate float-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
