<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('Categories')
            ->orderBy('parentId')
            ->orderBy('name', 'ASC')
            ->get();

        return view('dashboard.categories.index', [
            'categories' => $categories,
            'status' => session('status'),
        ]);
    }
    public function create()
    {
        return view('dashboard.categories.create');
    }
    public function store(Request $request)
    {
        DB::table('categories')->insert([
            'name' => $request->post('name'),
            'slug' => $request->post('slug'),
            'parentId' => $request->post('parentId'),
            'created_at' => now(),
        ]);
        return redirect()
            ->route('dashboard.categories.index')
            ->with('status', 'category created');
    }
}
