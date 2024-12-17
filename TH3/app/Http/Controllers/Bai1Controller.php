<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Medicine;

class Bai1Controller extends Controller
{
    public function index()
    {
        $data = Sale::with('medicine')->get();
        return view('bai1.index', compact('data'));
    }

    public function create()
    {
        $data = Medicine::all();
        return view('bai1.create', compact('data'));
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|after_or_equal:today',
            'phone' => 'required',
        ], [
            'name.required' => 'Vui lòng chọn tên.',

            'quantity.required' => 'Vui lòng nhập số lượng.',
            'quantity.integer' => 'Số lượng phải là số nguyên.',
            'quantity.min' => 'Số lượng phải ít nhất là 1.',

            'date.required' => 'Vui lòng chọn ngày.',
            'date.after_or_equal' => 'Ngày phải từ hôm nay trở đi.',

            'phone.required' => 'Vui lòng nhập số điện thoại.',
        ]);

        $medicineName = Medicine::where('name', $request->name)->first();

        if ($medicineName) {
            Sale::create([
                'medicine_id' => $medicineName->id,
                'quantity' => $request->quantity,
                'sale_date' => $request->date,
                'customer_phone' => $request->phone
            ]);
            session()->flash('success', 'Thêm thành công!');
        }


        return redirect()->route('bai1.index')->with('success', 'Thêm bài viết thành công!');
    }


    public function edit($sale_id)
    {
        $sale = Sale::with('medicine')->findOrFail($sale_id);
        $medicines = Medicine::all();
        return view('bai1.edit', compact('sale' , 'medicines'));
    }

    public function update(Request $request, $sale_id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer|min:1',
            'date' => 'required',
            'phone' => 'required',
        ], [
            'name.required' => 'Vui lòng chọn tên.',

            'quantity.required' => 'Vui lòng nhập số lượng.',
            'quantity.integer' => 'Số lượng phải là số nguyên.',
            'quantity.min' => 'Số lượng phải ít nhất là 1.',

            'date.required' => 'Vui lòng chọn ngày.',

            'phone.required' => 'Vui lòng nhập số điện thoại.',
        ]);
        $sale = Sale::find($sale_id);
        $medicineName = Medicine::where('name', $request->name)->first();

        $sale->update([
            'medicine_id' => $medicineName->id,
            'quantity' => $request->quantity,
            'sale_date' => $request->date,
            'customer_phone' => $request->phone
        ]);
    
        return redirect()->route('bai1.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    public function destroy($sale_id)
    {
        $sale = Sale::find($sale_id);
        $sale->delete();
        return redirect()->route('bai1.index')->with('success', 'Sản phẩm đã được xóa.');
    }
}
