<?php

namespace App\Http\Controllers\user;

use App\Models\Fund;
use App\Models\FundInvest;
use App\Models\User;
use App\Models\UserLedger;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFundInvestController extends Model
{
    use HasFactory;

    public function my_fund()
    {
        $myFunds = FundInvest::where('user_id', Auth::id())->where('status', 'active')->get();
        foreach ($myFunds as $fund) {
            $xTime = Carbon::parse($fund->validity_expired);
            if ($xTime->isPast()) {
                if ($fund->status == 'active') {
                    //Insert Balance into user balance
                    $user = User::where('id', $fund->user_id)->first();
                    $user->balance = $user->balance + $fund->return_amount;
                    $user->save();

                    //Update FunInvest Record
                    $fIn = FundInvest::where('id', $fund->id)->first();
                    $fIn->status = 'inactive';
                    $fIn->save();

                    $ledger = new UserLedger();
                    $ledger->user_id = $user->id;
                    $ledger->reason = 'fund';
                    $ledger->perticulation = 'Congratulations You have received your fund with commission. ';
                    $ledger->amount = $fund->return_amount;
                    $ledger->debit = $fund->return_amount;
                    $ledger->status = 'approved';
                    $ledger->date = date('d-m-Y H:i');
                    $ledger->save();
                }
            }
        }
        return view('app.main.fund.my-fund');
    }

    public function fund()
    {
        $funds = Fund::get();
        $congratulation = false;

        //My funds
        $myFunds = FundInvest::where('user_id', Auth::id())
            ->where('status', 'active')->get();

        foreach ($myFunds as $fund)
        {
            //initial expired date
            $fund_invest_date = new Carbon($fund->validity_expired);
            if ($fund_invest_date->isPast() && $fund->status == 'active'){
                //get expired invest fund

                $expired_invest_fund = FundInvest::with(['fund', 'user'])->find($fund->id);

                //get amount with commission
                $commission = ($expired_invest_fund->fund->price * $expired_invest_fund->fund->commission) / 100;

                $calculate_total_amount = $commission + $expired_invest_fund->fund->price;

                //Added balance in user
                User::where('id', $expired_invest_fund->user->id)->update([
                    'balance'=> $expired_invest_fund->user->balance + $calculate_total_amount
                ]);

                FundInvest::where('id', $expired_invest_fund->id)->update([
                    'status'=> 'inactive'
                ]);

                //Create user ledger
                $ledger = new UserLedger();
                $ledger->user_id = $expired_invest_fund->user->id;
                $ledger->reason = 'fund_income';
                $ledger->perticulation = 'Congratulation. you are already received fund invest income';
                $ledger->amount = $calculate_total_amount;
                $ledger->debit = $calculate_total_amount;
                $ledger->status = 'approved';
                $ledger->date = date('y-m-d');
                $ledger->save();

                $congratulation = true;
            }
        }

        return view('app.main.fund.fund', compact('funds', 'congratulation'));
    }

    public function fund_confirmation($id)
    {
        $fund = Fund::find($id);

        $user = Auth::user();

        if ($user->balance >= $fund->minimum_invest){

            //User balance update
            User::where('id', $user->id)->update(['balance'=> $user->balance - $fund->minimum_invest]);

            //Insert new record into fundInvest for purchase
            $model = new FundInvest();
            $model->user_id = Auth::id();
            $model->fund_id = $fund->id;
            $model->validity_expired = Carbon::now()->addDays($fund->validity);
            $model->price = $fund->minimum_invest;
            $model->return_amount = $fund->commission;
            $model->status = 'active';
            $model->save();

            //Create a ledger
            $ledger = new UserLedger();
            $ledger->user_id = Auth::id();
            $ledger->reason = 'invest_fund';
            $ledger->perticulation = 'Congratulations '.$user->name. ' Your fund invest successfully done.';
            $ledger->amount = $fund->minimum_invest;
            $ledger->date = Carbon::now();
            $ledger->save();
            return redirect()->route('fund')->with('message', 'Fund invest successful.');
        }else{
            return redirect()->route('fund')->with('message', 'Sufficient balance too low.');
        }
    }
}
