@extends('admin.layout.admins')
@section('title','用户添加')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span><i class="icon-ok"></i> 类型管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;类型添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">

                               <form id="mws-validate" class="mws-form" action="/admin/type" novalidate="novalidate" method="post" enctype="multipart/form-data">
                         <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>


                         <div class="mws-form-inline">
                              <div class="mws-form-row">
                                   <label class="mws-form-label">名称</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="name" class="required large" style="width:200px" value="">
                                    </div>
                                </div>
                                 
                                
                                <div class="mws-form-row">
                                   <label class="mws-form-label">关键字</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="keywords" class="required digits large" style="width:200px">
                                    </div>
                                </div>
                              
                                 <div class="mws-form-row">
                                   <label class="mws-form-label">图片</label>
                                   <div class="mws-form-item" style="width:300px;">
                                        <input type="file" name="img" class="required url large" style="width:100%" value="">
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