@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Groups</div>
                    <div class="card-body">
                        <div><a class="btn btn-primary" href="{{route('groups.create')}}">Add Group</a></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Group</th>
                                <th>Students</th>
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
                                    <td>{{$group->students->count()}}</td>
                                    <td>{{$group->program->name}}</td>
                                    <td>
                                        @foreach($users as $user)
                                        @if($group->lecturer_id == $user->id)
                                            {{$user->name}} {{$user->surname}}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>{{$group->start}}</td>
                                    <td>{{$group->end}}</td>
                                    <td><a class="btn btn-success" href="{{route('group.lectures', $group->id)}}">Lectures</a></td>
                                    <td><a class="btn btn-primary" href="{{route('group.students', $group->id)}}">Students</a></td>
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

