<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public $route = 'admin.setting';
    public function index()
    {
        $data = Setting::find(1);
        return view('admin.pages.setting.index', compact('data'));
    }

    public function insert_or_update(Request $request)
    {
        $this->validate($request,[
            'maximum_refer_friend'=> 'required|numeric',
            'maximum_refer_commission_amount'=> 'required|numeric',
            'registration_bonus'=> 'required|numeric',
            'first_level'=> 'required|numeric',
            'second_level'=> 'required|numeric',
            'third_level'=> 'required|numeric',
        ]);
        $model = Setting::findOrFail(1);
        $model->site_name = $request->site_name;
        $model->withdraw_charge = $request->withdraw_charge;
        $model->minimum_withdraw = $request->minimum_withdraw;
        $model->maximum_withdraw = $request->maximum_withdraw;
        $model->currency = $request->currency;
        $model->channel = $request->channel;
        $model->maximum_refer_commission_amount = $request->maximum_refer_commission_amount;
        $model->maximum_refer_friend = $request->maximum_refer_friend;
        $model->registration_bonus = $request->registration_bonus;
        $model->first_level = $request->first_level;
        $model->second_level = $request->second_level;
        $model->third_level = $request->third_level;

        $model->update();
        return redirect()->route($this->route.'.index')->with('success', 'Settings Updated Successfully.');
    }
}
