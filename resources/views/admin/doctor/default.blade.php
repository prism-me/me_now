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
                     <a href="{{url('admin/savedoctor/0/1')}}" class="btn btn-primary">{{__('messages.Add').' '.__('messages.Doctors')}}</a>
                     {{-- <form action="{{ url('admin/doctor')}}" class="selectLang" >

                        <select id="title"  class="form-control" required name="isArabic" onchange="fetch_select(this.value);"><i class="fa fa-language" aria-hidden="true"></i>
                          
                           <option > &#xf042;</option>
                           <option value="0">English</option>
                           <option value="1">Arabic</option>
                           
                        </select>
                     
                     </form> --}}
                  
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
                                <a href="{{url('admin/savedoctor/').'/'.$d->id.'/1'}}" > <i class='fa fa-pencil fa-lg' aria-hidden="true"> </i> </a>
                              </div>
                              <div class="group">
                                
                                 <a href="javascript:deleterow('deletedoctor','<?= $d->id ?>')" >
                                   <i class='fa fa-trash fa-lg'></i>
                                 </a>
                               
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

{{-- <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
        <script type="text/javascript">
        function fetch_select (val){
         
         
            $.ajax({
               headers: {
                    'X-CSRF-Token': token 
               },
                type: 'post',
                url: '/admin/doctor',
                datatype:'json',
                data: { option:val },
                success: function (response) {
                    alert(response);
                }
            });
        }
    </script> --}}