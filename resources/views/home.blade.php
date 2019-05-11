@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table project-table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Status</th>
                          <th scope="col">Name</th>
                          <th scope="col">Rep</th>
                          <th scope="col">State</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($projects as $project)
                        <tr class='clickable-row' data-href='/project/{{$project->id}}' >
                          <th scope="row">Open</th>
                          <td>{{$project->name}} {{$project->surname}}</td>
                          <td>{{$project->user_id}}</td>
                          <td>{{$states[$project->state]}}</td>
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
