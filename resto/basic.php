<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>CFO Finance & Accounting Analytics</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter',sans-serif;
    background:#0b1020;
    color:#fff;
    overflow:hidden;
}

.app{
    display:flex;
    height:100vh;
}

.sidebar{
    width:280px;
    background:#111827;
    border-right:1px solid rgba(255,255,255,0.08);
    padding:24px;
    overflow:auto;
}

.logo{
    font-size:24px;
    font-weight:800;
    margin-bottom:30px;
    color:#60a5fa;
}

.nav-title{
    font-size:11px;
    text-transform:uppercase;
    opacity:.5;
    margin-top:24px;
    margin-bottom:12px;
    letter-spacing:1px;
}

.nav-btn{
    width:100%;
    background:transparent;
    border:none;
    color:#d1d5db;
    padding:14px;
    text-align:left;
    border-radius:12px;
    margin-bottom:8px;
    cursor:pointer;
    transition:.2s;
    font-size:14px;
}

.nav-btn:hover{
    background:#1f2937;
}

.nav-btn.active{
    background:linear-gradient(90deg,#2563eb,#1d4ed8);
    color:white;
}

.main{
    flex:1;
    overflow:auto;
    padding:28px;
}

.page{
    display:none;
    animation:fade .3s ease;
}

.page.active{
    display:block;
}

@keyframes fade{
    from{opacity:0; transform:translateY(10px)}
    to{opacity:1; transform:translateY(0)}
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:28px;
}

.title{
    font-size:30px;
    font-weight:800;
}

.subtitle{
    color:#9ca3af;
    margin-top:8px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
}

.card{
    background:#111827;
    border:1px solid rgba(255,255,255,0.05);
    border-radius:20px;
    padding:22px;
}

.kpi{
    position:relative;
    overflow:hidden;
}

.kpi::before{
    content:'';
    position:absolute;
    width:120px;
    height:120px;
    background:rgba(96,165,250,.08);
    border-radius:50%;
    top:-40px;
    right:-40px;
}

.kpi-title{
    color:#9ca3af;
    font-size:13px;
    margin-bottom:12px;
}

.kpi-value{
    font-size:32px;
    font-weight:800;
}

.kpi-growth{
    margin-top:10px;
    font-size:13px;
    color:#34d399;
}

.section{
    margin-top:24px;
}

.section-title{
    font-size:22px;
    font-weight:700;
    margin-bottom:18px;
}

.chart-card{
    height:360px;
}

.chart-card canvas{
    height:100% !important;
}

.two-col{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.table{
    width:100%;
    border-collapse:collapse;
}

.table th{
    text-align:left;
    color:#9ca3af;
    font-size:13px;
    padding:12px;
}

.table td{
    padding:14px 12px;
    border-top:1px solid rgba(255,255,255,0.06);
    font-size:14px;
}

.badge{
    padding:6px 10px;
    border-radius:999px;
    font-size:12px;
    font-weight:600;
}

.green{
    background:rgba(16,185,129,.15);
    color:#34d399;
}

.red{
    background:rgba(239,68,68,.15);
    color:#f87171;
}

.orange{
    background:rgba(245,158,11,.15);
    color:#fbbf24;
}

.alert{
    background:#1f2937;
    border-left:4px solid #60a5fa;
    padding:18px;
    border-radius:14px;
    margin-bottom:14px;
}

.alert strong{
    display:block;
    margin-bottom:6px;
}

.insight{
    background:linear-gradient(135deg,#1e3a8a,#111827);
    padding:20px;
    border-radius:18px;
    margin-bottom:18px;
}

.insight-title{
    font-weight:700;
    margin-bottom:10px;
}

.footer-space{
    height:80px;
}

@media(max-width:1200px){
    .grid{
        grid-template-columns:repeat(2,1fr);
    }

    .two-col{
        grid-template-columns:1fr;
    }
}

@media(max-width:768px){
    .app{
        flex-direction:column;
    }

    .sidebar{
        width:100%;
        height:auto;
    }

    .grid{
        grid-template-columns:1fr;
    }

    body{
        overflow:auto;
    }
}
</style>
</head>

<body>

<div class="app">

    <div class="sidebar">

        <div class="logo">CFO Analytics</div>

        <div class="nav-title">Dashboard</div>

        <button class="nav-btn active" onclick="showPage('executive',this)">
            Executive Overview
        </button>

        <button class="nav-btn" onclick="showPage('basic',this)">
            Basic Analytics
        </button>

        <button class="nav-btn" onclick="showPage('intermediate',this)">
            Intermediate Analytics
        </button>

        <button class="nav-btn" onclick="showPage('advanced',this)">
            Advanced Analytics
        </button>

        <button class="nav-btn" onclick="showPage('insight',this)">
            AI Insights
        </button>

        <button class="nav-btn" onclick="showPage('risk',this)">
            Risk & Fraud
        </button>

        <button class="nav-btn" onclick="showPage('roles',this)">
            Role Dashboard
        </button>

    </div>

    <div class="main">

        <!-- EXECUTIVE -->

        <div class="page active" id="executive">

            <div class="topbar">
                <div>
                    <div class="title">Executive CFO Dashboard</div>
                    <div class="subtitle">
                        Strategic Financial Decision Support System
                    </div>
                </div>
            </div>

            <div class="grid">

                <div class="card kpi">
                    <div class="kpi-title">Total Revenue</div>
                    <div class="kpi-value">$12.8M</div>
                    <div class="kpi-growth">▲ 18.2%</div>
                </div>

                <div class="card kpi">
                    <div class="kpi-title">Net Profit</div>
                    <div class="kpi-value">$3.2M</div>
                    <div class="kpi-growth">▲ 9.4%</div>
                </div>

                <div class="card kpi">
                    <div class="kpi-title">Operational Cost</div>
                    <div class="kpi-value">$5.1M</div>
                    <div class="kpi-growth">▼ 2.1%</div>
                </div>

                <div class="card kpi">
                    <div class="kpi-title">Cash Flow</div>
                    <div class="kpi-value">$2.7M</div>
                    <div class="kpi-growth">Healthy Liquidity</div>
                </div>

            </div>

            <div class="section two-col">

                <div class="card chart-card">
                    <div class="section-title">Revenue vs Expense Trend</div>
                    <canvas id="revenueChart"></canvas>
                </div>

                <div>
                    <div class="insight">
                        <div class="insight-title">AI Strategic Insight</div>
                        Revenue naik 18% didorong pertumbuhan region Jawa Barat
                        dan peningkatan enterprise customer.
                    </div>

                    <div class="insight">
                        <div class="insight-title">Risk Alert</div>
                        Cash conversion cycle meningkat 11 hari akibat
                        keterlambatan AR collection.
                    </div>

                    <div class="insight">
                        <div class="insight-title">Optimization Opportunity</div>
                        Pengurangan logistics cost 7% dapat meningkatkan
                        net margin sebesar 2.4%.
                    </div>
                </div>

            </div>

        </div>

        <!-- BASIC -->

        <div class="page" id="basic">

            <div class="title">Basic Analytics</div>
            <div class="subtitle">
                Operational Monitoring & Daily Financial Reporting
            </div>

            <div class="section grid">

                <div class="card">
                    <div class="section-title">Revenue Analysis</div>
                    <p>
                        Monitoring revenue berdasarkan produk, customer,
                        cabang, dan sales performance.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Expense Analysis</div>
                    <p>
                        Kontrol biaya operasional, payroll,
                        marketing, logistics, utilities.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Cash Flow</div>
                    <p>
                        Monitoring cash inflow, outflow,
                        dan net liquidity harian.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Profit & Loss</div>
                    <p>
                        Analisa gross profit, EBITDA,
                        margin dan profitability.
                    </p>
                </div>

            </div>

            <div class="section">
                <div class="card chart-card">
                    <div class="section-title">Expense Breakdown</div>
                    <canvas id="expenseChart"></canvas>
                </div>
            </div>

        </div>

        <!-- INTERMEDIATE -->

        <div class="page" id="intermediate">

            <div class="title">Intermediate Analytics</div>
            <div class="subtitle">
                Tactical & Comparative Business Insight
            </div>

            <div class="section two-col">

                <div class="card chart-card">
                    <div class="section-title">Trend Analysis</div>
                    <canvas id="trendChart"></canvas>
                </div>

                <div class="card">
                    <div class="section-title">Comparative Insights</div>

                    <table class="table">
                        <tr>
                            <th>Branch</th>
                            <th>Growth</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>Jakarta</td>
                            <td>+18%</td>
                            <td><span class="badge green">Excellent</span></td>
                        </tr>

                        <tr>
                            <td>Bandung</td>
                            <td>+7%</td>
                            <td><span class="badge orange">Stable</span></td>
                        </tr>

                        <tr>
                            <td>Surabaya</td>
                            <td>-4%</td>
                            <td><span class="badge red">Declining</span></td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

        <!-- ADVANCED -->

        <div class="page" id="advanced">

            <div class="title">Advanced Analytics</div>
            <div class="subtitle">
                Predictive, Strategic & AI-driven Analytics
            </div>

            <div class="section grid">

                <div class="card">
                    <div class="section-title">Forecast & Prediction</div>
                    <p>
                        Prediksi revenue, cash flow,
                        demand, dan profit growth.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Scenario Simulation</div>
                    <p>
                        What-if analysis terhadap pricing,
                        sales decline, currency fluctuation.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Profit Optimization</div>
                    <p>
                        AI optimization pricing, discount,
                        dan operational allocation.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Customer CLV</div>
                    <p>
                        Prediksi nilai customer jangka panjang
                        untuk retention strategy.
                    </p>
                </div>

            </div>

            <div class="section">
                <div class="card chart-card">
                    <div class="section-title">AI Revenue Forecast</div>
                    <canvas id="forecastChart"></canvas>
                </div>
            </div>

        </div>

        <!-- AI INSIGHT -->

        <div class="page" id="insight">

            <div class="title">AI-driven Financial Insights</div>
            <div class="subtitle">
                Automated recommendation & anomaly detection
            </div>

            <div class="section">

                <div class="alert">
                    <strong>Revenue Insight</strong>
                    Revenue turun 12% dibanding bulan lalu
                    akibat penurunan sales produk A di region Jawa.
                </div>

                <div class="alert">
                    <strong>Cost Insight</strong>
                    Logistics cost meningkat 28%
                    akibat kenaikan fuel surcharge.
                </div>

                <div class="alert">
                    <strong>Risk Insight</strong>
                    Customer PT Maju Bersama memiliki
                    risiko keterlambatan pembayaran tinggi.
                </div>

                <div class="alert">
                    <strong>Optimization Insight</strong>
                    Pengurangan overtime 15%
                    dapat menghemat biaya operasional Rp 480 juta/tahun.
                </div>

            </div>

        </div>

        <!-- RISK -->

        <div class="page" id="risk">

            <div class="title">Risk & Fraud Analytics</div>
            <div class="subtitle">
                Financial risk monitoring & anomaly detection
            </div>

            <div class="section grid">

                <div class="card">
                    <div class="section-title">Fraud Detection</div>
                    <p>
                        AI anomaly detection untuk suspicious transaction
                        dan duplicate payment.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Liquidity Risk</div>
                    <p>
                        Monitoring liquidity ratio dan cash shortage risk.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Credit Risk</div>
                    <p>
                        Analisa customer bad debt dan payment behavior.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Operational Risk</div>
                    <p>
                        Deteksi inefficiency dan process anomaly.
                    </p>
                </div>

            </div>

        </div>

        <!-- ROLE -->

        <div class="page" id="roles">

            <div class="title">Role-based Analytics</div>
            <div class="subtitle">
                Dashboard berdasarkan kebutuhan user
            </div>

            <div class="section grid">

                <div class="card">
                    <div class="section-title">CEO / Director</div>
                    <p>
                        Strategic KPI, growth,
                        forecasting, executive dashboard.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Finance Manager</div>
                    <p>
                        Cash flow, budgeting,
                        forecasting, expense control.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Accounting</div>
                    <p>
                        Ledger, reconciliation,
                        journal, AR/AP analytics.
                    </p>
                </div>

                <div class="card">
                    <div class="section-title">Operational</div>
                    <p>
                        Operational efficiency,
                        productivity & cost optimization.
                    </p>
                </div>

            </div>

        </div>

        <div class="footer-space"></div>

    </div>

</div>

<script>

function showPage(id,btn){

    document.querySelectorAll('.page')
        .forEach(p=>p.classList.remove('active'));

    document.querySelectorAll('.nav-btn')
        .forEach(b=>b.classList.remove('active'));

    document.getElementById(id)
        .classList.add('active');

    btn.classList.add('active');
}

/* Revenue Chart */

new Chart(document.getElementById('revenueChart'),{
    type:'line',
    data:{
        labels:['Jan','Feb','Mar','Apr','May','Jun'],
        datasets:[
            {
                label:'Revenue',
                data:[120,150,170,190,210,240],
                borderColor:'#60a5fa',
                backgroundColor:'rgba(96,165,250,.2)',
                tension:.4,
                fill:true
            },
            {
                label:'Expense',
                data:[90,100,120,130,150,160],
                borderColor:'#f87171',
                backgroundColor:'rgba(248,113,113,.1)',
                tension:.4,
                fill:true
            }
        ]
    },
    options:{
        responsive:true,
        maintainAspectRatio:false,
        plugins:{
            legend:{
                labels:{color:'#fff'}
            }
        },
        scales:{
            x:{ticks:{color:'#9ca3af'}},
            y:{ticks:{color:'#9ca3af'}}
        }
    }
});

/* Expense Chart */

new Chart(document.getElementById('expenseChart'),{
    type:'doughnut',
    data:{
        labels:['Payroll','Marketing','Utilities','Logistics','Operational'],
        datasets:[{
            data:[35,20,10,18,17],
            backgroundColor:[
                '#60a5fa',
                '#34d399',
                '#fbbf24',
                '#f87171',
                '#a78bfa'
            ]
        }]
    },
    options:{
        responsive:true,
        maintainAspectRatio:false,
        plugins:{
            legend:{
                labels:{color:'#fff'}
            }
        }
    }
});

/* Trend Chart */

new Chart(document.getElementById('trendChart'),{
    type:'bar',
    data:{
        labels:['Q1','Q2','Q3','Q4'],
        datasets:[
            {
                label:'Growth Trend',
                data:[12,18,22,27],
                backgroundColor:'#60a5fa'
            }
        ]
    },
    options:{
        responsive:true,
        maintainAspectRatio:false,
        plugins:{
            legend:{
                labels:{color:'#fff'}
            }
        },
        scales:{
            x:{ticks:{color:'#9ca3af'}},
            y:{ticks:{color:'#9ca3af'}}
        }
    }
});

/* Forecast Chart */

new Chart(document.getElementById('forecastChart'),{
    type:'line',
    data:{
        labels:['2025','2026','2027','2028','2029'],
        datasets:[
            {
                label:'Predicted Revenue',
                data:[12,15,18,22,28],
                borderColor:'#34d399',
                backgroundColor:'rgba(52,211,153,.15)',
                fill:true,
                tension:.4
            }
        ]
    },
    options:{
        responsive:true,
        maintainAspectRatio:false,
        plugins:{
            legend:{
                labels:{color:'#fff'}
            }
        },
        scales:{
            x:{ticks:{color:'#9ca3af'}},
            y:{ticks:{color:'#9ca3af'}}
        }
    }
});

</script>

</body>
</html>