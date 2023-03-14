@extends('base.layout')

@push('styles')

@endpush

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <div style="float: right;" class="col-sm-3 input-group">
        <input type="text" class="form-control bg-light border-1 small"
            placeholder="search?" aria-label="Search"
            aria-describedby="basic-addon2" style="border-color: #3f51b5;">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection

@push('scripts')

@endpush