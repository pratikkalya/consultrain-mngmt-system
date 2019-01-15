@extends('layouts.app')
  
@section('content')

<form  action="{{route('projectmanagementamc.store',['id'=> $projectmanagement->id])}}" method="POST">
   @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul>
      </div>
   @endif
   {{csrf_field()}}

    <div class="col-sm-12">
     <div class="row">
         <div class="col-sm-6">
             <label class="form-group">Customer Name</label>
             <input type="text" name="customer_id" class="form-control" value="{{ $projectmanagement->customer->cust_name }}" readonly>
         </div>
         <div class="col-sm-6">
             <label class="form-group">Order No.</label>
             <input type="text" name="order_no" class="form-control" value="{{ $projectmanagement->order_no }}" readonly>
         </div>
      </div>
   </div>
            
    </div><br><br>

      <div class="panel panel-primary">
           <div class="panel-heading"> 
              <h4 class="panel-title"> 
              <b> AMC ORDERS</b>
              </a>
             </h4>
           </div>
           <!-- panel body -->
           <!-- <div id="accordionOne" class="panel-collapse collapse in"> -->
              <div class="panel-body">
                  <div class = "col-sm-12">
                      <div class ="row">
                          <div class= "col-sm-4">
                              <label for="purchase_order">Purchase Order</label>
                              <input type="text" class="form-control" id="purchase_order" name="purchase_order" value="{{ $amc->purchase_order}}" required>
                           </div>

                           <div class= "col-sm-4">
                              <label for="project_cost">Project Cost</label>
                              <input type="text" class="form-control" id="project_cost" name="project_cost" value="{{ $amc->project_cost}}">
                           </div>

                            <div class= "col-sm-4">
                              <label for="period">Period</label>
                              <input type="text" class="form-control" id="period" name="period"
                              value="{{$amc->project_cost}}">
                           </div>
                      </div>

                      <div class ="row">
                          <div class= "col-sm-4">
                             <label for="start_plnd_dt">Start Planned Date:</label>
                             <input type="date" class="form-control" id="start_plnd_dt" name="start_plnd_dt" value="{{ $amc->start_plnd_dt}}">
                         </div>

                         <div class= "col-sm-4">
                              <label for="start_actual_dt">Start Actual Date:</label>
                              <input type="date" class="form-control" id="start_actual_dt"  name="start_actual_dt" 
                              value="{{ $amc->start_actual_dt}}">
                          </div>
                      </div>

                       <div class ="row">
                          <div class= "col-sm-4">
                             <label for="visit1_dt">Visit One</label>
                             <input type="date" class="form-control" id="visit1_dt" name="visit1_dt"  value="{{ $amc->visit1_dt}}"> 
                         </div>

                         <div class= "col-sm-4">
                              <label for="payment_1">Payment</label>
                              <input type="date" class="form-control" id="payment_1"  name="payment_1" value="{{ $amc->payment_1}}">
                          </div>
                      </div>
                      
                      <div class ="row">
                          <div class= "col-sm-4">
                             <label for="visit2_dt">Visit Two</label>
                             <input type="date" class="form-control" id="visit2_dt" name="visit2_dt" value="{{ $amc->visit2_dt}}">
                         </div>

                         <div class= "col-sm-4">
                              <label for="payment_2">Payment</label>
                              <input type="date" class="form-control" id="payment_2"  name="payment_2" value="{{ $amc->payment_2}}">
                          </div>
                      </div>

                        <div class ="row">
                          <div class= "col-sm-4">
                             <label for="visit3_dt">Visit Three</label>
                             <input type="date" class="form-control" id="visit3_dt" name="visit3_dt" value="{{ $amc->visit3_dt}}">
                         </div>

                         <div class= "col-sm-4">
                              <label for="payment_3">Payment</label>
                              <input type="date" class="form-control" id="payment_3"  name="payment_3" value="{{ $amc->payment_3}}">
                          </div>
                      </div>
                      <div class ="row">
                          <div class= "col-sm-4">
                             <label for="visit4_dt">Visit Four</label>
                             <input type="date" class="form-control" id="visit4_dt" name="visit4_dt" value="{{ $amc->visit4_dt}}">
                         </div>

                         <div class= "col-sm-4">
                              <label for="payment_4">Payment</label>
                              <input type="date" class="form-control" id="payment_4"  name="payment_4" value="{{ $amc->payment_4}}">
                          </div>
                      </div>
                  </div>
              </div>
          <!-- </div> -->
      </div>
   </div>
   <div class="row">
      <div class="col-sm-4">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
</form>

@endsection

