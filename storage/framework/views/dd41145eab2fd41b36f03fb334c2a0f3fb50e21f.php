<div class="bill-row bill">
    <div class="bill-cell bill-vendor"><?php echo e($bill->vendor->name); ?></div>
    <div class="bill-cell bill-price"><?php echo e($bill->price); ?>$</div>
    <div class="bill-cell bill-created-date"><?php echo e(Carbon\Carbon::parse($bill->created_at)->format('j F Y')); ?></div>
    <div class="bill-cell bill-category"><?php echo e($bill->category->title); ?></div>   
    <div class="bill-cell bill-paid-status"><?php echo e($bill->isPaid == true ? 'Paid':'Not Paid'); ?></div>
    <div class="bill-buttons" data-bill-id="<?php echo e($bill->id); ?>">
        <button class="edit-bill"></button>
        <button class="delete-bill"></button>
    </div>   
</div>