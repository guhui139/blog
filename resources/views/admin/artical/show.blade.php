@extends('admin.layout.admins')
@section('title','文章添加')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span><i class="icon-ok"></i> 文章管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;文章详情</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                         <form id="mws-validate" class="mws-form" action="/admin/artical" novalidate="novalidate" method="get" enctype="multipart/form-data">
                         <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>


                         <div class="mws-form-inline">
                              <div class="mws-form-row">
                                   <label class="mws-form-label">作者:</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="type_id" class="required large" style="width:100px" value='{{$uname}}'>
                                    </div>
                                </div>

                              <div class="mws-form-row">
                                   <label class="mws-form-label">文章分类:</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="type_id" class="required large" style="width:100px" value='{{$type}}'>
                                    </div>
                                </div>
                                                                
                                <div class="mws-form-row">
                                   <label class="mws-form-label">文章标题:</label>
                                   <div class="mws-form-item">
                                        <input type="text" name="title" class="required digits large" style="width:200px" value='{{$title}}'>
                                    </div>
                                </div>

                                <div class="mws-form-row">
                                   <label class="mws-form-label">文章内容: <span class="required"></span></label>
                                   <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large" >{{$content}}</textarea>
                                    </div>
                                </div>
                              
                              <label class="mws-form-label">
                                  
                              </label>
                             
                                    
                                    
                                
                           
                                                                 
                            </div>
                            <div class="mws-button-row">
                           
                             
                            <a href="/admin/artical"><button>返回</button></a>
                            </div>
                        </form>
                        
                        
                    </div>         
                </div>
@endsection                