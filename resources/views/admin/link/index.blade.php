@extends('admin/layout/admins')
@section('title','浏览链接')
@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>友情链接</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">名称</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 191px;">地址</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">头像</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th></tr>
                            </thead>
                            @foreach($res as $k=>$v)
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" >

                                    
                                    <td class=" ">{{$v->id}}</td>
                                    <td class=" ">{{$v->link_name}}</td>
                                    <td class=" ">{{$v->url}}</td>                                
                                    <td class=" "><img src="/{{$v->image}}" height='30' width='50'></td>
                                    <td class=" " style="width:150px;">
                                        <a href="/admin/link/{{$v->id}}/edit" ><button>修改</button></a>
                                        <form method="post" action="/admin/link/{{$v->id}}" style="display:inline;" >
                                            <button>删除</button>
                                            {{ csrf_field()}}

                                            {{method_field('DELETE')}}
                                        </form>
                                    </td>
                                
                                </tr>
                                @endforeach
                            </tbody></table><div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                                    
                                  
                                </div></div>
                    </div>
                </div>
@endsection