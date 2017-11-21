@extends('admin.layout.admins')
@section('title','用户添加')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span><i class="icon-ok"></i> 用户管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;用户添加</span>
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
                               <form id="mws-validate" class="mws-form" action="/admin/user" novalidate="novalidate" method="post" enctype="multipart/form-data">
                         <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>


                         <div class="mws-form-inline">
                              <div class="mws-form-row">
                                   <label class="mws-form-label">昵称</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="uname" class="required large" style="width:200px" value="">
                                    </div>
                                </div>
                                 
                                
                                <div class="mws-form-row">
                                   <label class="mws-form-label">密码</label>
                                   <div class="mws-form-item">
                                        <input type="password" name="password" class="required digits large" style="width:200px">
                                    </div>
                                </div>
                              <div class="mws-form-row">
                                   <label class="mws-form-label">email</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="email" class="required email large" style="width:200px" value="{{old('email')}}">
                                    </div>
                                </div>
                              <div class="mws-form-row">
                                   <label class="mws-form-label">phone</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="phone" class="required url large" style="width:200px" value="{{old('phone')}}">
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                   <label class="mws-form-label">头像</label>
                                   <div class="mws-form-item" style="width:300px;">
                                        <input type="file" name="profile" class="required url large"  value="{{old('profile')}}">
                                    </div>
                                </div>
                              
                           
                              
                                   <div class="mws-form-row" >
                                        <label class="mws-form-label">权限</label>
                                        <div class="mws-form-item" >
                                        <ul class="mws-form-list" >
                                             <li ><input id="gender_male" type="radio" name="auth" class="required" value="0" checked> <label for="gender_male" >普通管理员</label></li>
                                             <li ><input id="gender_female" type="radio" name="auth" value="1"> <label for="gender_female">超级管理员</label></li>
                                        </ul>
                                        <label for="gender" class="error plain" generated="true" style="display:inline"></label>
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