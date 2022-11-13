

@extends('layout.master')
@section('content')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Date</th>
                                            <th>Lab No</th>
                                            <th>Price</th>
                                            <th>Doctor</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lab as $labs)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$labs->lab_date}}</td>
                                            <td>{{$labs->lab_no}}</td>
                                            <td>{{$labs->amount}}</td>
                                            <td>{{$labs->doctor->doctor_name}}</td>   
                                            <td>{{$labs->status}}</td>   
                                            <td class="centre">
                                            <a href="{{ route('lab.edit',$labs->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('lab.destroy',$labs->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick=" return confirm('Are You sure you want to logout?');">Delete</button>
                                            </form>
                                            </td>                                                                                        
                                        </tr>
                                         @endforeach                                
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @endsection