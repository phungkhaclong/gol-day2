@extends('admin.layouts.admin.master')
@section('main')

    <div class="container-fluid">
        @if (\Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li style="list-style-type: none">{!! \Session::get('message') !!}</li>
                </ul>
            </div>
        @endif
        @if (empty($customer))
            <form method="post" action="{{ route('admin.customer.store') }}">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-7">
                        @else
                            <form method="post" action="{{ route('admin.customer.update', $customer->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7">
        @endif
        <div class="container-fluid">
            <label for="customer_id" class="form-label">Mã khách hàng</label>
            <input name="customer_id" id="id" class="form-control mb-2 @error('customer_id') is-invalid @enderror"
                value="{{ old('customer_id', $customer->customer_id ?? '') }}">
            @error('customer_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="name" class="form-label">Thông tin khách hàng</label>
            <input name="name" id="id" class="form-control mb-2 @error('name') is-invalid @enderror"
                value="{{ old('name', $customer->name ?? '') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="address" class="form-label">Địa chỉ</label>
            <input name="address" id="id" class="form-control mb-2 @error('address') is-invalid @enderror"
                value="{{ old('address', $customer->address ?? '') }}">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="phone" class="form-label">Điên thoại</label>
            <input name="phone" type="tel" id="id"
                class="form-control mb-2 @error('phone') is-invalid @enderror"
                value="{{ old('phone', $customer->phone ?? '') }}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="container-fluid">
            <label for="phonezalo" class="form-label">Số zalo</label>
            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="inputFormRow">
                            @if (!empty($customer))
                                @foreach ($customer->phonezalos as $phonezalo)
                                    <div class="input-group mb-3">
                                        <input type="tel" name="phonezalo[]" class="form-control m-input"
                                            placeholder="" value="{{ $phonezalo->phonezalo }}" autocomplete="off">
                                        <div class="input-group-append">
                                            <button id="removeRow" type="button" class="btn btn-danger">Xóa</button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="input-group mb-3">
                                    <input type="tel" name="phonezalo[]" class="form-control m-input" placeholder=""
                                        value="" autocomplete="off">
                                    <div class="input-group-append">
                                        <button id="removeRow" type="button" class="btn btn-danger">Xóa</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-info" style="margin-top: -15px;">Thêm</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid" style="margin-top: 10px;">
            <label for="email" class="form-label">Email</label>
            <input name="email" id="id" class="form-control mb-2 @error('email') is-invalid @enderror"
                value="{{ old('email', $customer->email ?? '') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="contact" class="form-label">Người liên hệ</label>
            <input name="contact" id="id" class="form-control mb-2"
                value="{{ old('contact', $customer->contact ?? '') }}">
            @error('contact')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="poition" class="form-label">Chức vụ</label>
            <input name="position" id="id" class="form-control mb-2 @error('position') is-invalid @enderror"
                value="{{ old('position', $customer->position ?? '') }}">
            @error('position')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="unit" class="form-label">Tên đơn vị</label>
            <input name="unit" id="id" class="form-control mb-2 @error('unit') is-invalid @enderror"
                value="{{ old('unit', $customer->unit ?? '') }}">
            @error('unit')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="tax_code" class="form-label">Mã số thuế</label>
            <input name="tax_code" id="id" class="form-control mb-2 @error('tax_code') is-invalid @enderror"
                value="{{ old('tax_code', $customer->tax_code ?? '') }}">
            @error('tax_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container-fluid">
            <label for="invoice_address" class="form-label">Địa chỉ hóa đơn</label>
            <textarea name="invoice_address" id="id"
                class="form-control mb-2 @error('invoice_address') is-invalid @enderror">{{ old('invoice_address', $customer->invoice_address ?? '') }}</textarea>
            @error('invoice_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="container-fluid">
            <label for="bank_account" class="form-label">Tài khoản ngân hàng</label>
            <input name="bank_account" id="id"
                class="form-control mb-2 @error('bank_account') is-invalid @enderror"
                value="{{ old('bank_account', $customer->bank_account ?? '') }}">
            @error('bank_account')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-5">
        <div class="mb-3">
            <label for="type" class="form-label">Loại khách</label>
            <select id="type" name="customer_type" class="form-select" aria-label="Default select example">
                <option value="{{ old('customer_type', $customer->customer_type ?? '') }}" selected disabled hidden>
                    {{ old('customer_type', $customer->customer_type ?? '') }}</option>
                <option value="Khách vip">Khách vip</option>
                <option value="Khách thông thường">Khách thông thường</option>
                <option value="Khách vãng lai">Khách vãng lai</option>
            </select>
        </div>
        <div class="mb-3">
        <input type="checkbox" name="accounting_rights" id="" value="{{ old('accounting_rights', $customer->accounting_rights ?? '') }}"> Chia sẻ quyền cho kế toán
        <br>
    </div>
    <div class="mb-3">
        <input type="checkbox" name="key_order" id="" value="{{ old('key_order', $customer->key_order ?? '') }}"> Khoá tạo đơn hàng, khách hàng đã quá hạn mức
    </div>
        <div class="mb-3">
            <label for="debt_term" class="form-label">Mô tả nợ hạn định </label>
            <textarea name="debt_term" id="" cols="80" rows="5">{{ old('debt_term', $customer->debt_term ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="allowable_debt" class="form-label"> Hạn mức nợ cho phép</label>
            <input name="allowable_debt" id="id" class="form-control mb-2"
                value="{{ old('allowable_debt', $customer->allowable_debt ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="allowable_debt_description	" class="form-label">Mô tả nợ cho phép</label>
            <textarea name="allowable_debt_description	" id="" cols="80" rows="5">{{ old('allowable_debt_description	', $customer->allowable_debt_description	 ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="customer_notes">Ghi chú khách hàng</label>
            <textarea name="customer_notes" id="default">{{ old('customer_notes', $customer->customer_notes ?? '') }}</textarea>
        </div>
    </div>
    </div>
    <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
    </div>
    </form>
    </div>

@stop()
