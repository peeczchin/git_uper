    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">เพิ่มสไลด์สินค้า</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">เพิ่มสไลด์สินค้า</h1>
			<!-- end page-header -->
			
                        <!-- begin row -->
            <div class="row">
			    <!-- begin col-12 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">เพิ่มสไลด์สินค้า</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="slide_title">ชื่อสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_title','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_title" name="slide_title" placeholder="ชื่อสินค้า" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_subdescription">รายละเอียดย่อย <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_subdescription','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_subdescription" name="slide_subdescription" placeholder="รายละเอียดสินค้าแบบย่อ" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_main_price">ราคาทางการ <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_main_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_main_price" name="slide_main_price" placeholder="Ex. 12,000" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_volume_price">ราคา Volume <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_volume_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_volume_price" name="slide_volume_price" placeholder="Ex. 12,000" />
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-1 col-form-label" for="slide_category">หมวดหมู่ : </label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="slide_category">
                                            <option class="text-center" value="" selected>-- เลือกหมวดหมู่สินค้า --</option>
                                            <?php foreach($getcategory AS $getcat): ?>
                                            <option class='text-center' value="<?= $getcat->cat_name; ?>"><?= $getcat->cat_name; ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slide_description">รายละเอียดสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_description','<small class="text-danger">','</small>'); ?>
                                    <textarea class="ckeditor" id="editor1" name="slide_description" rows="20"></textarea>
                                </div>

                                <?php /*<div class="form-group">
                                    <label class="btn btn-primary fileinput-button m-r-3" for="files">เพิ่มรูปภาพสินค้า 
                                        <span class="text-danger">*</span>
                                    </label>
                                            <span>รูปภาพ</span>
                                            <input type="file" name="files" onchange="show_file.innerText = this.value">
                                            <span id="show_file"></span>
                                </div>*/ ?>

                                <div class="row fileupload-buttonbar">
                                    <div class="col-md-7">
                                        <span class="btn btn-primary fileinput-button m-r-3">
                                            <i class="fa fa-plus"></i>
                                            <span>Add Picture</span>
                                            <input type="file" id="slide_image" name="slide_image" onchange="show_file.innerText = this.value">
                                        </span>
                                        <span id="show_file"></span>
                                        <?php echo form_error('slide_image','<small class="text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">เพิ่มสไลด์สินค้า</button>
                            </form>

                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->