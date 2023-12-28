<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function list(): View
    {
        return view('category.list', [
            'categories' => Category::all(),
            'filtered' => Category::query()->whereBetween('id', [4, 7])->get(),
        ]);
    }

    public function create(): RedirectResponse
    {
        $categories = [
            ['name' => 'Name 1', 'description' => 'Description 1'],
            ['name' => 'Name 2', 'description' => 'Description 2'],
            ['name' => 'Name 3', 'description' => 'Description 3'],
            ['name' => 'Name 4', 'description' => 'Description 4'],
            ['name' => 'Name 5', 'description' => 'Description 5'],
            ['name' => 'Name 6', 'description' => 'Description 6'],
            ['name' => 'Name 7', 'description' => 'Description 7'],
            ['name' => 'Name 8', 'description' => 'Description 8'],
            ['name' => 'Name 9', 'description' => 'Description 9'],
            ['name' => 'Name 10', 'description' => 'Description 10'],
        ];
        foreach ($categories as $item) {
            $category = Category::create([
                'name' => $item['name'],
                'description' => $item['description']
            ]);
            $category->save();
        }

        return redirect('/category/list');
    }

    public function update(): RedirectResponse
    {
        $category = Category::query()->findOrFail(5);
        $category->name = 'Name Changed!';
        $category->description = 'Description Changed!';
        $category->save();
        return redirect('/category/list');
    }

    public function delete(): RedirectResponse
    {
        $category = Category::all()->last();
        $category->delete();
        return \redirect('/category/list');
    }
}
