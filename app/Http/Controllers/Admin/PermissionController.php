<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\PermissionGroup\PermissionGroupRepository;

class PermissionController extends Controller
{
    protected $permissionRepository;
    protected $permissionGroupRepository;

    public function __construct(PermissionRepository $permissionRepository, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }


    public function index()
    {
        return view('admin.permission.index', [
            'permissions' => $this->permissionRepository->paginate(),
        ]);
    }


    public function create()
    {
        return view('admin.permission.form', [
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }


    public function store(PermissionRequest $request)
    {
        $this->permissionRepository->save($request->validated());

        return redirect()->route('admin.permission.index');
    }


    public function show($id)
    {
        if (!$permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission.show', [
            'permission' => $permission,
        ]);
    }


    public function edit($id)
    {
        if (!$permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }

        return view('admin.permission.form', [
            'permission' => $permission,
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }


    public function update(PermissionRequest $request, $id)
    {
        $this->permissionRepository->save($request->validated(), ['id' => $id]);

        return redirect()->route('admin.permission.index');
    }


    public function destroy($id)
    {
        $this->permissionRepository->deleteById($id);

        return redirect()->route('admin.permission.index');
    }
}
