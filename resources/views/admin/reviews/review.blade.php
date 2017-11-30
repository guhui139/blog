@extends('admin/layout/admins')
@section('title', '评论管理')
@section('content') 
<div class = "mws-panel grid_8" > 
<div class="mws-panel-header">
    <span>
        <i class="icon-table">
        </i>
        评论管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;评论列表
    </span>
</div>
<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        <form action='/admin/review' method='get'> 
            <div id="DataTables_Table_1_length" class="dataTables_length">
                <label>
                    显示
                    <select name="num" size="1" aria-controls="DataTables_Table_1">
                       <option value="10" @if($request->num == '20') selected="selected"  @endif>
                           10
                       </option>
                            
                        <option value="20" @if($request->num == '20') selected="selected"  @endif>
                            20
                        </option>

                        <option value="30" @if($request->num == '30') selected="selected"  @endif>
                            30
                        </option>
                    </select>
                    条数据
                </label>
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    关键字:
                    <input type="text" name='search' aria-controls="DataTables_Table_1" value="{{isset($_GET['search']) ? $_GET['search'] : '' }}">
                    <button class='btn btn-danger'>搜索</button>
                </label>
            </div>
            {{ csrf_field() }}
        </form>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
        aria - describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" role="columnheader" tabindex="0" aria - controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria - sort="ascending" aria - label="Rendering engine: activate to sort column descending"
                    style="width: 130px;">
                        ID
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 150px;">
                        用户名
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria - controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria - label="Platform(s): activate to sort column ascending"
                    style="width: 180px;">
                        文章标题
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                    style="width: 200px;">
                        评论内容
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria - controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria - label="CSS grade: activate to sort column ascending"
                    style="width: 150px;">
                        评论时间
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria - controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria - label="CSS grade: activate to sort column ascending"
                    style="width: 150px;">
                        点赞数
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria - controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria - label="CSS grade: activate to sort column ascending"
                    style="width: 101px;">
                        操作
                    </th>
                </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($res as $k=>$v)
                <tr class="odd">
                    <td class=" ">{{$v->id}}</td>
                    <td class=" ">{{$v->uname}}</td>
                    <td class=" ">{{$v->title}}</td>
                    <td class=" ">{{$v->content}}</td>
                    <td class=" ">{{$v->time}}</td>
                    <td class=" ">{{$v->review_zan}}</td>
                    <td class=" " style="width:150px;">
                        <a href="/admin/review/{{$v->id}}/edit">
                            <button> 修改</button>
                        </a>
                        <!-- <form method="post" action="/admin/review/{{$v->id}}" style="display:inline;">
                            <button id="del">删除</button>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form> -->
                        <button onclick="func({{$v->id}})">删除</button>
                    </td>
                </tr>
                @section('js')
                
                <script src="/layer/layer.js"></script>
                <script>
                    function func(id){
                        layer.confirm('你确定要删除吗?',{
                            btn:['确定','取消'],
                            btn1: function(index, layero){
                               
                                $.ajax({
                                    url: '/admin/review/'+id,   
                                    data: {id:id,_token:'{{ csrf_token() }}',_method:'delete'}, 
                                    type: 'post', 
                                    success:function(data){
                                        if(data){
                                            layer.alert('删除成功');
                                            return redirect('/admin/review');
                                        }
                                        
                                    }   
                             
                                });       
                            },
                        });
                   } 
                </script>
                @endsection
            @endforeach
            </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_1_info">
            Showing 1 to 10 of 57 entries
        </div>
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

        <div class="dataTables_paginate paging_full_numbers">

            {!! $res->render()!!}
          
        </div>
    </div>
</div>
@endsection
