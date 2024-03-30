<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index(Brand $brands)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('brand.index', compact('brands', 'categories'));
    }
    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        $data = $request->all();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/app/public/uploads'));
        $data['image'] = $imageName;

        Brand::create($data);

        return redirect()->back()->with(['message' => 'Brand Created Succesfully ', 'alert' => 'alert-success']);
    }

    public function show()
    {
        $brands = Brand::all();
        return view('brand.show', compact('brands', ));
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back()->with(['message' => 'Brand Deleted Successfully !!', 'alert' => 'alert-success']);
    }
}
