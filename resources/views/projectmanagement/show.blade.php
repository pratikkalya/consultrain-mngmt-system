@extends('layouts.app')

@section('content')
<div class="row" style="padding: 3px 15px;margin:10px">
    <form action="{{ route('projectmanagement.update', ['id'=> $projectmanagement->id]) }}" method="post">
        {{csrf_field()}}
        <div class="row">
            <input type="hidden" name="_method" value="put">
            <div class="col-sm-4">
                <label class="bmd-label-floating" style="font-size:20px;">Customer Name: {{$projectmanagement->customer->cust_name}}</label>
                <input type="hidden" name="customer_id" value="{{ $projectmanagement->customer->id }}">
            </div>
            <div class="col-sm-4">
                <label class="bmd-label-floating" style="font-size:20px;">Service Name: {{$projectmanagement->product->name}}</label>
                <input type="hidden" name="customer_id" value="{{ $projectmanagement->customer->id }}">
            </div>
            <div class="col-sm-4">
                <label class="bmd-label-floating" style="font-size:20px;">Agency Name: {{$projectmanagement->agency->agency_name}}</label>
                <input type="hidden" name="customer_id" value="{{ $projectmanagement->customer->id }}">
            </div>
        </div>
        <br>
        <div class="panel-group" id="accordion">
            <!-- accordion 1 -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <!-- panel-heading -->
                    <h4 class="panel-title">
                        <!-- title 1 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionOne">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b> PROJECT PLANNING</b>
                        </a>
                    </h4>
                </div>
                <!-- panel body -->
                <div id="accordionOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="project_lead">Project Leader:</label>
                                    <select name="user_id" class="form-control">
                                        <option value="{{ $projectmanagement->user->id }}">{{
                                            $projectmanagement->user->name }}</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="reference">Reference:</label>
                                    <input type="text" class="form-control" id="reference" name="reference" value="{{ $projectmanagement->reference}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="amc">AMC:</label>
                                    <div class="radio">

                                        <label><input type="radio" name="amc" value="yes" @if($projectmanagement->amc
                                            ==
                                            'yes') Checked @endif>Yes</label>
                                        <label><input type="radio" name="amc" value="no" @if($projectmanagement->amc ==
                                            'no') Checked @endif>No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="tender_no">Tender No:</label>
                                    <input type="text" class="form-control" id="tender_no" name="tender_no" value="{{ $projectmanagement->tender_no}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="tender_date">Tender Date:</label>
                                    <input type="date" class="form-control" id="tender_date" name="tender_date" value="{{ $projectmanagement->tender_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="tender_amount">Tender Amount:</label>
                                    <input type="text" class="form-control" id="tender_amount" name="tender_amount"
                                        value="{{ $projectmanagement->tender_amount}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="order_no">Order No:</label>
                                    <input type="text" class="form-control" id="order_no" name="order_no" value="{{ $projectmanagement->order_no}}"
                                        readonly>
                                </div>

                                <div class="col-sm-4">
                                    <label for="order_date">Order Date:</label>
                                    <input type="date" class="form-control" id="order_date" name="order_date" value="{{ $projectmanagement->order_date}}"
                                        readonly>
                                </div>

                                <div class="col-sm-4">
                                    <label for="order_amount">Order Amount:</label>
                                    <input type="text" class="form-control" id="order_amount" name="order_amount" value="{{ $projectmanagement->order_amount}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="start_plnd_dt">Start Planned Date:</label>
                                    <input type="date" class="form-control" id="start_plnd_dt" name="start_plnd_dt"
                                        value="{{ $projectmanagement->start_plnd_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="start_actual_dt">Start Actual Date:</label>
                                    <input type="date" class="form-control" id="start_actual_dt" name="start_actual_dt"
                                        value="{{ $projectmanagement->start_actual_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="gap_assessment">Gap Assessment Date:</label>
                                    <input type="date" class="form-control" id="gap_assessment" name="gap_assessment"
                                        value="{{ $projectmanagement->gap_assessment}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Project Status:</label>
                                    <select class="form-control" name="project_status">
                                        <option value="open" @if($projectmanagement->project_status == 'open') selected
                                            @endif>Open</option>
                                        <option value="close" @if($projectmanagement->project_status == 'close')
                                            selected
                                            @endif>Close</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="panel panel-success">
                <!-- accordion 2 -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- title 2 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionTwo">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b> DOCUMENTATION</b>
                        </a>
                    </h4>
                </div>
                <!-- panel body -->
                <div id="accordionTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="qm_planned_date">QM Planned Date:</label>
                                    <input type="date" class="form-control" id="qm_planned_date" name="qm_planned_date"
                                        value="{{ $documentation->qm_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="qm_actual_date">QM Actual Date:</label>
                                    <input type="date" class="form-control" id="qm_actual_date" name="qm_actual_date"
                                        value="{{ $documentation->qm_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="qm_comment">QM Comment:</label>
                                    <input type="text" class="form-control" id="qm_comment" name="qm_comment" value="{{ $documentation->qm_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="pm_planned_date">PM Planned Date:</label>
                                    <input type="date" class="form-control" id="pm_planned_date" name="pm_planned_date"
                                        value="{{ $documentation->pm_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="pm_actual_date">PM Actual Date:</label>
                                    <input type="date" class="form-control" id="pm_actual_date" name="pm_actual_date"
                                        value="{{ $documentation->pm_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="pm_comment">PM Comment:</label>
                                    <input type="text" class="form-control" id="pm_comment" name="pm_comment" value="{{ $documentation->pm_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="sop_planned_date">SOP Planned Date:</label>
                                    <input type="date" class="form-control" id="sop_planned_date" name="sop_planned_date"
                                        value="{{ $documentation->sop_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="sop_actual_date">SOP Actual Date:</label>
                                    <input type="date" class="form-control" id="sop_actual_date" name="sop_actual_date"
                                        value="{{ $documentation->sop_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="sop_comment">SOP Comment:</label>
                                    <input type="text" class="form-control" id="sop_comment" name="sop_comment" value="{{ $documentation->sop_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="formo_planned_date">Formation Planned Date:</label>
                                    <input type="date" class="form-control" id="formo_planned_date" name="formo_planned_date"
                                        value="{{ $documentation->formo_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="formo_actual_date">Formation Actual Date:</label>
                                    <input type="date" class="form-control" id="formo_actual_date" name="formo_actual_date"
                                        value="{{ $documentation->formo_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="formo_comment">Formation Comment:</label>
                                    <input type="text" class="form-control" id="formo_comment" name="formo_comment"
                                        value="{{ $documentation->formo_comment}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Documentation Status:</label>
                                    <select class="form-control" name="doc_status">
                                        <option value="pending" @if($projectmanagement->documentation->doc_status ==
                                            'pending') selected @endif>Pending</option>
                                        <option value="complete" @if($projectmanagement->documentation->doc_status ==
                                            'complete') selected @endif>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <!-- accordion 3 -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- title 3 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionThree">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b>IMPLEMENTATION</b>
                        </a>
                    </h4>
                </div>
                <div id="accordionThree" class="panel-collapse collapse">
                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="traning_planned_date">Training Planned Date:</label>
                                    <input type="date" class="form-control" id="traning_planned_date" name="traning_planned_date"
                                        value="{{ $implementation->traning_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="traning_actual_date">Training Actual Date:</label>
                                    <input type="date" class="form-control" id="traning_actual_date" name="traning_actual_date"
                                        value="{{ $implementation->traning_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="traning_comment">Training Comment:</label>
                                    <input type="text" class="form-control" id="traning_comment" name="traning_comment"
                                        value="{{ $implementation->traning_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="implementation_planned_date">Implementation Planned Date:</label>
                                    <input type="date" class="form-control" id="implementation_planned_date" name="implementation_planned_date"
                                        value="{{ $implementation->implementation_planned_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="implementation_actual_date">Implementation Actual Date:</label>
                                    <input type="date" class="form-control" id="implementation_actual_date" name="implementation_actual_date"
                                        value="{{ $implementation->implementation_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="implementation_comment">Implementation Comment:</label>
                                    <input type="text" class="form-control" id="implementation_comment" name="implementation_comment"
                                        value="{{ $implementation->implementation_comment}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Implimentation Status:</label>
                                    <select class="form-control" name="impl_status">
                                        <option value="pending" @if($projectmanagement->implementation->impl_status ==
                                            'pending') selected @endif>Pending</option>
                                        <option value="complete" @if($projectmanagement->implementation->impl_status ==
                                            'complete') selected @endif>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-warning">
                <!-- accordion 4 -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- title 4 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionFour">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b> AUDIT</b>
                        </a>
                    </h4>
                </div>
                <div id="accordionFour" class="panel-collapse collapse">
                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="int_audit_plnd_date">Internal Audit Planned Date:</label>
                                    <input type="date" class="form-control" id="int_audit_plnd_date" name="int_audit_plnd_date"
                                        value="{{$audit->int_audit_plnd_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="int_audit_actual_date">Internal Audit Actual Date:</label>
                                    <input type="date" class="form-control" id="int_audit_actual_date" name="int_audit_actual_date"
                                        value="{{$audit->int_audit_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="int_audit_comment">Internal Audit Comment:</label>
                                    <input type="text" class="form-control" id="int_audit_comment" name="int_audit_comment"
                                        value="{{$audit->int_audit_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="adequacy_audit_plnd_date">Adequacy Audit Planned Date:</label>
                                    <input type="date" class="form-control" id="adequacy_audit_plnd_date" name="adequacy_audit_plnd_date"
                                        value="{{$audit->adequacy_audit_plnd_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="adequacy_audit_actual_date">Adequacy Audit Actual Date:</label>
                                    <input type="date" class="form-control" id="adequacy_audit_actual_date" name="adequacy_audit_actual_date"
                                        value="{{$audit->adequacy_audit_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="adequacy_audit_comment">Adequacy Audit Comment:</label>
                                    <input type="text" class="form-control" id="adequacy_audit_comment" name="adequacy_audit_comment"
                                        value="{{$audit->adequacy_audit_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="application_plnd_dt">Application Planned Date:</label>
                                    <input type="date" class="form-control" id="application_plnd_dt" name="application_plnd_dt"
                                        value="{{$audit->application_plnd_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="application_actual_dt">Application Actual Date:</label>
                                    <input type="date" class="form-control" id="application_actual_dt" name="application_actual_dt"
                                        value="{{$audit->application_actual_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="application_comment">Application Comment:</label>
                                    <input type="text" class="form-control" id="application_comment" name="application_comment"
                                        value="{{$audit->application_comment}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Audit Status:</label>
                                    <select class="form-control" name="audit_status">
                                        <option value="pending" @if($projectmanagement->audit->audit_status ==
                                            'pending') selected @endif>Pending</option>
                                        <option value="complete" @if($projectmanagement->audit->audit_status ==
                                            'complete') selected @endif>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <!-- accordion 5 -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- title 5 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionFive">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b>ASSESSMENT</b>
                        </a>
                    </h4>
                </div>
                <div id="accordionFive" class="panel-collapse collapse">
                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="pre_assmnt_plnd_date">Pre Assesment Planned Date:</label>
                                    <input type="date" class="form-control" id="pre_assmnt_plnd_date" name="pre_assmnt_plnd_date"
                                        value="{{$assessment->pre_assmnt_plnd_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="pre_assmt_actual_date">Pre Assesment Actual Date:</label>
                                    <input type="date" class="form-control" id="pre_assmt_actual_date" name="pre_assmt_actual_date"
                                        value="{{$assessment->pre_assmt_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="pre_assmt_comment">Pre Assesment Comment:</label>
                                    <input type="text" class="form-control" id="pre_assmt_comment" name="pre_assmt_comment"
                                        value="{{$assessment->pre_assmt_comment}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="final_assmt__plnd_date">Final Assesment Planned Date:</label>
                                    <input type="date" class="form-control" id="final_assmt__plnd_date" name="final_assmt__plnd_date"
                                        value="{{$assessment->final_assmt__plnd_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="final_assmt_actual_date">Final Assesment Actual Date:</label>
                                    <input type="date" class="form-control" id="final_assmt_actual_date" name="final_assmt_actual_date"
                                        value="{{$assessment->final_assmt_actual_date}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="final_assmt_comment">Final Assesment Comment:</label>
                                    <input type="text" class="form-control" id="final_assmt_comment" name="final_assmt_comment"
                                        value="{{$assessment->final_assmt_comment}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Assessment Status:</label>
                                    <select class="form-control" name="assassment_status">
                                        <option value="pending" @if($projectmanagement->assessment->assassment_status
                                            ==
                                            'pending') selected @endif>Pending</option>
                                        <option value="complete" @if($projectmanagement->assessment->assassment_status
                                            ==
                                            'complete') selected @endif>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-danger">
                <!-- accordion 5 -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <!-- title 5 -->
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordionSix">
                            <!-- <i class="more-less glyphicon glyphicon-plus"></i> -->
                            <b>PAYMENT</b>
                        </a>
                    </h4>
                </div>
                <div id="accordionSix" class="panel-collapse collapse">
                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="adv_plnd_dt">Advance Planned Date:</label>
                                    <input type="date" class="form-control" id="adv_plnd_dt" name="adv_plnd_dt" value="{{$payment->adv_plnd_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="adv_act_dt">Advance Actual Date:</label>
                                    <input type="date" class="form-control" id="adv_act_dt" name="adv_act_dt" value="{{$payment->adv_act_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="adv_remark">Advance Remark:</label>
                                    <input type="text" class="form-control" id="adv_remark" name="adv_remark" value="{{$payment->adv_remark}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="first_instal_plnd_dt">1st Installment Planned Date:</label>
                                    <input type="date" class="form-control" id="first_instal_plnd_dt" name="first_instal_plnd_dt"
                                        value="{{$payment->first_instal_plnd_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="first_instal_act_dt">1st Install Actual Date:</label>
                                    <input type="date" class="form-control" id="first_instal_act_dt" name="first_instal_act_dt"
                                        value="{{$payment->first_instal_act_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="first_instal_remark">1st Install Remark:</label>
                                    <input type="text" class="form-control" id="first_instal_remark" name="first_instal_remark"
                                        value="{{$payment->first_instal_remark}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="sec_instal_pl_dt">2nd Installment Planned Date:</label>
                                    <input type="date" class="form-control" id="sec_instal_pl_dt" name="sec_instal_pl_dt"
                                        value="{{$payment->sec_instal_pl_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="sec_instal_act_dt">2nd Install Actual Date:</label>
                                    <input type="date" class="form-control" id="sec_instal_act_dt" name="sec_instal_act_dt"
                                        value="{{$payment->sec_instal_act_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="sec_instal_remark">2nd Install Remark:</label>
                                    <input type="text" class="form-control" id="sec_instal_remark" name="sec_instal_remark"
                                        value="{{$payment->sec_instal_remark}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="third_instal_pl_dt">3rd Installment Planned Date:</label>
                                    <input type="date" class="form-control" id="third_instal_pl_dt" name="third_instal_pl_dt"
                                        value="{{$payment->third_instal_pl_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="third_instal_act_dt">3rd Install Actual Date:</label>
                                    <input type="date" class="form-control" id="third_instal_act_dt" name="third_instal_act_dt"
                                        value="{{$payment->third_instal_act_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="third_instal_remark">3rd Install Remark:</label>
                                    <input type="text" class="form-control" id="third_instal_remark" name="third_instal_remark"
                                        value="{{$payment->third_instal_remark}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="final_pay_pl_dt">Final Pay Planned Date:</label>
                                    <input type="date" class="form-control" id="final_pay_pl_dt" name="final_pay_pl_dt"
                                        value="{{$payment->final_pay_pl_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="final_pay_act_dt">Final Pay Actual Date:</label>
                                    <input type="date" class="form-control" id="final_pay_act_dt" name="final_pay_act_dt"
                                        value="{{$payment->final_pay_act_dt}}">
                                </div>

                                <div class="col-sm-4">
                                    <label for="final_pay_remark">Final Pay Remark:</label>
                                    <input type="text" class="form-control" id="final_pay_remark" name="final_pay_remark"
                                        value="{{$payment->final_pay_remark}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="value">Payment Status:</label>
                                    <select class="form-control" name="payment_status">
                                        <option value="pending" @if($projectmanagement->payment->payment_status ==
                                            'pending') selected @endif>Pending</option>
                                        <option value="complete" @if($projectmanagement->payment->payment_status ==
                                            'complete') selected @endif>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    jQuery(function ($) {
        var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
        $active.find('a').prepend('<i class="glyphicon glyphicon-minus"></i>');
        $('#accordion .panel-heading').not($active).find('a').prepend(
            '<i class="glyphicon glyphicon-plus"></i>');
        $('#accordion').on('show.bs.collapse', function (e) {
            $('#accordion .panel-heading.active').removeClass('active').find('.glyphicon').toggleClass(
                'glyphicon-plus glyphicon-minus');
            $(e.target).prev().addClass('active').find('.glyphicon').toggleClass(
                'glyphicon-plus glyphicon-minus');
        })
    });

</script>

@endpush
