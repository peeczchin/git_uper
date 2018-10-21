    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขหมวดหมู่</li>
			</ol>
			<!-- end breadcrumb -->
			
                        <!-- begin row -->
            <div class="row">
			    <!-- begin col-12 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->

            <!-- begin page-header -->
            <h1 class="page-header">แก้ไขหมวดหมู่สินค้า <small>เช่น Windows </small></h1>
            <!-- end page-header -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">แก้ไขหมวดหมู่สินค้า
                                 <small class="text-danger">ID : <?= isset($getcategorybyid->cat_id) ? $getcategorybyid->cat_id : '' ?></small>
                            </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="cat_name">ชื่อหมวดหมู่ <span class="text-danger">*</span></label>
                                    <?php echo form_error('cat_name','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?= isset($getcategorybyid->cat_name) ? $getcategorybyid->cat_name : '' ?>" />
                                </div>
                                <input type="hidden" name="cat_id" value="<?= isset($getcategorybyid->cat_id) ? $getcategorybyid->cat_id : '' ?>">
                                <button type="submit" class="btn btn-sm btn-warning m-r-5">แก้ไขหมวดหมู่</button>
                                <a href="<?php echo base_url('Backend/addCategory'); ?>" class="btn btn-sm btn-primary m-r-5">เพิ่มหมวดหมู่</a>
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->