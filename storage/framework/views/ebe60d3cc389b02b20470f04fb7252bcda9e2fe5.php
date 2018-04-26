<secion class="section-bills">
        <div class="bill-row bill-row-head bill">
            <div class="bill-cell bill-vendor">Vendor</div>
            <div class="bill-cell bill-price">Price</div>
            <div class="bill-cell bill-created-date">Date</div>
            <div class="bill-cell bill-category">Category</div>   
            <div class="bill-cell bill-paid-status">Paid</div>   
        </div>
    <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php echo $__env->make('layouts.bill', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</secion>
