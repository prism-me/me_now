@extends('admin.layout')
@section('title')
{{__('messages.Save Room')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Save Room')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.Save Room')}}</li>
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
                  <form action="{{ URL::to('admin/update-room').'/' . $data->slug}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                     {{csrf_field()}}
                             
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Title')}}
                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="title" placeholder="{{__('messages.Enter').'  '.__('messages.Title')}}" class="form-control" required name="title" value="{{ isset($data->title)?$data->title:''}}">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Short Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="short_description" placeholder="{{__('messages.Enter').'  '.__('messages.Short Description')}}" class="form-control" required name="short_description" value="{{ isset($data->short_description)?$data->short_description:''}}">{{$data->short_description}}</textarea>
                    </div>
                    <div class="form-group">
                       <label for="name" class=" form-control-label">
                       {{__('messages.Description')}}
                       <span class="reqfield">*</span>
                       </label>
                       <textarea id="description" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description" value="{{ isset($data->description)?$data->description:''}}">{{$data->description}}</textarea>
                    </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Addtional Content')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="additional_description" placeholder="{{__('messages.Enter').'  '.__('messages.Addtional Content')}}" class="form-control" required name="additional_content" value="{{ isset($data->additional_content)?$data->additional_content:''}}">{{$data->additional_content}}</textarea>
                     </div>
  
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                           {{__('messages.Icon')}}<span class="reqfield" >*</span>
                        </label>
                        @if($data->icons)
                                 <img src="{{$data->icons}}" class="img-fluid" /> 
                        @endif
                        <input type="file" id="file" name="icons" class="form-control-file" accept="image/*">
                     </div>
                        
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                             {{__('messages.Featured Image')}}<span class="reqfield" >*</span>
                        </label>
                        @if($data->featured_img)
                                 <img src="{{$data->featured_img}}" class="img-fluid" /> 
                        @endif
                            <input type="file" id="file" name="featured_img" class="form-control-file" accept="image/*">
                            
                    <div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                           {{__('messages.Slider Image')}}<span class="reqfield" >*</span>
                           </label>
                        @if($data->slider_images)
                              <img src="{{$data->slider_images}}" class="img-fluid" /> 
                        @endif
                            <input type="file" id="file" name="slider_images[]" class="form-control-file" accept="image/*" multiple>
                            
                    <div>
                     <div class="form-group">
                           <label for="file" class=" form-control-label">  
                             {{__('messages.Addtional Image')}}<span class="reqfield" >*</span>
                            </label>
                           @if($data->additional_images)
                              <img src="{{$data->additional_images}}" class="img-fluid" /> 
                           @endif
                            <input type="file" id="file" name="additional_images[]" class="form-control-file" accept="image/*" multiple>
                            
                    <div>
                    <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Slug')}}
                        </label>
                        <input type="text" id="slug" required placeholder="{{__('messages.Enter').' '.__('messages.Slug')}}"  class="form-control"  name="slug" value="{{ isset($data->slug)?$data->slug:''}}">
                </div>
                     <div class="form-group">
                        @if(Session::get("is_demo")=='1')
                           <button id="payment-button" type="button"  onclick="disablebtn()" class="btn btn-lg btn-info" >
                              {{__('messages.Submit')}}
                              </button>
                        @else
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info" >
                              {{__('messages.Submit')}}
                              </button>
                        @endif
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