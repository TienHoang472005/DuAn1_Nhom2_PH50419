<!DOCTYPE html>
<html xmlns="assets/Admin/images/logo_bestbalo.png" xml:lang="vi-VN" lang="vi-VN">
<head>
    <meta charset="utf-8">
    <title>BestBalo - Website bán balo hàng đầu Việt Nam</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/styles.css">
    <link rel="stylesheet" href="assets/Admin/font/fonts.css">
    <link rel="stylesheet" href="assets/Admin/icon/style.css">
    <link rel="shortcut icon" href="assets/Admin/images/logo_bestbalo.png">
    <link rel="apple-touch-icon-precomposed" href="assets/Admin/images/logo_bestbalo.png">
</head>

<body>
    <div id="wrapper">
        <div id="page">
            <div class="layout-wrap">
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <?php include 'app/Views/Admin/layouts/sidebar.php' ?>
                <div class="section-content-right">
                    <?php include 'app/Views/Admin/layouts/header.php' ?>
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap"> 
                                <div class="wg-box">
                                    <div class="title-box">Danh sách đơn hàng</div>     
                                    <div class="container">
                                        <table class="tf-table-page-cart">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá</th>
                                                    <th>Tổng cộng</th>
                                                </tr>
                                            </thead>
                                            <?php foreach($order_detail as $key => $value): ?>
                                                <tr>
                                                    <td class="text-center"><?= $key + 1 ?></td>
                                                    <td class="text-center"><?= $value->name ?></td>
                                                    <td class="text-center">
                                                        <img src="<?= $value->image_main ?>" alt="" width="50">
                                                    </td>
                                                    <td class="text-center"><?= $value->quantity ?></td>
                                                    <td class="text-center"><?= number_format($value->price) ?> VND</td>
                                                    <td class="text-end"><?= number_format($value->total) ?> VND</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>                               
                                </div>
                            </div>
                        </div>
                        <?php include 'app/Views/Admin/layouts/footer.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/Admin/js/jquery.min.js"></script>
    <script src="assets/Admin/js/bootstrap.min.js"></script>
    <script src="assets/Admin/js/bootstrap-select.min.js"></script>
    <script src="assets/Admin/js/zoom.js"></script>
    <script src="assets/Admin/js/morris.min.js"></script>
    <script src="assets/Admin/js/raphael.min.js"></script>
    <script src="assets/Admin/js/morris.js"></script>
    <script src="assets/Admin/js/jvectormap.min.js"></script>
    <script src="assets/Admin/js/jvectormap-us-lcc.js"></script>
    <script src="assets/Admin/js/jvectormap-data.js"></script>
    <script src="assets/Admin/js/jvectormap.js"></script>
    <script src="assets/Admin/js/apexcharts/apexcharts.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-1.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-2.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-3.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-4.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-5.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-6.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-7.js"></script>
    <script src="assets/Admin/js/switcher.js"></script>
    <script defer src="assets/Admin/js/theme-settings.js"></script>
    <script src="assets/Admin/js/main.js"></script>
</body>
</html>
