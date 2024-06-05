<?php

namespace App\Services;

use App\Models\Supplier;
use App\Models\SupplierAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SupplierService
{
    public function indexSuppliers()
    {
        return Supplier::all();
    }

    public function createSupplier(Request $request)
    {
        DB::beginTransaction();

        try {
            $supplier = new Supplier();
            $supplier->name = $request->input('name');
            $supplier->register_code = $request->input('register_code');
            $supplier->email = $request->input('email');
            $supplier->phone = $request->input('phone');
            $supplier->save();

            $supplierAddress = new SupplierAddress();
            $supplierAddress->supplier_id = $supplier->getKey();
            $supplierAddress->country = $request->input('country');
            $supplierAddress->zip_code = $request->input('zip_code');
            $supplierAddress->state = $request->input('state');
            $supplierAddress->city = $request->input('city');
            $supplierAddress->neighborhood = $request->input('neighborhood');
            $supplierAddress->street = $request->input('street');
            $supplierAddress->number = $request->input('number');
            $supplierAddress->save();

            DB::commit();

            return response()->json(['message' => 'Supplier created successfully'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to create supplier', 'error' => $e->getMessage()], 500);
        }
    }

    public function updateSupplier(Request $request, Supplier $supplier)
    {
        DB::beginTransaction();

        try {
            $supplier->update($request->only(['name', 'register_code', 'email', 'phone']));

            $supplierAddress = $supplier->suplierAddress();
            $supplierAddress->update($request->only(['country', 'zip_code', 'state', 'city', 'neighborhood', 'street', 'number']));

            DB::commit();

            return response()->json(['message' => 'Supplier created successfully'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to create supplier', 'error' => $e->getMessage()], 500);
        }
    }
}
