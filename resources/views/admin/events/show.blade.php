@extends('admin.layout')
@section('title')
{{__('messages.Save Event')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Save Event')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/events')}}">{{__('messages.Event')}}</a></li>
               <li class="active">{{__('messages.Save Event')}}</li>
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
                        {{__('messages.Name')}}
                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="name" placeholder="{{__('messages.Enter').'  '.__('messages.Name')}}" class="form-control" required name="name" value="{{ isset($data->name)?$data->name:''}}">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Short Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="short_description" placeholder="{{__('messages.Enter').'  '.__('messages.Short Description')}}" class="form-control" required name="short_description" value="">{{ $data->short_description }}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description" value="">{{ $data->description }}</textarea>
                     </div>
                     <div class="form-group">
                        
                        <label for="file" class=" form-control-label">  
                           <img src="{{ isset($data->banner_img)?$data->banner_img:''}}" class="imgsize1 departmentimg" style="width:50px;height:50px;"/> 
                        {{__('messages.Banner Image')}}<span class="reqfield" >*</span>

                        </label>
                        <input type="file" id="file" name="banner_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        <img src="{{ isset($data->thumbnail_img)?$data->thumbnail_img:''}}" class="imgsize1 departmentimg" style="width:50px;height:50px;"/> 

                        {{__('messages.Thumbnail Image')}}<span class="reqfield" >*</span>
                        </label>
                        <input type="file" id="file" name="thumbnail_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                           <label for="name" class=" form-control-label">
                           {{__('messages.Slug')}}
                           </label>
                           <input type="text" id="slug" required placeholder="{{__('messages.Enter').' '.__('messages.Slug')}}"  class="form-control"  name="slug" value="{{ isset($data->slug)?$data->slug:''}}">
                     </div>
                     
                       
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop