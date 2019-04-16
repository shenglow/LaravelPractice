<?php

namespace laravelPractice\Http\Controllers\Management;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Store;

class StoreController extends Controller
{
    public function edit()
    {
        $store = Store::find(1);
        if (empty($store))
            return view('management.store.edit');
        else
            return view('management.store.edit', compact('store'));
    }

    public function update(Request $request)
    {
        $store = Store::find(1);
        if (empty($store)) {
            $store = new Store;
        }

        $input = array_map('trim', $request->all());

        $store->sun_open = $input['sun_open_hh'].':'.$input['sun_open_mm'];
        $store->mon_open = $input['mon_open_hh'].':'.$input['mon_open_mm'];
        $store->tue_open = $input['tue_open_hh'].':'.$input['tue_open_mm'];
        $store->wed_open = $input['wed_open_hh'].':'.$input['wed_open_mm'];
        $store->thu_open = $input['thu_open_hh'].':'.$input['thu_open_mm'];
        $store->fri_open = $input['fri_open_hh'].':'.$input['fri_open_mm'];
        $store->sat_open = $input['sat_open_hh'].':'.$input['sat_open_mm'];

        $store->sun_close = $input['sun_close_hh'].':'.$input['sun_close_mm'];
        $store->mon_close = $input['mon_close_hh'].':'.$input['mon_close_mm'];
        $store->tue_close = $input['tue_close_hh'].':'.$input['tue_close_mm'];
        $store->wed_close = $input['wed_close_hh'].':'.$input['wed_close_mm'];
        $store->thu_close = $input['thu_close_hh'].':'.$input['thu_close_mm'];
        $store->fri_close = $input['fri_close_hh'].':'.$input['fri_close_mm'];
        $store->sat_close = $input['sat_close_hh'].':'.$input['sat_close_mm'];

        $store->address = $input['address'];
        $store->phone = $input['phone'];

        $store->save();

        return redirect()->route('admin.store.edit');
    }
}