@extends('admin/layout/admins')
@section('title','用户列表')
@section('content')
<!-- <script src="/admins/js/libs/jquery-1.8.3.min.js"></script> -->


<div class="mws-panel grid_8">

                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>用户管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;用户列表</span>
                    </div>
                   <form action="" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select size="1" name="num" aria-controls="DataTables_Table_1">
                            <option value="5" @if($request->num == '5') selected="selected"  @endif>
                                5
                            </option>
                            <option value="10" @if($request->num == '10') selected="selected" @endif>
                                10
                            </option>
                            
                        </select>
                        条
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        关键字: 
                        <input type="text" aria-controls="DataTables_Table_1" name="search" value="{{$search}}">
                    </label>
                   <button>搜索</button>
                    </form>
                </div>
               
                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" role=",columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">手机号码</th><th class=""DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascendisorting" role="columnheader" tabindex="0" aria-controls=ng" style="width: 137px;">邮箱</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">昵称</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">头像</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th></tr>
                            </thead>
                              @foreach($res as $k => $v)
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" >

                                  
                                    <td class="odd ">{{$v->id}}</td>
                                    <td class="odd ">{{$v->phone}}</td>
                                    <td class="odd ">{{$v->email}}</td>
                                    <td class="odd ">{{$v->uname}}</td>
                                    <td class="odd "> <img src="/{{$v->profile}}" alt="" width="100%"></td>
                                    
                                    <td class=" " style="width:150px;">
                                   
                                        <form action="/admin/user/{{$v->id}}/edit" method="get" style="display:inline; float:left">
                                           
                                            <button >修改</button>
                                         </form>
                                     
                                     
                                        <form method="post" action="/admin/user/{{$v->id}}"  >
                                            <button class=''>删除</button>
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                             
                                    </form>
                                  
                                    </td>
                       

                                </tr>
                                 @endforeach
                            </tbody>


                             <style>
            .pagination li{
                background-color: #444444;
                border-left: 1px solid rgba(255, 255, 255, 0.15);
                border-right: 1px solid rgba(0, 0, 0, 0.5);
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(255, 255, 255, 0.15) inset;
                
                cursor: pointer;
                display: block;
                float: left;
                font-size: 12px;
                height: 20px;
                line-height: 20px;
                outline: medium none;
                padding: 0 10px;
                text-align: center;
                text-decoration: none;
            }

            .pagination a{
                color: #fff;
            }
            
            .pagination .active{
                background-color: #88a9eb;
                background-image: none;
                border: medium none;
                box-shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
                color: #323232;
            }

            .pagination .disabled{
                color: #666666;
                cursor: default;
            }

            .pagination{

                margin:0px;
            }
            </style>
                        </table><div class="dataTables_info" id="DataTables_Table_1_info"></div><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                                    {!! $res->render() !!}
                                  
                                </div></div>
                    </div>
                </div>



                <script src="/jquery/jquery-1.9.1.min.js"></script>
                                <script src="/layer/layer.js"></script>

                                
                            <script type="text/javascript">
                                                         
                                $('.bits').on('click', function(){
                                    
                                     

                                   /* layer.confirm('您是如何看待前端开发？', {
                                      btn: ['重要','奇葩'] //按钮
                                    }, function(){
                                      layer.msg('的确很重要', {icon: 1});
                                    }, function(){
                                      layer.msg('也可以这样', {
                                        time: 20000, //20s后自动关闭
                                        btn: ['明白了', '知道了']
                                      });
                                    });
                              */
                                })
                            
                                </script>

@endsection