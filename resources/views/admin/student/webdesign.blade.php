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

                        @foreach ($webdesigns as $webdesign)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                                                    
                            <td>{{ $webdesign->name }}</td>
                            
                            <td>{{$webdesign->email}}</td>
                            <td>{{$webdesign->mobile}}</td>
                            <td>{{$webdesign->address}}</td>
                            <td>{{$webdesign->education}}</td>
                            <td>{{$webdesign->payment}}</td>
                            <td>{{$webdesign->transaction}}</td>
                            <td>{{$webdesign->course}}</td>
                            
                        </tr> 
                            
                        @endforeach
                                                                                                                                                  
                
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



@endsection