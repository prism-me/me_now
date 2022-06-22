@extends('admin.layout')
@section('title')
{{__('messages.Room')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Room')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.Room')}}</li>
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
                     <a href="add-room" class="btn btn-primary">{{__('messages.Add').' '.__('messages.Room')}}</a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Title')}}</th>
                           <th>{{__('messages.Description')}}</th>
                           <th>{{__('messages.Icon')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($data)>0)
                        @foreach($data as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           <td>{{isset($d->title)?$d->title:""}}</td>
                           <td>{{ substr($d->excerpt, 0,50)}}..</td>
                           <td><img src="{{ $d->icons }}" class="img-fluid"></td>
                           
                           <td>
                              <div class="group">
                                <a href="edit-room/{{  $d->slug }}" > <i class='fa fa-pencil fa-lg' aria-hidden="true"> </i> </a>
                              </div>
                              <div class="group">
                                <form action="/{{Session::get('locale')}}/admin/delete-room/{{  $d->slug }}"  novalidate="novalidate"  method="POST"  > 
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