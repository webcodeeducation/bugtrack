@extends('admin.main-layout')

@section('content-header')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bug Tracking Tool | Bug Management</h1>
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
          <a href="{{url('/admin/bug_report')}}">

            <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block>

                Create New Bug

            </button>
          </a>
      </div>

    <br>

        <table class="table table-bordered" id="dataTable">

            <thead class="thead-dark">
              <tr>
                <th scope="col"> <center> S. No </center> </th>
                <th scope="col"> <center> Project ID </center> </th>
                <th scope="col"> <center> Status </center> </th>
                <th scope="col"> <center> Created By </center> </th>
                <th scope="col"> <center> Assigned To </center> </th>
                <th scope="col"> <center> Date </center> </th>
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
              @foreach($bugs as $bug)
              <tr>

                  <td>  <center> {{$i}} </center> </td>
                  @php
                      $i=$i+1;
                  @endphp

                  <td>  <center> {{$bug->project->name}} </center> </td>

                  <td>  <center>
                    @if($bug->status == 1)
                    <h4> <span class="badge badge-pill badge-danger">Open</span> </h4>
                    @else
                    <h4> <span class="badge badge-pill badge-success">Closed</span> </h4>
                    @endif
                        </center>
                   </td>

                  <td>  <center> {{$bug->created_by}} </center> </td>
                  <td>  <center> {{$bug->users()->pluck('name')->implode( ', ')}} </center> </td>
                  <td>  <center> {{$bug->created_at}} </center> </td>


                  <td>
                    <center>
                    <a href="{{route('bugs.edit', ['id' => $bug->id])}}">
                            <button class="btn btn-success">Edit</button>
                    </a>
                    &nbsp; &nbsp;
                    <a href="{{route('bugs.delete', ['id' => $bug->id])}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    &nbsp; &nbsp;
                    <a href="{{route('bugs.info', ['id' => $bug->id])}}">
                        <button class="btn btn-info">View</button>
                    </a>
                    </center>
                  </td>

              </tr>


              @endforeach



            </table>

@endsection
