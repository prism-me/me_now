@extends('admin.layout')
@section('title')
{{__('messages.Department Service')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Department Service')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/department')}}">{{__('messages.Department')}}</a></li>
               <li class="active">{{__('messages.Department Service')}}</li>
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
                  <div>
                     <a href="{{url('admin/savedepartmentservice/').'/'.$department_id.'/0'}}" class="btn btn-primary">{{__('messages.Add').' '.__('messages.Department Service')}}s</a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>{{__('messages.Description')}}</th>
                           <th>{{__('messages.Icon')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data as $d)
                        <tr>
                           <td>{{$d->id}}</td>
                           <td>{{$d->name}}</td>
                           <td>
                               <img src="{{ $d->img }}" class="imgList" style="width:50px;height:50px;"/>
                           </td>
                           <td>{{ substr($d->short_description,0,50)}}..</td>
                           <td>
                              <div class="group">
                                <a href="{{url('admin/savedepartmentservice/').'/'.$d->department_id.'/'.$d->id}}" > <i class='fa fa-pencil fa-lg' aria-hidden="true"> </i> </a>
                              </div>
                              <div class="group">
                                <a href="javascript:deleterow('deletedepartmentservice','<?= $d->id ?>')">
                                   <i class='fa fa-trash fa-lg'></i>
                                </a>
                              
                              </div>
                           </td>
                        </tr>
                        @endforeach
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