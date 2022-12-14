@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Students</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end"><a class="btn btn-primary" href="{{route('groups.index')}}">Back</a></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>E-mail</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                @foreach($users as $user)
                                    @if($student->user_id == $user->id)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->surname}}</td>s
                                    <td>{{$user->email}}</td>
                                </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




