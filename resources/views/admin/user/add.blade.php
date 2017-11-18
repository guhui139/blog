@extends('admin.layout.admins')
@section('title','用户添加')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span><i class="icon-ok"></i> 用户管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;用户添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                         <form id="mws-validate" class="mws-form" action="form_elements.html" novalidate="novalidate">
                         <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                         <div class="mws-form-inline">
                              <div class="mws-form-row">
                                   <label class="mws-form-label">昵称</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="reqField" class="required large">
                                    </div>
                                </div>
                              <div class="mws-form-row">
                                   <label class="mws-form-label">email</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="emailField" class="required email large">
                                    </div>
                                </div>
                              <div class="mws-form-row">
                                   <label class="mws-form-label">phone</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="urlField" class="required url large">
                                    </div>
                                </div>
                              <div class="mws-form-row">
                                   <label class="mws-form-label">密码</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="ageField" class="required digits large">
                                    </div>
                                </div>
                             
                              
                                   <div class="mws-form-row" >
                                        <label class="mws-form-label">权限</label>
                                        <div class="mws-form-item" >
                                        <ul class="mws-form-list" >
                                             <li ><input id="gender_male" type="radio" name="gender" class="required"> <label for="gender_male">开启</label></li>
                                             <li ><input id="gender_female" type="radio" name="gender"> <label for="gender_female">关闭</label></li>
                                        </ul>
                                        <label for="gender" class="error plain" generated="true" style="display:inline"></label>
                                        </div>
                                   </div>
                            </div>
                            <div class="mws-button-row">
                              <input type="submit" class="btn btn-danger" value="添加">
                            </div>
                        </form>
                    </div>         
                </div>
@endsection                