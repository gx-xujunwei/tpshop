<?php $__env->startSection('content'); ?>
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>链 接 列 表</h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>链 接 列 表
                        <label style="float:right;">关键字:  <input type="text"><button>搜索</button></label>
                      </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="numeric">序号</th>
                                  <th class="numeric">链接名字</th>
                                  <th class="numeric">链接网址</th>
                                  <th class="numeric">公司名字</th>
                                  <th class="numeric">链接图片</th>
                                  <th class="numeric">前台展示</th>
                                  <th class="numeric">添加时间</th>
                                  <th class="numeric">最后修改时间</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr style="text-align:center">
                                  <td class="numeric"><?php echo e($i++); ?></td>
                                  <td class="numeric"><?php echo e($v->fs_name); ?></td>
                                  <td class="numeric"><?php echo e($v->fs_link); ?></td>
                                  <td class="numeric"><?php echo e($v->fs_note); ?></td>
                                  <td class="numeric"><img src="/storage/<?php echo e($v->fs_logo); ?>" height="30px" alt=""></td>
                                  <td class="numeric">
                                    <?php if(($v->fs_status) == 0): ?>
                                      <a href=""><img src="/bg/img/对.jpg" height="30px" alt=""></a>
                                    <?php else: ?>
                                      <a href=""><img src="/bg/img/错.jpg" height="30px" alt=""></a>
                                    <?php endif; ?>
                                  </td>
                                  <td class="numeric"><?php echo e($v->created_at); ?></td>
                                  <td class="numeric"><?php echo e($v->updated_at); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>