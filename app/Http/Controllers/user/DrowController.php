<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bonus;
use App\Models\Drow;
use App\Models\LuckyLedger;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrowController extends Controller
{
    public function drow()
    {
        $code = Bonus::where('status', 'active')->orderByDesc('id')->first();
        return view('app.main.drow.index', compact('code'));
    }

    public function get_bonus($draw_id){
        $draw = Drow::find($draw_id);
        $user = User::find(Auth::id());

        //check next draw click or not
        $clicked = LuckyLedger::where('user_id', $user->id)->orderByDesc('id')->first();
        if ($clicked){
            $get_next_rec = Drow::where('id', '>', $clicked->draw_id)->first();
            if ($get_next_rec->id != $draw_id){
                return redirect()->route('user.drow')->with('error', 'Don"t jump.');
            }
        }

        //check today is clicked
        if ($clicked){
            //Already use this
            if (LuckyLedger::where('user_id', $user->id)->where('draw_id', $draw->id)->get()->count() > 0){
                return redirect()->route('user.drow')->with('error', 'Already use');
            }

            //check today or not
            $today = new Carbon($clicked->current_date);
            if (!$today->isToday()){
                //first time click this user. balance added
                $user->balance = $user->balance + $draw->amount;
            }else{
                return redirect()->route('user.drow')->with('error', 'Today Received');
            }
        }else{
            if ($user->draw_status == 'no'){
                $data = Drow::where('status', 'active')->first();
                if ($data->id != $draw->id){
                    return redirect()->route('user.drow')->with('error', "Can't jump");
                }else{
                    $user->draw_status = 'ok';
                }
            }
            //first time click this user. balance added
            $user->balance = $user->balance + $draw->amount;
        }

        //first time click this user
        $ledger = new LuckyLedger();
        $ledger->user_id = $user->id;
        $ledger->draw_id = $draw->id;
        $ledger->amount = $draw->amount;
        $ledger->current_date = Carbon::now();
        $ledger->status = 'active';
        if ($ledger->save()){
            $user->update();
        }

        return redirect()->route('user.drow')->with('success', 'Successful');
    }

    public function draw_ledger()
    {
        $datas = LuckyLedger::where('user_id', Auth::id())->where('status', 'active')->orderByDesc('id')->get();
        return view('app.main.drow.index_ledger', compact('datas'));
    }
}
