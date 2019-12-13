@extends('layouts.app')

@section('title')
    Tickets page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                                <a href="{{url('/ticket/create')}}"><button class="btn btn-info">Create new ticket</button></a><br><br>

                                <table id="contact" class="display table">
                                    <thead>
                                    <tr>
                                        <th>Theme</th>
                                        <th>Message</th>
                                        <th>Date/Time</th>

                                        {{--<th>Email</th>--}}
                                        {{--<th>Customer</th>--}}
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ticket as $value)
                                        <tr>
                                            <td>{{ $value->theme }}</td>
                                            <td>{{ $value->message }}</td>
                                            <td>{{ $value->created_at }}</td>

                                            {{--<td>{{ $value->role->name }}</td>--}}
                                            {{--<td><a href="{{url('/ticket/' . $value->id . '/edit')}}" ><button class="btn btn-info">View</button></a>--}}
                                            <td>
                                                {!!Form::open(['url'=>'/ticket/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
                                                {!!Form::submit('Delete', ['class'=>'btn btn-danger'])  !!}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
            </div>
        </div>
    </div>


@endsection