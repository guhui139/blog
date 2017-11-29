@extends('admin/layout/admins')
@section('title','类型列表')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>类型管理&nbsp;&nbsp;-&gt;&nbsp;&nbsp;类型列表</span>
                    </div>
                   <form action="" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select size="1" name="num" aria-controls="DataTables_Table_1">
                            <option value="10" @if($request->num == '10') selected="selected"  @endif>
                                10
                            </option>
                            <option value="25" @if($request->num == '25') selected="selected" @endif>
                                25
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
                    <button class='btn btn-danger'>提交</button>
                </div>
                </form>
                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">类型</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">图片</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th></tr>
                            </thead>
                                @foreach($res as $k => $v)
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" >

                                
                                    <td class=" ">{{$v->id}}</td>
                                    <td class=" ">{{$v->name}}</td>
                                    
                                    <td class=" " > <img src="/{{$v->img}}" alt="" width="40" height="40" ></td>
                                    
                                    <td class=" " style="width:150px;">

                                         <form action="/admin/type/{{$v->id}}/edit" method="get" style="display:inline; float:left">
                                           
                                            <button>修改</button>
                                         </form>
                                        <form method="post" action="/admin/type/{{$v->id}}" style="display:inline;" >
                                            <button>删除</button>
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
@endsection