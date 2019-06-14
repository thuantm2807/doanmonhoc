@extends('admin.layouts.app')
@section('title',' List')
@section('style')

@stop
@section('content')

<div class="container-fluid">
   <!-- Page Heading -->
   <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"> List</h1>
   </div> -->
   <!-- Content Row -->

   		<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">dmch</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>msch</th>
              <th>tenck</th>
              <th>code</th>
              <th>sdt</th>
              <th>dchi</th>                 
            </tr>
          </thead>  
         {{--  <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>0123456789</td>
              <td>admin@dataeglobal.com</td>
              <td>01/02/1998</td>
              <td>Director</td>
              <td>12/05/2019</td>
              <td>
              	<button type="button" onclick="window.location.href='//edit'" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
              	<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
      		  </td>
            </tr>               
          </tbody> --}}
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
@section('script')


  <script>
    $(document).ready(function(){

      table = $("#dataTable").DataTable({

        processing:true,
        serverSide:true,
        ajax:{
          url:"{{ route('datatables_dmch') }}",
        },
        columns:[
          {data:'msch',name:'msch'},
          {data:'tenck',name:'tenck'},
          {data:'code',name:'code'},
          {data:'sdt',name:'sdt'},
          {data:'dchi',name:'dchi'},             
        ]

      });        

    });
  </script>
@stop