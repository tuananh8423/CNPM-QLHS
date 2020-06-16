<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lí học sinh</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
</head>

<body>
    <header id="header" class="">
        <div class="font-rale font-size-14 text-black-50 m-0">
            <a href="#" class="px-3 border-right border-left text-dark">Hệ thống</a>
            <a href="#" class="px-3 border-right text-dark">Quản lý Dữ Liệu</a>
            <div class="dropdown px-3 border-right text-dark d-inline" style="cursor: pointer;">
                <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Chức năng
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Thêm lớp</a>
                    <a class="dropdown-item" href="#">Thêm điểm</a>
                    <a class="dropdown-item" href="#">Thêm học sinh</a>
                </div>
            </div>
            <a href="#" class="px-3 border-right text-dark">Trợ giúp</a>
            <a href="#" class="px-3 border-right text-dark">Thông tin phần mềm</a>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mb-4 static-top shadow">
        <a class="navbar-brand" href="index.php">Quản lí học sinh</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link " href="index.php">Dashboard</a>
                <a class="nav-item nav-link " href="#">Lớp học</a>
                <a class="nav-item nav-link " href="#">Học sinh</a>
                <div class=" nav-item nav-link dropdown active" style="cursor: pointer;">
                    <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bảng điểm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="xemketqua.php">Xem kết quả</a>
                        <a class="dropdown-item active" href="nhapbangdiem.php">Nhập bảng điểm</a>
                    </div>
                </div>
                <a class="nav-item nav-link " href="#">Quy định</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <span>
            <h1 style=" text-shadow: black; text-align: center;"> Nhập bảng điểm</h1>
        </span>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="chart-area">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="NamHoc">Năm học</label>
                                    </div>
                                    <select class="custom-select" id="iNamHoc">
                                      <option selected>Choose...</option>
                                      <option value="1">2018-2019</option>
                                      <option value="2">2021-2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="HocKy">Học kỳ</label>
                                    </div>
                                    <select class="custom-select" id="HocKy">
                                      <option selected>Choose...</option>
                                      <option value="1">Học kỳ 1</option>
                                      <option value="2">Học kỳ 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="Lop">Lớp</label>
                                    </div>
                                    <select class="custom-select" id="Lop">
                                      <option selected>Choose...</option>
                                      <option value="1">10A1</option>
                                      <option value="2">10A1</option>
                                      <option value="3">10A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="MonHoc">Môn học</label>
                                    </div>
                                    <select class="custom-select" id="MonHoc">
                                      <option selected>Choose...</option>
                                      <option value="1">Tin học</option>
                                      <option value="2">Tin học</option>
                                      <option value="3">Tin học</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="15col">Số cột điểm 15 phút</label>
                                    </div>
                                    <select class="custom-select" id="15col">
                                      <option selected>Choose...</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="1Tcol">Số cột điểm 1 tiết</label>
                                    </div>
                                    <select class="custom-select" id="1Tcol">
                                      <option selected>Choose...</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col"><button type="submit" class="btn btn-primary">Tạo bảng điểm</button> </div>
                        </div>
                        <br>
                        <!-- bảng nhập điểm -->
                        <div>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Điểm 15'</th>
                                        <th scope="col">Điểm 1 tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                        <td><input type="text" style="background-color: transparent;border: gray solid 1px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary" style=" float:right; ">Nhập bảng điểm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>