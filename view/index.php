<?php
include_once('../database/database.php');
include_once('../control/menudacap.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/globols.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <nav class="container">
                <a href="" id="logo">
                    <img src="img/Rectangle 4 (1).png" alt="">
                </a>
              
              
    <?php 
   
function buildMenu($menuItems, $id_parent = 0) {
    $cl = ($id_parent == 0) ? "main-menu" : "submenu"; 
    echo '<ul class="' . $cl . '">';

    foreach ($menuItems as $menuItem) {
        echo '<li><a href="#">' . $menuItem['namemenu'] . '</a>';
        if (!empty($menuItem['submenu'])) {
            buildMenu($menuItem['submenu'], $menuItem['id']); 
        }
        echo '</li>';
    }

    echo '</ul>';
}

$menuItems = get_menudacap(0);
buildMenu($menuItems);


?>


                <!-- <ul id="main-menu">
                    <li><a href="">Trang sức nữ</a>
                        <ul class="submenu">
                            <li><a href="">Trang sức nữ 18K</a> </li>
                            <li><a href="">Trang sức nữ 24k</a>
                            <ul class="submenu">
                                <li><a href="">Nhẫn </a></li>
                                <li><a href="">Dây</a></li>
                                <li><a href="">Mặt Dây</a></li>
                                <li><a href="">Vòng tay</a></li>
                                <li><a href="">Lắc tay</a></li>
                                <li><a href="">Lắc chân</a></li>
                                <li><a href="">Khuyên tai</a></li>
                            </ul>
                            </li>
                   
                        </ul>
                    </li>
                    <li><a href="">Nhẫn cưới</a>
                    
                </li>
                    <li><a href="">Trang sức kim cương</a></li>
                    <li><a href="">Trang sức đá màu</a></li>
                    <li><a href="">Sản phầm 24K</a></li>
                    <li><a href="">Trang sức nam</a>
                    <ul class="submenu">
                            <li><a href="">Trang sức nữ 18K</a>
                            <ul class="submenu">
                                <li><a href="">Nhẫn </a></li>
                                <li><a href="">Dây</a></li>
                                <li><a href="">Mặt Dây</a></li>
                                <li><a href="">Vòng tay</a></li>
                                <li><a href="">Lắc tay</a></li>
                                <li><a href="">Lắc chân</a></li>
                                <li><a href="">Khuyên tai</a></li>
                            </ul>
                        </li>
                            <li><a href="">Trang sức nữ 24k</a>
                           
                        </li>
                        </ul>
                </li>
                </ul> -->
                <div id="icon">
                <div>
                <i class="fa-solid fa-bag-shopping" style="color: #FEEAFA;"></i>
                <label>Giỏ hàng</label>
                </div>
                <div >
                <i class="fa-solid fa-user" style="color: #FEEAFA;"></i>
                <label>Tài khoản</label>
                </div>
                </div>
            </nav>


        </div>
       

        <div class="desktop">
<div class="div">
<div class="overlap">
<div class="overlap-group">
<div class="text-wrapper">Ngõ lời yêu thương</div>
<div class="group">
<div class="overlap-group-2">
<img class="vector" src="img/vector-2.png" />
<img class="img" src="img/vector-3.svg" />
<img class="vector-2" src="img/vector-4.svg" />
<img class="vector-3" src="img/vector-5.svg" />
</div>
</div>
<div class="text-wrapper-2">Xem thêm</div>
</div>
<p class="trao-i-u-n">
Chào Mừng Bạn Đến Với Trang Web Bán Trang Sức Tuyệt Vời Của Chúng Tôi - Nơi Mang Đến Cho Bạn Những Trải
Nghiệm Mua Sắm Đầy Ấn Tượng Và Không Gì Sánh Kịp. Tại Đây, Chúng Tôi Không Chỉ Cung Cấp Những Mẫu Nhẫn Cưới
Tinh Tế Và Đẹp Mắt, Mà Còn Là Điểm Đến Của Những Giấc Mơ, Những Hạnh Phúc Và Sự Kỷ Niệm Vĩnh Cửu.
</p>
<div class="overlap-2">
<img class="vector-4" src="img/vector-6.svg" />
<div class="ellipse"></div>
</div>
</div>
<img class="ellipse-2" src="img/ellipse-1.png" />
</div>
</div>

        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
        <script>
            $(document).ready(function(){
                $('.submenu').parent('li').addClass('has-child');
            });
        </script>
    </div> -->
    
</body></html> 