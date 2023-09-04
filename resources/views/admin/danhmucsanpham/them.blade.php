@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header',['name' => 'Danh mục sản phẩm', 'key'=> 'Thêm'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('danh-muc-san-pham.themDanhMuc')}}" method="post">
                            @csrf
                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Tên danh mục</label>
                                <input type="text" name="TenDanhMuc" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Danh mục cha</label>
                                <select class="form-control" name="DanhMucCha" id="exampleFormControlSelect1">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!!$htmlOption!!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

