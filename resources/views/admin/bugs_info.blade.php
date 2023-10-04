@extends('admin.main-layout')

@section('content-header')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bug Tracking Tool | Bug Information</h1>
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
    

  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

  <h3> <b> 1) Bug For : </b>  

    <span class="badge badge-info"> {{$bug->project->name}} </span>

  </h3> <br/> 


  <h3> <b> 2) Bug ID : </b>  

    <span class="badge badge-info"> {{$bug->id}} </span>
    
  </h3> <br/>

  
  <h3> <b> 3) Bug Status : </b>  

    @if($bug->status == 1)
      <span class="badge badge-pill badge-danger"> Bug is Open </span>
    @else
      <span class="badge badge-pill badge-success"> Bug is Closed </span>
   @endif  

  </h3> <br/>
  

  <h3> <b> 4) Bug Created By : </b>  

    <span class="badge badge-warning"> {{$bug->created_by}} </span>

  </h3> <br/>
  

  <h3> <b> 5) Bug Assigned To : </b>  

    <span class="badge badge-warning"> {{$bug->users()->pluck('name')->implode( ', ')}} </span>
    
  </h3> <br/>

 
  <h3> <b> 6) Bug Created On : </b>  

    <span class="badge badge-primary"> {{$bug->created_at}} </span>  

  </h3> <br/>
  

  <h3> <b> 7) Bug Description : </b>  

    <span class="badge badge-dark"> {{$bug->description}} </span>    

  </h3> <br/>
  

  <h3> <b> 8) Bug Attachments : </b>    



  </h3> <br/>

          </div>
        </div>
      </div>
    </div>
  




      
    

@endsection

@section('body')
