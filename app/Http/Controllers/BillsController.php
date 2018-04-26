<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Category;
use App\Vendor;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    function showBills() {
        return view('index', [ 'bills' => Bill::all(), 'categories' => Category::all() ]);
    }

    function addBill(Request $request) {
        $vendors = Vendor::all()->where('name', '=', $request['bill_obj']['vendor']);

        if(count($vendors) === 0){
            $vendor = new Vendor();
            $vendor->name = $request['bill_obj']['vendor'];        
            $vendor->save();
        } else {
            $vendor = $vendors->first();
        }        

        $bill = new  Bill();
        $bill->vendor_id = $vendor->id;
        $bill->price = $request['bill_obj']['price'];  
        $bill->category_id = $request['bill_obj']['category']; 
        $bill->isPaid = $request['bill_obj']['paid'] === 'true' ? 1 : 0;

        $bill->save();

        return view('layouts.bill', [ 'bill' => $bill ])->render();
    }
    
    function deleteBill(Request $request) {
        $bill_id = $request->bill_id;
        $item = Bill::destroy($bill_id);

        return array('result' => 1);
    }
}

?>