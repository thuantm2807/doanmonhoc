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
      <h6 class="m-0 font-weight-bold text-primary">ph2015</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>pso</th>
              <th>NLAP</th>              
              <th>MSKH</th>              
              <th>TKC</th>              
              <th>NgayTT</th>              
              <th>LYDO</th>              
              <th>ctgoc</th>              
              <th>MSCH</th>              
              <th>Thuesuat</th>              
              <th>TGTGT</th>              
              <th>laoihd</th>              
              <th>khhd</th>              
              <th>sohd</th>              
              <th>nphhd</th>              
              <th>hinhthuc</th>              
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
        // serverSide:true,
        ajax:{
          url:"{{ route('datatables_ph2015') }}",
        },
        columns:[
          {data:'pso',name:'pso'},
          {data:'NLAP',name:'NLAP'},                    
          {data:'MSKH',name:'MSKH'},                    
          {data:'TKC',name:'TKC'},                    
          {data:'NgayTT',name:'NgayTT'},                    
          {data:'LYDO',name:'LYDO'},                    
          {data:'ctgoc',name:'ctgoc'},                    
          {data:'MSCH',name:'MSCH'},                    
          {data:'Thuesuat',name:'Thuesuat'},                    
          {data:'TGTGT',name:'TGTGT'},                    
          {data:'loaihd',name:'loaihd'},                    
          {data:'khhd',name:'khhd'},                    
          {data:'sohd',name:'sohd'},                    
          {data:'nphhd',name:'nphhd'},                    
          {data:'hinhthuc',name:'hinhthuc'},                    
        ]

      });        

    });
  </script>
@stop