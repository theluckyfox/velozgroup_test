<secion class="section-bills">
        <div class="bill-row bill-row-head bill">
            <div class="bill-cell bill-vendor">Vendor</div>
            <div class="bill-cell bill-price">Price</div>
            <div class="bill-cell bill-created-date">Date</div>
            <div class="bill-cell bill-category">Category</div>   
            <div class="bill-cell bill-paid-status">Paid</div>   
        </div>
    @foreach($bills as $bill)
        @include('layouts.bill')
    @endforeach
</secion>
