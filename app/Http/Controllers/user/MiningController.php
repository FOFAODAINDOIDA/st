<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;

class MiningController extends Controller
{
    public function running_mining()
    {
        return view('app.main.order.order');
    }

    public function start_mining($pack_id){
        $parchase = Purchase::where('package_id', $pack_id)->where('user_id', \auth()->id())->where('status', 'active')->orderByDesc('id')->first();
        if ($parchase){
            $parchase->running_status = 'running';
            $parchase->save();
        }
        return back();
    }


    public function received_amount()
    {
        $user = Auth::user();
        if ($user->receive_able_amount > 0){
            
            // $first_ref = User::where('ref_id', Auth::user()->ref_by)->first();
            //     if ($first_ref){
            //         $amount = $user->receive_able_amount * 8 / 100;
            //         User::where('id', $first_ref->id)->update([
            //             'balance' => $first_ref->balance + $amount
            //         ]);

            //         $ledger = new UserLedger();
            //         $ledger->user_id = $first_ref->id;
            //         $ledger->get_balance_from_user_id = $user->id;
            //         $ledger->reason = 'refer_bonus';
            //         $ledger->perticulation = 'Congratulations';
            //         $ledger->amount = $amount;
            //         $ledger->debit = $amount;
            //         $ledger->status = 'approved';
            //         $ledger->step = 'first';
            //         $ledger->date = date('d-m-Y H:i');
            //         $ledger->save();

            //         $second_ref = User::where('ref_id', $first_ref->ref_by)->first();
            //         if ($second_ref){
            //             $amount = $user->receive_able_amount * 3 / 100;
            //             User::where('id', $second_ref->id)->update([
            //                 'balance' => $second_ref->balance + $amount
            //             ]);

            //             $ledger = new UserLedger();
            //             $ledger->user_id = $second_ref->id;
            //             $ledger->get_balance_from_user_id = $user->id;
            //             $ledger->reason = 'refer_bonus';
            //             $ledger->perticulation = 'Congratulations. you have received refer income from '.$user->name ?? $user->username;
            //             $ledger->amount = $amount;
            //             $ledger->debit = $amount;
            //             $ledger->status = 'approved';
            //             $ledger->step = 'second';
            //             $ledger->date = date('d-m-Y H:i');
            //             $ledger->save();

            //             $third_ref = User::where('ref_id', $second_ref->ref_by)->first();
            //             if ($third_ref){
            //                 $amount = $user->receive_able_amount * 1 / 100;
            //                 User::where('id', $third_ref->id)->update([
            //                     'balance' => $third_ref->balance + $amount
            //                 ]);

            //                 $ledger = new UserLedger();
            //                 $ledger->user_id = $third_ref->id;
            //                 $ledger->get_balance_from_user_id = $user->id;
            //                 $ledger->reason = 'refer_bonus';
            //                 $ledger->perticulation = 'Congratulations. you have received refer income from '.$user->name ?? $user->username;
            //                 $ledger->amount = $amount;
            //                 $ledger->debit = $amount;
            //                 $ledger->status = 'approved';
            //                 $ledger->step = 'third';
            //                 $ledger->date = date('d-m-Y H:i');
            //                 $ledger->save();
            //             }
            //         }
            //     }
            
            
            User::where('id', $user->id)->update([
                'balance'=> $user->receive_able_amount + $user->balance,
                'receive_able_amount'=> 0
            ]);
            return back()->with('success', 'Received');
        }else{
            return back()->with('error', 'Amount zero');
        }
    }

    public function process()
    {
        return view('app.main.order.process');
    }
}








