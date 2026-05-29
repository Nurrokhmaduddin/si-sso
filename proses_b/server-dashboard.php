<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Server KPI Executive Dashboard</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body{
  margin:0;
  font-family: Arial;
  background:#f4f6f9;
}

.container{
  padding:20px;
}

.header{
  background:#2c3e50;
  color:white;
  padding:15px;
  border-radius:10px;
  margin-bottom:20px;
}

.grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:12px;
}

.card{
  background:white;
  padding:15px;
  border-radius:10px;
  box-shadow:0 2px 5px rgba(0,0,0,.1);
}

.label{
  font-size:12px;
  color:#777;
}

.value{
  font-size:22px;
  font-weight:bold;
  margin-top:5px;
}

.ok{color:#2ecc71;}
.warn{color:#f39c12;}
.crit{color:#e74c3c;}

.section{
  margin-top:20px;
  font-weight:bold;
}

.chartGrid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:15px;
  margin-top:10px;
}

canvas{
  background:white;
  padding:10px;
  border-radius:10px;
}

table{
  width:100%;
  border-collapse:collapse;
  background:white;
  margin-top:10px;
}

th{
  background:#34495e;
  color:white;
  padding:10px;
  font-size:12px;
}

td{
  padding:8px;
  font-size:12px;
  border-bottom:1px solid #eee;
}

.badge{
  padding:3px 8px;
  border-radius:5px;
  font-size:11px;
  color:white;
}

.good{background:#2ecc71;}
.mid{background:#f39c12;}
.bad{background:#e74c3c;}
</style>
</head>

<body>

<div class="container">

<div class="header">
  <h2>SERVER EXECUTIVE KPI DASHBOARD</h2>
  <small>Physical Server → Multi VM → Multi Application</small>
</div>

<!-- KPI HOST -->
<div class="grid">

  <div class="card">
    <div class="label">CPU Host Usage</div>
    <div class="value warn">74%</div>
  </div>

  <div class="card">
    <div class="label">RAM Host Usage</div>
    <div class="value warn">78%</div>
  </div>

  <div class="card">
    <div class="label">Disk Usage</div>
    <div class="value crit">89%</div>
  </div>

  <div class="card">
    <div class="label">Network Throughput</div>
    <div class="value ok">420 Mbps</div>
  </div>

</div>

<div class="section">HOST PERFORMANCE TREND</div>

<div class="chartGrid">
  <canvas id="cpu"></canvas>
  <canvas id="ram"></canvas>
  <canvas id="disk"></canvas>
  <canvas id="io"></canvas>
</div>

<div class="section">VM LEVEL (BOTTLENECK VIEW)</div>

<table>
<thead>
<tr>
<th>VM</th>
<th>CPU</th>
<th>RAM</th>
<th>Disk</th>
<th>IO Wait</th>
<th>Pressure</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>VM-ERP</td>
<td>55%</td>
<td>60%</td>
<td>70%</td>
<td>10%</td>
<td>Medium</td>
<td><span class="badge mid">Warning</span></td>
</tr>

<tr>
<td>VM-INVENTORY</td>
<td>78%</td>
<td>82%</td>
<td>88%</td>
<td>22%</td>
<td>High</td>
<td><span class="badge bad">Critical</span></td>
</tr>

<tr>
<td>VM-API</td>
<td>81%</td>
<td>85%</td>
<td>91%</td>
<td>25%</td>
<td>High</td>
<td><span class="badge bad">Critical</span></td>
</tr>

<tr>
<td>VM-HR</td>
<td>25%</td>
<td>30%</td>
<td>35%</td>
<td>3%</td>
<td>Low</td>
<td><span class="badge good">Healthy</span></td>
</tr>
</tbody>
</table>

<div class="section">APPLICATION LAYER (INSIDE VM)</div>

<table>
<thead>
<tr>
<th>App</th>
<th>VM</th>
<th>RPS</th>
<th>Latency</th>
<th>DB Load</th>
<th>Error</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>ERP Finance</td>
<td>VM-ERP</td>
<td>120</td>
<td>180ms</td>
<td>Medium</td>
<td>1%</td>
<td><span class="badge good">Healthy</span></td>
</tr>

<tr>
<td>Inventory System</td>
<td>VM-INVENTORY</td>
<td>90</td>
<td>280ms</td>
<td>High</td>
<td>4%</td>
<td><span class="badge mid">Warning</span></td>
</tr>

<tr>
<td>Public API</td>
<td>VM-API</td>
<td>320</td>
<td>420ms</td>
<td>Very High</td>
<td>7%</td>
<td><span class="badge bad">Critical</span></td>
</tr>
</tbody>
</table>

</div>

<script>

// CPU trend
new Chart(document.getElementById("cpu"), {
type:"line",
data:{
labels:["T1","T2","T3","T4","T5","T6"],
datasets:[{
label:"CPU %",
data:[40,50,60,65,70,74],
borderColor:"red",
fill:false
}]
}
});

// RAM trend
new Chart(document.getElementById("ram"), {
type:"line",
data:{
labels:["T1","T2","T3","T4","T5","T6"],
datasets:[{
label:"RAM %",
data:[45,50,55,60,70,78],
borderColor:"blue",
fill:false
}]
}
});

// Disk trend
new Chart(document.getElementById("disk"), {
type:"line",
data:{
labels:["W1","W2","W3","W4"],
datasets:[{
label:"Disk %",
data:[70,75,80,85,89],
borderColor:"orange",
fill:false
}]
}
});

// IO trend
new Chart(document.getElementById("io"), {
type:"line",
data:{
labels:["T1","T2","T3","T4","T5","T6"],
datasets:[{
label:"IO Wait %",
data:[5,8,12,15,18,22],
borderColor:"purple",
fill:false
}]
}
});

</script>

</body>
</html>