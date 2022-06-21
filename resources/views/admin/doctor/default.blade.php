@extends('admin.layout')
<style>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>

</style>
@section('title')
{{__('messages.Doctors')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Doctors')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.Doctors')}}</li>
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
                     <a href="savedoctor/0/1" class="btn btn-primary">{{__('messages.Add').' '.__('messages.Doctors')}}</a>
               
                  
                     </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Image')}}</th>
                           <th>{{__('messages.Department')}}</th>
                           <th>{{__('messages.Name')}}</th>
                           <th>{{__('messages.Email')}}</th>
                           <th>{{__('messages.Phone No')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($data)>0)
                        @foreach($data as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           <td>
                                <img src="{{ $d->image}}" class="imgList"/>
                           </td>
                           <td>{{$d->department->name}}</td>
                           <td>{{$d->name}}</td>
                           <td>{{$d->email}}</td>
                           <td>{{$d->phone_no}}</td>
                           <td>
                              <div class="group">

                                <a href="savedoctor/{{ $d->id . '/1' }}"> <i class='fa fa-pencil fa-lg' aria-hidden="true"> </i> </a>
                              </div>
                              <div class="group">
                                <form action="deletedoctor/{{  $d->id }}"  novalidate="novalidate"  method="POST"  > 
                                {{csrf_field()}}
                                 <button class='btn btn-default' type='submit' value='submit'>
                                   <i class='fa fa-trash fa-lg'></i>
                                 </button>
                                </form>
                              </div>
                             
                           </td>
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
