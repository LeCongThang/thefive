@extends('backend.layout_master.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm dự án
                {{--<small>Preview</small>--}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Dự án</a></li>
                <li class="active">Thêm mới</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông tin dự án</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" class="form-horizontal" action="{{URL::asset('')}}admin/project/storage" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Tên dự án</label>
                                    <input type="text" class="form-control" name="project_name_vi">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control" name="description_vi"/>
                                </div>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="expertise_id">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="category_id">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection