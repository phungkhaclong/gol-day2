<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\Role\RoleRepository;
use App\Repositories\PermissionGroup\PermissionGroupRepositoryInterface;
use App\Repositories\PermissionGroup\PermissionGroupRepository;

class RoleController extends Controller
{

    protected $roleRepository;
    protected $permissionGroupRepository;

    public function __construct(RoleRepository $roleRepository, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index()
    {
        return view('admin.role.index', [
            'roles' => $this->roleRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.role.form', [
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }

    public function store(RoleRequest $request)
    {

    }

    public function show($id)
    {
        if (! $role = $this->roleRepository->findById($id)) {
            abort(404);
        }

        return view('admin.role.show', [
            'role' => $role,
        ]);
    }

    public function edit($id)
    {
        if (! $role = $this->roleRepository->findById($id)) {
            abort(404);
        }

        return view('admin.role.form', [
            'roles' => $role,
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $this->roleRepository -> deleteById($id);
        return redirect()->route('admin.role.index');
    }
}
