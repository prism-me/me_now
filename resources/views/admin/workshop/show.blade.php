@extends('admin.layout')
@section('title')
{{__('messages.Save Workshop')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Save Workshop')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/workshops')}}">{{__('messages.Workshop')}}</a></li>
               <li class="active">{{__('messages.Save Workshop')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-9">
            <div class="card">
               <div class="card-body">
                  @if(Session::has('message'))
                  <div class="col-sm-12">
                     <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif                              
                    
                             
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Title')}}
                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="title" placeholder="{{__('messages.Enter').'  '.__('messages.Title')}}" class="form-control" required name="title" value="{{ isset($data->title)?$data->title:''}}">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Event Type')}}
                        <span class="reqfield">*</span>
                        </label>
                        <select id="title" placeholder="{{__('messages.Enter').'  '.__('messages.Title')}}" class="form-control" required name="event_type" value="{{ isset($data->event_type)?$data->event_type:''}}">
                           <option value="lorem">Lorem</option>
                           <option value="ipsum">Ipsum</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Short Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description" placeholder="{{__('messages.Enter').'  '.__('messages.Short Description')}}" class="form-control" required name="short_description" value="{{ isset($data->short_description)?$data->short_description:''}}">{{ isset($data->short_description)?$data->short_description:''}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="short_description" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description" value="{{ isset($data->description)?$data->description:''}}">{{ isset($data->description)?$data->description:''}}</textarea>
                     </div>
                     <div class="form-group">
                           <label for="name" class=" form-control-label">
                           {{__('messages.Slug')}}
                           </label>
                           <input type="text" id="slug" required placeholder="{{__('messages.Enter').' '.__('messages.Slug')}}"  class="form-control"  name="slug" value="{{ isset($data->slug)?$data->slug:''}}">
                        </div>
                     
                     
                     <div class="form-group">
                         <label for="name" class=" form-control-label">
                              {{__('messages.Start Date')}}
                        </label>
                        <input id="start_date" name="event_date" type="text" class="form-control" required value="<?= isset($event_date)&&$event_date!=0?$event_date:""?>">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Price')}}
                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="price" placeholder="{{__('messages.Enter').'  '.__('messages.Price')}}" class="form-control" required name="price" value="{{ isset($data->price)?$data->price:''}}">
                     </div>
                    
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        {{__('messages.Image')}}<span class="reqfield" >*</span>
                        </label>
                           <input type="file" id="file" name="featured_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     
                       
                     </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop