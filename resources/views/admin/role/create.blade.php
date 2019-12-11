@extends('adminlte::page')

@section('title')
    Create new role
@endsection
@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if(!$role->name)
                {!! Form::model($role, ['route' => ['role.store'], 'files' => true, 'class'=>'form-horizontal'  ]) !!}
            @else
                {!! Form::model($role, ['route' => ['role.update', $role->id], 'method'=>'PUT', 'class'=>'form-horizontal'  ]) !!}
            @endif
            <div class="form-group">
                {!! Form::label('name', '*Add new role:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    {!! Form::submit('Save', ['class'=>'btn btn-info']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>





@endsection