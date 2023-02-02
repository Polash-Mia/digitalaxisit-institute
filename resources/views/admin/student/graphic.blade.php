@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Default Datatable</h4>
                

                {{-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> --}}
                <table id="datatable" class="table table-bordered  " >
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Student Name</th>
                        <th>Email </th>
                        <th>Mobile</th>
                        
                        <th>Address </th>
                        <th> Education</th>
                        <th>Payment Number</th>
                        <th>Transaction</th>
                        <th>Course</th>
                        
                        
                    </tr>
                    </thead>


                    <tbody>

                        @foreach ($graphics as $graphic)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                                                    
                            <td>{{ $graphic->name }}</td>
                            
                            <td>{{$graphic->email}}</td>
                            <td>{{$graphic->mobile}}</td>
                            <td>{{$graphic->address}}</td>
                            <td>{{$graphic->education}}</td>
                            <td>{{$graphic->payment}}</td>
                            <td>{{$graphic->transaction}}</td>
                            <td>{{$graphic->course}}</td>
                            
                        </tr> 
                            
                        @endforeach
                                                                                                                                                  
                
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



@endsection