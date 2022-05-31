@extends('admin.layout')
@section('title')
{{__('messages.Blog')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Blog')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.Blog')}}</li>
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
                     <a href="{{ URL::to('admin/blogs/create')}}" class="btn btn-primary">{{__('messages.Add').' '.__('messages.Blog')}}</a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>{{__('messages.Id')}}</th>
                           <th>{{__('messages.Title')}}</th>
                           <th>{{__('messages.Description')}}</th>
                           <th>{{__('messages.Image')}}</th>
                           <th>{{__('messages.Action')}}</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(count($data)>0)
                        @foreach($data as $d)
                        <tr>
                           <td>{{isset($d->id)?$d->id:""}}</td>
                           <td>{{isset($d->title)?$d->title:""}}</td>
                           <td>{{ substr($d->short_description, 0,50)}}..</td>
                           <td>
                               <img src="{{ $d->featured_img }}" style="width:50px;height: 50px;" class="imgsize1"/>
                           </td>
                           <td>
                                <a href="{{URL::to('admin/edit-blog') . '/' . $d->slug}}" class="btn btn-primary">{{__('messages.Edit')}}</a>
                                <a href="{{URL::to('admin/view') .'/' . $d->slug}}" class="btn btn-success">{{__('messages.View')}}</a>
                                 <form action="{{ url('admin/delete-blog'.'/' . $d->slug)}}"  novalidate="novalidate"  method="POST"  >{{csrf_field()}}<input type="submit" class="btn btn-danger" value="{{__('messages.Delete')}}" name="Delete"></form>
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