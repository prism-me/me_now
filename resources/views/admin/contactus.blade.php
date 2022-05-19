@extends('admin.layout')
@section('title')
 {{__("messages.Contact Us")}}
@stop
@section('content')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{__("messages.Contact Us")}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">{{__("messages.Contact Us")}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">                         
                            <div class="card-body"> 
                              @if(Session::get("message"))
                                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                     {{Session::get("message")}}
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                     </button>
                                  </div>
                              @endif 
                            	<div class="table-responsive">
                                   <table id="service" class="table  table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{__('messages.Id')}}</th>
                                            <th>{{__('messages.Name')}}</th>
                                            <th>{{__("messages.Email")}}</th>
                                            <th>{{__("messages.Topic")}}</th>
                                            <th>{{__("messages.Phone No")}}</th>
                                            <th>{{__('messages.Message')}}</th>
                                            <th>{{__('messages.Action')}}</th>
                                        </tr>
                                    </thead> 
                                    <tbody>  
                                @if(count($data)>0)
                                    	@foreach($data as $d)
                                    	    <tr>
                                                 <td>{{isset($d->id)?$d->id:""}}</td>
                                                 <td>{{isset($d->name)?$d->name:""}}</td>
                                                 <td>{{isset($d->email)?$d->email:""}}</td>
                                                 <td>{{isset($d->topic)?$d->topic:""}}</td>
                                                 <td>{{isset($d->phone)?$d->phone:""}}</td>
                                                 <td>{{isset($d->message)?$d->message:""}}</td>
                                                 <td><a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$d->email}}&su={{$d->topic}}&body={{$d->message}}" rel='tooltip' target='blank'><i class="fa fa-envelope"></i></a></td>
                                        </tr>
                                    	@endforeach
                                  @endif
                                    </tbody>                                  
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop