<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            @include('backend::layouts.left_header')
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="" class="float-right">
                                @include('backend::layouts.right_header')
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" id="pjax-container-users">
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
                        @include('backend::layouts.paginate')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
