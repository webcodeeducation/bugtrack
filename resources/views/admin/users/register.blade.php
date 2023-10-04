@extends('admin.main-layout')

@section('content-header')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buck Tracking Tool | User Management </h1>
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
        <hr>


         <div class="navbar navbar-dark bg-primary rounded text-center"> Create New User </div>
    
         
          <hr>
          


          <form action="{{url('/')}}/admin/users/register" method="post">

    @csrf


    <div class="container">

    
        <div class="form-group">
            <label for="">Name</label>

            <input type="text" name="name" id="" class="form-control" >
        
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" >
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        
            
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" >
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        
            
        </div>

    

        
     
        <button class="btn btn-primary">
            Submit
            
        </button>
    </div>
  </form>




        </div>
        <!-- /.row (main row) -->

@endsection

  



