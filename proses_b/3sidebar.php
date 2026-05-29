<!-- ========================================================= -->
<!-- MAIN SIDEBAR -->
<!-- ========================================================= -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- ======================================================= -->
  <!-- BRAND -->
  <!-- ======================================================= -->
  <a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-light">
      ERP SYSTEM
    </span>
  </a>

  <div class="sidebar">

    <!-- ======================================================= -->
    <!-- USER PANEL -->
    <!-- ======================================================= -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
         style="border-bottom:1px solid rgba(255,255,255,.2);">

      <div class="image">
        <span class="img-circle elevation-2 d-flex align-items-center justify-content-center"
              style="width:40px;height:40px;background:#fff;">

          <i class="fas fa-user text-dark"></i>

        </span>
      </div>

      <div class="info ml-2">

        <a href="#" class="d-block text-white">
          superadmin
        </a>

        <small class="text-success">
          <i class="fas fa-circle mr-1"></i>
          Online
        </small>

      </div>

    </div>

<?php

/*
=========================================================
ERP GENERIC SIDEBAR ARCHITECTURE
=========================================================

LEVEL 1
- BUSINESS DOMAIN
  Sales
  Operation
  Finance

LEVEL 2
- BUSINESS PURPOSE
  Dashboard
  Transaction
  Monitoring
  Report
  Analysis
  History

LEVEL 3
- FEATURES / MODULES
=========================================================
*/

$menu = [

  /*
  =========================================================
  DASHBOARD
  =========================================================
  */
  [
    'title' => 'Dashboard',
    'icon'  => 'fas fa-tachometer-alt',

    'pages' => [
      'dashboard-executive',
      'dashboard-sales',
      'dashboard-operational',
      'dashboard-finance'
    ],

    'children' => [

      [
        'title' => 'Overview',
        'icon'  => 'fas fa-chart-pie',

        'children' => [

          [
            'label' => 'Executive Dashboard',
            'url'   => 'index.php',
            'page'  => 'dashboard-executive'
          ],
           [
            'label' => 'Sales Dashboard',
            'url'   => 'dashboard-sales.php',
            'page'  => 'dashboard-sales'
          ],

          [
            'label' => 'Operational Dashboard',
            'url'   => 'dashboard-operational.php',
            'page'  => 'dashboard-operational'
          ],

          [
            'label' => 'Finance Dashboard',
            'url'   => 'dashboard-finance.php',
            'page'  => 'dashboard-finance'
          ],

        ]
      ],

    ]
  ],

/*
=========================================================
MASTER DATA
GENERIC ENTERPRISE ERP ARCHITECTURE
=========================================================

FOUNDATION:
- Product & Service
- Business Partner
- Operational Structure
- Financial Structure
- Metadata Reference

=========================================================
*/

[
  'title' => 'Master Data',
  'icon'  => 'fas fa-database',

  'pages' => [

    /*
    =====================================================
    PRODUCT & SERVICE
    =====================================================
    */
    'master-product',
    'master-service',
    'master-package',
    'master-material',
    'master-unit',
    'master-bom',

    /*
    =====================================================
    BUSINESS PARTNER
    =====================================================
    */
    'master-actor',
    'master-customer',
    'master-supplier',
    'master-vendor',
    'master-member',
    'master-employee',
    'master-investor',

    /*
    =====================================================
    OPERATIONAL STRUCTURE
    =====================================================
    */
    'master-branch',
    'master-warehouse',
    'master-room',
    'master-kitchen',
    'master-table',
    'master-shift',
    'master-department',

    /*
    =====================================================
    FINANCIAL STRUCTURE
    =====================================================
    */
    'master-coa',
    'master-payment-method',
    'master-tax-rule',
    'master-discount-rule',
    'master-currency',
    'master-price-category',
    'master-fixed-asset',
    'master-asset-category',

    /*
    =====================================================
    METADATA REFERENCE
    =====================================================
    */
    'metadata-category',
    'metadata-status',
    'metadata-priority',
    'metadata-tag',
    'metadata-type',
    'metadata-brand',
    'metadata-condition',
    'master-metadata-reference',
  ],

  'children' => [

    /*
    =====================================================
    PRODUCT & SERVICE
    =====================================================
    */
    [
      'title' => 'Product & Service',
      'icon'  => 'fas fa-box',

      'children' => [

        [
          'label' => 'Product / Item',
          'url'   => 'master-product.php',
          'page'  => 'master-product'
        ],

        [
          'label' => 'Service',
          'url'   => 'master-service.php',
          'page'  => 'master-service'
        ],

        [
          'label' => 'Package / Bundle',
          'url'   => 'master-package.php',
          'page'  => 'master-package'
        ],

        [
          'label' => 'Material',
          'url'   => 'master-material.php',
          'page'  => 'master-material'
        ],

        [
          'label' => 'Unit',
          'url'   => 'master-unit.php',
          'page'  => 'master-unit'
        ],

        [
          'label' => 'Recipe / BOM',
          'url'   => 'master-bom.php',
          'page'  => 'master-bom'
        ],

      ]
    ],

    /*
    =====================================================
    BUSINESS PARTNER
    =====================================================
    */
    [
      'title' => 'Business Partner',
      'icon'  => 'fas fa-users',

      'children' => [

        [
          'label' => 'MASTER ACTOR*',
          'url'   => 'master-actor.php',
          'page'  => 'master-actor'
        ],
        [
          'label' => 'Customer',
          'url'   => 'master-customer.php',
          'page'  => 'master-customer'
        ],

        [
          'label' => 'Supplier',
          'url'   => 'master-supplier.php',
          'page'  => 'master-supplier'
        ],

        [
          'label' => 'Vendor',
          'url'   => 'master-vendor.php',
          'page'  => 'master-vendor'
        ],

        [
          'label' => 'Investor',
          'url'   => 'master-investor.php',
          'page'  => 'master-investor'
        ],

        [
          'label' => 'Employee',
          'url'   => 'master-employee.php',
          'page'  => 'master-employee'
        ],

      ]
    ],

    /*
    =====================================================
    OPERATIONAL STRUCTURE
    =====================================================
    */
    [
      'title' => 'Operational Structure',
      'icon'  => 'fas fa-sitemap',

      'children' => [

        [
          'label' => 'Branch',
          'url'   => 'master-branch.php',
          'page'  => 'master-branch'
        ],

        [
          'label' => 'Warehouse',
          'url'   => 'master-warehouse.php',
          'page'  => 'master-warehouse'
        ],

        [
          'label' => 'Room / Area',
          'url'   => 'master-room.php',
          'page'  => 'master-room'
        ],

        [
          'label' => 'Kitchen',
          'url'   => 'master-kitchen.php',
          'page'  => 'master-kitchen'
        ],

        [
          'label' => 'Table',
          'url'   => 'master-table.php',
          'page'  => 'master-table'
        ],

        [
          'label' => 'Shift',
          'url'   => 'master-shift.php',
          'page'  => 'master-shift'
        ],

        [
          'label' => 'Department',
          'url'   => 'master-department.php',
          'page'  => 'master-department'
        ],

      ]
    ],

    /*
    =====================================================
    FINANCIAL STRUCTURE
    =====================================================
    */
    [
      'title' => 'Financial Structure',
      'icon'  => 'fas fa-wallet',

      'children' => [

        [
          'label' => 'Chart of Account',
          'url'   => 'master-coa.php',
          'page'  => 'master-coa'
        ],

        [
          'label' => 'Payment Method',
          'url'   => 'master-payment-method.php',
          'page'  => 'master-payment-method'
        ],

        [
          'label' => 'Tax Rule',
          'url'   => 'master-tax-rule.php',
          'page'  => 'master-tax-rule'
        ],

        [
          'label' => 'Discount Rule',
          'url'   => 'master-discount-rule.php',
          'page'  => 'master-discount-rule'
        ],

        [
          'label' => 'Currency',
          'url'   => 'master-currency.php',
          'page'  => 'master-currency'
        ],

        [
          'label' => 'Price Category',
          'url'   => 'master-price-category.php',
          'page'  => 'master-price-category'
        ],


        [
          'label' => 'Fixed Asset Category',
          'url'   => 'master-fixed-asset-category.php',
          'page'  => 'master-fixed-asset-category'
        ],

        [
          'label' => 'Depreciation Method',
          'url'   => 'master-depreciation-method.php',
          'page'  => 'master-depreciation-method'
        ],


        [
          'label' => 'Fixed Asset',
          'url'   => 'master-fixed-asset.php',
          'page'  => 'master-fixed-asset'
        ],

        [
          'label' => 'Asset Category',
          'url'   => 'master-asset-category.php',
          'page'  => 'master-asset-category'
        ],





      ]
    ],

    /*
    =====================================================
    METADATA REFERENCE
    =====================================================
    */
    [
      'title' => 'Metadata Reference',
      'icon'  => 'fas fa-tags',

      'children' => [

         [
          'label' => 'Metadata Sample',
          'url'   => 'master-metadata-reference.php',
          'page'  => 'master-metadata-reference'
        ],

        [
          'label' => 'Category',
          'url'   => 'metadata-category.php',
          'page'  => 'metadata-category'
        ],

        [
          'label' => 'Status',
          'url'   => 'metadata-status.php',
          'page'  => 'metadata-status'
        ],

        [
          'label' => 'Priority',
          'url'   => 'metadata-priority.php',
          'page'  => 'metadata-priority'
        ],

        [
          'label' => 'Tag / Label',
          'url'   => 'metadata-tag.php',
          'page'  => 'metadata-tag'
        ],

        [
          'label' => 'Type / Group',
          'url'   => 'metadata-type.php',
          'page'  => 'metadata-type'
        ],

        [
          'label' => 'Brand',
          'url'   => 'metadata-brand.php',
          'page'  => 'metadata-brand'
        ],

        [
          'label' => 'Condition',
          'url'   => 'metadata-condition.php',
          'page'  => 'metadata-condition'
        ],

      ]
    ],

  ]
],

  /*
  =========================================================
  SALES
  =========================================================
  */
  [
    'title' => 'Sales',
    'icon'  => 'fas fa-shopping-cart',

    'pages' => [

      'sales-dashboard',

      'sales-order',
      'sales-invoice',
      'sales-return',

      'sales-monitor',

      'sales-report',

      'sales-analysis',

      'sales-history'
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      // [
      //   'title' => 'Dashboard',
      //   'icon'  => 'fas fa-chart-line',

      //   'children' => [

      //     [
      //       'label' => 'Sales Dashboard',
      //       'url'   => 'sales-dashboard.php',
      //       'page'  => 'sales-dashboard'
      //     ],

      //   ]
      // ],

      /*
      =====================================================
      TRANSACTION
      =====================================================
      */
      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          [
            'label' => 'v Sales Order',
            'url'   => 'sales-order.php',
            'page'  => 'sales-order'
          ],

          [
            'label' => 'v Sales Invoice',
            'url'   => 'sales-invoice.php',
            'page'  => 'sales-invoice'
          ],

          [
            'label' => 'v Sales Return',
            'url'   => 'sales-return.php',
            'page'  => 'sales-return'
          ],

        ]
      ],

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Sales Monitoring',
            'url'   => 'sales-monitor.php',
            'page'  => 'sales-monitor'
          ],

        ]
      ],

      /*
      =====================================================
      REPORT
      =====================================================
      */
      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          [
            'label' => 'Sales Report',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report'
          ],
          [
            'label' => '✅ Sales Summary owner pasti lihat omzet.',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report'
          ],

          [
            'label' => ' ✅ Outstanding Invoice',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report'
          ],

        ]
      ],

      /*
      =====================================================
      ANALYSIS
      =====================================================
      */
      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          [
            'label' => 'Sales Analysis',
            'url'   => 'sales-analysis.php',
            'page'  => 'sales-analysis'
          ],

        ]
      ],

      /*
      =====================================================
      HISTORY
      =====================================================
      */
      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => 'Sales History',
            'url'   => 'sales-history.php',
            'page'  => 'sales-history'
          ],

        ]
      ],

    ]
  ],

/*
=========================================================
SALES
TOKO BERLIAN / JEWELRY SHOWROOM
=========================================================
*/
[
  'title' => 'Sales',
  'icon'  => 'fas fa-gem',

  'pages' => [

    'sales-dashboard',

    'sales-lead',
    'customer',
    'customer-membership',
    'customer-followup',

    'sales-quotation',
    'special-price-request',
    'discount-approval',

    'item-reservation',
    'reservation-release',

    'sales-order',
    'preorder',
    'custom-order',

    'down-payment',
    'installment-plan',
    'installment-payment',

    'sales-invoice',
    'sales-delivery',
    'sales-return',

    'customer-complaint',
    'customer-feedback',

    'sales-monitoring',

    'sales-report',
    'sales-analysis',

    'sales-history',
  ],

  'children' => [

    /*
    =====================================================
    DASHBOARD
    =====================================================
    */
    [
      'title' => 'Dashboard',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Sales Dashboard',
          'url'   => 'sales-dashboard.php',
          'page'  => 'sales-dashboard'
        ],

      ]
    ],

    /*
    =====================================================
    TRANSACTION
    =====================================================
    */
    [
      'title' => 'Transaction',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        /*
        -------------------------------------------------
        CRM & CUSTOMER
        -------------------------------------------------
        */
        [
          'label' => 'Sales Lead',
          'url'   => 'sales-lead.php',
          'page'  => 'sales-lead'
        ],

        [
          'label' => 'Customer',
          'url'   => 'customer.php',
          'page'  => 'customer'
        ],

        [
          'label' => 'Customer Membership',
          'url'   => 'customer-membership.php',
          'page'  => 'customer-membership'
        ],

        [
          'label' => 'Customer Follow Up',
          'url'   => 'customer-followup.php',
          'page'  => 'customer-followup'
        ],

        /*
        -------------------------------------------------
        QUOTATION & PRICING
        -------------------------------------------------
        */
        [
          'label' => 'Sales Quotation',
          'url'   => 'sales-quotation.php',
          'page'  => 'sales-quotation'
        ],

        [
          'label' => 'Special Price Request',
          'url'   => 'special-price-request.php',
          'page'  => 'special-price-request'
        ],

        [
          'label' => 'Discount Approval',
          'url'   => 'discount-approval.php',
          'page'  => 'discount-approval'
        ],

        /*
        -------------------------------------------------
        RESERVATION
        -------------------------------------------------
        */
        [
          'label' => 'Item Reservation',
          'url'   => 'item-reservation.php',
          'page'  => 'item-reservation'
        ],

        [
          'label' => 'Reservation Release',
          'url'   => 'reservation-release.php',
          'page'  => 'reservation-release'
        ],

        /*
        -------------------------------------------------
        ORDER
        -------------------------------------------------
        */
        [
          'label' => 'Sales Order',
          'url'   => 'sales-order.php',
          'page'  => 'sales-order'
        ],

        [
          'label' => 'Pre Order',
          'url'   => 'preorder.php',
          'page'  => 'preorder'
        ],

        [
          'label' => 'Custom Order',
          'url'   => 'custom-order.php',
          'page'  => 'custom-order'
        ],

        /*
        -------------------------------------------------
        PAYMENT
        -------------------------------------------------
        */
        [
          'label' => 'Down Payment',
          'url'   => 'down-payment.php',
          'page'  => 'down-payment'
        ],

        [
          'label' => 'Installment Plan',
          'url'   => 'installment-plan.php',
          'page'  => 'installment-plan'
        ],

        [
          'label' => 'Installment Payment',
          'url'   => 'installment-payment.php',
          'page'  => 'installment-payment'
        ],

        /*
        -------------------------------------------------
        EXECUTION
        -------------------------------------------------
        */
        [
          'label' => 'Sales Invoice',
          'url'   => 'sales-invoice.php',
          'page'  => 'sales-invoice'
        ],

        [
          'label' => 'Sales Delivery',
          'url'   => 'sales-delivery.php',
          'page'  => 'sales-delivery'
        ],

        [
          'label' => 'Sales Return',
          'url'   => 'sales-return.php',
          'page'  => 'sales-return'
        ],

        /*
        -------------------------------------------------
        AFTER SALES
        -------------------------------------------------
        */
        [
          'label' => 'Customer Complaint',
          'url'   => 'customer-complaint.php',
          'page'  => 'customer-complaint'
        ],

        [
          'label' => 'Customer Feedback',
          'url'   => 'customer-feedback.php',
          'page'  => 'customer-feedback'
        ],

      ]
    ],

    /*
    =====================================================
    MONITORING
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Sales Monitoring',
          'url'   => 'sales-monitoring.php',
          'page'  => 'sales-monitoring'
        ],

      ]
    ],

    /*
    =====================================================
    REPORT
    =====================================================
    */
    [
      'title' => 'Report',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Sales Report',
          'url'   => 'sales-report.php',
          'page'  => 'sales-report'
        ],

        [
          'label' => 'Quotation Report',
          'url'   => 'quotation-report.php',
          'page'  => 'quotation-report'
        ],

        [
          'label' => 'Reservation Report',
          'url'   => 'reservation-report.php',
          'page'  => 'reservation-report'
        ],

        [
          'label' => 'Installment Report',
          'url'   => 'installment-report.php',
          'page'  => 'installment-report'
        ],

        [
          'label' => 'Customer Loyalty Report',
          'url'   => 'customer-loyalty-report.php',
          'page'  => 'customer-loyalty-report'
        ],

      ]
    ],

    /*
    =====================================================
    ANALYSIS
    =====================================================
    */
    [
      'title' => 'Analysis',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Sales Analysis',
          'url'   => 'sales-analysis.php',
          'page'  => 'sales-analysis'
        ],

        [
          'label' => 'Customer Analysis',
          'url'   => 'customer-analysis.php',
          'page'  => 'customer-analysis'
        ],

        [
          'label' => 'Product Analysis',
          'url'   => 'product-analysis.php',
          'page'  => 'product-analysis'
        ],

      ]
    ],

    /*
    =====================================================
    HISTORY
    =====================================================
    */
    [
      'title' => 'History',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Sales History',
          'url'   => 'sales-history.php',
          'page'  => 'sales-history'
        ],

        [
          'label' => 'Customer Activity Log',
          'url'   => 'customer-activity-log.php',
          'page'  => 'customer-activity-log'
        ],

        [
          'label' => 'Sales Audit Trail',
          'url'   => 'sales-audit-trail.php',
          'page'  => 'sales-audit-trail'
        ],

      ]
    ],

  ]
],
  /*
  =========================================================
  OPERATION
  =========================================================
  */
  [
    'title' => 'Operation',
    'icon'  => 'fas fa-boxes',

    'pages' => [

      'operation-dashboard',

      'purchase',
      'purchase-return',
      'stock-movement',
      'stock-opname',

      'inventory-monitor',

      'inventory-report',

      'inventory-analysis',

      'stock-ledger',

      'stock-in',
      'stock-out',
      'transfer-stock',
      'adjustment-stock',
      'inventory-subledger',
      'fixed-asset-register',
      'fixed-asset-depreciation',
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
        // [
        //   'title' => 'Dashboard',
        //   'icon'  => 'fas fa-chart-line',

        //   'children' => [

        //     [
        //       'label' => 'Operation Dashboard',
        //       'url'   => 'operation-dashboard.php',
        //       'page'  => 'operation-dashboard'
        //     ],

        //   ]
        // ],

      /*
      =====================================================
      TRANSACTION
      =====================================================
      */
      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          [
            'label' => '✅ Purchase Receipt',
            'url'   => 'purchase.php',
            'page'  => 'purchase'
          ],

          [
            'label' => 'Purchase Return',
            'url'   => 'purchase-return.php',
            'page'  => 'purchase-return'
          ],

          [
            'label' => '✅ Stock Movement',
            'url'   => 'stock-movement.php',
            'page'  => 'stock-movement'
          ],

          [
            'label' => '✅ Stock Opname',
            'url'   => 'stock-opname.php',
            'page'  => 'stock-opname'
          ],
          [
            'label' => 'Stock In',
            'url'   => 'stock-in.php',
            'page'  => 'stock-in'
          ],

          [
            'label' => 'Stock Out',
            'url'   => 'stock-out.php',
            'page'  => 'stock-out'
          ],

          [
            'label' => 'Transfer Stock',
            'url'   => 'transfer-stock.php',
            'page'  => 'transfer-stock'
          ],

          [
            'label' => '✅ Stock Adjustment',
            'url'   => 'adjustment-stock.php',
            'page'  => 'adjustment-stock'
          ],
        ]
      ],

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Inventory Monitoring',
            'url'   => 'inventory-monitor.php',
            'page'  => 'inventory-monitor'
          ],

        ]
      ],

      /*
      =====================================================
      REPORT
      =====================================================
      */
      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          [
            'label' => 'Inventory Report',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report'
          ],
          [
            'label' => '✅ Stock Summary',
            'url'   => 'inventory-report.php',
            'page'  => 'inventory-report'
          ],
        ]
      ],

      /*
      =====================================================
      ANALYSIS
      =====================================================
      */
      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          [
            'label' => 'Inventory Analysis',
            'url'   => 'inventory-analysis.php',
            'page'  => 'inventory-analysis'
          ],

        ]
      ],

      /*
      =====================================================
      HISTORY
      =====================================================
      */
      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => '✅ Stock Ledger',
            'url'   => 'stock-ledger.php',
            'page'  => 'stock-ledger'
          ],

          [
            'label' => 'Inventory Subledger',
            'url'   => 'inventory-subledger.php',
            'page'  => 'inventory-subledger'
          ],

          [
            'label' => 'Fixed Asset Register',
            'url'   => 'fixed-asset-register.php',
            'page'  => 'fixed-asset-register'
          ],

          [
            'label' => 'Asset Depreciation',
            'url'   => 'fixed-asset-depreciation.php',
            'page'  => 'fixed-asset-depreciation'
          ],







        ]
      ],

    ]
  ],
/*
=========================================================
OPERATION
=========================================================
*/
[
  'title' => 'Operation',
  'icon'  => 'fas fa-gem',

  'pages' => [

    /*
    =====================================================
    DASHBOARD
    =====================================================
    */
    'operation-dashboard',

    /*
    =====================================================
    TRANSACTION
    =====================================================
    */
    'item-receipt',
    'item-qc',
    'item-assignment-showroom',
    'item-transfer',
    'item-reservation',
    'item-release-reservation',
    'item-sold',
    'item-return',
    'consignment-out',
    'consignment-return',
    'consignment-in',
    'buyback-request',
    'buyback-appraisal',
    'buyback-completion',
    'repair-request',
    'repair-send-vendor',
    'repair-receive-vendor',
    'repair-delivery-customer',
    'stock-opname',
    'inventory-adjustment',
    'item-revaluation',
    'certificate-update',

    /*
    =====================================================
    MONITORING
    =====================================================
    */
    'inventory-monitor',
    'showroom-monitor',
    'repair-monitor',
    'consignment-monitor',
    'item-custody-monitor',

    /*
    =====================================================
    REPORT
    =====================================================
    */
    'inventory-report',
    'stock-summary',
    'valuation-report',
    'consignment-report',
    'buyback-report',
    'repair-report',

    /*
    =====================================================
    ANALYSIS
    =====================================================
    */
    'inventory-analysis',
    'aging-analysis',
    'slow-moving-analysis',
    'branch-performance-analysis',
    'high-value-item-analysis',

    /*
    =====================================================
    HISTORY
    =====================================================
    */
    'item-movement-ledger',
    'inventory-subledger',
    'chain-custody-history',
    'serial-history',
    'valuation-history',
  ],

  'children' => [

    /*
    =====================================================
    DASHBOARD
    =====================================================
    */
    [
      'title' => 'Dashboard',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Operation Dashboard',
          'url'   => 'operation-dashboard.php',
          'page'  => 'operation-dashboard'
        ],

      ]
    ],

    /*
    =====================================================
    TRANSACTION
    =====================================================
    */
    [
      'title' => 'Transaction',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        /*
        =================================================
        INVENTORY INBOUND
        =================================================
        */
        [
          'label' => '✅ Item Receipt',
          'url'   => 'item-receipt.php',
          'page'  => 'item-receipt'
        ],

        [
          'label' => '✅ Item QC Verification',
          'url'   => 'item-qc.php',
          'page'  => 'item-qc'
        ],

        [
          'label' => 'Assign Item to Showroom',
          'url'   => 'item-assignment-showroom.php',
          'page'  => 'item-assignment-showroom'
        ],

        /*
        =================================================
        ITEM MOVEMENT
        =================================================
        */
        [
          'label' => '✅ Item Transfer',
          'url'   => 'item-transfer.php',
          'page'  => 'item-transfer'
        ],

        [
          'label' => 'Item Reservation',
          'url'   => 'item-reservation.php',
          'page'  => 'item-reservation'
        ],

        [
          'label' => 'Release Reservation',
          'url'   => 'item-release-reservation.php',
          'page'  => 'item-release-reservation'
        ],

        /*
        =================================================
        SALES & RETURN
        =================================================
        */
        [
          'label' => '✅ Item Sold',
          'url'   => 'item-sold.php',
          'page'  => 'item-sold'
        ],

        [
          'label' => 'Item Return',
          'url'   => 'item-return.php',
          'page'  => 'item-return'
        ],

        /*
        =================================================
        CONSIGNMENT
        =================================================
        */
        [
          'label' => 'Consignment Out',
          'url'   => 'consignment-out.php',
          'page'  => 'consignment-out'
        ],

        [
          'label' => 'Consignment Return',
          'url'   => 'consignment-return.php',
          'page'  => 'consignment-return'
        ],

        [
          'label' => 'Consignment In',
          'url'   => 'consignment-in.php',
          'page'  => 'consignment-in'
        ],

        /*
        =================================================
        BUYBACK
        =================================================
        */
        [
          'label' => 'Buyback Request',
          'url'   => 'buyback-request.php',
          'page'  => 'buyback-request'
        ],

        [
          'label' => 'Buyback Appraisal',
          'url'   => 'buyback-appraisal.php',
          'page'  => 'buyback-appraisal'
        ],

        [
          'label' => '✅ Buyback Completion',
          'url'   => 'buyback-completion.php',
          'page'  => 'buyback-completion'
        ],

        /*
        =================================================
        REPAIR & SERVICE
        =================================================
        */
        [
          'label' => 'Repair Request',
          'url'   => 'repair-request.php',
          'page'  => 'repair-request'
        ],

        [
          'label' => 'Send Repair to Vendor',
          'url'   => 'repair-send-vendor.php',
          'page'  => 'repair-send-vendor'
        ],

        [
          'label' => 'Receive Repair from Vendor',
          'url'   => 'repair-receive-vendor.php',
          'page'  => 'repair-receive-vendor'
        ],

        [
          'label' => 'Repair Delivery to Customer',
          'url'   => 'repair-delivery-customer.php',
          'page'  => 'repair-delivery-customer'
        ],

        /*
        =================================================
        STOCK CONTROL
        =================================================
        */
        [
          'label' => '✅ Stock Opname',
          'url'   => 'stock-opname.php',
          'page'  => 'stock-opname'
        ],

        [
          'label' => 'Inventory Adjustment',
          'url'   => 'inventory-adjustment.php',
          'page'  => 'inventory-adjustment'
        ],

        [
          'label' => 'Item Revaluation',
          'url'   => 'item-revaluation.php',
          'page'  => 'item-revaluation'
        ],

        [
          'label' => 'Certificate Update',
          'url'   => 'certificate-update.php',
          'page'  => 'certificate-update'
        ],

      ]
    ],

    /*
    =====================================================
    MONITORING
    =====================================================
    */
    [
      'title' => 'Monitoring',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Inventory Monitoring',
          'url'   => 'inventory-monitor.php',
          'page'  => 'inventory-monitor'
        ],

        [
          'label' => 'Showroom Monitoring',
          'url'   => 'showroom-monitor.php',
          'page'  => 'showroom-monitor'
        ],

        [
          'label' => 'Repair Monitoring',
          'url'   => 'repair-monitor.php',
          'page'  => 'repair-monitor'
        ],

        [
          'label' => 'Consignment Monitoring',
          'url'   => 'consignment-monitor.php',
          'page'  => 'consignment-monitor'
        ],

        [
          'label' => 'Item Custody Monitoring',
          'url'   => 'item-custody-monitor.php',
          'page'  => 'item-custody-monitor'
        ],

      ]
    ],

    /*
    =====================================================
    REPORT
    =====================================================
    */
    [
      'title' => 'Report',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Inventory Report',
          'url'   => 'inventory-report.php',
          'page'  => 'inventory-report'
        ],

        [
          'label' => 'Stock Summary',
          'url'   => 'stock-summary.php',
          'page'  => 'stock-summary'
        ],

        [
          'label' => 'Inventory Valuation',
          'url'   => 'valuation-report.php',
          'page'  => 'valuation-report'
        ],

        [
          'label' => 'Consignment Report',
          'url'   => 'consignment-report.php',
          'page'  => 'consignment-report'
        ],

        [
          'label' => 'Buyback Report',
          'url'   => 'buyback-report.php',
          'page'  => 'buyback-report'
        ],

        [
          'label' => 'Repair Report',
          'url'   => 'repair-report.php',
          'page'  => 'repair-report'
        ],

      ]
    ],

    /*
    =====================================================
    ANALYSIS
    =====================================================
    */
    [
      'title' => 'Analysis',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => 'Inventory Analysis',
          'url'   => 'inventory-analysis.php',
          'page'  => 'inventory-analysis'
        ],

        [
          'label' => 'Inventory Aging',
          'url'   => 'aging-analysis.php',
          'page'  => 'aging-analysis'
        ],

        [
          'label' => 'Slow Moving Item',
          'url'   => 'slow-moving-analysis.php',
          'page'  => 'slow-moving-analysis'
        ],

        [
          'label' => 'Branch Performance',
          'url'   => 'branch-performance-analysis.php',
          'page'  => 'branch-performance-analysis'
        ],

        [
          'label' => 'High Value Item Analysis',
          'url'   => 'high-value-item-analysis.php',
          'page'  => 'high-value-item-analysis'
        ],

      ]
    ],

    /*
    =====================================================
    HISTORY
    =====================================================
    */
    [
      'title' => 'History',
      'icon'  => 'fas fa-folder-open',

      'children' => [

        [
          'label' => '✅ Item Movement Ledger',
          'url'   => 'item-movement-ledger.php',
          'page'  => 'item-movement-ledger'
        ],

        [
          'label' => 'Inventory Subledger',
          'url'   => 'inventory-subledger.php',
          'page'  => 'inventory-subledger'
        ],

        [
          'label' => 'Chain of Custody History',
          'url'   => 'chain-custody-history.php',
          'page'  => 'chain-custody-history'
        ],

        [
          'label' => 'Serial Number History',
          'url'   => 'serial-history.php',
          'page'  => 'serial-history'
        ],

        [
          'label' => 'Valuation History',
          'url'   => 'valuation-history.php',
          'page'  => 'valuation-history'
        ],

      ]
    ],

  ]
],
  /*
  =========================================================
  FINANCE
  =========================================================
  */
  [
    'title' => 'Finance',
    'icon'  => 'fas fa-wallet',

    'pages' => [

      'finance-dashboard',

      'cash-in',
      'cash-out',
      'journal',

      'cashflow-monitor',

      'financial-report',
      'financial-report-journal',

      'financial-analysis',

      'general-ledger',
      'ar-ledger',


      'fixed-asset-register',
      'fixed-asset-depreciation',
      'fixed-asset-disposal',
      'fixed-asset-transfer',
      'fixed-asset-maintenance',


      'inventory-subledger',
      'ap-subledger',
      'tax-subledger',
      'cash-bank-mutation',
    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      // [
      //   'title' => 'Dashboard',
      //   'icon'  => 'fas fa-chart-line',

      //   'children' => [

      //     [
      //       'label' => 'Finance Dashboard',
      //       'url'   => 'finance-dashboard.php',
      //       'page'  => 'finance-dashboard'
      //     ],

      //   ]
      // ],

      /*
      =====================================================
      TRANSACTION
      =====================================================
      */
      [
        'title' => 'Transaction',
        'icon'  => 'fas fa-exchange-alt',

        'children' => [

          [
            'label' => 'Cash In',
            'url'   => 'cash-in.php',
            'page'  => 'cash-in'
          ],

          [
            'label' => 'Cash Out',
            'url'   => 'cash-out.php',
            'page'  => 'cash-out'
          ],

[
            'label' => 'Budgeting',
            'url'   => 'budgeting.php',
            'page'  => 'budgeting'
          ],

          [
            'label' => 'Journal Entry',
            'url'   => 'journal.php',
            'page'  => 'journal'
          ],

          [
            'label' => 'Asset Management',
            'url'   => 'asset-management.php',
            'page'  => 'asset-management'
          ],

          [
            'label' => 'Fixed Asset Acquisition',
            'url'   => 'fixed-asset-acquisition.php',
            'page'  => 'fixed-asset-acquisition'
          ],

          [
            'label' => 'Fixed Asset Disposal',
            'url'   => 'fixed-asset-disposal.php',
            'page'  => 'fixed-asset-disposal'
          ],

          [
            'label' => 'Fixed Asset Transfer',
            'url'   => 'fixed-asset-transfer.php',
            'page'  => 'fixed-asset-transfer'
          ],
          [
            'label' => 'config-journal-engine',
            'url'   => 'config-journal-engine.php',
            'page'  => 'config-journal-engine'
          ],
        ]
      ],

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Cashflow Monitoring',
            'url'   => 'cashflow-monitor.php',
            'page'  => 'cashflow-monitor'
          ],
          [
            'label' => 'Cash / Bank Mutation',
            'url'   => 'cash-bank-mutation.php',
            'page'  => 'cash-bank-mutation'
          ],

          [
            'label' => 'AR Aging',
            'url'   => 'ar-aging.php',
            'page'  => 'ar-aging'
          ],

          [
            'label' => 'AP Aging',
            'url'   => 'ap-aging.php',
            'page'  => 'ap-aging'
          ],

          [
            'label' => 'Inventory Subledger',
            'url'   => 'inventory-subledger.php',
            'page'  => 'inventory-subledger'
          ],

          [
            'label' => 'Fixed Asset Register',
            'url'   => 'fixed-asset-register.php',
            'page'  => 'fixed-asset-register'
          ],

          [
            'label' => 'Tax Subledger',
            'url'   => 'tax-subledger.php',
            'page'  => 'tax-subledger'
          ],

// Employee Advance / Reimbursement

        ]
      ],

      /*
      =====================================================
      REPORT
      =====================================================
      */
      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          // [
          //   'label' => 'Financial Report',
          //   'url'   => 'financial-report.php',
          //   'page'  => 'financial-report'
          // ],

          [
            'label' => 'Journal Report',
            'url'   => 'financial-report-journal.php',
            'page'  => 'financial-report-journal'
          ],
          [
            'label' => 'PnL Report',
            'url'   => 'financial-report-pnl.php',
            'page'  => 'financial-report-pnl'
          ],
          [
            'label' => 'Equity Statement',
            'url'   => 'financial-report-equity.php',
            'page'  => 'financial-report-equity'
          ],
          [
            'label' => 'Balance Sheet',
            'url'   => 'financial-report-balance.php',
            'page'  => 'financial-report-balance'
          ],
          [
            'label' => 'Cashflow Statement',
            'url'   => 'financial-report-cashflow.php',
            'page'  => 'financial-report-cashflow'
          ],




          [
            'label' => 'Fixed Asset Report',
            'url'   => 'fixed-asset-report.php',
            'page'  => 'fixed-asset-report'
          ],

          [
            'label' => 'Depreciation Report',
            'url'   => 'depreciation-report.php',
            'page'  => 'depreciation-report'
          ],
          [
            'label' => 'sales Report',
            'url'   => 'sales-report.php',
            'page'  => 'sales-report'
          ],

        ]
      ],

      /*
      =====================================================
      ANALYSIS
      =====================================================
      */
      [
        'title' => 'Analysis',
        'icon'  => 'fas fa-chart-bar',

        'children' => [

          // [
          //   'label' => 'Financial Analysis',
          //   'url'   => 'financial-analysis.php',
          //   'page'  => 'financial-analysis'
          // ],
[
            'label' => 'Profitability',
            'url'   => 'financial-analysis-pnl.php',
            'page'  => 'financial-analysis-pnl'
          ],
          [
            'label' => 'Trend',
            'url'   => 'financial-analysis-pnl.php',
            'page'  => 'financial-analysis-pnl'
          ],
          [
            'label' => 'Forecasting',
            'url'   => 'financial-analysis-pnl.php',
            'page'  => 'financial-analysis-pnl'
          ],

        ]
      ],

      /*
      =====================================================
      HISTORY
      =====================================================
      */
      [
        'title' => 'History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => '✅ General Ledger',
            'url'   => 'general-ledger.php',
            'page'  => 'general-ledger'
          ],
          
          [
            'label' => 'All Subledger',
            'url'   => 'history-subledger.php',
            'page'  => 'history-subledger'
          ],
[
            'label' => 'Stock Ledger',
            'url'   => 'stock-ledger.php',
            'page'  => 'stock-ledger'
          ],


          [
            'label' => 'Inventory Subledger',
            'url'   => 'inventory-subledger.php',
            'page'  => 'inventory-subledger'
          ],
          [
            'label' => 'asset ledger',
            'url'   => 'asset-subledger.php',
            'page'  => 'asset-subledger'
          ],
[
            'label' => '✅ AR Ledger',
            'url'   => 'ar-ledger.php',
            'page'  => 'ar-ledger'
          ],
          [
            'label' => 'AP Subledger',
            'url'   => 'ap-subledger.php',
            'page'  => 'ap-subledger'
          ],


          [
            'label' => 'Tax Subledger',
            'url'   => 'tax-subledger.php',
            'page'  => 'tax-subledger'
          ],







        ]
      ],

    ]
  ],


  /*
  =========================================================
  SYSTEM ACCESS
  =========================================================
  */
  [
    'title' => 'System Access',
    'icon'  => 'fas fa-user-shield',

    'pages' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      'access-dashboard',
'server-dashboard',
      /*
      =====================================================
      MANAGEMENT
      =====================================================
      */
      'access-users',
      'access-roles',
      'access-permissions',
      'access-user-role-mapping',
      'access-user-actor-mapping',
      'access-role-permission-mapping',
      'access-role-scope-mapping',
      'access-context-management',
      'access-authentication-settings',
      'access-security-policy',

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      'access-active-sessions',
      'access-online-users',
      'access-failed-login-monitor',
      'access-concurrent-login-monitor',
      'access-access-violation-monitor',
      'access-suspicious-activity-monitor',

      /*
      =====================================================
      REPORT
      =====================================================
      */
      'access-login-report',
      'access-user-activity-report',
      'access-permission-usage-report',
      'access-session-report',
      'access-access-summary-report',
      'access-role-assignment-report',

      /*
      =====================================================
      AUDIT / HISTORY
      =====================================================
      */
      'access-audit-trail',
      'access-login-history',
      'access-permission-change-history',
      'access-role-assignment-history',
      'access-user-status-history',
      'access-session-history',
      'access-access-log',

    ],

    'children' => [

      /*
      =====================================================
      DASHBOARD
      =====================================================
      */
      [
        'title' => 'Dashboard',
        'icon'  => 'fas fa-chart-pie',

        'children' => [

          [
            'label' => 'Access Overview',
            'url'   => 'access-dashboard.php',
            'page'  => 'access-dashboard'
          ],
          [
            'label' => 'Server Overview',
            'url'   => 'server-dashboard.php',
            'page'  => 'server-dashboard'
          ],

        ]
      ],

      /*
      =====================================================
      MANAGEMENT
      =====================================================
      */
      [
        'title' => 'Management',
        'icon'  => 'fas fa-users-cog',

        'children' => [

          [
            'label' => 'Users*',
            'url'   => 'access-users.php',
            'page'  => 'access-users'
          ],

          [
            'label' => 'Roles',
            'url'   => 'access-roles.php',
            'page'  => 'access-roles'
          ],

          [
            'label' => 'Permissions',
            'url'   => 'access-permissions.php',
            'page'  => 'access-permissions'
          ],

          [
            'label' => 'User Role Mapping',
            'url'   => 'access-user-role-mapping.php',
            'page'  => 'access-user-role-mapping'
          ],

          [
            'label' => 'User Actor Mapping*',
            'url'   => 'access-user-actor-mapping.php',
            'page'  => 'access-user-actor-mapping'
          ],

          [
            'label' => 'Role Permission Mapping',
            'url'   => 'access-role-permission-mapping.php',
            'page'  => 'access-role-permission-mapping'
          ],

          [
            'label' => 'Role Scope Mapping',
            'url'   => 'access-role-scope-mapping.php',
            'page'  => 'access-role-scope-mapping'
          ],

          [
            'label' => 'Context Management',
            'url'   => 'access-context-management.php',
            'page'  => 'access-context-management'
          ],

          [
            'label' => 'Authentication Settings',
            'url'   => 'access-authentication-settings.php',
            'page'  => 'access-authentication-settings'
          ],

          [
            'label' => 'Security Policy',
            'url'   => 'access-security-policy.php',
            'page'  => 'access-security-policy'
          ],

        ]
      ],

      /*
      =====================================================
      MONITORING
      =====================================================
      */
      [
        'title' => 'Monitoring',
        'icon'  => 'fas fa-desktop',

        'children' => [

          [
            'label' => 'Active Sessions',
            'url'   => 'access-active-sessions.php',
            'page'  => 'access-active-sessions'
          ],

          [
            'label' => 'Online Users',
            'url'   => 'access-online-users.php',
            'page'  => 'access-online-users'
          ],

          [
            'label' => 'Failed Login Monitor',
            'url'   => 'access-failed-login-monitor.php',
            'page'  => 'access-failed-login-monitor'
          ],

          [
            'label' => 'Concurrent Login Monitor',
            'url'   => 'access-concurrent-login-monitor.php',
            'page'  => 'access-concurrent-login-monitor'
          ],

          [
            'label' => 'Access Violation Monitor',
            'url'   => 'access-access-violation-monitor.php',
            'page'  => 'access-access-violation-monitor'
          ],

          [
            'label' => 'Suspicious Activity Monitor',
            'url'   => 'access-suspicious-activity-monitor.php',
            'page'  => 'access-suspicious-activity-monitor'
          ],

        ]
      ],

      /*
      =====================================================
      REPORT
      =====================================================
      */
      [
        'title' => 'Report',
        'icon'  => 'fas fa-folder-open',

        'children' => [

          [
            'label' => 'Login Report',
            'url'   => 'access-login-report.php',
            'page'  => 'access-login-report'
          ],

          [
            'label' => 'User Activity Report',
            'url'   => 'access-user-activity-report.php',
            'page'  => 'access-user-activity-report'
          ],

          [
            'label' => 'Permission Usage Report',
            'url'   => 'access-permission-usage-report.php',
            'page'  => 'access-permission-usage-report'
          ],

          [
            'label' => 'Session Report',
            'url'   => 'access-session-report.php',
            'page'  => 'access-session-report'
          ],

          [
            'label' => 'Access Summary Report',
            'url'   => 'access-access-summary-report.php',
            'page'  => 'access-access-summary-report'
          ],

          [
            'label' => 'Role Assignment Report',
            'url'   => 'access-role-assignment-report.php',
            'page'  => 'access-role-assignment-report'
          ],

        ]
      ],

      /*
      =====================================================
      AUDIT / HISTORY
      =====================================================
      */
      [
        'title' => 'Audit / History',
        'icon'  => 'fas fa-history',

        'children' => [

          [
            'label' => 'Audit Trail',
            'url'   => 'access-audit-trail.php',
            'page'  => 'access-audit-trail'
          ],

          [
            'label' => 'Login History',
            'url'   => 'access-login-history.php',
            'page'  => 'access-login-history'
          ],

          [
            'label' => 'Permission Change History',
            'url'   => 'access-permission-change-history.php',
            'page'  => 'access-permission-change-history'
          ],

          [
            'label' => 'Role Assignment History',
            'url'   => 'access-role-assignment-history.php',
            'page'  => 'access-role-assignment-history'
          ],

          [
            'label' => 'User Status History',
            'url'   => 'access-user-status-history.php',
            'page'  => 'access-user-status-history'
          ],

          [
            'label' => 'Session History',
            'url'   => 'access-session-history.php',
            'page'  => 'access-session-history'
          ],

          [
            'label' => 'Access Log',
            'url'   => 'access-access-log.php',
            'page'  => 'access-access-log'
          ],

        ]
      ],

    ]
  ],



];

?>

    <!-- ======================================================= -->
    <!-- SIDEBAR MENU -->
    <!-- ======================================================= -->
    <nav class="mt-2">
    <!-- ======================================================= -->
    <!-- SIDEBAR SEARCH -->
    <!-- ======================================================= -->
    <div class="px-3 mb-2">

      <div class="input-group input-group-sm">

        <input type="text"
               id="sidebarSearch"
               class="form-control form-control-sidebar"
               placeholder="Search menu...">

        <div class="input-group-append">

          <button class="btn btn-sidebar">
            <i class="fas fa-search"></i>
          </button>

        </div>

      </div>

    </div>
      <ul class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="true">

<?php foreach($menu as $lvl1): 

  $lvl1Open = in_array($page, $lvl1['pages']);

?>

        <!-- =================================================== -->
        <!-- LEVEL 1 -->
        <!-- =================================================== -->
        <li class="nav-item <?= $lvl1Open ? 'menu-open' : '' ?>">

          <a href="#"
             class="nav-link <?= $lvl1Open ? 'active' : '' ?>">

            <i class="nav-icon <?= $lvl1['icon'] ?>"></i>

            <p>
              <?= $lvl1['title'] ?>
              <i class="right fas fa-angle-left"></i>
            </p>

          </a>

          <!-- LEVEL 2 -->
          <ul class="nav nav-treeview">

<?php foreach($lvl1['children'] as $lvl2): ?>

<?php

$lvl2Open = false;

foreach($lvl2['children'] as $lvl3){

  if($page == $lvl3['page']){
    $lvl2Open = true;
  }

}

?>

            <li class="nav-item <?= $lvl2Open ? 'menu-open' : '' ?>">

              <a href="#"
                 class="nav-link <?= $lvl2Open ? 'active' : '' ?>">

                <i class="nav-icon <?= $lvl2['icon'] ?>"></i>

                <p>
                  <?= $lvl2['title'] ?>
                  <i class="right fas fa-angle-left"></i>
                </p>

              </a>

              <!-- LEVEL 3 -->
              <ul class="nav nav-treeview">

<?php foreach($lvl2['children'] as $lvl3): ?>

                <li class="nav-item sidebar-search-item">

                  <a href="<?= $lvl3['url'] ?>"
                     class="nav-link <?= ($page == $lvl3['page']) ? 'active' : '' ?>">

                    <i class="far fa-circle nav-icon"></i>

                    <p class="sidebar-search-text">
                      <?= $lvl3['label'] ?>
                    </p>

                  </a>

                </li>

<?php endforeach; ?>

              </ul>

            </li>

<?php endforeach; ?>

          </ul>

        </li>

<?php endforeach; ?>

        <!-- =================================================== -->
        <!-- BACK BUTTON -->
        <!-- =================================================== -->
        <li class="nav-item mt-3">

          <a href="../menu.php" class="nav-link">

            <i class="nav-icon fas fa-arrow-left"></i>

            <p>
              Kembali Menu Utama
            </p>

          </a>

        </li>

      </ul>

    </nav>

  </div>

</aside>
