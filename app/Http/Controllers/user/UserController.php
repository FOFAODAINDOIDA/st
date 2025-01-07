<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BonusLedger;
use App\Models\Checkin;
use App\Models\Commission;
use App\Models\Deposit;
use App\Models\Fund;
use App\Models\Improvment;
use App\Models\Mining;
use App\Models\Notice;
use App\Models\Package;
use App\Models\PaymentMethod;
use App\Models\Purchase;
use App\Models\Task;
use App\Models\User;
use App\Models\UserLedger;
use App\Models\VipSlider;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function dashboard()
    {
        $sliders = VipSlider::where('page_type', 'home_page')->where('status', 'active')->get();
        return view('app.main.index', compact('sliders'));
    }

    public function vip()
    {
        $sliders = VipSlider::where('page_type', 'vip_page')->where('status', 'active')->get();
        $vips = Package::where('status', 'active')->get();
        $vids = my_vips();
        return view('app.main.vip', compact('sliders', 'vips', 'vids'));
    }

    public function package_details($id)
    {
        $package = Package::find($id);
        return view('app.main.package_details', compact('package'));
    }

    public function profile()
    {
        return view('app.main.profile');
    }


    public function team()
    {
        return view('app.main.team.index');
    }

    public function mine()
    {
        $improvements = Improvment::where('status', 'active')->orderBy('amount_limit')->get();

        //Get big row from improvements
        $largest_improvement_id = 0;
        foreach ($improvements as $element){ //Invest amount wise amount commission
            if (user()->invest_balance >= $element->amount_limit){
                $largest_improvement_id = $element->id;
            }
        }

        $initial_improvement = Improvment::where('id', $largest_improvement_id)->first();
        return view('app.main.mine.mine', compact('initial_improvement'));
    }

    public function setting()
    {
        return view('app.main.mine.setting');
    }

    public function transaction_password()
    {
        return view('app.main.mine.transaction_password');
    }

    public function login_password()
    {
        return view('app.main.mine.login_password');
    }

    public function service()
    {
        return view('app.main.mine.service');
    }

    public function guide()
    {
        return view('app.main.mine.guide');
    }

    public function recharge()
    {
        return view('app.main.deposit.index');
    }

    public function recharge_confirm($amount, $payment_method)
    {
        return view('app.main.deposit.recharge_confirm', compact('amount', 'payment_method'));
    }

    public function recharge_confirm_submit(Request $request)
    {
        $model = new Deposit();

        $path = uploadImage(false ,$request, 'photo', 'upload/usdt/', 200, 200 ,$model->photo);
        $model->user_id = Auth::id();
        $model->method_name = $request->paymethod;
        $model->order_id = rand(0000,9999).rand(0000,9999);
        $model->transaction_id = $request->transaction_id;
        $model->number = '0000000000';
        $model->amount = $request->amount;
        $model->photo = $path ?? $model->photo;
        $model->charge_amount = 0;
        $model->oid = 'D-'.rand(000000,999999).rand(000000,999999).rand(000000,999999);
        $model->final_amount = $request->amount;
        $model->date = date('d-m-Y H:i:s');
        $model->status = 'pending';
        $model->save();

        //Create user ledger
        $ledger = new UserLedger();
        $ledger->user_id = Auth::id();
        $ledger->reason = 'user_deposit';
        $ledger->perticulation = 'user deposit using externalment';
        $ledger->amount = $request->amount;
        $ledger->debit = $request->amount;
        $ledger->status = 'pending';
        $ledger->date = date('y-m-d');
        $ledger->save();
        return redirect('recharge-success');
    }

    public function recharge__pix_confirm_submit(Request $request)
    {
        $model = new Deposit();

        $path = uploadImage(false ,$request, 'photo', 'upload/usdt/', 200, 200 ,$model->photo);
        $model->user_id = Auth::id();
        $model->method_name = $request->paymethod;
        $model->order_id = rand(0000,9999).rand(0000,9999);
        $model->transaction_id = $request->transaction_id;
        $model->number = '0000000000';
        $model->amount = $request->amount;
        $model->photo = $path ?? $model->photo;
        $model->charge_amount = 0;
        $model->oid = 'D-'.rand(000000,999999).rand(000000,999999).rand(000000,999999);
        $model->final_amount = $request->amount;
        $model->date = date('d-m-Y H:i:s');
        $model->status = 'pending';
        $model->save();

        //Create user ledger
        $ledger = new UserLedger();
        $ledger->user_id = Auth::id();
        $ledger->reason = 'user_deposit';
        $ledger->perticulation = 'user deposit using externalment';
        $ledger->amount = $request->amount;
        $ledger->debit = $request->amount;
        $ledger->status = 'pending';
        $ledger->date = date('y-m-d');
        $ledger->save();
        return redirect('recharge-success');
    }

    public function recharge_success()
    {
        return view('app.main.deposit.recharge_success');
    }

    public function usdt()
    {
        return view('app.main.deposit.usdt');
    }

    public function income()
    {
        $submitted_tasks = Commission::where('user_id', Auth::id())->where('token', Admin::first()->salary_date)->get();
        return view('app.main.mine.income', compact('submitted_tasks'));
    }

    public function task_submit($id)
    {
        //Count Task
        $total_task = Package::whereIn('id', my_vips())->sum('task');

        //Count Submitted Task
        $submitted_tasks = Commission::where('user_id', Auth::id())->where('token', Admin::first()->salary_date)->count();
        if ($submitted_tasks < $total_task){
            //Insert Task
            $task = Task::find($id);
            $com = new Commission();
            $com->user_id = Auth::id();
            $com->task_id = $task->id;
            $com->amount = $task->amount;
            $com->date = date('Y-m-d');
            $com->token = Admin::first()->salary_date;
            $com->status = 'active';
            $com->save();

            $user = User::where('id', Auth::id())->first();
            $user->balance = $user->balance + $task->amount;
            $user->save();


            $first_ref = User::where('ref_id', Auth::user()->ref_by)->first();
            if ($first_ref){
                $amount = $task->amount * 8 / 100;
                User::where('id', $first_ref->id)->update([
                    'balance' => $first_ref->balance + $amount
                ]);

                $ledger = new UserLedger();
                $ledger->user_id = $first_ref->id;
                $ledger->get_balance_from_user_id = $user->id;
                $ledger->reason = 'refer_bonus';
                $ledger->perticulation = 'Congratulations';
                $ledger->amount = $amount;
                $ledger->debit = $amount;
                $ledger->status = 'approved';
                $ledger->step = 'first';
                $ledger->date = date('d-m-Y H:i');
                $ledger->save();

                $second_ref = User::where('ref_id', $first_ref->ref_by)->first();
                if ($second_ref){
                    $amount = $task->amount * 3 / 100;
                    User::where('id', $second_ref->id)->update([
                        'balance' => $second_ref->balance + $amount
                    ]);

                    $ledger = new UserLedger();
                    $ledger->user_id = $second_ref->id;
                    $ledger->get_balance_from_user_id = $user->id;
                    $ledger->reason = 'refer_bonus';
                    $ledger->perticulation = 'Congratulations. you have received refer income from '.$user->name ?? $user->username;
                    $ledger->amount = $amount;
                    $ledger->debit = $amount;
                    $ledger->status = 'approved';
                    $ledger->step = 'second';
                    $ledger->date = date('d-m-Y H:i');
                    $ledger->save();

                    $third_ref = User::where('ref_id', $second_ref->ref_by)->first();
                    if ($third_ref){
                        $amount = $task->amount * 1 / 100;
                        User::where('id', $third_ref->id)->update([
                            'balance' => $third_ref->balance + $amount
                        ]);

                        $ledger = new UserLedger();
                        $ledger->user_id = $third_ref->id;
                        $ledger->get_balance_from_user_id = $user->id;
                        $ledger->reason = 'refer_bonus';
                        $ledger->perticulation = 'Congratulations. you have received refer income from '.$user->name ?? $user->username;
                        $ledger->amount = $amount;
                        $ledger->debit = $amount;
                        $ledger->status = 'approved';
                        $ledger->step = 'third';
                        $ledger->date = date('d-m-Y H:i');
                        $ledger->save();
                    }
                }
            }

            return back()->with('success', 'Success');
        }else{
            return back()->with('success', 'Limit is Over');
        }
    }

    public function push()
    {
        return view('app.main.mine.push');
    }

    public function progress()
    {
        return view('app.main.mine.progress');
    }

    public function usdt_recharge(Request $request)
    {
        $rate = setting('rate');
        $usdt = $request->usdt;

        $model = new Deposit();
        $model->user_id = Auth::id();
        $model->method_name = 'usdt';
        $model->order_id = 'S'.rand(00000000,99999999).time();
        $model->transaction_id = 'usdt';
        $model->usdt = $usdt;
        $model->amount = $usdt * $rate;
        $model->final_amount = $usdt * $rate;
        $model->date = Carbon::now();
        $model->status = 'pending';
        $model->save();
        return redirect()->route('usdt')->with('message', 'USDT Recharge Success');
    }


    public function reword()
    {
        $i = Auth::user();

        $refer_users = User::where('ref_by', $i->ref_id)->get();

        //Check first time my users purchase any vip
        $amount = 0;
        if ($i->first_time_bonus != 1) {
            foreach ($refer_users as $user) {
                $purchase = Purchase::where('user_id', $user->id)->first();
                if ($purchase) {
                    $vip = Package::find($purchase->id);
                    $amount = ($vip->price * $vip->sponsor) / 100;
                }
            }
        }

        return view('app.main.reword.index', compact('refer_users', 'amount'));
    }

    public function history()
    {
        $recharges = Deposit::where('user_id', Auth::id())->orderByDesc('id')->get();
        $withdraws = Withdrawal::where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('app.main.history.history', compact('recharges', 'withdraws'));
    }

    public function update_profile(Request $request)
    {
        $user = User::find(Auth::id());
        $path = uploadImage(false, $request, 'photo', 'upload/profile/', 200, 200, $user->photo);
        $user->photo = $path ?? $user->photo;

        $user->update();
        return redirect()->route('my.profile')->with('success', 'Successful');
    }

    public function personal_details()
    {
        return view('app.main.update_personal_details');
    }

    public function bonus_ledger()
    {
        $datas = BonusLedger::with(['bonus', 'user'])->where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('app.main.bonus.bonus-preview', compact('datas'));
    }

    public function payment_ledger()
    {
        $payments = Deposit::where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('app.main.recharge.payment-preview', compact('payments'));
    }

    public function withdraw_ledger()
    {
        $withdraws = Withdrawal::with('payment_method')->where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('app.main.withdraw.withdraw-preview', compact('withdraws'));
    }


    public function notice()
    {
        $datas = Notice::where('status', 'active')->orderByDesc('id')->get();
        return view('app.main.notice', compact('datas'));
    }


    public function card()
    {
        $methods = PaymentMethod::where('status', 'active')->where('id', '!=', 4)->get();

        return view('app.main.gateway_setup', compact('methods'));
    }

    public function setupGatewayView(Request $request)
    {
        if ($request->has('password') && Hash::check($request->password, Auth::user()->password))
        {
            if ($request->gateway_method && $request->gateway_number) {
                User::where('id', Auth::id())->update([
                    'name' => $request->name,
                    'gateway_method' => $request->gateway_method,
                    'gateway_number' => $request->gateway_number,
                ]);
                return redirect()->route('user.card')->with('success', 'Card added.');
            } else {
                return redirect()->route('user.card')->with('error', 'Something wrong.');
            }
        }else {
            return redirect()->route('user.card')->with('error', 'Password not match');
        }
    }


    public function setupGateway(Request $request)
    {
        $code = session()->get('code');
        if ($code != null) {
            if ($request->code == $code) {
                User::where('id', Auth::id())->update([
                    'gateway_method' => $request->gateway_method,
                    'gateway_number' => $request->gateway_number,
                ]);
                return redirect()->route('user.card')->with('success', 'Successful.');
            } else {
                return redirect()->route('user.card')->with('error', 'Verification dode does not match.');
            }
        } else {
            return redirect()->route('user.card')->with('error', 'something went wrong...');
        }
    }

    public function invite()
    {
        return view('app.main.invite');
    }

    public function help_center()
    {
        return view('app.main.help_center');
    }

    public function add_bank()
    {
        return view('app.main.bank.index');
    }

    public function add_bank_setup()
    {
        return view('app.main.bank.index_setup');
    }

    public function company()
    {
        return view('app.main.company');
    }

    public function announcement()
    {
        return view('app.main.announcement');
    }

    public function rules()
    {
        return view('app.main.rules');
    }

    public function add_bank_setup_confirm(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'realname' => 'required',
            'gateway_method' => 'required',
            'gateway_number' => 'required|numeric',
        ]);

        if ($validate->fails()) {
            return redirect()->route('user.bank')->withErrors($validate->errors());
        }

        $user = User::find(Auth::id());

        $user->realname = $request->realname;
        $user->gateway_number = $request->gateway_number;
        $user->gateway_method = $request->gateway_method;
        $user->update();
        return redirect()->route('user.bank')->with('success', 'Successful');
    }

    public function delete_bank_acc()
    {
        $user = User::find(Auth::id());
        $user->bank_name = null;
        $user->gateway_number = null;
        $user->gateway_method = null;
        $user->update();
        return redirect()->route('user.bank')->with('success', 'Account delete');
    }


    //update user name
    public function update_name(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->update();
        return redirect()->route('setting')->with('success', 'Name changed success');
    }

    public function setting_acc_number_bkash(Request $request)
    {
        $user = User::find(Auth::id());
        $user->bkash = $request->bkash;
        $user->update();
        return redirect()->route('setting')->with('success', 'bKash number changed success');
    }

    public function setting_acc_number_nagad(Request $request)
    {
        $user = User::find(Auth::id());
        $user->nagad = $request->nagad;
        $user->update();
        return redirect()->route('setting')->with('success', 'Nagad number changed success');
    }

    public function setting_acc_number_usdt(Request $request)
    {
        $user = User::find(Auth::id());
        $user->usdt = $request->usdt;
        $user->update();
        return redirect()->route('setting')->with('success', 'USDT number changed success');
    }

    public function setting_withdraw_password(Request $request)
    {
        $user = User::find(Auth::id());
        $user->w_password = $request->wpass;
        $user->update();
        return redirect()->route('setting')->with('success', 'Withdraw password changed success');
    }

    public function setting_change_password(Request $request)
    {
        //Check current password
        $user = User::find(Auth::id());
        if (Hash::check($request->old_password, $user->password)) {
            if ($request->new_password == $request->confirm_password) {
                $user->password = Hash::make($request->new_password);
                $user->update();
                return redirect()->route('login_password')->with('success', 'Password changed');
            } else {
                return redirect()->route('login_password')->with('success', 'Password not match.');
            }
        } else {
            return redirect()->route('login_password')->with('success', 'Password not match');
        }
    }

    public function record()
    {
        return view('app.main.record');
    }

    public function invite_task()
    {
        $user = Auth::user();
        $first_level_users = User::where('ref_by', $user->ref_id)->get();

        return view('app.main.invite_task', compact('first_level_users'));
    }

    public function received_refer_bonus()
    {
        $user = User::where('id', auth()->id())->first();

        if ($user->register_refer_bonus > 0){
            $user->balance = $user->register_refer_bonus + $user->balance;
            $user->register_refer_bonus = 0;
            $user->save();
            return redirect()->back()->with('success', 'Reword received');
        }else{
            return redirect()->back()->with('success', 'Amount Not Eligible');
        }
    }


    public function confirm_submit(Request $request)
    {
        $data = $request->all();
        $model = new Deposit();
        $model->user_id = $data['ui'];
        $model->method_name = $data['pm'];
        $model->method_number = '01000000000';
        $model->order_id = $data['oid'];
        $model->transaction_id = $data['tid'];
        $model->number = $data['aca'];
        $model->amount = $data['amount'];
        $model->final_amount = $data['amount'];
        $model->usdt = $data['amount'] / setting('rate');
        $model->date = Carbon::now();
        $model->status = 'pending';
        $model->save();
        return response()->json(['status'=>true, 'data'=> $data]);
    }

    public function download_apk(){
        $file= public_path('cow.apk');
        return response()->file($file ,[
            'Content-Type'=>'application/vnd.android.package-archive',
            'Content-Disposition'=> 'attachment; filename="cow.apk"',
        ]) ;
    }


    public function chat()
    {
        return view('app.main.order.order');
    }
}







