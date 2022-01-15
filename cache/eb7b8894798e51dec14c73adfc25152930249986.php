<link rel="stylesheet" href="/main.css">
<div class="cb343dfc4cd85402fa4078d3a3d93623a" id="cb343dfc4cd85402fa4078d3a3d93623a">
    <!-- Write your code here -->
        <div class="container">
            <div class="cb343dfc4cd85402fa4078d3a3d93623a__header" data-aos="fade-right" data-aos-mirror="false">
                <h3 class="cb343dfc4cd85402fa4078d3a3d93623a__title" >
                    News
                </h3>
                <a class="cb343dfc4cd85402fa4078d3a3d93623a__more">
                    Xem thêm
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="cb343dfc4cd85402fa4078d3a3d93623a__bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>
            <div class="cb343dfc4cd85402fa4078d3a3d93623a__main" data-aos="fade-up">
                <ul class="cb343dfc4cd85402fa4078d3a3d93623a__list">
                    <?php $__currentLoopData = json_decode($articles); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="cb343dfc4cd85402fa4078d3a3d93623a__item">
                            <a class="cb343dfc4cd85402fa4078d3a3d93623a__item__link" href="#">
                               <div class="cb343dfc4cd85402fa4078d3a3d93623a__item__image">
                                   <img src="<?php echo e($article->thumbnail); ?>" alt="">
                               </div>
                               <div class="cb343dfc4cd85402fa4078d3a3d93623a__item__main">
                                   <p class="cb343dfc4cd85402fa4078d3a3d93623a__item__date"><?php echo e($article->created_at); ?></p>
                                   <h4 class="cb343dfc4cd85402fa4078d3a3d93623a__item__title"><?php echo e($article->title); ?></h4>
                               </div>
                           </a>
                       </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/news/src/index.blade.php ENDPATH**/ ?>