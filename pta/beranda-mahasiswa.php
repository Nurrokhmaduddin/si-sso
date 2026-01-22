<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Card Summary Semester</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <!-- Custom Style -->
  <style>
    :root {
      --card-radius: 12px;
      --accent: #0d6efd;
      --soft-bg: #f8f9fa;
      --badge-bg: #eef6ff;
    }

    body {
      background: linear-gradient(180deg, #f4f7fb 0%, #ffffff 60%);
      font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      padding: 24px;
    }

    .card {
      border-radius: var(--card-radius);
      box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
    }

    .role-tag {
      font-size: 0.85rem;
      padding: 4px 10px;
      border-radius: 999px;
      background: var(--badge-bg);
      color: #0b5ed7;
      font-weight: 600;
    }

    .xp-bar {
      height: 10px;
      border-radius: 999px;
      background: #e9eef9;
    }

    .xp-fill {
      height: 100%;
      border-radius: 999px;
      background: linear-gradient(90deg, #6ea8fe, #0d6efd);
    }

    .icon-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: #f0f6ff;
      color: #0d6efd;
    }

    .status-circle {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #fff;
      font-size: 1.5rem;
      margin: 0 auto 0.5rem;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .status-circle:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .badge-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 10px;
      border-radius: 999px;
      background: #fff;
      border: 1px solid #eef2ff;
      font-weight: 600;
      font-size: 0.85rem;
      box-shadow: 0 2px 6px rgba(13, 110, 253, 0.04);
    }
  </style>
  <style type="text/css">
  	/* ====== GLOBAL ====== */
body {
  background: #f2f6fc;
  font-family: "Inter", Arial, sans-serif;
  color: #0a2a4c;
}

/* ====== TOP SECTION ====== */
.top-section {
  background: linear-gradient(135deg, #003b88, #0066dd);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 70px;
  padding: 0 20px;
  position: relative;
  border-bottom-left-radius: 18px;
  border-bottom-right-radius: 18px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.top-section h1 {
  margin: 0;
  font-size: 1.6rem;
  font-weight: 600;
}

.logout-btn {
  position: absolute;
  right: 20px;
  font-weight: 500;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

/* ====== BOTTOM SECTION ====== */
.bottom-section {
  padding: 50px 20px;
  min-height: 450px;
  text-align: center;
}

.description {
  font-size: 0.95rem;
  color: #4a5568;
}

/* ====== MENU CARD ====== */
.menu-card {
  background: #f8faff;
  border-radius: 20px;
  border: none;
  text-decoration: none !important;
  height: 180px;                 /* tinggi seragam */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  /* Neumorphism */
  box-shadow:
      8px 8px 15px rgba(0, 0, 0, 0.07),
      -8px -8px 15px rgba(255, 255, 255, 0.9);
  transition: all 0.25s ease;
}

.menu-card:hover {
  transform: translateY(-6px);
  background: #ffffff;
  box-shadow:
      10px 10px 20px rgba(0, 0, 0, 0.15),
      -10px -10px 20px rgba(255, 255, 255, 0.75);
}

.menu-card i {
  font-size: 2.2rem;
  color: #005bcf;
  margin-bottom: 10px;
}

.menu-card h5 {
  margin-top: 10px;
  font-weight: 600;
  color: #0a2a4c;
  min-height: 48px;       /* menjaga agar judul sejajar */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 768px) {
  .top-section h1 {
    font-size: 1.3rem;
  }

  .menu-card {
    height: 160px;
    padding: 25px 10px;
  }

  .menu-card h5 {
    font-size: 0.95rem;
  }
}

  </style>
</head>

<body>

<div class="content-wrapper" style="min-height:600px;">
  <section class="content">
    <div class="container-fluid">

      <!-- IDENTITAS DOSEN -->
      <div class="card p-3 mb-4">
        <div class="d-flex align-items-start">
          <div class="me-3">
            <div class="icon-circle">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
          </div>

          <div class="flex-grow-1">
            <div class="d-flex justify-content-between">
              <div>
                <div class="small text-muted">Mahasiswa</div>
                <h5 class="mb-0">Harun Nurrokhmaduddin</h5>
                <div class="small text-muted">
                  NIM: 132512345 • Program Studi: Teknik Informatika
                </div>
              </div>

              <div class="text-end">
                <div class="role-tag">Lv 3 </div>
                <div class="small text-muted">XP: 320 / 500 </div>
              </div>
            </div>

            <hr>

            <div>
              <div class="d-flex justify-content-between small mb-1">
                <strong>Progress Next Level</strong>
                <span class="text-muted">40%</span>
              </div>
              <div class="xp-bar">
                <div class="xp-fill" style="width:40%"></div>
              </div>
            </div>

          </div>
        </div>
      </div>


<!-- SECTION TROPHY (SIMPLE) -->
<div class="row g-4 justify-content-center mb-4">
	<div class="col-md-2">
<a href="sso/" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
		<div class="card-body">
			<i class="fas fa-trophy fa-2x mb-2" style="color:goldenrod;"></i>
			<h5 class="card-title" style="color:goldenrod;">Magang</h5>
		</div>
	</a>
	</div>

	<div class="col-md-2">
		<a href="sso/" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
			<div class="card-body">
				<i class="fas fa-road fa-2x mb-2"></i>
				<h5 class="card-title">Skripsi</h5>
			</div>
		</a>
	</div>
	<div class="col-md-2">
		<a href="dashboard-a.html" class="card menu-card text-center p-4 text-decoration-none text-dark shadow-sm">
			<div class="card-body">
				<i class="fas fa-lock fa-2x mb-2 text-secondary" ></i>
				<h5 class="card-title">Tesis</h5>
			</div>
		</a>
	</div>
</div>






      <!-- SUMMARY SEMESTER -->
      <div class="card p-3 mb-4">
      	<div class="card-header d-flex align-items-center justify-content-between">
      		<h5 class="mb-0">
      			<i class="fas fa-medal me-1"></i> nama aktivitas - Periode/Semester
      		</h5>
      		<button class="btn btn-sm btn-primary"><i class="fas fa-forward"></i> Continue</button>
      	</div>


        

        <!-- <hr> -->
       <style>
  .milestone-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    margin-top: 24px;
  }

  .milestone-wrapper::before {
    content: "";
    position: absolute;
    top: 22px;
    left: 0;
    right: 0;
    height: 4px;
    background: #e9ecef;
    z-index: 1;
  }

  .milestone-progress {
    position: absolute;
    top: 22px;
    left: 0;
    height: 4px;
    width: 60%; /* sampai tahap Bimbingan */
    background: #0d6efd;
    z-index: 2;
    transition: width .4s ease;
  }

  .milestone-step {
    position: relative;
    z-index: 3;
    text-align: center;
    width: 100%;
  }

  .milestone-circle {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    margin: 0 auto 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: #fff;
    background: #adb5bd;
  }

  .milestone-step.completed .milestone-circle {
    background: #0d6efd;
  }

  .milestone-step.active .milestone-circle {
    background: #0d6efd;
    box-shadow: 0 0 0 6px rgba(13,110,253,0.15);
  }

  .milestone-label {
    font-size: 0.85rem;
    font-weight: 600;
    color: #495057;
  }

  .milestone-step.locked .milestone-circle {
    background: #ced4da;
    color: #6c757d;
  }
</style>


<!--   <h6 class="mb-3">
    <i class="fas fa-route me-1 text-primary"></i>
    Progress Milestone Akademik
  </h6> -->

  <div class="milestone-wrapper">
    <div class="milestone-progress"></div>

    <div class="milestone-step completed">
      <div class="milestone-circle"><i class="fas fa-check"></i></div>
      <div class="milestone-label">Pendaftaran</div>
    </div>

    <div class="milestone-step completed">
      <div class="milestone-circle"><i class="fas fa-check"></i></div>
      <div class="milestone-label">Penentuan Topik</div>
    </div>

    <div class="milestone-step completed">
      <div class="milestone-circle"><i class="fas fa-check"></i></div>
      <div class="milestone-label">Pembimbing</div>
    </div>

    <div class="milestone-step active">
      <div class="milestone-circle">4</div>
      <div class="milestone-label">Bimbingan</div>
    </div>

    <div class="milestone-step locked">
      <div class="milestone-circle">5</div>
      <div class="milestone-label">Ujian</div>
    </div>

    <div class="milestone-step locked">
      <div class="milestone-circle">6</div>
      <div class="milestone-label">Selesai</div>
    </div>
  </div>


        <!-- <hr> -->

        <h6>Achievements & Badges</h6>
        <div class="d-flex flex-wrap gap-2">
          <div class="badge-chip"><i class="fa fa-fire"></i> Konsultasi 5 hari berturut</div>
          <div class="badge-chip"><i class="fa fa-check-circle"></i> Lulus Tanpa Revisi</div>
          <div class="badge-chip"><i class="fa fa-stopwatch"></i> selesai bimbingan <180 hari</div>
          <div class="badge-chip text-danger">Perpanjangan × 1<i class="fa fa-heart"></i></div>
        </div> 
        <!-- Health Bar -->

            
      

        <div class="health-bar-container mt-3 position-relative"
        style="height:24px; border-radius:12px; background:#eee; overflow:hidden;">

        <?php $d = 76; ?>

        <div class="health-bar-fill"
        style="width:<?php echo $d; ?>%;
        height:100%;
        background:#dc3545; /* Bootstrap danger */
        border-radius:12px;
        position:absolute;
        right: 0;"> 

        <span class="health-bar-text"
        style="position:absolute;
        width:100%;
        text-align:center;
        font-size:0.85rem;
        color:#fff;
        font-weight:600;
        line-height:24px;">
        Health Bar <?php echo $d; ?>/100 (Reset Perpanjangan)
    </span>

</div>
</div>
</div>

<!-- SUMMARY SEMESTER (INLINE GRAYSCALE) -->
<div class="card p-3 mb-4">
	<div class="card-header d-flex align-items-center justify-content-between">
		<h5 class="mb-0">
			 nama aktivitas - Periode/Semester
		</h5>
		<button class="btn btn-sm btn-danger"><i class="fas fa-heart"></i> Perpanjangan</button>
	</div>
  
  <!-- Milestone Wrapper -->
  <div class="d-flex align-items-center justify-content-between position-relative" style="margin-top:24px;">
    
    <!-- Progress Bar Background -->
    <div style="position:absolute; top:22px; left:0; right:0; height:4px; background:#dee2e6; z-index:1;"></div>
    <!-- Progress Fill -->
    <div style="position:absolute; top:22px; left:0; height:4px; width:60%; background:#6c757d; z-index:2; transition:width .4s ease;"></div>

    <!-- Milestones -->
    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#fff; background:#6c757d;">
        <i class="fas fa-check"></i>
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Pendaftaran</div>
    </div>

    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#fff; background:#6c757d;">
        <i class="fas fa-check"></i>
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Penentuan Topik</div>
    </div>

    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#fff; background:#6c757d;">
        <i class="fas fa-check"></i>
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Pembimbing</div>
    </div>

    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#fff; background:#6c757d;">
        4
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Bimbingan</div>
    </div>

    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#6c757d; background:#ced4da;">
        5
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Ujian</div>
    </div>

    <div class="text-center" style="position:relative; z-index:3; width:100%;">
      <div style="width:44px; height:44px; border-radius:50%; margin:0 auto 6px; display:flex; align-items:center; justify-content:center; font-weight:600; color:#6c757d; background:#ced4da;">
        6
      </div>
      <div style="font-size:0.85rem; font-weight:600; color:#495057;">Selesai</div>
    </div>
  </div>

  <hr>

  <h6><i class="fas fa-medal me-1"></i> Achievements & Badges</h6>
  <div class="d-flex flex-wrap gap-2">
    <div style="display:inline-flex; align-items:center; gap:6px; padding:6px 10px; border-radius:999px; background:#e9ecef; border:1px solid #dee2e6; font-weight:600; font-size:0.85rem; color:#495057;">
      <i class="fa fa-fire"></i> Konsultasi 5 hari berturut
    </div>
    <div style="display:inline-flex; align-items:center; gap:6px; padding:6px 10px; border-radius:999px; background:#e9ecef; border:1px solid #dee2e6; font-weight:600; font-size:0.85rem; color:#495057;">
      <i class="fa fa-check-circle"></i> Lulus Tanpa Revisi
    </div>
    <div style="display:inline-flex; align-items:center; gap:6px; padding:6px 10px; border-radius:999px; background:#e9ecef; border:1px solid #dee2e6; font-weight:600; font-size:0.85rem; color:#495057;">
      <i class="fa fa-stopwatch"></i> selesai bimbingan <180 hari
    </div>
    <div style="display:inline-flex; align-items:center; gap:6px; padding:6px 10px; border-radius:999px; background:#e9ecef; border:1px solid #dee2e6; font-weight:600; font-size:0.85rem; color:#495057;">
      <i class="fa fa-heart"></i> Perpanjangan × 1
    </div>
  </div>

  <!-- Health Bar -->
  <div style="height:24px; border-radius:12px; background:#6c757d; overflow:hidden; position:relative; margin-top:16px;">
    <div style="width:100%; height:100%; background:#6c757d; border-radius:12px; position:absolute; right:0;">
      <span style="position:absolute; width:100%; text-align:center; font-size:0.85rem; color:#fff; font-weight:600; line-height:24px;">Health Bar 0/100 (Reset Perpanjangan)</span>
    </div>
  </div>

</div>







    </div>
  </section>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tooltip Init -->
<script>
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
    new bootstrap.Tooltip(el);
  });
</script>

</body>
</html>
