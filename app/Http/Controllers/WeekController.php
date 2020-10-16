<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;

class WeekController extends Controller
{
    public function monday($id)
    {
        $user = User::find($id);
        $customers = $user->customers()->where('day_of_the_week', '0')->get();
        $text = '月曜日の';
        if(\Auth::id() == $user->id) {
            return view('customer.weeks', [
                'customers' => $customers,
                'text' => $text,
            ]);
        }
        
        return redirect('/');
    }
    
    public function tuesday($id)
    {
        $user = User::find($id);
        $customers = $user->customers()->where('day_of_the_week', '1')->get();
        $text = '火曜日の';
        if(\Auth::id() == $user->id) {
            return view('customer.weeks', [
                'customers' => $customers,
                'text' => $text,
            ]);
        }
        return redirect('/');
    }
    
    public function wednesday($id)
    {
        $user = User::find($id);
        $customers = $user->customers()->where('day_of_the_week', '2')->get();
        $text = '水曜日の';
        if (\Auth::id() == $user->id) {
            return view('customer.weeks', [
                'customers' => $customers,
                'text' => $text,
            ]);
        }
        return redirect('/');
    }
    
    public function thursday($id)
    {
        $user = User::find($id);
        $customers = $user->customers()->where('day_of_the_week', '3')->get();
        $text = '木曜日の';
        if (\Auth::id() == $user->id) {
            return view('customer.weeks', [
                'customers' => $customers,
                'text' => $text,
            ]);
        }
        return redirect('/');
        
    }
    
    public function friday($id)
    {
        $user = User::find($id);
        $customers = $user->customers()->where('day_of_the_week', '4')->get();
        $text ='金曜日の';
        if(\Auth::id() == $user->id) {
            return view('customer.weeks', [
                'customers' => $customers,
                'text' => $text,
            ]);
        }
        return redirect('/');
    }
}
