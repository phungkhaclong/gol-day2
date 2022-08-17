<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;


class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return view('admin.category.index', [
            'categories' => $this->categoryRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.category.form');
    }


    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->save($request->validated());
        return redirect()->route('admin.category.index')->with('message', 'Successful added');
    }

    public function show($id)
    {
        if (! $category = $this->categoryRepository->findById($id)) {
            abort(404);
        }

        return view('admin.category.form', [
            'category' => $category,
            'show' => "show",
        ]);
    }

    public function edit($id)
    {
        if (! $category = $this->categoryRepository->findById($id)) {
            abort(404);
        }

        return view('admin.category.form', [
            'category' => $category,
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->categoryRepository->save($request->validated(),['id' => $id]);

        return redirect()->route('admin.category.index');
    }


    public function destroy($id)
    {
        $this->categoryRepository->deleteById($id);

        return redirect()->route('admin.category.index')->with('message', 'Successful delete');
    }
}
