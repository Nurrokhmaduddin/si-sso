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
          'label' => 'Member',
          'url'   => 'master-member.php',
          'page'  => 'master-member'
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
            'label' => 'Sales Order',
            'url'   => 'sales-order.php',
            'page'  => 'sales-order'
          ],

          [
            'label' => 'Sales Invoice',
            'url'   => 'sales-invoice.php',
            'page'  => 'sales-invoice'
          ],

          [
            'label' => 'Sales Return',
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

      'stock-ledger'
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
            'label' => 'Purchase',
            'url'   => 'purchase.php',
            'page'  => 'purchase'
          ],

          [
            'label' => 'Purchase Return',
            'url'   => 'purchase-return.php',
            'page'  => 'purchase-return'
          ],

          [
            'label' => 'Stock Movement',
            'url'   => 'stock-movement.php',
            'page'  => 'stock-movement'
          ],

          [
            'label' => 'Stock Opname',
            'url'   => 'stock-opname.php',
            'page'  => 'stock-opname'
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
            'label' => 'Stock Ledger',
            'url'   => 'stock-ledger.php',
            'page'  => 'stock-ledger'
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

      'financial-analysis',

      'general-ledger'
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
            'label' => 'Journal Entry',
            'url'   => 'journal.php',
            'page'  => 'journal'
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
            'label' => 'Financial Report',
            'url'   => 'financial-report.php',
            'page'  => 'financial-report'
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
            'label' => 'Financial Analysis',
            'url'   => 'financial-analysis.php',
            'page'  => 'financial-analysis'
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
            'label' => 'General Ledger',
            'url'   => 'general-ledger.php',
            'page'  => 'general-ledger'
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

                <li class="nav-item">

                  <a href="<?= $lvl3['url'] ?>"
                     class="nav-link <?= ($page == $lvl3['page']) ? 'active' : '' ?>">

                    <i class="far fa-circle nav-icon"></i>

                    <p>
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