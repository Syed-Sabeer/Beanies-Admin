@extends('admin.layouts/layoutMaster')

@section('title', 'eCommerce Product List - Apps')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')

@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">eCommerce /</span> Embroidery List
    </h4>

    <!-- Product List Widget -->

    <div class="card mb-4">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">In-store Sales</h6>
                                <h4 class="mb-2">$5,345.43</h4>
                                <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                        class="badge bg-label-success">+5.7%</span></p>
                            </div>
                            <span class="avatar me-sm-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-smart-home text-body"></i></span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-4">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">Website Sales</h6>
                                <h4 class="mb-2">$674,347.12</h4>
                                <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                        class="badge bg-label-success">+12.4%</span></p>
                            </div>
                            <span class="avatar p-2 me-lg-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-device-laptop text-body"></i></span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                            <div>
                                <h6 class="mb-2">Discount</h6>
                                <h4 class="mb-2">$14,235.12</h4>
                                <p class="mb-0 text-muted">6k orders</p>
                            </div>
                            <span class="avatar p-2 me-sm-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-gift text-body"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-2">Affiliate</h6>
                                <h4 class="mb-2">$8,345.23</h4>
                                <p class="mb-0"><span class="text-muted me-2">150 orders</span><span
                                        class="badge bg-label-danger">-3.5%</span></p>
                            </div>
                            <span class="avatar p-2">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-wallet text-body"></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Product List Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Filter</h5>
            <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                <div class="col-md-4 product_status"></div>
                <div class="col-md-4 product_category"></div>
                <div class="col-md-4 product_stock"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
          <table class="datatables-products table">
              <thead class="border-top">
                  <tr>
                      <th>Id</th>
                      <th>Print Image</th>
                      <th>Print Name</th>
                      <th>Price Range</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($printing as $product)
                      <tr>
                          <td>{{ $product->id }}</td>
                          <td>
                            @if ($product->image && file_exists(public_path('storage/' . $product->image)))
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="50">
                            @else
                                No Image Available
                            @endif
                        </td>


                          <td>{{ $product->title }}</td>
                          <td>
                            @php
                                // Decode price field if it's stored as JSON, otherwise handle it as an array
                                $prices = is_array($product->price) ? $product->price : json_decode($product->price, true);
                                $minPrice = is_array($prices) && !empty($prices) ? min($prices) : 0;
                                $maxPrice = is_array($prices) && !empty($prices) ? max($prices) : 0;
                            @endphp
                            ${{ number_format((float)$minPrice, 2) }} ~ ${{ number_format((float)$maxPrice, 2) }}
                        </td>
                        
                          <td>
                              <a href="#" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a href="#" class="me-2"><i class="fa-solid fa-trash"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#onboardHorizontalImageModal"><i
                                      class="fa-solid fa-eye"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>


    </div>





@endsection
