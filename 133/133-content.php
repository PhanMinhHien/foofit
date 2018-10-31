<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-133">
    <!--MENU HOME-->
    <div class="navbar-default" role="navigation">
        <div class="container">        
            <nav class="topnav">
                <ul>
                    <li class="active"><a href="#">Trang chủ</a></li>
                    <li><a href="gioi-thieu">Giới thiệu</a></li>
                    <li><a href="thanh-tich">Thành tích</a></li>
                    <li><a href="tuyen-sinh">Tuyển sinh</a></li>
                    <li><a href="brochure">Brochure</a></li>
                    <li><a href="lien-he">Liên hệ</a></li> 
                </ul>
            </nav>
        </div>
    </div>
    <!--END MENU HOME-->
    <div class="navbar navbar-inverse navbar-static-top">
        <!--LIST OF HEADER -->
        <div class="container" style="position: relative;">
            <div class="left-bg">&nbsp;</div>
            <div class="container">
                <div class="logo">
                    <a href="#"><img alt="TDC-Khoa CNTT logo" src="images/logo.png"></a>
                    <span class="triangle-arrow">&nbsp;</span>
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>
                </div>
              
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="first parent"><a href="#">TIN TỨC</a></li>
                        <li class="parent"><a href="#">GIẢNG VIÊN</a></li>
                        <li class="parent"><a href="#">SINH VIÊN</a></li>
                        <li class="parent"><a href="#">CHUYÊN ĐỀ</a></li>
                        <li class="last parent"><a href="#">ĐÀO TẠO</a></li>
                    </ul>
                </div>                  
            </div>
        </div>
    </div>
    <!--END MENU HEADER-->
</div>
