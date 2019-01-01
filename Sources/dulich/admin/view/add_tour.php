<link rel="stylesheet" type="text/css" href="../admin/css/ql.css">
<div class="content">
<form action="xl_add_tour.php" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-1">Tiêu đề: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="nameTour" class="form-control" name="nameTour"></div>

    <label for="name" class="col-sm-1">Ngày khởi hành: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="ngaykhoihanh" class="form-control" name="ngaykhoihanh"></div>

    <label for="name" class="col-sm-1">Ngày kết thúc: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="ngayketthuc" class="form-control" name="ngayketthuc"></div>

    <label for="name" class="col-sm-1">Giá: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="gia" class="form-control"name="gia"  ></div>

    <label for="name" class="col-sm-1">Điểm xuất phá: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="diemxuatphat" class="form-control" name="diemxuatphat"></div>

    <label for="name" class="col-sm-1">Nổi bật(hot 1): </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="noibat" class="form-control" name="noibat"></div>

    <label for="name" class="col-sm-1">Vùng miền: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="vungmien" class="form-control" name="vungmien"></div>

    <label for="name" class="col-sm-1">Xe: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="vanchuyen" class="form-control" name="vanchuyen"></div>

    <label for="name" class="col-sm-1">Khách sạn: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="khachsan" class="form-control" name="khachsan"></div>

    <label for="name" class="col-sm-1">Số chỗ ngồi: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="sochongoi" class="form-control" name="sochongoi"></div>

    <label for="name" class="col-sm-1">Lịch trình: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="lichtrinh" class="form-control" name="lichtrinh"></div>

    <label for="name" class="col-sm-1">Ghi Chú: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="ghichu" class="form-control" name="ghichu"></div>

    <label for="name" class="col-sm-1">Số chỗ còn trống: </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:20px"> <input type="socho" class="form-control" name="socho"></div>

    <label for="name" class="col-sm-1">ID vùng(bắc-1; trung-2;nam-3): </label>
    <div class="col-sm-8" style=" margin-right:300px; margin-bottom:100px"> <input type="idvung" class="form-control" name="idvung"></div>

    <label for="name">Ảnh</label>
    <input type="file" class="form-control-file" name="images">
  </div>
  <br>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <input type="submit"  class="btn btn-primary" value="Cập Nhập" >
    </div>
  </div>
</form>
</div>