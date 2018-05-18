@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
              
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="action/addUser">
                        
                        <div class="col-md-12">
                            
                            <div class="col-md-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <button class="form-control btn btn-success" type="submit" >Add </button>                            
                            </div>

                        </div>
                    
                    </form>

                  
                    <div class="col-md-12">
                    
                            <table class="table table-border">
                                <thead>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                </thead>

                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ date_format(($user->created_at),"m/d/Y") }}</td>
                                            <td>{{ date_format(($user->updated_at),"m/d/Y") }}</td>
                                            <td><a class="btn btn-danger" type="button" href="action/deleteUser/{{ $user->email }}">Delete</button></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>

                            </table>
                    
                    </div> 
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
