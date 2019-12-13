@extends('layouts.app')
@section('title')
    Create new Ticket
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


            @if(!$ticket->theme)
                {!! Form::model($ticket, ['route' => ['ticket.store'], 'files' => true, 'class'=>'form-horizontal'  ]) !!}
            @else
                {!! Form::model($ticket, ['route' => ['ticket.update', $ticket->id], 'method'=>'PUT', 'class'=>'form-horizontal'  ]) !!}
            @endif
            <div class="form-group">
                {!! Form::label('theme', 'Theme:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('theme', null, ['class'=>'form-control']) !!}
                </div>
            </div>
                <div class="form-group">
                    {!! Form::label('message', 'Message:', ['class'=>'control-label col-sm-3']); !!}
                    <div class="col-sm-9">
                        {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('file', 'File:', ['class'=>'control-label col-sm-3']); !!}
                    <div class="col-sm-9">
                        {!! Form::file('file', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    {!! Form::submit('Send ticket', ['class'=>'btn btn-info']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
