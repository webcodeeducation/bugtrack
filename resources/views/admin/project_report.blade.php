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


         <div class="navbar navbar-dark bg-primary rounded text-center"> Add Your Project </div>


          <hr>
          <form action="{{url('/')}}/admin/projects/create" method="post">

    @csrf

    <div class="container">

        <div class="form-group">
            <label for="">Project Name</label>
            <input type="text" name="name" id="" class="form-control" >

        </div>

        <div class="form-group">
            <label for="">Project Description</label>

            <textarea name="description" id="" class="form-control" rows="5">
                
            </textarea>

        </div>

        <div class="form-group">
            <label for="">Project Start Date</label>
            <input type="date" name="started" id="" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Project End Date</label>
            <input type="date" name="ended" id="" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Members</label>
            <select id="members" name="members[]"  class="js-states form-control" multiple>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                @endforeach
            </select>
            {{-- <input type="text" name="members" id="" class="form-control" >  --}}

        </div>

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>

        </div>



        <button class="btn btn-primary">
            Submit

        </button>
    </div>
  </form>

        </div>
        <!-- /.row (main row) -->

@endsection





