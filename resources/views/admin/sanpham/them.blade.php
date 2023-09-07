@extends('layouts.admin')

@section('title')
    <title>Sản phẩm</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header',['name' => 'Sản phẩm', 'key'=> 'Thêm'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('san-pham.them-san-pham')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Tên sản phẩm</label>
                                <input type="text"
                                       name="TenSanPham"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="Nhập tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn danh mục</label>
                                <select class="form-control" name="TenDanhMuc" id="exampleFormControlSelect1">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!!$htmlOption!!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn nhãn hàng</label>
                                <select class="form-control" name="TenNhanHang" id="exampleFormControlSelect1">
                                    <option value="0">Chọn tên nhãn hàng</option>
                                    {!!$htmlOptionNhanHang!!}
                                </select>
                            </div>

                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Giá gốc</label>
                                <input type="text"
                                       name="GiaGoc"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="Nhập giá gốc sản phẩm">
                            </div>

                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Giảm giá</label>
                                <input type="text"
                                       name="GiamGia"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="Nhập phần trăm giảm giá: 1-100">
                            </div>

                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Giá bán</label>
                                <input type="text"
                                       name="GiaBan"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="Giá bán sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Ảnh sản phẩm</label>
                                <input type="file" name="Anh" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Ảnh chi tiết</label>
                                <input type="file"
                                       multiple
                                       name="Anh"
                                       class="form-control-file"
                                       id="exampleFormControlFile1"
                                >
                            </div>
                            <select class="form-control" multiple="multiple">

                            </select>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Nhập nội dung</label>
                                <textarea name="MoTaSanPham" class="form-control" rows="3"></textarea>
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

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function () {
            $(".the_timkiem_chon").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
        })
    </script>
@endsection
