@extends('adminlte::page')

@section('title')
    Role page
@endsection
@section('content')

    <a href="{{url('/admin/role/create')}}"><button class="btn btn-info">Create new role</button></a><br><br>

    <table id="contact" class="display table">
        <thead>
        <tr>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($role as $value)

        <tr>
        <td>{{ $value->name }}</td>
        <td><a href="{{url('/admin/role/' . $value->id . '/edit')}}" ><button class="btn btn-info">View</button></a>
        {!!Form::open(['url'=>'admin/role/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
        {!!Form::submit('Delete', ['class'=>'btn btn-danger'])  !!}
        {!!Form::close()!!}
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection