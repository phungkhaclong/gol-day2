<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\PhoneZalo\PhoneZaloRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    protected $customerRepository;
    protected $phoneZaloRepository;

    public function __construct(
        CustomerRepository $customerRepository,
        PhoneZaloRepository $phoneZaloRepository
    ) {
        $this->customerRepository = $customerRepository;
        $this->phoneZaloRepository = $phoneZaloRepository;
    }
    public function index(Request $request)
    {
        return view('admin.customer.index', [
            'customer' => $this->customerRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.customer.form');
    }

    public function store(CustomerRequest $request)
    {
        DB::beginTransaction();
        try {
            $value = $request->all();
            $value['user_created'] = Auth::user()->name;
            $customer = $this->customerRepository->save($value);
            foreach ($value['phonezalo'] as $phonezalo) {
                $customer->phonezalos()->create([
                    'phonezalo' => $phonezalo,
                ]);
            }
            DB::commit();
            return redirect()
                    ->route('admin.customer.index')
                    ->with('message', 'Customer created successfully.');
        } catch (Exception $customer) {
            DB::rollBack();

            return redirect()
                ->back()
                ->with('massage', 'error, please try again');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (!($customer = $this->customerRepository->findById($id))) {
            abort(404);
        }
        return view('admin.customer.form', [
            'customer' => $customer,
        ]);
    }

    public function update(CustomerRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $value = $request->all();
            $customer = $this->customerRepository->save($request->all(), [
                'id' => $id,
            ]);

            $phones = [];
            foreach ($value['phonezalo'] as $phonezalo) {
                array_push($phones, ['phonezalo' => $phonezalo, 'customer_id'=> $id]);
            }
            $customer->phonezalos()->delete();
            $customer->phonezalos()->upsert($phones, 'phonezalo');
            DB::commit();
            return redirect()
                    ->route('admin.customer.index')
                    ->with('message', 'Customer update successfully.');
        } catch (Exception $customer) {
            DB::rollBack();

            return redirect()
                ->back()
                ->with('massage', 'error, please try again');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->customerRepository->deleteById($id);
            DB::commit();
            return redirect()
                ->route('admin.customer.index')
                ->with('message', 'Successful Delete');
        } catch (Exception $customer) {
            DB::rollBack();

            return redirect()
                ->back()
                ->with('massage', 'error, please try again');
        }
    }
}
