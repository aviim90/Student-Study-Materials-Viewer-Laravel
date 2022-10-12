@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Groups</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Group</th>
                                <th>Programme</th>
                                <th>Lecturer</th>
                                <th>Start</th>
                                <th>End</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{$group->name}}</td>
                                    <td>{{$group->program->name}}</td>
                                    @foreach($users as $user)
                                    <td>
                                        @if($group->lecturer_id == $user->id)
                                            {{$user->name}} {{$user->surname}}
                                        @endif
                                    </td>
                                    @endforeach
                                    <td>{{$group->start}}</td>
                                    <td>{{$group->end}}</td>
                                    <td><a class="btn btn-success">Lectures</a></td>
                                    <td><a class="btn btn-primary">Students</a></td>
                                    <td><a class="btn btn-warning">Update</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

