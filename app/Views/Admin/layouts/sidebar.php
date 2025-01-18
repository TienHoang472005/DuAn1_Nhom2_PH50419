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
                    <li class="menu-item has-children ">
                        <a href="javascript:void(0);" class="menu-item-button">
                            <div class="icon"><i class="icon-layers"></i></div>
                            <div class="text">Quản lý danh mục</div>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="#">
                                    <div class="text">Danh sách danh mục</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="#">
                                    <div class="text">Thêm danh mục</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý đơn hàng -->
                    <li class="menu-item has-children">
                        <a href="javascript:void(0);" class="menu-item-button">
                            <div class="icon">
                                <svg width="24" height="22" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="..." fill="#111111"></path>
                                </svg>
                            </div>
                            <div class="text">Quản lý đơn hàng</div>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="#">
                                    <div class="text">Danh sách đơn hàng</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý người dùng -->
                    <li class="menu-item has-children">
                        <a href="javascript:void(0);" class="menu-item-button">
                            <div class="icon"><i class="icon-user"></i></div>
                            <div class="text">Quản lý người dùng</div>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="#">
                                    <div class="text">Danh sách người dùng</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="#">
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
