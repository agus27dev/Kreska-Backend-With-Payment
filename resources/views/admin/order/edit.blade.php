@extends('layouts.app', ['title' => 'Edit Produk'])

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-shopping-bag"></i> INPUT RESI</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.order.update', $invoice->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>TAMBAH NO RESI</label>
                            <input type="text" name="no_resi" value="{{ old('no_resi', $invoice->no_resi) }}"
                                placeholder="Masukkan No Resi"
                                class="form-control @error('no_resi') is-invalid @enderror">
                            @error('no_resi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary mr-1 btn-submit"
                            type="submit">
                            <i class="fa fa-paper-plane"></i> UPDATE
                        </button>
                        <button class="btn btn-sm btn-warning btn-reset"
                            type="reset">
                            <i class="fa fa-redo"></i> RESET
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

