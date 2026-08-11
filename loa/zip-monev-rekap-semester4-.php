<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>IK per CPL (Multi-CPL) - G</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="chartIKG" width="1000" height="500"></canvas>

  <script>
    const ctxG = document.getElementById('chartIKG').getContext('2d');

    const ikLabelsG = [
      'IK1.1','IK1.2','IK2.1','IK2.2','IK2.3','IK3.1','IK3.2',
      'IK4.1','IK4.2','IK5.1','IK5.2','IK6.1','IK7.1','IK7.2',
      'IK8.1','IK8.2','IK9.1','IK9.2','IK10.1','IK10.2',
      'IK11.1','IK11.2','IK12.1','IK12.2'
    ];

    const ikValuesG = {
      'IK1.1':82,'IK1.2':75,
      'IK2.1':70,'IK2.2':78,'IK2.3':83,
      'IK3.1':72,'IK3.2':76,
      'IK4.1':74,'IK4.2':79,
      'IK5.1':73,'IK5.2':77,
      'IK6.1':85,
      'IK7.1':80,'IK7.2':84,
      'IK8.1':78,'IK8.2':82,
      'IK9.1':75,'IK9.2':79,
      'IK10.1':76,'IK10.2':80,
      'IK11.1':82,'IK11.2':85,
      'IK12.1':88,'IK12.2':90
    };

    const ikToCPLG = {
      'IK1.1':[1],'IK1.2':[1],
      'IK2.1':[2],'IK2.2':[2],'IK2.3':[2],
      'IK3.1':[3],'IK3.2':[3],
      'IK4.1':[4],'IK4.2':[4],
      'IK5.1':[5],'IK5.2':[5,1],
      'IK6.1':[6],
      'IK7.1':[7],'IK7.2':[7],
      'IK8.1':[8],'IK8.2':[8],
      'IK9.1':[9],'IK9.2':[9],
      'IK10.1':[10],'IK10.2':[10],
      'IK11.1':[11],'IK11.2':[11],
      'IK12.1':[12],'IK12.2':[12]
    };

    const cplColorsG = {
      1:'#007bff',2:'#20c997',3:'#e83e8c',4:'#6f42c1',
      5:'#17a2b8',6:'#6610f2',7:'#dc3545',8:'#ffc107',
      9:'#fd7e14',10:'#28a745',11:'#6c757d',12:'#343a40'
    };

    // Buat array entries "IK x CPL"
    const entriesG = [];
    ikLabelsG.forEach(ik => {
      ikToCPLG[ik].forEach(cpl => {
        entriesG.push({ ik, value: ikValuesG[ik], cpl });
      });
    });

    // Urutkan berdasarkan CPL
    entriesG.sort((a,b)=>a.cpl - b.cpl);

    // Label X ringkas (IK saja)
    const labelsXG = entriesG.map(e => e.ik);

    // Data dan warna
    const dataValuesG = entriesG.map(e => e.value);
    const barColorsG = entriesG.map(e => cplColorsG[e.cpl]);

    new Chart(ctxG, {
      type: 'bar',
      data: {
        labels: labelsXG,
        datasets: [{
          label: 'Nilai IK',
          data: dataValuesG,
          backgroundColor: barColorsG
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
          tooltip: {
            callbacks: {
              label: function(context) {
                const idx = context.dataIndex;
                const e = entriesG[idx]; // referensi ke array entries
                return e.ik + ' (CPL ' + e.cpl + '): ' + e.value;
              }
            }
          },
          title: { display: true, text: 'IK per CPL (IK bisa muncul di beberapa CPL) - G' }
        },
        scales: {
          x: { title: { display: true, text: 'IK' } },
          y: { beginAtZero:true, max:100, title: { display:true, text:'Nilai IK (%)' } }
        }
      }
    });
  </script>
</body>
</html>