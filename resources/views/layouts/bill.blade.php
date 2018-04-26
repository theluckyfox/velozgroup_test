<div class="bill-row bill">
    <div class="bill-cell bill-vendor">{{$bill->vendor->name}}</div>
    <div class="bill-cell bill-price">{{$bill->price}}$</div>
    <div class="bill-cell bill-created-date">{{Carbon\Carbon::parse($bill->created_at)->format('j F Y')}}</div>
    <div class="bill-cell bill-category">{{$bill->category->title}}</div>   
    <div class="bill-cell bill-paid-status">{{$bill->isPaid == true ? 'Paid':'Not Paid'}}</div>
    <div class="bill-buttons" data-bill-id="{{$bill->id}}">
        <button class="edit-bill"></button>
        <button class="delete-bill"></button>
    </div>   
</div>