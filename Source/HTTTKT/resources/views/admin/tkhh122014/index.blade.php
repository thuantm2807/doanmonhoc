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
      <h6 class="m-0 font-weight-bold text-primary">tkhh122014</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>msch</th>
              <th>mshh</th>              
              <th>slbbtd</th>              
              <th>sltd</th>              
              <th>sttd</th>              
              <th>slbbn</th>              
              <th>sln</th>  
              <th>stn</th>  
              <th>slbbx</th>  
              <th>slx</th>  
              <th>stx</th>  
              <th>slbbtc</th>  
              <th>sltc</th>  
              <th>sttc</th>  
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
          url:"{{ route('datatables_tkhh122014') }}",
        },
        columns:[
          {data:'msch',name:'msch'},
          {data:'mshh',name:'mshh'},                    
          {data:'slbbtd',name:'slbbtd'},                    
          {data:'sltd',name:'sltd'},                    
          {data:'sttd',name:'sttd'},                    
          {data:'slbbn',name:'slbbn'},                    
          {data:'sln',name:'sln'},                   
          {data:'stn',name:'stn'},                   
          {data:'slbbx',name:'slbbx'},                   
          {data:'slx',name:'slx'},                   
          {data:'stx',name:'stx'},                   
          {data:'slbbtc',name:'slbbtc'},                   
          {data:'sltc',name:'sltc'},                   
          {data:'sttc',name:'sttc'},                   
                        
        ]

      });        

    });
  </script>
@stop