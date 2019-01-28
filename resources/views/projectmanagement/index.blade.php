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
<br><br>
@if(Auth::user()->user_type == 'admin')
<div class="form-group">
    <input type="text" class="form-control" id="search" name="search" placeholder="Search By Name..">
</div>
@endif
<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>Order Number</th>
            <th>Customer Name</th>
            <th>Project Leader</th>
            <th>ISO Service</th>
            <th>Agency Name</th>
            <th>Project Status</th>
            <th>Documentation Status</th>
            <th>Implimentation Status</th>
            <th>Audit Status</th>
            <th>Assessment Status</th>
            <th>Payment Status</th>
            <th width="80px">Details</th>
        </tr>
    </thead>
    <tbody id="tbody">
        @foreach($projectmanagements as $projectmanagement)
        <tr>
            <td>{{ $projectmanagement->order_no}}</td>
            <td>{{ $projectmanagement->customer->cust_name}}</td>
            <td>{{ $projectmanagement->user->name}}</td>
            <td>{{ $projectmanagement->product->name}}</td>
            <td>{{ $projectmanagement->agency->agency_name }}</td>
            <td>
            @if($projectmanagement->project_status == 'open')
            <p style="color:blue;">Open</p>
            @elseif($projectmanagement->project_status == 'close')
            <p style="color:green;">Close</p>
            @endif
            </td>
            <td>
            @if($projectmanagement->documentation->doc_status == 'pending')
            <p style="color:red;">Pending</p>
            @elseif($projectmanagement->documentation->doc_status == 'complete')
            <p style="color:green;">Complete</p>
            @endif
            </td>
            <td>
            @if($projectmanagement->implementation->impl_status == 'pending')
            <p style="color:red;">Pending</p>
            @elseif($projectmanagement->implementation->impl_status == 'complete')
            <p style="color:green;">Complete</p>
            @endif
            </td>
            <td>
            @if($projectmanagement->audit->audit_status == 'pending')
            <p style="color:red;">Pending</p>
            @elseif($projectmanagement->audit->audit_status == 'complete')
            <p style="color:green;">Complete</p>
            @endif
            </td>
            <td>
            @if($projectmanagement->assessment->assassment_status == 'pending')
            <p style="color:red;">Pending</p>
            @elseif($projectmanagement->assessment->assassment_status == 'complete')
            <p style="color:green;">Complete</p>
            @endif
            </td>
            <td>
            @if($projectmanagement->payment->payment_status == 'pending')
            <p style="color:red;">Pending</p>
            @elseif($projectmanagement->payment->payment_status == 'complete')
            <p style="color:green;">Complete</p>
            @endif
            </td>
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
    $(document).ready(function () {
        var searchObject;
        var body = $("#tbody").html();
        // console.log(body);

        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'url': "{{env('ROOT_URL')}}/api/customers/search",
            'dataType': 'json',
            'success': function (data) {
                console.log(data);
                loaded = true;
                var content = new Array();

                $.each(data.data, function (index, value) {
                    var search_details = new Object();

                    search_details.id = value.id;
                    search_details.order_no = value.order_no;
                    search_details.cust_name = value.customer.cust_name;
                    search_details.project_lead = value.user.name;
                    search_details.product_name = value.product.name;
                    search_details.agency_name = value.agency.agency_name;
                    search_details.project_status = value.project_status;
                    search_details.doc_status = value.documentation.doc_status;
                    search_details.impl_status = value.implementation.impl_status;
                    search_details.audit_status = value.audit.audit_status;
                    search_details.assessment_status = value.assessment.assassment_status;
                    search_details.payment_status = value.payment.payment_status;
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

                    if (val.order_no.search(myExp) != -1 || val.project_lead.search(myExp) != -
                        1 || val.cust_name.search(myExp) != -1 || val.product_name.search(myExp) !=
                        -1 || val.agency_name.search(myExp) != -1 || val.project_status.search(myExp) != -1 || val.doc_status.search(myExp) != -1 || val.impl_status.search(myExp) != -1 || val.audit_status.search(myExp) != -1 || val.assessment_status.search(myExp) != -1 || val.payment_status.search(myExp) != -1) {
                        console.log(val);
                        content += '<tr><td>' + val.order_no +
                            '</td><td>' + val.cust_name + '</td><td>' + val.project_lead +
                            '</td><td>' + val.product_name + '</td><td>' + val.agency_name +
                            '</td><td>' + val.project_status + '</td><td>' + val.doc_status + '</td><td>' + val.impl_status + '</td><td>' + val.audit_status + '</td><td>' + val.assessment_status + '</td><td>' + val.payment_status + '</td><td><a class="btn btn-info" href="{{env('ROOT_URL')}}/projectmanagement/' +
                            val.id + '">Show</a></td></tr>'
                    }
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
