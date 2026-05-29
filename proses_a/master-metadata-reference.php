<!-- =========================================================
FILE : master-metadata-reference.php
FOKUS HALAMAN:
1. Standardisasi metadata bisnis
2. Reusable taxonomy
3. Reusable status system
4. Reusable priority level
5. Metadata dipakai lintas modul
========================================================= -->

<?php $page='master-metadata-reference';?>

<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>

<style>

.page-title{
  font-size:28px;
  font-weight:700;
}

.page-subtitle{
  color:#6c757d;
  font-size:14px;
}

.master-card{
  border:none;
  border-radius:18px;
  overflow:hidden;
  transition:.25s;
}

.master-card:hover{
  transform:translateY(-3px);
}

.card-title-custom{
  font-size:16px;
  font-weight:600;
}

.table td,
.table th{
  vertical-align:middle;
}

.badge-soft{
  padding:6px 10px;
  border-radius:20px;
  font-size:12px;
}

.section-description{
  font-size:13px;
  color:#6c757d;
}

</style>

<!-- =========================================================
CONTENT WRAPPER
========================================================= -->
<div class="content-wrapper">

  <section class="content pt-3">

    <div class="container-fluid">

      <!-- =====================================================
      HEADER
      ====================================================== -->
      <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

          <div class="page-title">
            🧩 Metadata Reference
          </div>

          <div class="page-subtitle">
            Standardisasi metadata reusable
            untuk seluruh modul ERP.
          </div>

        </div>

        <div>

          <button class="btn btn-primary shadow-sm">

            <i class="fas fa-plus mr-1"></i>
            Tambah Metadata

          </button>

        </div>

      </div>

      <!-- =====================================================
      ROW 1
      ====================================================== -->
      <div class="row">

        <!-- CATEGORY -->
        <div class="col-lg-4 mb-4">

          <div class="card shadow-sm master-card h-100">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <div>

                  <div class="card-title-custom">
                    📂 Category
                  </div>

                  <div class="section-description">
                    Reusable kategori lintas entity
                  </div>

                </div>

                <button class="btn btn-sm btn-outline-primary">
                  Add
                </button>

              </div>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Category</th>
                    <th>Used For</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Food</td>
                    <td>Product</td>
                  </tr>

                  <tr>
                    <td>Beverage</td>
                    <td>Product</td>
                  </tr>

                  <tr>
                    <td>VIP Customer</td>
                    <td>Customer</td>
                  </tr>

                  <tr>
                    <td>Raw Material</td>
                    <td>Inventory</td>
                  </tr>

                  <tr>
                    <td>Fixed Asset</td>
                    <td>Asset</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- STATUS -->
        <div class="col-lg-4 mb-4">

          <div class="card shadow-sm master-card h-100">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <div>

                  <div class="card-title-custom">
                    🚦 Status
                  </div>

                  <div class="section-description">
                    Status reusable lintas transaksi
                  </div>

                </div>

                <button class="btn btn-sm btn-outline-success">
                  Add
                </button>

              </div>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Status</th>
                    <th>Used For</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>
                      <span class="badge badge-success">
                        Paid
                      </span>
                    </td>
                    <td>Invoice</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-warning">
                        Pending
                      </span>
                    </td>
                    <td>Order</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-info">
                        Reserved
                      </span>
                    </td>
                    <td>Table</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-danger">
                        Cancelled
                      </span>
                    </td>
                    <td>Reservation</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-primary">
                        Active
                      </span>
                    </td>
                    <td>Employee</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- PRIORITY -->
        <div class="col-lg-4 mb-4">

          <div class="card shadow-sm master-card h-100">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <div>

                  <div class="card-title-custom">
                    ⚡ Priority
                  </div>

                  <div class="section-description">
                    Prioritas reusable lintas proses
                  </div>

                </div>

                <button class="btn btn-sm btn-outline-danger">
                  Add
                </button>

              </div>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Priority</th>
                    <th>Used For</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>
                      <span class="badge badge-danger">
                        High
                      </span>
                    </td>
                    <td>Complaint</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-warning">
                        Medium
                      </span>
                    </td>
                    <td>Kitchen Order</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-success">
                        Low
                      </span>
                    </td>
                    <td>Task</td>
                  </tr>

                  <tr>
                    <td>
                      <span class="badge badge-primary">
                        VIP
                      </span>
                    </td>
                    <td>Reservation</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- =====================================================
      ROW 2
      ====================================================== -->
      <div class="row">

        <!-- TAG -->
        <div class="col-lg-6 mb-4">

          <div class="card shadow-sm master-card">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <div>

                  <div class="card-title-custom">
                    🏷 Tag / Label
                  </div>

                  <div class="section-description">
                    Flexible tagging system
                  </div>

                </div>

                <button class="btn btn-sm btn-outline-dark">
                  Add
                </button>

              </div>

            </div>

            <div class="card-body">

              <span class="badge badge-primary mr-1 mb-1">
                Fast Moving
              </span>

              <span class="badge badge-success mr-1 mb-1">
                Best Seller
              </span>

              <span class="badge badge-warning mr-1 mb-1">
                Seasonal
              </span>

              <span class="badge badge-info mr-1 mb-1">
                Promo
              </span>

              <span class="badge badge-danger mr-1 mb-1">
                Urgent
              </span>

              <span class="badge badge-secondary mr-1 mb-1">
                Internal
              </span>

            </div>

          </div>

        </div>

        <!-- TYPE -->
        <div class="col-lg-6 mb-4">

          <div class="card shadow-sm master-card">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <div>

                  <div class="card-title-custom">
                    🧬 Type / Group
                  </div>

                  <div class="section-description">
                    Pengelompokan reusable entity
                  </div>

                </div>

                <button class="btn btn-sm btn-outline-info">
                  Add
                </button>

              </div>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Type</th>
                    <th>Used For</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Dine In</td>
                    <td>Order</td>
                  </tr>

                  <tr>
                    <td>Take Away</td>
                    <td>Order</td>
                  </tr>

                  <tr>
                    <td>Online Delivery</td>
                    <td>Order</td>
                  </tr>

                  <tr>
                    <td>Permanent</td>
                    <td>Employee</td>
                  </tr>

                  <tr>
                    <td>Freelance</td>
                    <td>Employee</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>