<?php

namespace App\Http\Controllers;

use App\Models\WarehouseOrder;
use Illuminate\Http\Request;

class WarehouseOrderController extends Controller
{
    public function order(Request $request){
        $newOrder = new WarehouseOrder();
        $newOrder->vendor_name = $request->vendor_name;
        $newOrder->sku_id = $request->sku_id;
        $newOrder->quantity = $request->quantity;
        $newOrder->status = 'pending';
        $newOrder->save();

    }

    public function orderfulfilled(WarehouseOrder $neworder){
        $neworder->status = 'fulfilled';
        $neworder->save();
    }
}
