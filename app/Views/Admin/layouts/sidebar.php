<div class="section-menu-left">
    <div class="box-logo">
        <a href="?role=admin&act=home" id="site-logo-inner">
            <img src="assets\Admin\images\logo_bestbalo.png" height="40px" width="80px">
        </a>
        <div class="button-show-hide">
            <i class="icon-chevron-left"></i>
        </div>
    </div>

    <div class="section-menu-left-wrap">
        <div class="center">
            <div class="center-item">
                <ul>
                    <!-- Bảng điều khiển -->
                    <li class="menu-item <?= (isset($_GET['act']) && $_GET['act'] == 'home') ? 'active' : '' ?>">
                        <a href="?role=admin&act=home">
                            <div class="icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="..." fill="#111111"></path>
                                </svg>
                            </div>
                            <div class="text">Dashboard</div>
                        </a>
                    </li>

                    <!-- Quản lý sản phẩm -->
                    <li class="menu-item has-children <?= (isset($_GET['act']) && in_array($_GET['act'], ['all-product', 'add-product'])) ? 'active' : '' ?>">
                        <a href="javascript:void(0);" class="menu-item-button">
                            <div class="icon"><i class="icon-file-plus"></i></div>
                            <div class="text">Quản lý sản phẩm</div>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="?role=admin&act=all-product">
                                    <div class="text">Danh sách sản phẩm</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="?role=admin&act=add-product">
                                    <div class="text">Thêm sản phẩm</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý danh mục -->
                    <li class="menu-item has-children
                                    <?php
                                        if(isset($_GET['act']) && $_GET['act'] == 'all-category'|| $_GET['act'] == 'add-category'){
                                            echo 'active';
                                        }
                                    ?>
                                    ">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-layers"></i></div>
                                            <div class="text">Quản lý danh mục</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="?role=admin&act=all-category" class="">
                                                    <div class="text">Danh sách</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="?role=admin&act=add-category" class="">
                                                    <div class="text">Thêm mới</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                    <!-- Quản lý đơn hàng -->
                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <svg width="24" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 2C8.34322 2 7.00008 3.34315 7.00008 5V5.75H13.0001V5C13.0001 3.34315 11.6569 2 10.0001 2ZM14.5001 5.75V5C14.5001 2.51472 12.4854 0.5 10.0001 0.5C7.51479 0.5 5.50008 2.51472 5.50008 5V5.75H3.51287C2.55332 5.75 1.74862 6.47444 1.64817 7.42872L0.385015 19.4287C0.268481 20.5358 1.13652 21.5 2.24971 21.5H17.7504C18.8636 21.5 19.7317 20.5358 19.6151 19.4287L18.352 7.42872C18.2515 6.47444 17.4468 5.75 16.4873 5.75H14.5001ZM13.0001 7.25H7.00008V8.66146C7.23023 8.86745 7.37508 9.16681 7.37508 9.5C7.37508 10.1213 6.8714 10.625 6.25008 10.625C5.62876 10.625 5.12508 10.1213 5.12508 9.5C5.12508 9.16681 5.26992 8.86745 5.50008 8.66146V7.25H3.51287C3.32096 7.25 3.16002 7.39489 3.13993 7.58574L1.87677 19.5857C1.85347 19.8072 2.02707 20 2.24971 20H17.7504C17.9731 20 18.1467 19.8072 18.1234 19.5857L16.8602 7.58574C16.8401 7.39489 16.6792 7.25 16.4873 7.25H14.5001V8.66146C14.7302 8.86746 14.8751 9.16681 14.8751 9.5C14.8751 10.1213 14.3714 10.625 13.7501 10.625C13.1288 10.625 12.6251 10.1213 12.6251 9.5C12.6251 9.16681 12.7699 8.86745 13.0001 8.66146V7.25Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">Quản lý đơn hàng</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="?role=admin&act=show-order">
                                                    <div class="text">Danh sách đơn hàng</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>   

                    <!-- Quản lý người dùng -->
                    <li class="menu-item has-children
                    <?php
                        if(isset($_GET['act']) && ($_GET['act'] == 'all-user' || $_GET['act'] == 'add-user' || $_GET['act'] == 'show-user' || $_GET['act'] == 'update-user')){
                            echo 'active';
                        }
                    ?>
                    ">
                        <a href="javascript:void(0);" class="menu-item-button">
                            <div class="icon"><i class="icon-user"></i></div>
                            <div class="text">Quản lý người dùng</div>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="?role=admin&act=all-user">
                                    <div class="text">Danh sách người dùng</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="?role=admin&act=add-user">
                                    <div class="text">Thêm người dùng</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý bình luận -->
                    <li class="menu-item">
                        <a href="#">
                            <div class="icon"><i class="icon-pie-chart"></i></div>
                            <div class="text">Quản lý bình luận</div>
                        </a>
                    </li>

                    <!-- Đăng xuất -->
                    <li class="menu-item">
                        <a href="?role=admin&act=logout">
                            <div class="icon">
                                <svg width="24" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="..." fill="#111111"></path>
                                </svg>
                            </div>
                            <div class="text">Đăng xuất</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
