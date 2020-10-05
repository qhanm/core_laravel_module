@extends('backend::layouts.master')

@section('content')
    <div class="container-fluid" id="pjax-container-users">
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
                                                <select class="form-control select2 " name="page-size">
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control" id="search" name="search" placeholder="{{__('search')}}" />
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
                                    <td>@sortablelink('name')</td>
                                    <td>@sortablelink('username')</td>
                                    <td>@sortablelink('email')</td>
                                </tr>
                                </thead>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
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

        $(document).on('submit', 'form[data-pjax]', function(event) {
            event.preventDefault();
            $.pjax.submit(event, '#pjax-container-users')
        })

        $(document).on('submit', 'form[data-pjax]', function(event) {
            event.preventDefault();
            $.pjax.submit(event, '#pjax-container-users')
        })

        // $(document).on('click', '#btn-search-content', function (event) {
        //     event.preventDefault();
        //     let params = insertParam('search', $('#search').val());
        //     $.pjax({url: getFullPathCurrent() + '/?' + params, container: '#pjax-container-users'})
        // })
    </script>
@endsection
