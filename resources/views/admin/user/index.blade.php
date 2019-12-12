@extends('adminlte::page')

@section('title')
    User page
@endsection
@section('content')

    <a href="{{url('/admin/user/create')}}"><button class="btn btn-info">Create new user</button></a><br><br>

    <table id="contact" class="display table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->role_id }}</td>
                <td><a href="{{url('/admin/user/' . $value->id . '/edit')}}" ><button class="btn btn-info">View</button></a>
                    {!!Form::open(['url'=>'admin/user/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
                    {!!Form::submit('Delete', ['class'=>'btn btn-danger'])  !!}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection