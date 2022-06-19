<?php

namespace App\Http\Controllers;

use App\Models\VendorRequest;
use App\Models\WarehouseOrder;
use Illuminate\Http\Request;

class WarehouseOrderController extends Controller
{
    public function order(Request $request)
    {
        //storing vendor request

        $newOrder = new VendorRequest();
        $newOrder->vendor_name = $request->vendor_name;
        $newOrder->status = 'pending';
        $newOrder->save();

        //storingbook details
        $skuList = $request->skulist;
        foreach ($skuList as $sku) {
            $new = new WarehouseOrder();
            $new->vendor_request_id = $newOrder->id;
            $new->sku_id = $sku['sku_id'];
            $new->quantity = $sku['quantity'];
            $new->save();
        }
    }

    public function orderfulfilled(VendorRequest $neworder)
    {
        $neworder->status = 'fulfilled';
        $neworder->save();
    }
}
