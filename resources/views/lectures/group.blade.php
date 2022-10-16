@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header"><span>Programme: {{$group->program->name}}, Lectures</span></div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end"><a class="btn btn-primary" href="{{route('groups.index')}}">Back</a></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lectures as $lecture)
                                <tr>
                                    <td>{{$lecture->name}}</td>
                                    <td>{{$lecture->description}}</td>
                                    <td>{{$lecture->date}}</td>
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



