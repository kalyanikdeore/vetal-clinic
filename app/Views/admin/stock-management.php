<?php include('header.php'); ?>
<!-- =================================================
         CONTENT
    ================================================== -->
<main class="content">
  <div class="stock-page">
    <!-- =====================================================
         PAGE HEADER
    ===================================================== -->
    <div class="d-flex justify-content-between
                align-items-center flex-wrap gap-3 mb-4">
      <div>
        <div class="stock-page-title"> Stock Management </div>
        <div class="stock-page-subtitle"> Manage medicine inventory, stock levels, batches and expiry dates </div>
      </div>
      <div class="page-action">
        <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#addStockModal">
          <i class="bi bi-plus-circle-fill me-1"></i> Add Stock </button>
      </div>
    </div>
    <!-- =====================================================
         STOCK STATISTICS
    ===================================================== -->
    <div class="row g-3 mb-4">
      <!-- TOTAL MEDICINES -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon
                                bg-primary-subtle text-primary">
              <i class="bi bi-capsule"></i>
            </div>
            <div>
              <div class="stat-label"> Total Medicines </div>
              <div class="stat-value"> 328 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- AVAILABLE STOCK -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon
                                bg-success-subtle text-success">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div>
              <div class="stat-label"> Available Stock </div>
              <div class="stat-value"> 12,845 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- LOW STOCK -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon
                                bg-warning-subtle text-warning">
              <i class="bi bi-exclamation-triangle-fill"></i>
            </div>
            <div>
              <div class="stat-label"> Low Stock </div>
              <div class="stat-value"> 19 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- EXPIRING -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon
                                bg-danger-subtle text-danger">
              <i class="bi bi-calendar-x-fill"></i>
            </div>
            <div>
              <div class="stat-label"> Expiring Soon </div>
              <div class="stat-value"> 12 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====================================================
         STOCK TABLE CARD
    ===================================================== -->
    <div class="card stock-card">
      <!-- CARD HEADER -->
      <div class="stock-card-header">
        <div class="d-flex justify-content-between
                        align-items-center flex-wrap gap-3">
          <div>
            <h6 class="mb-1 fw-bold">
              <i class="bi bi-boxes text-primary me-2"></i> Medicine Stock
            </h6>
            <small class="text-muted"> View and manage current pharmacy inventory </small>
          </div>
          <div class="stock-filter-area row g-2">

            <!-- SEARCH -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="input-group input-group-sm">
                <span class="input-group-text bg-white">
                    <i class="bi bi-search text-muted"></i>
                </span>

                <input
                    type="text"
                    id="stockSearch"
                    class="form-control"
                    placeholder="Search medicine / batch / code"
                >
                </div>
            </div>

            <!-- STOCK STATUS -->
            <div class="col-12 col-md-4 col-lg-3">
                <select
                id="stockStatusFilter"
                class="form-select form-select-sm"
                >
                <option value="">All Stock</option>
                <option value="available">Available</option>
                <option value="low">Low Stock</option>
                <option value="out">Out of Stock</option>
                </select>
            </div>

            <!-- EXPIRY -->
            <div class="col-12 col-md-3 col-lg-3">
                <select
                id="expiryFilter"
                class="form-select form-select-sm"
                >
                <option value="">All Expiry</option>
                <option value="valid">Valid</option>
                <option value="expiring">Expiring Soon</option>
                <option value="expired">Expired</option>
                </select>
            </div>

            </div>
        </div>
      </div>
      <!-- =================================================
             STOCK TABLE
        ================================================= -->
      <div class="table-responsive">
        <table class="table table-hover stock-table">
          <thead class="table-light">
            <tr>
              <th> Medicine </th>
              <th> Category </th>
              <th> Batch No. </th>
              <th> Expiry Date </th>
              <th> Purchase Price </th>
              <th> Selling Price </th>
              <th> Quantity </th>
              <th> Stock Status </th>
              <th> Supplier </th>
              <th class="text-end"> Actions </th>
            </tr>
          </thead>
          <tbody id="stockTableBody">
            
            <?php foreach($stocks as $stock){ ?>
            <tr data-stock="available" data-expiry="valid">
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="medicine-icon bg-primary-subtle text-primary">
                    <i class="bi bi-capsule-pill"></i>
                  </div>
                  <div>
                    <div class="medicine-name"> <?=$stock->medicine_name; ?> </div>
                    <div class="medicine-code"> <?=$stock->medicine_code; ?> </div>
                  </div>
                </div>
              </td>
              <td> <?=$stock->unit; ?> </td>
              <td> <?=$stock->batch_number; ?> </td>
              <td> <?=$stock->expiry_date; ?> </td>
              <td> ₹<?=$stock->purchase_price; ?> </td>
              <td> ₹<?=$stock->selling_price; ?> </td>
              <td>
                <strong><?=$stock->quantity; ?></strong>
              </td>
              <td>
                <?php if($stock->quantity>$stock->min_stock_level){ ?>
                <span class="stock-badge stock-good">
                  <i class="bi bi-check-circle-fill"></i> Available </span>
                <?php } else  if  ($stock->quantity<$stock->min_stock_level AND $stock->quantity>0){ ?>
                <span class="stock-badge stock-low">
                  <i class="bi bi-exclamation-triangle-fill"></i> Low Stock </span>
                <?php } else { ?>
                <span class="stock-badge stock-out">
                  <i class="bi bi-x-circle-fill"></i> Out of Stock </span>
                <?php } ?>
              </td>
              <td> ABC Pharma </td>
              <td class="text-end">
                <button type="button" class="btn btn-light border
                                       stock-action-btn" title="View">
                  <i class="bi bi-eye"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn" onclick="openStockMovement('in','Paracetamol 500mg')" title="Stock In">
                  <i class="bi bi-box-arrow-in-down text-success"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn" onclick="openStockMovement('out','Paracetamol 500mg')" title="Stock Out">
                  <i class="bi bi-box-arrow-up text-danger"></i>
                </button>
              </td>
            </tr>
            <?php } ?>

            <!-- <tr data-stock="low" data-expiry="valid">
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="medicine-icon
                                            bg-warning-subtle text-warning">
                    <i class="bi bi-capsule"></i>
                  </div>
                  <div>
                    <div class="medicine-name"> Azithromycin 500mg </div>
                    <div class="medicine-code"> MED-000127 </div>
                  </div>
                </div>
              </td>
              <td> Tablet </td>
              <td> AZI500-25B </td>
              <td> 18 Oct 2027 </td>
              <td> ₹8.00 </td>
              <td> ₹12.00 </td>
              <td>
                <strong>28</strong>
              </td>
              <td>
                <span class="stock-badge stock-low">
                  <i class="bi bi-exclamation-triangle-fill"></i> Low Stock </span>
              </td>
              <td> MedLife Pharma </td>
              <td class="text-end">
                <button type="button" class="btn btn-light border
                                       stock-action-btn">
                  <i class="bi bi-eye"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn" onclick="openStockMovement('in','Azithromycin 500mg')">
                  <i class="bi bi-box-arrow-in-down text-success"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn" onclick="openStockMovement('out','Azithromycin 500mg')">
                  <i class="bi bi-box-arrow-up text-danger"></i>
                </button>
              </td>
            </tr> -->
            
            <!-- <tr data-stock="out" data-expiry="valid">
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="medicine-icon
                                            bg-danger-subtle text-danger">
                    <i class="bi bi-capsule"></i>
                  </div>
                  <div>
                    <div class="medicine-name"> Amoxicillin 500mg </div>
                    <div class="medicine-code"> MED-000125 </div>
                  </div>
                </div>
              </td>
              <td> Capsule </td>
              <td> AMX500-25C </td>
              <td> 12 Dec 2027 </td>
              <td> ₹6.50 </td>
              <td> ₹10.00 </td>
              <td>
                <strong>0</strong>
              </td>
              <td>
                <span class="stock-badge stock-out">
                  <i class="bi bi-x-circle-fill"></i> Out of Stock </span>
              </td>
              <td> Care Pharma </td>
              <td class="text-end">
                <button type="button" class="btn btn-light border
                                       stock-action-btn">
                  <i class="bi bi-eye"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn" onclick="openStockMovement('in','Amoxicillin 500mg')">
                  <i class="bi bi-box-arrow-in-down text-success"></i>
                </button>
                <button type="button" class="btn btn-light border
                                       stock-action-btn">
                  <i class="bi bi-box-arrow-up text-danger"></i>
                </button>
              </td>
            </tr> -->
            


          </tbody>
        </table>
      </div>
      <!-- =================================================
             TABLE FOOTER
        ================================================= -->
      <div class="card-footer bg-white border-top py-3">
        <div class="d-flex justify-content-between
                        align-items-center flex-wrap gap-2">
          <small class="text-muted"> Showing 1–5 of 328 medicines </small>
          <nav>
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#"> Previous </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#"> 1 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> 2 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> 3 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> Next </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- =========================================================
     ADD STOCK MODAL
========================================================= -->
  <div class="modal fade" id="addStockModal" tabindex="-1" aria-labelledby="addStockModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <!-- HEADER -->
        <div class="modal-header bg-primary text-white">
          <div>
            <h5 class="modal-title fw-bold" id="addStockModalLabel">
              <i class="bi bi-box-seam-fill me-2"></i> Add Medicine Stock
            </h5>
            <small class="opacity-75"> Add new medicine batch and inventory quantity </small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <form id="addStockForm" method="post">
          <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
            <!-- =================================================
                         MEDICINE INFORMATION
                    ================================================= -->
            <div class="section-heading">
              <i class="bi bi-capsule-pill me-2"></i> Medicine Information
            </div>
            <div class="row g-3">
              <div class="col-lg-6">
                <label class="form-label"> Medicine Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="medicine_name" class="form-control" placeholder="Enter medicine name" required>
              </div>
              <div class="col-md-6 col-lg-3">
                <label class="form-label"> Medicine Code </label>
                <input type="text" name="medicine_code" class="form-control" placeholder="MED-000129">
              </div>
              <div class="col-md-6 col-lg-3">
                <label class="form-label"> Category <span class="text-danger">*</span>
                </label>
                <select name="category" class="form-select" required>
                  <option value=""> Select Category </option>
                  <option value="Tablet"> Tablet </option>
                  <option value="Capsule"> Capsule </option>
                  <option value="Syrup"> Syrup </option>
                  <option value="Injection"> Injection </option>
                  <option value="Drops"> Drops </option>
                  <option value="Ointment"> Ointment </option>
                  <option value="Other"> Other </option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label"> Generic Name </label>
                <input type="text" name="generic_name" class="form-control" placeholder="Enter generic medicine name">
              </div>
              <div class="col-md-3">
                <label class="form-label"> Strength </label>
                <input type="text" name="strength" class="form-control" placeholder="500mg">
              </div>
              <div class="col-md-3">
                <label class="form-label"> Unit </label>
                <select class="form-select" name="unit">
                  <option value="Tablet"> Tablet </option>
                  <option value="Capsule"> Capsule </option>
                  <option value="Bottle"> Bottle </option>
                  <option value="Box"> Box </option>
                  <option value="Strip"> Strip </option>
                </select>
              </div>
            </div>
            <!-- =================================================
                         BATCH INFORMATION
                    ================================================= -->
            <div class="section-heading mt-4">
              <i class="bi bi-upc-scan me-2"></i> Batch & Expiry Information
            </div>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label"> Batch Number <span class="text-danger">*</span>
                </label>
                <input type="text" name="batch_number" class="form-control" placeholder="Enter batch number" required>
              </div>
              <div class="col-md-4">
                <label class="form-label"> Manufacturing Date </label>
                <input type="date" name="manufacturing_date" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label"> Expiry Date <span class="text-danger">*</span>
                </label>
                <input type="date" name="expiry_date" class="form-control" required>
              </div>
            </div>
            <!-- =================================================
                         QUANTITY & PRICE
                    ================================================= -->
            <div class="section-heading mt-4">
              <i class="bi bi-calculator me-2"></i> Quantity & Pricing
            </div>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label"> Quantity <span class="text-danger">*</span>
                </label>
                <input type="number" name="quantity" id="stockQuantity" class="form-control" min="1" placeholder="Enter quantity" required>
              </div>
              <div class="col-md-4">
                <label class="form-label"> Purchase Price <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <span class="input-group-text"> ₹ </span>
                  <input type="number" name="purchase_price" id="purchasePrice" class="form-control" min="0" step="0.01" placeholder="0.00" required>
                </div>
              </div>
              <div class="col-md-4">
                <label class="form-label"> Selling Price <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <span class="input-group-text"> ₹ </span>
                  <input type="number" name="selling_price" id="sellingPrice" class="form-control" min="0" step="0.01" placeholder="0.00" required>
                </div>
              </div>
              <div class="col-md-4">
                <label class="form-label"> Minimum Stock Level </label>
                <input type="number" name="min_stock_level" class="form-control" min="0" value="10">
              </div>
              <div class="col-md-4">
                <label class="form-label"> Tax / GST (%) </label>
                <select class="form-select" name="tax_gst">
                  <option value="0"> 0% </option>
                  <option value="5"> 5% </option>
                  <option value="12"> 12% </option>
                  <option value="18"> 18% </option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label"> Total Purchase Value </label>
                <div class="input-group">
                  <span class="input-group-text"> ₹ </span>
                  <input type="text" name="ttl_purchase_val" id="totalPurchaseValue" class="form-control" value="0.00" readonly>
                </div>
              </div>
            </div>
            <!-- =================================================
                         SUPPLIER
                    ================================================= -->
            <div class="section-heading mt-4">
              <i class="bi bi-truck me-2"></i> Supplier Information
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label"> Supplier </label>
                <select class="form-select" name="supplier" required>
                  <option value=""> Select Supplier </option>
                  <option> ABC Pharma </option>
                  <option> MedLife Pharma </option>
                  <option> HealWell Labs </option>
                  <option> Care Pharma </option>
                  <option> HealthCare Ltd. </option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label"> Purchase Invoice Number </label>
                <input type="text" name="purchase_invoice_num" class="form-control" placeholder="Enter invoice number">
              </div>
              <div class="col-12">
                <label class="form-label"> Stock Notes </label>
                <textarea class="form-control" name="stock_notes" placeholder="Enter additional stock notes"></textarea>
              </div>
            </div>
            <!-- =================================================
                         STOCK PREVIEW
                    ================================================= -->
            <div class="medicine-preview mt-4">
              <div class="d-flex align-items-center gap-3">
                <div class="medicine-icon
                                        bg-primary-subtle text-primary">
                  <i class="bi bi-box-seam"></i>
                </div>
                <div>
                  <div class="fw-bold"> Stock Entry Preview </div>
                  <div class="small text-muted"> Quantity will be added to the selected medicine batch after saving. </div>
                </div>
              </div>
            </div>
            <!-- CONFIRMATION -->
            <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" id="stockConfirmation" required>
              <label class="form-check-label small" for="stockConfirmation"> I confirm that the medicine, batch, expiry, quantity and pricing information has been verified. </label>
            </div>
          </div>
          <!-- MODAL FOOTER -->
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-light border" data-bs-dismiss="modal">
              <i class="bi bi-x-circle me-1"></i> Cancel </button>
            <button type="reset" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-counterclockwise me-1"></i> Reset </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-check-circle me-1"></i> Save Stock </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =========================================================
     STOCK IN / STOCK OUT MODAL
========================================================= -->
  <div class="modal fade" id="stockMovementModal" tabindex="-1" aria-labelledby="stockMovementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <div>
            <h5 class="modal-title fw-bold" id="stockMovementModalLabel"> Stock Movement </h5>
            <small class="opacity-75" id="movementSubtitle"> Update medicine inventory </small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <form id="stockMovementForm">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label"> Medicine </label>
              <input type="text" id="movementMedicine" class="form-control" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label"> Movement Type </label>
              <select id="movementType" class="form-select">
                <option value="in"> Stock In </option>
                <option value="out"> Stock Out </option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label"> Quantity <span class="text-danger">*</span>
              </label>
              <input type="number" id="movementQuantity" class="form-control" min="1" placeholder="Enter quantity" required>
            </div>
            <div class="mb-3">
              <label class="form-label"> Reference / Reason </label>
              <input type="text" class="form-control" placeholder="Purchase, sale, adjustment, etc.">
            </div>
            <div>
              <label class="form-label"> Notes </label>
              <textarea class="form-control" rows="3" placeholder="Enter notes"></textarea>
            </div>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-light border" data-bs-dismiss="modal"> Cancel </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-check-circle me-1"></i> Save Movement </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =========================================================
     ADD STOCK / ADD MEDICINE BUTTONS
     Add these wherever your existing Inventory page buttons are.
     ========================================================= -->
  <div class="d-flex flex-wrap gap-2 mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStockModal">
      <i class="bi bi-box-seam me-1"></i> Add Stock </button>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addMedicineModal">
      <i class="bi bi-capsule me-1"></i> Add Medicine </button>
  </div>
  <!-- =========================================================
     ADD STOCK MODAL
     ========================================================= -->
  <div class="modal fade" id="addStockModal" tabindex="-1" aria-labelledby="addStockModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content inventory-modal">
        <!-- Header -->
        <div class="modal-header inventory-modal-header">
          <div class="d-flex align-items-center gap-3">
            <div class="inventory-modal-icon">
              <i class="bi bi-box-seam"></i>
            </div>
            <div>
              <h5 class="modal-title mb-1" id="addStockModalLabel"> Add Medicine Stock </h5>
              <small class="text-muted"> Add new stock to pharmacy inventory </small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Body -->
        <div class="modal-body">
          <form id="addStockForm">
            <!-- Medicine Selection -->
            <div class="form-section">
              <div class="section-title">
                <i class="bi bi-capsule me-2"></i> Medicine Information
              </div>
              <div class="row g-3">
                <div class="col-12 col-lg-6">
                  <label class="form-label"> Select Medicine <span class="text-danger">*</span>
                  </label>
                  <select class="form-select" id="stockMedicine" required>
                    <option value=""> Select medicine </option>
                    <option> Paracetamol 500mg </option>
                    <option> Pantoprazole 40mg </option>
                    <option> Azithromycin 500mg </option>
                    <option> Amoxicillin 500mg </option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> Batch Number <span class="text-danger">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="e.g. PCM25001" required>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> Stock Quantity <span class="text-danger">*</span>
                  </label>
                  <input type="number" class="form-control" min="1" placeholder="Enter quantity" required>
                </div>
              </div>
            </div>
            <!-- Purchase Details -->
            <div class="form-section">
              <div class="section-title">
                <i class="bi bi-receipt me-2"></i> Purchase Details
              </div>
              <div class="row g-3">
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> Purchase Price </label>
                  <div class="input-group">
                    <span class="input-group-text"> ₹ </span>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00">
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> MRP <span class="text-danger">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text"> ₹ </span>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> Selling Price </label>
                  <div class="input-group">
                    <span class="input-group-text"> ₹ </span>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00">
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <label class="form-label"> Supplier </label>
                  <select class="form-select">
                    <option value=""> Select supplier </option>
                    <option> ABC Pharma Distributors </option>
                    <option> MedPlus Distributors </option>
                    <option> Local Supplier </option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Dates -->
            <div class="form-section">
              <div class="section-title">
                <i class="bi bi-calendar3 me-2"></i> Batch & Expiry Details
              </div>
              <div class="row g-3">
                <div class="col-12 col-md-4">
                  <label class="form-label"> Manufacturing Date </label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-12 col-md-4">
                  <label class="form-label"> Expiry Date <span class="text-danger">*</span>
                  </label>
                  <input type="date" class="form-control" required>
                </div>
                <div class="col-12 col-md-4">
                  <label class="form-label"> Invoice Number </label>
                  <input type="text" class="form-control" placeholder="Supplier invoice number">
                </div>
              </div>
            </div>
            <!-- Notes -->
            <div class="form-section mb-0">
              <div class="section-title">
                <i class="bi bi-chat-left-text me-2"></i> Additional Information
              </div>
              <label class="form-label"> Notes </label>
              <textarea class="form-control" rows="3" placeholder="Enter stock notes..."></textarea>
            </div>
          </form>
        </div>
        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light border" data-bs-dismiss="modal"> Cancel </button>
          <button type="submit" form="addStockForm" class="btn btn-primary">
            <i class="bi bi-check-circle me-1"></i> Add Stock </button>
        </div>
      </div>
    </div>
  </div>
  <!-- =========================================================
     ADD MEDICINE MODAL
     ========================================================= -->
  <div class="modal fade" id="addMedicineModal" tabindex="-1" aria-labelledby="addMedicineModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content inventory-modal">
        <!-- Header -->
        <div class="modal-header inventory-modal-header">
          <div class="d-flex align-items-center gap-3">
            <div class="inventory-modal-icon">
              <i class="bi bi-capsule"></i>
            </div>
            <div>
              <h5 class="modal-title mb-1" id="addMedicineModalLabel"> Add New Medicine </h5>
              <small class="text-muted"> Create a medicine in the pharmacy master </small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Body -->
        <div class="modal-body">
          <form id="addMedicineForm">
            <div class="form-section">
              <div class="section-title">
                <i class="bi bi-info-circle me-2"></i> Basic Medicine Details
              </div>
              <div class="row g-3">
                <div class="col-12 col-md-8">
                  <label class="form-label"> Medicine Name <span class="text-danger">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="e.g. Paracetamol" required>
                </div>
                <div class="col-12 col-md-4">
                  <label class="form-label"> Medicine Type <span class="text-danger">*</span>
                  </label>
                  <select class="form-select" required>
                    <option value=""> Select type </option>
                    <option>Tablet</option>
                    <option>Capsule</option>
                    <option>Syrup</option>
                    <option>Injection</option>
                    <option>Cream</option>
                    <option>Ointment</option>
                    <option>Drop</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label"> Generic Name </label>
                  <input type="text" class="form-control" placeholder="e.g. Paracetamol">
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label"> Strength </label>
                  <input type="text" class="form-control" placeholder="e.g. 500 mg">
                </div>
              </div>
            </div>
            <div class="form-section">
              <div class="section-title">
                <i class="bi bi-building me-2"></i> Manufacturer Information
              </div>
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label class="form-label"> Manufacturer </label>
                  <input type="text" class="form-control" placeholder="Manufacturer name">
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label"> Brand Name </label>
                  <input type="text" class="form-control" placeholder="Brand name">
                </div>
              </div>
            </div>
            <div class="form-section mb-0">
              <div class="section-title">
                <i class="bi bi-gear me-2"></i> Additional Settings
              </div>
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label class="form-label"> Unit </label>
                  <select class="form-select">
                    <option>Tablet</option>
                    <option>Capsule</option>
                    <option>Bottle</option>
                    <option>Strip</option>
                    <option>Piece</option>
                    <option>Box</option>
                  </select>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label"> Minimum Stock Alert </label>
                  <input type="number" class="form-control" min="0" value="10">
                </div>
                <div class="col-12">
                  <label class="form-label"> Default Instructions </label>
                  <textarea class="form-control" rows="3" placeholder="Example: Take after food"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light border" data-bs-dismiss="modal"> Cancel </button>
          <button type="submit" form="addMedicineForm" class="btn btn-primary">
            <i class="bi bi-check-circle me-1"></i> Save Medicine </button>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
  </html>