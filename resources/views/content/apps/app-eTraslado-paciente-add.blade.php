@extends('layouts/layoutMaster')

@section('title', 'Traslados - Registro de Paciente')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-eTraslado-paciente-add.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Traslado /</span><span> Registrar Paciente</span>
</h4>

<div class="app-ecommerce">

  <!-- Add Product -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3">Registrar Paciente</h4>
      <p class="text-muted">Información del paciente a trasladar</p>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
      <button class="btn btn-label-secondary">Descartar</button>
      <button class="btn btn-label-primary">Guardar Borrador</button>
      <button type="submit" class="btn btn-primary">Registrar Paciente</button>
    </div>

  </div>

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0">Información del Paciente</h5>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-name">Nombres y Apellidos</label>
            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Nombres y Apellidos del paciente" name="productTitle" aria-label="Nombres y Apellidos del paciente">
          </div>
          <div class="row mb-3">
            <div class="col"><label class="form-label" for="ecommerce-product-sku">Cédula de Identidad</label>
              <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="CINº" name="productSku" aria-label="Cédula de Identidad"></div>
            <div class="col"><label class="form-label" for="ecommerce-product-barcode">idPaciente</label>
              <input type="text" class="form-control" id="ecommerce-product-barcode" placeholder="0123-4567" name="productBarcode" aria-label="idPaciente"></div>
          </div>
          <div class="row mb-3">
            <div class="col"><label class="form-label" for="ecommerce-product-fnacPaciente">Fecha de Nacimiento</label>

              <input type="date" class="product-date form-control" id="date-input"></div>
              <div class="col"><label class="form-label" for="ecommerce-product-sexoPaciente">Sexo</label>
                <select id="ecommerce-product-sexoPacient" class="select2 form-select" data-placeholder="Seleccione">
                  <option value="">SELECCIONE</option>
                  <option value="MASCULINO">MASCULINO</option>
                  <option value="FEMENINO">FEMENINO</option>
                </select>
              </div>
          </div>
          <div class="row mb-3">
            <div class="col"><label class="form-label" for="ecommerce-product-nexoPaciente">Persona de Contacto</label>
              <input type="text" class="form-control" id="ecommerce-product-nexoPaciente" placeholder="Nombre de Contacto" name="nexoPaciente" aria-label="Nexo Contacto"></div>
            <div class="col"><label class="form-label" for="ecommerce-product-telContactoPaciente">Teléfono de Contacto</label>
              <input type="text" class="form-control" id="ecommerce-product-telContactoPaciente" placeholder="0987888999" name="telContactoPaciente" aria-label="Tel Contacto"></div>
          </div>
          <div class="row mb-3">
            <label for="ecommerce-product-tags" class="form-label mb-1">APP Fast</label>
            <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="HTA,DM,Hipertiroidismo,Hipotiroidismo,ICC,IRC,Asma,Alergia AINES,Alergia Penicilina,ACV,SCA,Epilepsia,TBC,Etilismo" aria-label="APPs" />
          </div>
          <!-- Description -->
          <div>
            <label class="form-label">Descripción del Evento <span class="text-muted">(Breve)</span></label>
            <div class="form-control p-0 pt-1">
              <div class="comment-toolbar border-0 border-bottom">
                <div class="d-flex justify-content-start">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <div class="comment-editor border-0 pb-4" id="ecommerce-category-description">
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /Paciente Information -->
      <!-- Media -->
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0 card-title">Pedido Estudio/Resumen Traslado</h5>
          <!-- / <a href="javascript:void(0);" class="fw-medium">Add media from URL</a> -->
        </div>
        <div class="card-body">
          <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
            <div class="dz-message needsclick my-5">
              <p class="fs-4 note needsclick my-2">Arrastre la imagen y suelte aquí</p>
              <small class="text-muted d-block fs-6 my-2">o</small>
              <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">Buscar en Galería</span>
            </div>
            <div class="fallback">
              <input name="file" type="file" />
            </div>
          </form>
        </div>
      </div>
      <!-- /Media -->
      <!-- Variants -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Variants</h5>
        </div>
        <div class="card-body">
          <form class="form-repeater">
            <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row">

                  <div class="mb-3 col-4">
                    <label class="form-label" for="form-repeater-1-1">Options</label>
                    <select id="form-repeater-1-1" class="select2 form-select" data-placeholder="Size">
                      <option value="">Size</option>
                      <option value="size">Size</option>
                      <option value="color">Color</option>
                      <option value="weight">Weight</option>
                      <option value="smell">Smell</option>
                    </select>
                  </div>

                  <div class="mb-3 col-8">
                    <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                    <input type="number" id="form-repeater-1-2" class="form-control" placeholder="Enter size" />
                  </div>

                </div>
              </div>
            </div>
            <div>
              <button class="btn btn-primary" data-repeater-create>
                Add another option
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Variants -->
      <!-- Inventory -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Inventory</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Navigation -->
            <div class="col-12 col-md-4 mx-auto card-separator">
              <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">
                <ul class="nav nav-align-left nav-pills flex-column">
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock">
                      <i class="bx bx-cube me-2"></i>
                      <span class="align-middle">Restock</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping">
                      <i class="bx bx-car me-2"></i>
                      <span class="align-middle">Shipping</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery">
                      <i class="bx bx-globe me-2"></i>
                      <span class="align-middle">Global Delivery</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes">
                      <i class="bx bx-link me-2"></i>
                      <span class="align-middle">Attributes</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced">
                      <i class="bx bx-lock me-2"></i>
                      <span class="align-middle">Advanced</span>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /Navigation -->
            <!-- Options -->
            <div class="col-12 col-md-8 pt-4 pt-md-0">
              <div class="tab-content p-0 pe-md-5 ps-md-3">
                <!-- Restock Tab -->
                <div class="tab-pane fade show active" id="restock" role="tabpanel">
                  <h5>Options</h5>
                  <label class="form-label" for="ecommerce-product-stock">Add to Stock</label>
                  <div class="row mb-3 g-3">
                    <div class="col-12 col-sm-9">
                      <input type="number" class="form-control" id="ecommerce-product-stock" placeholder="Quantity" name="quantity" aria-label="Quantity"></div>
                    <div class="col-12 col-sm-3">
                      <button class="btn btn-primary"><i class='bx bx-check me-2'></i>Confirm</button>
                    </div>
                  </div>
                  <div>
                    <h6>Product in stock now: <span class="text-muted">54</span></h6>
                    <h6>Product in transit: <span class="text-muted">390</span></h6>
                    <h6>Last time restocked: <span class="text-muted">24th June, 2023</span></h6>
                    <h6>Total stock over lifetime: <span class="text-muted">2430</span></h6>
                  </div>
                </div>
                <!-- Shipping Tab -->
                <div class="tab-pane fade" id="shipping" role="tabpanel">
                  <h5 class="mb-4">Shipping Type</h5>
                  <div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" name="shippingType" id="seller">
                      <label class="form-check-label" for="seller">
                        <span class="mb-1 h6">Fulfilled by Seller</span>
                        <small class="text-muted">You'll be responsible for product delivery.<br>
                          Any damage or delay during shipping may cost you a Damage fee.</small>
                      </label>
                    </div>
                    <div class="form-check mb-5">
                      <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked>
                      <label class="form-check-label" for="companyName">
                        <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span>
                        <br><small class="text-muted">Your product, Our responsibility.<br>
                          For a measly fee, we will handle the delivery process for you.</small>
                      </label>
                    </div>
                    <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                  </div>
                </div>
                <!-- Global Delivery Tab -->
                <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                  <h5 class="mb-4">Global Delivery</h5>
                  <!-- Worldwide delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" id="worldwide">
                    <label class="form-check-label" for="worldwide">
                      <span class="mb-1 h6">Worldwide delivery</span>
                      <small class="text-muted">Only available with Shipping method:
                        <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                    </label>
                  </div>
                  <!-- Global delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" checked>
                    <label class="form-check-label w-75 pe-5" for="country-selected">
                      <span class="mb-2 h6">Selected Countries</span>
                      <input type="text" class="form-control" placeholder="Type Country name" id="country-selected">
                    </label>
                  </div>
                  <!-- Local delivery -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="globalDel" id="local">
                    <label class="form-check-label" for="local">
                      <span class="mb-1 h6">Local delivery</span>
                      <small class="text-muted">Deliver to your country of residence :
                        <a href="javascript:void(0);">Change profile address</a></small>
                    </label>
                  </div>
                </div>
                <!-- Attributes Tab -->
                <div class="tab-pane fade" id="attributes" role="tabpanel">
                  <h5 class="mb-4">Attributes</h5>
                  <div>
                    <!-- Fragile Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="fragile" id="fragile">
                      <label class="form-check-label" for="fragile">
                        <span class="mb-0 h6">Fragile Product</span>
                      </label>
                    </div>
                    <!-- Biodegradable -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable">
                      <label class="form-check-label" for="biodegradable">
                        <span class="mb-0 h6">Biodegradable</span>
                      </label>
                    </div>
                    <!-- Frozen Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="frozen" checked>
                      <label class="form-check-label w-75 pe-5" for="frozen">
                        <span class="mb-1 h6">Frozen Product</span>
                        <input type="number" class="form-control" placeholder="Max. allowed Temperature" id="frozen">
                      </label>
                    </div>
                    <!-- Exp Date
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked>
                      <label class="form-check-label w-75 pe-5" for="date-input">
                        <span class="mb-1 h6">Expiry Date of Product</span>
                        <input type="date" class="product-date form-control" id="date-input">
                      </label>
                    </div> -->
                  </div>
                </div>
                <!-- /Attributes Tab -->
                <!-- Advanced Tab -->
                <div class="tab-pane fade" id="advanced" role="tabpanel">
                  <h5 class="mb-4">Advanced</h5>
                  <div class="row">
                    <!-- Product Id Type -->
                    <div class="col">
                      <label class="form-label" for="product-id">
                        <span class="mb-0 h6">Product ID Type</span>
                      </label>
                      <select id="product-id" class="select2 form-select" data-placeholder="ISBN">
                        <option value="">ISBN</option>
                        <option value="ISBN">ISBN</option>
                        <option value="UPC">UPC</option>
                        <option value="EAN">EAN</option>
                        <option value="JAN">JAN</option>
                      </select>
                    </div>
                    <!-- Product Id -->
                    <div class="col">
                      <label class="form-label" for="product-id-1">
                        <span class="mb-0 h6">Product ID</span>
                      </label>
                      <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number" />
                    </div>

                  </div>
                </div>
                <!-- /Advanced Tab -->

              </div>
            </div>
            <!-- /Options-->
          </div>
        </div>
      </div>
      <!-- /Inventory -->
    </div>
    <!-- /Second column -->

    <!-- Second column -->
    <div class="col-12 col-lg-4">
      <!-- Pricing Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Signos Vitales</h5>
        </div>
        <div class="card-body">
          <!-- PA -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-price">Presión Arterial</label>
            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price">
          </div>
          <!-- FC -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-discount-price">Frecuencia Cardíaca</label>
            <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price">
          </div>
          <!-- FR -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-price">Frecuencia Respiratoria</label>
            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price">
          </div>
          <!-- SATO2 -->
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-discount-price">Saturación O2</label>
            <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price">
          </div>
          <!-- Charge tax check box -->
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked>
            <label class="form-label" for="price-charge-tax">
              Soporte de O2
            </label>
          </div>
          <!-- Instock switch -->
          <div class="d-flex justify-content-between align-items-center border-top pt-3">
            <span class="mb-0 h6">In stock</span>
            <div class="w-25 d-flex justify-content-end">
              <label class="switch switch-primary switch-sm me-4 pe-2">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <span class="switch-off"></span>
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <!-- /Pricing Card -->
      <!-- Organize Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Organize</h5>
        </div>
        <div class="card-body">
          <!-- Vendor -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1" for="vendor">
              Vendor
            </label>
            <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
              <option value="">Select Vendor</option>
              <option value="men-clothing">Men's Clothing</option>
              <option value="women-clothing">Women's-clothing</option>
              <option value="kid-clothing">Kid's-clothing</option>
            </select>
          </div>
          <!-- Category -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1 d-flex justify-content-between align-items-center" for="category-org">
              <span>Category</span><a href="javascript:void(0);" class="fw-medium">Add new category</a>
            </label>
            <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
              <option value="">Select Category</option>
              <option value="Household">Household</option>
              <option value="Management">Management</option>
              <option value="Electronics">Electronics</option>
              <option value="Office">Office</option>
              <option value="Automotive">Automotive</option>
            </select>
          </div>
          <!-- Collection -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1" for="collection">Collection
            </label>
            <select id="collection" class="select2 form-select" data-placeholder="Collection">
              <option value="">Collection</option>
              <option value="men-clothing">Men's Clothing</option>
              <option value="women-clothing">Women's-clothing</option>
              <option value="kid-clothing">Kid's-clothing</option>
            </select>
          </div>
          <!-- Status -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <label class="form-label mb-1" for="status-org">Status
            </label>
            <select id="status-org" class="select2 form-select" data-placeholder="Published">
              <option value="">Published</option>
              <option value="Published">Published</option>
              <option value="Scheduled">Scheduled</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
          <!-- Tags -->
          <div class="mb-3">
            <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
            <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Product Tags" />
          </div>
        </div>
      </div>
      <!-- /Organize Card -->
    </div>
    <!-- /Second column -->
  </div>
</div>

@endsection
