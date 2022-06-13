@extends('admin.layout')
@section('title')
{{__('messages.Save About Us')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Save About Us')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/about')}}">{{__('messages.About Us')}}</a></li>
               <li class="active">{{__('messages.Save About Us')}}</li>
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
                    <form action="{{ URL::to('admin/about') }}" method="POST" novalidate="novalidate"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                             
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Title')}}
                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="title" placeholder="{{__('messages.Enter').'  '.__('messages.Title')}}" class="form-control" required name="title" >
                     </div>
                    <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        {{__('messages.Featured Img')}}<span class="reqfield" >*</span>
                        </label>
                        <input type="file" id="file" name="featured_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description1" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description" ></textarea>
                     </div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        {{__('messages.Icon 1')}}<span class="reqfield" >*</span>
                        </label>
                        <input type="file" id="file" name="icon1" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description1" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description1" ></textarea>
                     </div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        {{__('messages.Icon 2')}}<span class="reqfield" >*</span>
                        </label>
                        <input type="file" id="file" name="icon2" class="form-control-file" accept="image/*">
                    
                     <div>
                        <div class="form-group">
                        <label for="name" class=" form-control-label">
                        {{__('messages.Description')}}
                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description1" placeholder="{{__('messages.Enter').'  '.__('messages.Description')}}" class="form-control" required name="description2" ></textarea>
                     </div>
                     
                     <div class="form-group">
                           <label for="name" class=" form-control-label">
                           {{__('messages.Slug')}}
                           </label>
                           <input type="text" id="slug" required placeholder="{{__('messages.Enter').' '.__('messages.Slug')}}"  class="form-control"  name="slug" >
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