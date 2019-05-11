@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 justify-content-left">
            <div class="card">
                <div class="card-header">

                    @if(empty($id))
                        Account (New)
                    @else
                    <div class="row">
                    <div class="col-sm-10">
                        <h3>{{$project->name}} {{$project->surname}}</h3>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-secondary float-right" type="button" data-toggle="collapse" data-target="#editProject" aria-expanded="false" aria-controls="collapseExample">
                            <i class="far fa-edit"></i>
                        </button>
                    </div>
                    </div>
                        
                        
                    @endif
                    
                </div>

                <div class="card-body">
                @if(empty($id))
                <form method="post" action="/project/save" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="form-row">
                    <div class="col">
                        <input name="name" type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input name="surname" type="text" class="form-control" placeholder="Last name">
                    </div>
                  </div>
                    <br>
                  <div class="form-row">
                    <div class="col">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">
                        <input name="phone" type="text" class="form-control" placeholder="Phone">
                    </div>
                  </div>

                  <br>
                  <div class="form-row">
                    <div class="col">
                        <input name="address" type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="col">
                        <input name="city" type="text" class="form-control" placeholder="City">
                    </div>
                  </div>

                  <br>
                  <div class="form-row">
                    <div class="col">
                        <input name="state" type="text" class="form-control" placeholder="State">
                    </div>
                    <div class="col">
                        <input name="zipcode" type="text" class="form-control" placeholder="Zip">
                    </div>
                  </div>
                  <br>
                    <div class="form-row">
                        <div class="col">
                            <input class="btn btn-primary" type="submit" value="Save" />
                        </div>
                    </div>
                </form>
                @else
                <div class="collapse" id="editProject">
                    <form method="post" action="/project/save" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$project->id}}">
                      <div class="form-row">
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="First name" value="{{$project->name}}">
                        </div>
                        <div class="col">
                            <input name="surname" type="text" class="form-control" placeholder="Last name" value="{{$project->surname}}">
                        </div>
                      </div>
                        <br>
                      <div class="form-row">
                        <div class="col">
                            <input name="email" type="text" class="form-control" placeholder="Email" value="{{$project->email}}">
                        </div>
                        <div class="col">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{$project->phone}}">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                            <input name="address" type="text" class="form-control" placeholder="Address" value="{{$project->address}}">
                        </div>
                        <div class="col">
                            <input name="city" type="text" class="form-control" placeholder="City" value="{{$project->city}}">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                            <input name="state" type="text" class="form-control" placeholder="State" value="{{$project->state}}">
                        </div>
                        <div class="col">
                            <input name="zipcode" type="text" class="form-control" placeholder="Zip" value="{{$project->zipcode}}">
                        </div>
                      </div>
                      <br>
                        <div class="form-row">
                            <div class="col">
                                <input class="btn btn-primary" type="submit" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
                @endif
                </div>
            </div>

        </div>
        <div class="col-md-8 justify-content-left">
            <div class="card">
                <div class="card-header">
                Proposals
                </div>
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/105938784/original/a73d58c0fd6a58da2549f9899afd62bf1c816faa/design-and-create-aurora-solar-proposal.png" alt="Card image cap">
                      <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Design 1</strong></li>
                        <li class="list-group-item">4.8 kW (27 panels)</li>
                        <li class="list-group-item">$4.3 PPW</li>
                        <li class="list-group-item">Designer: Spencer</li>
                      </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
