@extends('layouts.app')

@section('content')
<div class="row" style="padding: 3px 15px;margin:10px">
<h2 style="padding: 2px;">AMC List</h2>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="form-group">
    <input type="text" class="form-control" id="search" name="search" placeholder="Search Here..">
</div>
<table class="table table-bordered" id="table" style="background:white;">
    <thead>
    <tr>
        <th>No</th>
        <th>Order Number</th>
        <th>Customer Name</th>
        <th>Iso Service</th>
        <th width="80px">AMC</th>
    </tr>
    </thead>
    <tbody id="tbody">
    @foreach( $projectmanagements as $projectmanagement)
    <tr>
        <td>{{ ++$i}}</td>
        <td>{{ $projectmanagement->order_no}}</td>
        <td>{{ $projectmanagement->customer->cust_name}}</td>
        <td>{{ $projectmanagement->product->name}}</td>
        <td>
            <a class="btn btn-info" href="{{route('projectmanagementamc.create', ['id'=> $projectmanagement->id])}}">Create</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
{!! $projectmanagements->links() !!}
@endsection

@push('scripts')
<script>
    var order_no = null;
    var cust_name = null;
    var product_name = null;
    var loaded = false;
    
    $(document).ready(function () {
        var searchObject;
        var body = $("#tbody").html();
        // console.log(body);

        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'url': "{{env('ROOT_URL')}}/api/amc/search",
            'dataType': 'json',
            'success': function (data) {
                // console.log(data);
                loaded = true;
                var content = new Array();

                $.each(data.data, function (index, value) {
                    var search_details = new Object();

                    search_details.id = value.id;
                    search_details.order_no = value.order_no;
                    search_details.cust_name = value.customer.cust_name;
                    search_details.product_name = value.product.name;
                    content.push(search_details);
                });
                searchObject = content;
                console.log('fetched');
            }
        });
        $("#search").on('keyup', function () {
            var value = $(this).val();
            // console.log(value);
            if (value) {
                var myExp = new RegExp(value, "i");
                var content = '';
                var counter = 1;
                $.each(searchObject, function (key, val) {
                    // console.log(myExp);

                    if (val.order_no.search(myExp) != -1 || val.cust_name.search(myExp) != -1 || val.product_name.search(myExp) != -1) {
                        // console.log(val);
                        content += '<tr><td>' + counter + '</td><td>' + val.order_no +
                            '</td><td>' + val.cust_name + '</td><td>' + val.product_name + '</td><td><a class="btn btn-info" href="{{env('ROOT_URL')}}/projectmanagement/' +
                            val.id + '/amc/create">Create</a></td></tr>'
                    }
                    counter++;
                });
                $("#tbody").html(content);
            } else {
                console.log(body);
                $("#tbody").html(body);
            }
        });
    });

</script>

@endpush
