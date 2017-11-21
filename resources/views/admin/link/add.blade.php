@extends('admin.layout.admins')
@section('title','添加链接')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span><i class="icon-ok"></i> 友情链接&nbsp;&nbsp;-&gt;&nbsp;&nbsp;添加链接</span>
                    </div>
                    <div class="mws-panel-body no-padding">

                          @if (count($errors) > 0)
              <div class="mws-form-message error">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
                               <form id="mws-validate" class="mws-form" action="/admin/link" novalidate="novalidate" method="post" enctype="multipart/form-data">
                         <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>


                         <div class="mws-form-inline">
                              <div class="mws-form-row">
                                   <label class="mws-form-label">名称</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="link_name" class="required large" style="width:200px" value="">
                                    </div>
                                </div>
                                 
                                
                                <div class="mws-form-row">
                                   <label class="mws-form-label">地址</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="url" class="required digits large" style="width:200px">
                                    </div>
                                </div>
                              <div class="mws-form-row" style="width:500px;">
                                   <label class="mws-form-label">图片</label>
                                   <div class="mws-form-item">
                                        <input type="file" name="image" class="required email large" style="width:200px" value="{{old('email')}}">
                                    </div>
                                </div>
                              
                            </div>

                            <div class="mws-button-row">
                             {{ csrf_field() }}
                              <input type="submit" class="btn btn-danger" value="添加">
                            
                            </div>
                        </form>
                    </div>         
                </div>
@endsection                