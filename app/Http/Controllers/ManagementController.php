<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

use App\User;

class ManagementController extends Controller
{
    public function index() 
    {
        $data = [];
        
        if(\Auth::check()) {
            $user = \Auth::user();
            $customers = $user->customers()->orderBy('created_at')->get();
            
            $data = [
                'user' => $user,
                'customers' => $customers,
            ];
            return view('index', $data);
        }
        return view('index');
        
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'address' => 'required',
            'telephone' => 'required|max:11',
            'email' => 'email|nullable',
            'day_of_the_week' => 'required',
            'coffee_a_large' => 'required|numeric',
            'coffee_a_small' => 'required|numeric',
            'coffee_b_large' => 'required|numeric',
            'coffee_b_small' => 'required|numeric',
            'coffee_c_large' => 'required|numeric',
            'coffee_c_small' => 'required|numeric',
            'chocolate_a' => 'required|numeric',
            'chocolate_b' => 'required|numeric',
            'information' => 'nullable',
        ]);
        
        $request->user()->customers()->create([
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'day_of_the_week' => $request->day_of_the_week,
            'coffee_a_large' => $request->coffee_a_large,
            'coffee_a_small' => $request->coffee_a_small,
            'coffee_b_large' => $request->coffee_b_large,
            'coffee_b_small' => $request->coffee_b_small,
            'coffee_c_large' => $request->coffee_c_large,
            'coffee_c_small' => $request->coffee_c_small,
            'chocolate_a' => $request->chocolate_a,
            'chocolate_b' => $request->chocolate_b,
            'information' => $request->information,
        ]);
        
        return redirect ('/');

    }
    
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show', [
            'customer' => $customer,
        ]);
    }
    
    public function edit($id)
    {
        $customer = Customer::find($id);
        $user = $customer->user;
        if(\Auth::id() === $user->id) {
            return view('customer.edit', [
                'customer' => $customer,
            ]);
        }
        return redirect('/');
    }
    
    public function update(Request $request, $id)
    {
        $data = [];
        $customer = Customer::find($id);
        $customer->update([
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'day_of_the_week' => $request->day_of_the_week,
            'coffee_a_large' => $request->coffee_a_large,
            'coffee_a_small' => $request->coffee_a_small,
            'coffee_b_large' => $request->coffee_b_large,
            'coffee_b_small' => $request->coffee_b_small,
            'coffee_c_large' => $request->coffee_c_large,
            'coffee_c_small' => $request->coffee_c_small,
            'chocolate_a' => $request->chocolate_a,
            'chocolate_b' => $request->chocolate_b,
            'information' => $request->information,
        ]);
        
        return redirect ('/');
    }
    
    public function destroy($id) {
        $customer = Customer::find($id);
        $customer->delete();
        
        return redirect('/');
    }
}
