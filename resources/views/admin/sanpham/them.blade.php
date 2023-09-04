@extends('layouts.admin')

@section('title')
    <title>Sản phẩm</title>

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header',['name' => 'Sản phẩm', 'key'=> 'Thêm'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('san-pham.them-san-pham')}}" method="post">
                            @csrf
                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Tên sản phẩm</label>
                                <input type="text"
                                       name="TenSanPham"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="Nhập tên nhãn hàng">
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Chọn ảnh</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
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

