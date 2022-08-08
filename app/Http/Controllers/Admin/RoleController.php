<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepository;
use Illuminate\Support\Facades\DB;
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
        DB::beginTransaction();
        try {
            $role = $this->roleRepository->save($request->validated());
            $role->permissions()->sync($request->input('permission_ids'));

            DB::commit();
        } catch (Exception $roles) {
            DB::rollBack();

            throw new Exception($roles->getMessage('massage','error, please try again'));
        }

        return redirect()->route('admin.role.show', $role->id);
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
            'role' => $role,
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }

    public function update(RoleRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $role = $this->roleRepository->save($request->validated(), ['id' => $id]);
        $role->permissions()->sync($request->input('permission_ids'));

            DB::commit();
        } catch (Exception $roles) {
            DB::rollBack();

            throw new Exception($roles->getMessage('massage','error, please try again'));
        }

        return redirect()->route('admin.role.index');
    }

    public function destroy($id)
    {
        $this->roleRepository -> deleteById($id);
        return redirect()->route('admin.role.index');
    }
}
