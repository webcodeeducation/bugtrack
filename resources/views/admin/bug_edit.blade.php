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
        <hr>


         <div class="navbar navbar-dark bg-primary rounded text-center"> Edit Your Bug </div>


          <hr>


          <form action="{{$url}}" method="post">

    @csrf


    <div class="container">

        <div class="form-group">
            <label for="">Select Project</label>
            <select id="project" name="project"  class="js-states form-control" >
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ $project->id == $bug->project->id  ? 'selected' : ''}} > {{ $project->name }}</option>
                @endforeach
            </select>
            {{-- <input type="text" name="assigned_to" id="" class="form-control" > --}}
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>

        <div class="form-group">
            <label for="">Assigned To</label>
            <select id="members" name="members[]"  class="js-states form-control" multiple>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ in_array($user->id,$bug->users()->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
            {{-- <input type="text" name="assigned_to" id="" class="form-control" value="{{$bug->assigned_to}}" > --}}
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>



        <div class="form-group">
            <label for="">Bug Status</label>
            <select class="form-control" name="status">
            <option value="1" {{ $bug->status == 1 ? 'selected' : '' }} >Open</option>
            <option value="0" {{ $bug->status == 0 ? 'selected' : '' }}>Closed</option>
            </select> 
            <!-- <small id="helpId" class="text-muted">Help text</small> -->


        </div>

        <div class="form-group">
            <label for="">Bug Description</label>

            <textarea name="description" id="" class="form-control" value="{{$project->description}}" rows="5">
                
            </textarea>

        </div>

            <input type="hidden" name="created_by" id="" class="form-control" value={{auth()->user()->name}}>

        

        





        <button class="btn btn-primary">
            Submit

        </button>
    </div>
  </form>




        </div>
        <!-- /.row (main row) -->

@endsection





