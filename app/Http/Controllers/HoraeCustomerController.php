<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;

class HoraeCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = Customer::all();
      return view('admin.customers.list_customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.customers.form_ins_customers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $customer = new customer;

      $customer->codigo_cliente = $request->codigo_cliente;
      $customer->nombre_cliente = $request->nombre_cliente;
      $customer->email_cliente = $request->email_cliente;
      $customer->telefono_cliente = $request->telefono_cliente;
      $customer->contacto_cliente = $request->contacto_cliente;
      $customer->slug = Str::slug($request->nombre_cliente);
      $customer->save();

      return redirect('admin/customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

      return view('admin.customers.form_edit_customers')->withCustomer($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {


      $customer->codigo_cliente = $request->codigo_cliente;
      $customer->nombre_cliente = $request->nombre_cliente;
      $customer->email_cliente = $request->email_cliente;
      $customer->telefono_cliente = $request->telefono_cliente;
      $customer->contacto_cliente = $request->contacto_cliente;
      $customer->slug = Str::slug($request->nombre_cliente);
      $customer->save();

      return redirect('admin/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
      $customer->delete();
      return redirect('admin/customers');
    }
}
