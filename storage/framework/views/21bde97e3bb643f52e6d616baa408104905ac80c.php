<?php $__env->startSection('content'); ?>
<section id="main-content">
          <section class="wrapper">
          	<h3 class=" text-center"><i class=" "></i>添 加 链 接</h3>
             
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<center>
          	<div class="row mt text-center" style="width:1200px;">
          		<div class="col-lg-12">
                  <div class="form-panel">
            
            <!-- 提示错误信息 -->
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>        
                <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
                      <form action="/admin/link" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        
                       <?php echo e(csrf_field()); ?>

                          <div class="form-group">
                              <label class="col-sm-2 "><span class="user_add">链接名字</span></label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fs_name" value="<?php echo e(old('fs_name')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 "><span class="user_add">公司名字</span></label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fs_note" value="<?php echo e(old('fs_note')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 "><span class="user_add">链接地址</span></label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fs_link" value="<?php echo e(old('fs_link')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">链接图片</span></label>
                              <div class="col-sm-10">
                                  <input type="file" name="fs_logo" value="<?php echo e(old('fs_logo')); ?>">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <input type="submit"  class=" center-block btn btn-success" value="提  交">
                          </div>

                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>