@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="w-20">
                        <h2>This is foder</h2>
                    </div>
                    <div>
                        <a href="{{url('/foders/create')}}">Add foders</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Foders Name</th>
                                <th>Foders Sell</th>
                                <th>Foders eat</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($foder as $fod)
                            <tr>
                              
                                <td>{{$fod->name}}</td>
                                <td>{{$fod->sell}}</td>
                                <td>{{$fod->eat}}</td>
                               

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