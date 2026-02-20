<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laporan Progres CPL Angkatan</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f7fa;
        margin: 30px;
    }
    h2 {
        margin-bottom: 10px;
    }
    .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    canvas {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
</style>
</head>
<body>

<h2>Laporan Progres CPL Angkatan</h2>

<div class="container">
    <div>
        <h3>Radar Chart – CPL Kumulatif Semester 8</h3>
        <canvas id="radarChart"></canvas>
    </div>
    <div>
        <h3>Line Chart – Progres CPL Semester 1–8</h3>
        <canvas id="lineChart"></canvas>
    </div>
</div>

<script>
// ===== DATA =====
const labelsCPL = [
    "CPL1","CPL2","CPL3","CPL4","CPL5",
    "CPL6","CPL7","CPL8","CPL9","CPL10"
];

// Kumulatif Semester 8 (contoh data)
const semester8Data = [85, 78, 82, 88, 74, 80, 90, 76, 84, 79];

// Progres tiap semester (contoh data agregat)
const semesterLabels = ["S1","S2","S3","S4","S5","S6","S7","S8"];

const progresData = {
    CPL1: [60, 65, 70, 72, 75, 78, 82, 85],
    CPL2: [55, 60, 64, 68, 70, 72, 75, 78],
    CPL3: [58, 63, 67, 71, 74, 77, 80, 82],
    CPL4: [62, 68, 72, 76, 80, 83, 85, 88],
    CPL5: [50, 55, 60, 65, 68, 70, 72, 74],
    CPL6: [57, 62, 66, 70, 73, 75, 78, 80],
    CPL7: [65, 70, 74, 78, 82, 85, 88, 90],
    CPL8: [52, 58, 63, 67, 70, 72, 74, 76],
    CPL9: [59, 64, 69, 73, 76, 79, 82, 84],
    CPL10:[54, 60, 65, 69, 72, 75, 77, 79]
};

// ===== RADAR CHART =====
new Chart(document.getElementById("radarChart"), {
    type: "radar",
    data: {
        labels: labelsCPL,
        datasets: [{
            label: "CPL Semester 8",
            data: semester8Data,
            backgroundColor: "rgba(30, 90, 200, 0.2)",
            borderColor: "rgba(30, 90, 200, 0.9)",
            borderWidth: 2,
            pointBackgroundColor: "rgba(30, 90, 200, 1)"
        }]
    },
    options: {
        scales: {
            r: {
                suggestedMin: 0,
                suggestedMax: 100,
                ticks: {
                    stepSize: 20
                }
            }
        },
        plugins: {
            legend: {
                position: "top"
            }
        }
    }
});

// ===== LINE CHART =====
const lineDatasets = Object.keys(progresData).map((key, index) => {
    return {
        label: key,
        data: progresData[key],
        borderColor: `hsl(${index * 30}, 60%, 50%)`,
        tension: 0.3,
        fill: false
    };
});

new Chart(document.getElementById("lineChart"), {
    type: "line",
    data: {
        labels: semesterLabels,
        datasets: lineDatasets
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: "right"
            }
        },
        scales: {
            y: {
                min: 0,
                max: 100
            }
        }
    }
});
</script>

</body>
</html>
