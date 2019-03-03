<?php $__env->startSection('content'); ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3 class=" text-center"><i class=" "></i> 用 户 添 加</h3>
             
          	
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
                      <form action="/admin/user" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        
                       <?php echo e(csrf_field()); ?>

                          <div class="form-group">
                              <label class="col-sm-2 "><span class="user_add">用户名</span></label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="admin_name" value="<?php echo e(old('admin_name')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">密 码</span></label>
                              <div class="col-sm-10">
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">确认密码</span></label>
                              <div class="col-sm-10">
                                  <input type="password"  class="form-control" placeholder="" name="admin_repassword">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">邮 箱</span></label>
                              <div class="col-sm-10">
                                  <input type="email"  class="form-control" placeholder="" name="admin_email" value="<?php echo e(old('admin_email')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">手机号</span></label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="" name="admin_phon" value="<?php echo e(old('admin_phon')); ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">个人介绍</span></label>
                              <div class="col-sm-10">
                                  <textarea name="admin_itn" class="self"><?php echo e(old('admin_introduction')); ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">权限管理</span></label>
                              <div class="col-sm-10">
                                  <select class="form-control input-sm" name="admin_permission">
                                     <option >--请选择--</option>
                                     <option >超级管理员</option>
                                     <option >管理员</option>
                                     <option >员  工</option>
                                     <option >财务人员</option>
                                  </select>

                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><span class="user_add">上传头像</span></label>
                              <div class="col-sm-10">
                                <input type="file" id="file" name="admin_avatar">
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