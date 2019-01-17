@extends('layouts.app')

@section('content')

<h2 style="padding: 2px;">Project Information</h2>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('projectmanagement.create') }}"> Create New</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="form-group">
    <input type="text" class="form-control" id="search" name="search" placeholder="Search By Name..">
</div>
<table class="table table-bordered" id="table">
    <thead>
    <tr>
        <th>No</th>
        <th>Order Number</th>
        <th>Customer Name</th>
        <th>Project Leader</th>
        <th>Iso Service</th>
        <th>Agency Name</th>
        <th width="80px">Details</th>
    </tr>
    </thead>
    <tbody id= "tbody">
    @foreach($projectmanagements as $projectmanagement)
    <tr>
        <td>{{ ++$i}}</td>
        <td>{{ $projectmanagement->order_no}}</td>
        <td>{{ $projectmanagement->customer->cust_name}}</td>
        <td>{{ $projectmanagement->project_lead}}</td>
        <td>{{ $projectmanagement->product->name}}</td>
        <td>{{ $projectmanagement->agency->agency_name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('projectmanagement.show',['id'=> $projectmanagement->id]) }}">Show</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>



{!! $projectmanagements->links() !!}
@endsection

@push('scripts')
<script>
    var order_no = null;
    var cust_name = null;
    var project_lead = null;
    var product_name = null;
    var agency_name = null;

    var loaded = false;
    $(document).ready(function() {
        var searchObject;
        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'url': "http://127.0.0.1:8000/api/customers/search",
            'dataType': 'json',
            'success': function (data) {
                // console.log(data);
                loaded = true;
                var content = new Array();
                
                $.each(data.data, function(index, value){
                    var search_details = new Object();

                    search_details.id = value.id;
                    search_details.order_no = value.order_no.toLowerCase();
                    search_details.cust_name = value.customer.cust_name.toLowerCase();
                    search_details.project_lead = value.project_lead.toLowerCase();
                    search_details.product_name = value.product.name.toLowerCase();
                    search_details.agency_name = value.agency.agency_name.toLowerCase();
                    content.push(search_details);                    
                });
                
                searchObject = content;
                console.log('fetched');                
            }
        });
        $("#search").on('keyup', function () {
            var value = $(this).val();
            // console.log(value);
            
            var myExp = new RegExp(value, "i");
            var content = '';
            var counter = 1;
                $.each(searchObject, function(key, val) {
                    if (val.order_no.search(myExp) != -1 || val.project_lead.search(myExp) != -1 || val.cust_name.search(myExp) != -1 || val.product_name.search(myExp) != -1 || val.agency_name.search(myExp) != -1) {
                    console.log(val);
                    content += '<tr><td>'+counter+'</td><td>'+val.order_no.toUpperCase()+'</td><td>'+val.cust_name.toUpperCase()+'</td><td>'+val.project_lead.toUpperCase()+'</td><td>'+val.product_name.toUpperCase()+'</td><td>'+val.agency_name.toUpperCase()+'</td><td><a class="btn btn-info" href="http://127.0.0.1:8000/projectmanagement/'+val.id+'">Show</a></td></tr>'
                    }
                    counter++;
                });
                $("#tbody").html(content);

                // $('#update').html(output);
            // }); //get JSON          
        });
    });
    

</script>

@endpush
