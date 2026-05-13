<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Finance Monitoring Dashboard</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Inter, sans-serif;
    }

    body{
      background:#f4f7fb;
      color:#1e293b;
      padding:24px;
    }

    .page-title{
      margin-bottom:24px;
    }

    .page-title h1{
      font-size:28px;
      margin-bottom:8px;
    }

    .page-title p{
      color:#64748b;
    }

    .grid{
      display:grid;
      gap:20px;
    }

    .grid-4{
      grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
    }

    .grid-2{
      grid-template-columns: repeat(auto-fit, minmax(450px,1fr));
      margin-top:20px;
    }

    .card{
      background:white;
      border-radius:16px;
      padding:20px;
      box-shadow:0 4px 18px rgba(0,0,0,0.05);
    }

    .card-header{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:18px;
    }

    .card-title{
      font-size:16px;
      font-weight:600;
    }

    .badge{
      padding:6px 10px;
      border-radius:999px;
      font-size:12px;
      font-weight:600;
    }

    .success{
      background:#dcfce7;
      color:#166534;
    }

    .warning{
      background:#fef3c7;
      color:#92400e;
    }

    .danger{
      background:#fee2e2;
      color:#991b1b;
    }

    .metric{
      font-size:32px;
      font-weight:700;
      margin-bottom:8px;
    }

    .subtext{
      color:#64748b;
      font-size:14px;
    }

    table{
      width:100%;
      border-collapse:collapse;
    }

    table th{
      text-align:left;
      padding:12px 0;
      font-size:13px;
      color:#64748b;
      border-bottom:1px solid #e2e8f0;
    }

    table td{
      padding:14px 0;
      border-bottom:1px solid #f1f5f9;
      font-size:14px;
    }

    .status{
      padding:5px 10px;
      border-radius:999px;
      font-size:12px;
      font-weight:600;
      display:inline-block;
    }

    .status.pending{
      background:#fef3c7;
      color:#92400e;
    }

    .status.overdue{
      background:#fee2e2;
      color:#991b1b;
    }

    .status.active{
      background:#dcfce7;
      color:#166534;
    }

    .alert-item{
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:14px 0;
      border-bottom:1px solid #f1f5f9;
    }

    .alert-left{
      display:flex;
      flex-direction:column;
      gap:4px;
    }

    .alert-title{
      font-weight:600;
      font-size:14px;
    }

    .alert-desc{
      font-size:13px;
      color:#64748b;
    }

    .progress-wrapper{
      margin-top:18px;
    }

    .progress-label{
      display:flex;
      justify-content:space-between;
      margin-bottom:8px;
      font-size:14px;
    }

    .progress{
      width:100%;
      height:10px;
      background:#e2e8f0;
      border-radius:999px;
      overflow:hidden;
    }

    .progress-bar{
      height:100%;
      border-radius:999px;
    }

    .green{
      background:#22c55e;
    }

    .yellow{
      background:#f59e0b;
    }

    .red{
      background:#ef4444;
    }

  </style>
</head>
<body>

  <div class="page-title">
    <h1>Finance Monitoring Dashboard</h1>
    <p>
      Monitoring operational finance, cash flow, profitability, and approval activities in realtime.
    </p>
  </div>

  <!-- TOP KPI -->
  <div class="grid grid-4">

    <div class="card">
      <div class="card-header">
        <div class="card-title">Cash Position</div>
        <div class="badge success">Healthy</div>
      </div>

      <div class="metric">$245,000</div>
      <div class="subtext">
        Combined bank balance & petty cash
      </div>
    </div>
<div class="card">
      <div class="card-header">
        <div class="card-title">Cash In</div>
        <div class="badge warning">Need Follow Up</div>
      </div>

      <div class="metric">$84,500</div>
      <div class="subtext">
        14 invoices unpaid this month
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="card-title">Cash Out</div>
        <div class="badge danger">Urgent</div>
      </div>

      <div class="metric">$62,800</div>
      <div class="subtext">
        8 vendor payments approaching due date
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="card-title">Arus Kas Bersih</div>
        <div class="badge success">+/- $62,800</div>
      </div>

      <div class="metric">18.6%</div>
      <div class="subtext">
        Current month profitability performance
      </div>
    </div>
    <!-- <div class="card">
      <div class="card-header">
        <div class="card-title">AR Outstanding</div>
        <div class="badge warning">Need Follow Up</div>
      </div>

      <div class="metric">$84,500</div>
      <div class="subtext">
        14 invoices unpaid this month
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="card-title">AP Due This Week</div>
        <div class="badge danger">Urgent</div>
      </div>

      <div class="metric">$62,800</div>
      <div class="subtext">
        8 vendor payments approaching due date
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="card-title">Net Profit Margin</div>
        <div class="badge success">+12.4%</div>
      </div>

      <div class="metric">18.6%</div>
      <div class="subtext">
        Current month profitability performance
      </div>
    </div> -->

  </div>

  <!-- MAIN CONTENT -->
  <div class="grid grid-2">

    <!-- OPERATIONAL QUEUE -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">Operational Queue</div>
      </div>

      <table>
        <thead>
          <tr>
            <th>Task</th>
            <th>Owner</th>
            <th>Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Invoice Approval #INV-2026-102</td>
            <td>Finance Manager</td>
            <td>
              <span class="status pending">Pending</span>
            </td>
          </tr>

          <tr>
            <td>Budget Revision Marketing</td>
            <td>Director</td>
            <td>
              <span class="status overdue">Overdue</span>
            </td>
          </tr>

          <tr>
            <td>Expense Claim Reimbursement</td>
            <td>Accounting Staff</td>
            <td>
              <span class="status active">In Progress</span>
            </td>
          </tr>

          <tr>
            <td>Journal Posting Adjustment</td>
            <td>Senior Accountant</td>
            <td>
              <span class="status pending">Waiting Approval</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- CRITICAL ALERT -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">Critical Alerts</div>
      </div>

      <div class="alert-item">
        <div class="alert-left">
          <div class="alert-title">
            AP Payment Overdue
          </div>
          <div class="alert-desc">
            Vendor PT Maju Jaya overdue for 5 days
          </div>
        </div>

        <div class="badge danger">
          Critical
        </div>
      </div>

      <div class="alert-item">
        <div class="alert-left">
          <div class="alert-title">
            Budget Exceeded
          </div>
          <div class="alert-desc">
            Marketing spending reached 112%
          </div>
        </div>

        <div class="badge warning">
          Warning
        </div>
      </div>

      <div class="alert-item">
        <div class="alert-left">
          <div class="alert-title">
            Cash Flow Risk
          </div>
          <div class="alert-desc">
            Predicted negative cash balance in 6 days
          </div>
        </div>

        <div class="badge danger">
          High Risk
        </div>
      </div>

      <div class="alert-item">
        <div class="alert-left">
          <div class="alert-title">
            Unposted Journal
          </div>
          <div class="alert-desc">
            12 journal entries still in draft
          </div>
        </div>

        <div class="badge warning">
          Attention
        </div>
      </div>

    </div>

    <!-- FINANCIAL HEALTH -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">Financial Health</div>
      </div>

      <div class="progress-wrapper">
        <div class="progress-label">
          <span>Budget Utilization</span>
          <span>76%</span>
        </div>

        <div class="progress">
          <div class="progress-bar yellow" style="width:76%"></div>
        </div>
      </div>

      <div class="progress-wrapper">
        <div class="progress-label">
          <span>Accounts Receivable Collection</span>
          <span>64%</span>
        </div>

        <div class="progress">
          <div class="progress-bar green" style="width:64%"></div>
        </div>
      </div>

      <div class="progress-wrapper">
        <div class="progress-label">
          <span>Accounts Payable Settlement</span>
          <span>48%</span>
        </div>

        <div class="progress">
          <div class="progress-bar red" style="width:48%"></div>
        </div>
      </div>

      <div class="progress-wrapper">
        <div class="progress-label">
          <span>Cash Reserve Safety</span>
          <span>82%</span>
        </div>

        <div class="progress">
          <div class="progress-bar green" style="width:82%"></div>
        </div>
      </div>

    </div>

    <!-- CASH FLOW -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">Cash Flow Forecast</div>
      </div>

      <table>
        <thead>
          <tr>
            <th>Period</th>
            <th>Cash In</th>
            <th>Cash Out</th>
            <th>Net</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>This Week</td>
            <td>$48,000</td>
            <td>$42,500</td>
            <td style="color:green;">+$5,500</td>
          </tr>

          <tr>
            <td>Next Week</td>
            <td>$37,000</td>
            <td>$52,000</td>
            <td style="color:red;">-$15,000</td>
          </tr>

          <tr>
            <td>This Month</td>
            <td>$212,000</td>
            <td>$184,000</td>
            <td style="color:green;">+$28,000</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Finance Monitoring Dashboard</title>

<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:Inter,sans-serif;
}

body{
  background:#f3f6fb;
  color:#1e293b;
  padding:24px;
}

/* HEADER */

.header{
  margin-bottom:24px;
}

.header h1{
  font-size:30px;
  margin-bottom:8px;
}

.header p{
  color:#64748b;
  font-size:14px;
}

/* GRID */

.grid{
  display:grid;
  gap:20px;
}

.grid-top{
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
}

.grid-main{
  margin-top:20px;
  grid-template-columns:1.3fr 1fr;
}

/* CARD */

.card{
  background:white;
  border-radius:18px;
  padding:22px;
  box-shadow:0 4px 20px rgba(15,23,42,0.05);
}

.card-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:20px;
}

.card-title{
  font-size:16px;
  font-weight:700;
}

/* KPI */

.metric{
  font-size:34px;
  font-weight:800;
  margin-bottom:8px;
}

.sub{
  color:#64748b;
  font-size:13px;
  line-height:1.5;
}

/* BADGE */

.badge{
  padding:6px 12px;
  border-radius:999px;
  font-size:12px;
  font-weight:700;
}

.success{
  background:#dcfce7;
  color:#166534;
}

.warning{
  background:#fef3c7;
  color:#92400e;
}

.danger{
  background:#fee2e2;
  color:#991b1b;
}

/* TABLE */

table{
  width:100%;
  border-collapse:collapse;
}

table th{
  text-align:left;
  padding-bottom:14px;
  color:#64748b;
  font-size:13px;
  border-bottom:1px solid #e2e8f0;
}

table td{
  padding:16px 0;
  border-bottom:1px solid #f1f5f9;
  font-size:14px;
}

/* STATUS */

.status{
  padding:5px 10px;
  border-radius:999px;
  font-size:12px;
  font-weight:700;
  display:inline-block;
}

.pending{
  background:#fef3c7;
  color:#92400e;
}

.over{
  background:#fee2e2;
  color:#991b1b;
}

.safe{
  background:#dcfce7;
  color:#166534;
}

/* PROGRESS */

.progress-group{
  margin-bottom:24px;
}

.progress-top{
  display:flex;
  justify-content:space-between;
  margin-bottom:8px;
  font-size:14px;
}

.progress{
  width:100%;
  height:12px;
  background:#e2e8f0;
  border-radius:999px;
  overflow:hidden;
}

.bar{
  height:100%;
  border-radius:999px;
}

.green{
  background:#22c55e;
}

.yellow{
  background:#f59e0b;
}

.red{
  background:#ef4444;
}

.blue{
  background:#3b82f6;
}

/* ALERT */

.alert{
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:16px;
  padding:16px 0;
  border-bottom:1px solid #f1f5f9;
}

.alert-title{
  font-weight:700;
  margin-bottom:4px;
  font-size:14px;
}

.alert-desc{
  font-size:13px;
  color:#64748b;
  line-height:1.5;
}

/* RESPONSIVE */

@media(max-width:1000px){

  .grid-main{
    grid-template-columns:1fr;
  }

}

</style>
</head>

<body>

<!-- HEADER -->

<div class="header">
  <h1>Finance Monitoring Dashboard</h1>
  <p>
    Monitoring budget realization, expense control, revenue achievement,
    operational finance activities, and cash flow sustainability in realtime.
  </p>
</div>

<!-- KPI SECTION -->

<div class="grid grid-top">

  <!-- BUDGET UTILIZATION -->

  <div class="card">

    <div class="card-header">
      <div class="card-title">Budget Utilization</div>
      <div class="badge warning">76%</div>
    </div>

    <div class="metric">$1.24M</div>

    <div class="sub">
      Budget realization from total annual allocated budget of $1.63M
    </div>

  </div>

  <!-- EXPENSE -->

  <div class="card">

    <div class="card-header">
      <div class="card-title">Operational Expense</div>
      <div class="badge danger">Over Budget</div>
    </div>

    <div class="metric">$284K</div>

    <div class="sub">
      Operational expenses exceeded monthly target by 12%
    </div>

  </div>

  <!-- REVENUE -->

  <div class="card">

    <div class="card-header">
      <div class="card-title">Revenue Achievement</div>
      <div class="badge success">92%</div>
    </div>

    <div class="metric">$742K</div>

    <div class="sub">
      Revenue realization against monthly target of $800K
    </div>

  </div>

  <!-- CASH POSITION -->

  <div class="card">

    <div class="card-header">
      <div class="card-title">Cash Position</div>
      <div class="badge success">Healthy</div>
    </div>

    <div class="metric">$245K</div>

    <div class="sub">
      Combined bank balance and petty cash available
    </div>

  </div>

</div>

<!-- MAIN GRID -->

<div class="grid grid-main">

  <!-- LEFT SECTION -->

  <div>

    <!-- BUDGET HEALTH -->

    <div class="card" style="margin-bottom:20px;">

      <div class="card-header">
        <div class="card-title">
          Budget & Profitability Health
        </div>
      </div>

      <div class="progress-group">

        <div class="progress-top">
          <span>Revenue Target Achievement</span>
          <span>92%</span>
        </div>

        <div class="progress">
          <div class="bar green" style="width:92%"></div>
        </div>

      </div>

      <div class="progress-group">

        <div class="progress-top">
          <span>Operational Expense Ratio</span>
          <span>81%</span>
        </div>

        <div class="progress">
          <div class="bar yellow" style="width:81%"></div>
        </div>

      </div>

      <div class="progress-group">

        <div class="progress-top">
          <span>Department Budget Usage</span>
          <span>76%</span>
        </div>

        <div class="progress">
          <div class="bar blue" style="width:76%"></div>
        </div>

      </div>

      <div class="progress-group">

        <div class="progress-top">
          <span>Net Profit Margin</span>
          <span>18.6%</span>
        </div>

        <div class="progress">
          <div class="bar green" style="width:68%"></div>
        </div>

      </div>

    </div>

    <!-- OPERATIONAL QUEUE -->

    <div class="card">

      <div class="card-header">
        <div class="card-title">
          Operational Queue
        </div>
      </div>

      <table>

        <thead>
          <tr>
            <th>Task</th>
            <th>Owner</th>
            <th>Status</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td>Budget Revision Approval</td>
            <td>Finance Director</td>
            <td>
              <span class="status pending">
                Pending
              </span>
            </td>
          </tr>

          <tr>
            <td>Expense Claim Verification</td>
            <td>Accounting Team</td>
            <td>
              <span class="status pending">
                Review
              </span>
            </td>
          </tr>

          <tr>
            <td>Vendor Payment Approval</td>
            <td>Finance Manager</td>
            <td>
              <span class="status over">
                Overdue
              </span>
            </td>
          </tr>

          <tr>
            <td>Revenue Reconciliation</td>
            <td>AR Officer</td>
            <td>
              <span class="status safe">
                Active
              </span>
            </td>
          </tr>

          <tr>
            <td>Journal Adjustment Posting</td>
            <td>Senior Accountant</td>
            <td>
              <span class="status pending">
                Waiting
              </span>
            </td>
          </tr>

        </tbody>

      </table>

    </div>

  </div>

  <!-- RIGHT SECTION -->

  <div>

    <!-- CRITICAL ALERT -->

    <div class="card" style="margin-bottom:20px;">

      <div class="card-header">
        <div class="card-title">
          Critical Alerts
        </div>
      </div>

      <div class="alert">

        <div>
          <div class="alert-title">
            Expense Exceeded Budget
          </div>

          <div class="alert-desc">
            Marketing division exceeded allocated budget by 12%
          </div>
        </div>

        <div class="badge danger">
          Critical
        </div>

      </div>

      <div class="alert">

        <div>
          <div class="alert-title">
            Revenue Below Target
          </div>

          <div class="alert-desc">
            Revenue realization is below expected weekly projection
          </div>
        </div>

        <div class="badge warning">
          Warning
        </div>

      </div>

      <div class="alert">

        <div>
          <div class="alert-title">
            Upcoming Cash Deficit
          </div>

          <div class="alert-desc">
            Cash outflow next week predicted higher than incoming cash
          </div>
        </div>

        <div class="badge danger">
          High Risk
        </div>

      </div>

      <div class="alert">

        <div>
          <div class="alert-title">
            Pending High Value Approval
          </div>

          <div class="alert-desc">
            3 invoices above $25K still waiting for approval
          </div>
        </div>

        <div class="badge warning">
          Attention
        </div>

      </div>

    </div>

    <!-- CASH FLOW -->

    <div class="card">

      <div class="card-header">
        <div class="card-title">
          Cash Flow Forecast
        </div>
      </div>

      <table>

        <thead>
          <tr>
            <th>Period</th>
            <th>Cash In</th>
            <th>Cash Out</th>
            <th>Net</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td>This Week</td>
            <td>$48K</td>
            <td>$42K</td>
            <td style="color:green;font-weight:700;">
              +$6K
            </td>
          </tr>

          <tr>
            <td>Next Week</td>
            <td>$37K</td>
            <td>$52K</td>
            <td style="color:red;font-weight:700;">
              -$15K
            </td>
          </tr>

          <tr>
            <td>This Month</td>
            <td>$742K</td>
            <td>$603K</td>
            <td style="color:green;font-weight:700;">
              +$139K
            </td>
          </tr>

        </tbody>

      </table>

    </div>

  </div>

</div>

</body>
</html>