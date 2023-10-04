@extends('admin.main-layout')

@section('content-header')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bug Tracking Tool | User Management </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection

@section('body')

        <!-- Main row -->
 
          
           <div align="right" style="padding-right:20px;">
          <a href="{{url('/admin/users/register')}}">
             <button class="btn btn-success">Create New User </button> 
         
          </a>
        </div>


          <br>
          <table class="table table-bordered" id="dataTable">
            
          <thead class="thead-dark">
            <tr>
              <th scope="col"> <center> S. No </center> </th>
              <th scope="col"> <center> Name </center> </th>
              <th scope="col"> <center> Email </center> </th>
              <th scope="col"> <center> Admin User </center> </th>
              <th scope="col"> <center> Action </center> </th>
            </tr>
          </thead>
           

            @foreach($users as $user)
            <tr>
                <td> <center> {{$user->id}} </center> </td>
                <td> <center> {{$user->name}} </center> </td>
                <td> <center> {{$user->email}} </center> </td>  
                <td> <center> @if($user->is_admin == 1)
                 <h4> <span class="badge badge-pill badge-success">Yes</span> </h4>

                  @else
                 <h4> <span class="badge badge-pill badge-danger">No</span> </h4>
                  @endif


                   </center> </td>

                <td>
                <center>
                <a href="{{route('user.edit', ['id' => $user->id])}}">
                        <button class="btn btn-success">Edit</button>
                </a>

                &nbsp;&nbsp;
                <a href="{{route('user.delete', ['id' => $user->id])}}">
                    <button class="btn btn-danger">Delete</button>
                </a>
                </center>
                </td>

            </tr>

            @endforeach

            

          </table>
         




        </div>
        <!-- /.row (main row) -->

@endsection