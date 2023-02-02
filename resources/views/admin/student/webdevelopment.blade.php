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

                        @foreach ($webdevelopments as $webdevelopment)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                                                    
                            <td>{{ $webdevelopment->name }}</td>
                            
                            <td>{{$webdevelopment->email}}</td>
                            <td>{{$webdevelopment->mobile}}</td>
                            <td>{{$webdevelopment->address}}</td>
                            <td>{{$webdevelopment->education}}</td>
                            <td>{{$webdevelopment->payment}}</td>
                            <td>{{$webdevelopment->transaction}}</td>
                            <td>{{$webdevelopment->course}}</td>
                            
                        </tr> 
                            
                        @endforeach
                                                                                                                                                  
                
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



@endsection