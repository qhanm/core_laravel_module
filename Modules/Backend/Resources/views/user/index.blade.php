@extends('backend::layouts.master')

@section('content')
    <div id="pjax-container-users">
        <table class="table table-responsive">
            <thead>
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
        {!! $users->appends(\Request::except('page'))->render() !!}
    </div>
@endsection

@section('scripts')
    <script>
        $(document).pjax('a', '#pjax-container-users')
    </script>
@endsection
