@extends('layouts.app')

@section('content')

<h2 style="padding: 2px;">AMC Order List</h2>

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
            <th>Iso Service</th>
            <th>AMC Purchase Order</th>
            <th width="80px">Details</th>
        </tr>
    </thead>
    <tbody id="tbody">
        @foreach( $amcs as $amc)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $amc->projectManagement->order_no}}</td>
            <td>{{ $amc->projectManagement->customer->cust_name}}</td>
            <td>{{ $amc->projectManagement->product->name}}</td>
            <td>{{$amc->purchase_ordr}}</td>
            <td>
                <a class="btn btn-info" href="{{route('projectmanagementamc.show', ['id'=> $amc->id])}}">Details</a>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>
{!! $amcs->links() !!}
@endsection

@push('scripts')
<script>
    var order_no = null;
    var cust_name = null;
    var product_name = null;
    var purchase_ordr = null;
    var loaded = false;
    
    $(document).ready(function () {
        var searchObject;
        var body = $("#tbody").html();
        // console.log(body);

        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'url': "http://127.0.0.1:8000/api/amc/order/search",
            'dataType': 'json',
            'success': function (data) {
                console.log(data);
                loaded = true;
                var content = new Array();

                $.each(data.data, function (index, value) {
                    var search_details = new Object();

                    search_details.id = value.id;
                    search_details.order_no = value.projectManagement.order_no;
                    search_details.cust_name = value.projectManagement.customer.cust_name;
                    search_details.product_name = value.projectManagement.product.name;
                    search_details.purchase_ordr = value.purchase_ordr;

                    content.push(search_details);
                });
                searchObject = content;
                console.log(content);
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
                            '</td><td>' + val.cust_name + '</td><td>' + val.product_name + '</td><td><a class="btn btn-info" href="http://127.0.0.1:8000/projectmanagement/' +
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
