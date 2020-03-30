@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Bearer Name</th>
                    <th>Address</th>
                    <th>Vehicle No.</th>
                    <th>Vehicle Type</th>
                    <th>Route</th>
                    <th>Reason</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($visitor_detail_list as $visitor_detail_val)
                <tr>
                    <td>{{  $visitor_detail_val->visitor_name }}</td>
                    <td>{{  $visitor_detail_val->address }}</td>
                    <td>{{  $visitor_detail_val->vehicle_no }}</td>
                    <td>{{  $visitor_detail_val->vehicle_type }}</td>
                    <td>{{  $visitor_detail_val->travel_route }}</td>
                    <td>{{  $visitor_detail_val->reason }}</td>
                    <td>{{  $visitor_detail_val->departure_date }}</td>
                    <td>{{  $visitor_detail_val->return_date }}</td>
                    <td>{{  $visitor_detail_val->return_date }}</td>
                </tr>
                    @endforeach

                </tbody>
               {{-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </tfoot>--}}
            </table>
        </div>

    </div>
</div>
@endsection
@section('js')


    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection