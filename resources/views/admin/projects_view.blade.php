@extends('admin.main-layout')

@section('content-header')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bug Tracking Tool | Project Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection

@section('body')

      <div align="right" style="padding-right:20px;">
          <a href="{{url('/admin/project_report')}}" >

            <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block>

                Create New Project

            </button>
          </a>

          </div>
    <br>

        <table class="table table-bordered" id="dataTable">

            <thead class="thead-dark">
              <tr>
                <th scope="col"> <center> S. No </center> </th>
                <th scope="col"> <center> Project Name </center> </th>
                <th scope="col"> <center> Project Description </center> </th>
                <th scope="col"> <center> Start Date </center> </th>
                <th scope="col"> <center> End Date </center> </th>
                <th scope="col"> <center> Members </center> </th>
                <th scope="col"> <center> Status </center> </th>
                <th scope="col"> <center> Action </center> </th>
              </tr>
            </thead>

  <!-- @php
  if(!is_null($message))
    echo $message;
  @endphp -->


  @php
       $i=1;
  @endphp
              @foreach($projects as $project)
              <tr>

                  <td>  <center> {{$i}} </center> </td>
                  @php
                      $i=$i+1;
                  @endphp

                  <td>  <center> {{$project->name}} </center> </td>
                  <td>  <center> {{$project->description}} </center> </td>
                  <td>  <center> {{$project->started}} </center> </td>
                  <td>  <center> {{$project->ended}} </center> </td>
                  <td>  <center> {{$project->users()->pluck('name')->implode( ', ')}} </center> </td>

                  <td>  <center>
                    @if($project->status == 1)
                    <h4> <span class="badge badge-pill badge-success">Active</span> </h4>
                    @else
                    <h4> <span class="badge badge-pill badge-danger">Inactive</span> </h4>
                    @endif
                        </center>
                   </td>

                  <td>
                  <center>
                    <a href="{{route('project.edit', ['id' => $project->id])}}">
                            <button class="btn btn-success">Edit</button>
                    </a>

                    &nbsp; &nbsp;

                    <a href="{{route('project.delete', ['id' => $project->id])}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                  </center>
                  </td>

              </tr>


              @endforeach



            </table>

@endsection
