<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Database\Seeders\CustomerSeeder;
class CustomersController extends Controller
{
    
     /**
      * list all customers
      *
      * @return \Illuminate\Http\Response
      */
    public function list(){
        $customerData=  Customer::get();
        return view('customers.list',['customers'=>$customerData]);
    
    }
    /**
     * show the form to add new customer
     * 
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('customers.add'); 
    }
    /**
     * insert the new customer to database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function insert(Request $request)
    {
        /**
        * check data validation
        */
        $input=$request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6|max:30',
            'rePassword'=> 'required|same:password',
            'phone' => 'required|numeric|digits:10|unique:customers'
        ]);
        $customerData = Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone')
        ]);
        return view('layout.home');
        //return redirect('/customers/add') ->with('message', 'Your post has been added!');
       
    }
    /**
     * update the specified customer in database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tableData=  Customer::where('id',$id)->first();
        return view('customers.edit',['customers'=>$tableData]);
    }
    /**
     * update the specified table in database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6|max:30',
            'rePassword'=> 'required|same:password',
            'phone' => 'required|numeric|digits:10|unique:customers'
        ]);
        $tableData = Customer::where('id',$id)
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone')
        ]);
        return view('layout.home');
    }
}
