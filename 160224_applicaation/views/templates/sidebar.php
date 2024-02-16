<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?= base_url('assets'); ?>./img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Admin</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?= base_url('assets'); ?>index.html"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Peminjaman</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>colors.html">Request</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>typography.html">Replace</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>panels.html">Pinjam</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Barang</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>form_basic.html">Satuan Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>form_advanced.html">Jenis Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>form_masks.html">Data Barang</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>table_basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>datatables.html">Datatables</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
</html>