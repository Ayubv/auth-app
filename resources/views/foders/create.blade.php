<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('backend/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="w-20">
                            <h2>Create foder</h2>
                        </div>
                        <div>
                        <a href="{{url('/foders/index')}}">Show All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/foders/store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Foder Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sell">Foder sell</label>
                                <input type="text" name="sell" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="eat">Foder eat</label>
                                <input type="text" name="eat" class="form-control">
                              {{--</div>
                           @foreach ($foders as $fod )
                            <div class="form-group">
                                {{-- <label for="user_id">User Id</label> --}}
                            {{-- <input type="hidden" name="user_id" class="form-control" value="{{$fod->id}}"> 
                        </div>
                            @endforeach --}}
                            <div class="form-group">
                                <label for="user_id">Select user</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                               
                               <button type="submit" class="btn btn-danger">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



   <script src="{{url('backend/js/boostrap.min.js')}}"></script> 
</body>
</html>