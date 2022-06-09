@extends('admin.layout')
@section('title')
{{__('messages.Save Doctor')}}
@stop
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.Save Doctor')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/doctor')}}">{{__('messages.Doctors')}}</a></li>
               <li class="active">{{__('messages.Save Doctor')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-10">
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
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif  
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        {{__('messages.Basic Information')}}
                     </li>
                    
                  </ul>
                  <div class="tab-content pl-3 p-1" id="myTabContent">
                        <form action="{{url('admin/updatedoctorprofile')}}" method="post"  enctype="multipart/form-data">
                           {{csrf_field()}}
                           <input type="hidden" name="id" id="id" value="{{$doctor_id}}"/>
                           <input type="hidden" name="real_image" id="real_image" value="{{ isset($data->image)?$data->image:''}}"/>
                           <div class="form-group">
                              <div class="col-md-6" >
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Select Department')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <select id="department" name="department"  class="form-control">
                                    <option value="">{{__('messages.Select Department')}}</option>
                                    @foreach($department as $d)
                                    <option value="{{$d->id}}" <?= isset($data->department_id) && $data->department_id == $d->id ? "selected='selected'" : "" ?> >{{$d->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-6"> 
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Doctor Name')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="name" placeholder="{{__('messages.Enter').' '.__('messages.Doctor Name')}}" class="form-control"  name="name" value="{{ isset($data->name)?$data->name:''}}">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-6"> 
                                 <label for="name" class=" form-control-label">
                                 {{__('messages.Doctor Designation')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="name" placeholder="{{__('messages.Enter').' '.__('messages.Doctor designation')}}" class="form-control"  name="designation" value="{{ isset($data->designation)?$data->designation:''}}">
                              </div>
                              <div class="col-md-6">
                                 <label for="email" class=" form-control-label">
                                 {{__('messages.Email')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="email" placeholder="{{__('messages.Enter').' '.__('messages.Email')}}" class="form-control"  name="email" value="{{ isset($data->email)?$data->email:''}}">
                              </div>
                              
                           </div>
                           <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 {{__('messages.Phone No')}}
                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="phone_no" placeholder="{{__('messages.Enter').' '.__('messages.Phone No')}}" class="form-control"  name="phone_no" value="{{ isset($data->phone_no)?$data->phone_no:''}}">
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                           
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Short Description')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea  id="short_description" name="short_description"  class="form-control">{{ isset($data->short_description)?$data->short_description:''}}</textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Description')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="description"  class="form-control">{{ isset($data->description)?$data->description:''}}</textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Excerpt')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea  id="excerpt" name="excerpt"  class="form-control">{{ isset($data->excerpt)?$data->excerpt:''}}</textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.About')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="about_us"  class="form-control">{{ isset($data->about_us)?$data->about_us:''}}</textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              {{__('messages.Service')}}<span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="service"  class="form-control">{{ isset($data->service)?$data->service:''}}</textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="file" class=" form-control-label">  
                              {{__('messages.Image')}}<span class="reqfield" >*</span>
                              </label>
                              @if($doctor_id!=0)
                              <img src="{{$data->image}}" class="imgsize1 btndepartwarning" /> 
                              @endif
                                 <input type="file" id="file" name="image" class="form-control-file" accept="image/*">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              {{__('messages.Slug')}}
                              </label>
                              <input type="text" id="slug"  placeholder="{{__('messages.Enter').' '.__('messages.Slug')}}"  class="form-control"  name="slug" value="{{ isset($data->slug)?$data->slug:''}}">
                           </div>
                                                   
                           <div class="col-md-12 form-group">

                              @if(Session::get("is_demo")=='1')
                              <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              {{__('messages.Submit')}}
                              </button>
                                 @else
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                                       {{__('messages.Submit')}}
                                       </button>
                                 @endif
                             
                           </div>
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop