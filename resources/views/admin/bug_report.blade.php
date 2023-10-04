@php
 $current_route = request() -> route() -> getName();
 @endphp
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


         <div class="navbar navbar-dark bg-primary rounded text-center"> Report Your Bug </div>


          <hr>



          <form action="{{url('/')}}/admin/bugs/create" method="post">

    @csrf


    <div class="container">

         <div class="form-group">
            <label for="">Select Project</label>
            <select id="project" name="project"  class="js-states form-control" >
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" >{{ $project->name }}</option>
                @endforeach
            </select>
            {{-- <input type="text" name="assigned_to" id="" class="form-control" > --}}
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>

        <div class="form-group">
            <label for="">Assigned To</label>
            <select id="members" name="members[]"  class="js-states form-control" multiple>
                @foreach ($users as $user)
                    <option class="form-control" value=" {{ $user->id }} " >

                        {{ $user->name }}

                    </option>
                @endforeach
            </select>
            {{-- <input type="text" name="assigned_to" id="" class="form-control" > --}}
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>


        <div class="form-group">
            <label for="">Bug Status</label>
            <select class="form-control" name="status">
            <option value="1">Open</option>
            <option value="0">Closed</option>
            </select>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>

        <div class="form-group">
            <label for="">Bug Description</label>
            <textarea name="description" id="" class="form-control" rows="5">
                
            </textarea>

        </div>

        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Dropzone File Upload
                            </div>

                            <div class="card-body">
                                <form method="POST" action=" {{route('dropzone.store')}}" enctype="multipart/form-data" class="dropzone dz-clickable" id="image-upload">
                                    @csrf
                                    <div>
                                        <h3 class="text-center"> Upload Image </h3>
                                    </div>

                                    <div class="dz-default dz-message">
                                        
                                       <span> Drop Files Here </span> 

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

            <input type="hidden" name="created_by" id="" class="form-control" value={{auth()->user()->name}}>


        

       





        <button class="btn btn-primary">
            Submit

        </button>
    </div>
  </form>




        </div>
        <!-- /.row (main row) -->

@endsection





