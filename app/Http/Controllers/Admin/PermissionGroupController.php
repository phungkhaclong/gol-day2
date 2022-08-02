<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionGroupRequest;
use App\Repositories\PermissionGroup\PermissionGroupRepository;

class PermissionGroupController extends Controller
{
    protected $permissionGroupRepository;

    public function __construct(PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index()
    {
        return view('admin.permission_group.index', [
            'permissionGroups' => $this->permissionGroupRepository->paginate(),
        ]);
    }


    public function create()
    {
        return view('admin.permission_group.create');
    }

    public function store(PermissionGroupRequest $request)
    {
        $this->permissionGroupRepository->save($request->validated());

        return redirect()->route('admin.permission_group.index');
    }

    public function show($id)
    {
        $permissionGroup = $this->permissionGroupRepository->findById($id);

        return view('admin.permission_group.show', [
            'permissionGroup' => $permissionGroup,
        ]);
    }


    public function edit($id)
    {
        $permissionGroup = $this->permissionGroupRepository->findById($id);

        return view('admin.permission_group.edit', [
            'permissionGroup' => $permissionGroup,
        ]);
    }


    public function update(PermissionGroupRequest $request, $id)
    {
        $this->permissionGroupRepository->save($request->validated(), ['id' => $id]);

        return redirect()->route('admin.permission_group.index');
    }


    public function destroy($id)
    {
        $this->permissionGroupRepository->deleteById($id);

        return redirect()->route('admin.permission_group.index');
    }
}
