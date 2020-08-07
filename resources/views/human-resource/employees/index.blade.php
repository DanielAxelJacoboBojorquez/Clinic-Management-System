@extends('layouts.app')

@section('header')
    <h5>Human Resource / Employee</h5>
@stop

@section('content')
    <h1><i class="far fa-list-alt"></i> <b>Employee List</b></h1>
    <a href="#" class="btn btn-success"><i class="fas fa-user"></i><b>New Employee</b></a>
    <br><br>
    <table class="table table-bordered employee">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee<br>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Created By</th>
                <th>Last Update</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
            </tr>
        </tbody>
    </table>
@stop

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('.employee').DataTable();
    } );
</script>
@stop
