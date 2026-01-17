<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand -->
  <a href="#" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-LOA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- User Panel -->
    <div class="user-panel mt-3 pb-3 d-flex" style="border-bottom: 1px solid white;">
      <div class="image">
        <img
          src="#"
          onclick="lihat_gambar(this)"
          class="img-circle elevation-2 cursor"
          alt="Image"
        >
      </div>

      <div class="info pt-0">
        <!-- Trigger Modal Pilih Peran -->
        <a href="#" class="d-block" data-toggle="modal" data-target="#modalPilihPeran">
          <i>Username</i><br>
          <small>
            <i class="fas fa-circle text-success"></i> Prodi
          </small>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav style="min-height: 100vh;">
      <?php
        if (!isset($page)) {
          $page = '';
        }

        $menu = [
          [
            'label' => 'Beranda',
            'icon'  => '🧭',
            'link'  => 'index.php',
            'page'  => 'beranda'
          ],
          [
            'label' => 'Pemetaan OBE',
            'icon'  => '🎯',
            'children' => [
              ['label'=>'📝 Set Pemetaan 🔒', 'link'=>'#', 'page'=>'pemetaan_set', 'demo'=>true],
              ['label'=>'📚 Daftar CPL', 'link'=>'pemetaan_cpl.php', 'page'=>'pemetaan_cpl'],
              ['label'=>'📚 Daftar IK', 'link'=>'pemetaan_ik.php', 'page'=>'pemetaan_ik'],
              ['label'=>'📚 Daftar MK-CPMK', 'link'=>'pemetaan_mk.php', 'page'=>'pemetaan_mk'],
              ['label'=>'🗺️ Pemetaan CPL-IK-CPMK', 'link'=>'pemetaan1.php', 'page'=>'pemetaan1'],
            ]
          ],
          [
            'label' => 'Perkuliahan OBE',
            'icon'  => '🏫',
            'children' => [
              ['label'=>'📄 RPS Mata Kuliah', 'link'=>'manajemen_rps.php', 'page'=>'manajemen_rps'],
              ['label'=>'📄 Soal Ujian (UTS/UAS)', 'link'=>'manajemen_soal.php', 'page'=>'manajemen_soal'],
            ]
          ],
          [
            'label' => 'Monitoring OBE',
            'icon'  => '📊',
            'children' => [
              ['label'=>'🗃️ Rekapitulasi Kelas', 'link'=>'monev_rekap_kelas.php', 'page'=>'monev_rekap_kelas'],
              ['label'=>'📊 Rekapitulasi MK', 'link'=>'monev_rekap_mk.php', 'page'=>'monev_rekap_mk'],
              ['label'=>'📊 Rekapitulasi CPMK', 'link'=>'monev_rekap_cpmk.php', 'page'=>'monev_rekap_cpmk'],
              ['label'=>'👤 Monev CPL Individu', 'link'=>'monev_individu1.php', 'page'=>'monev_individu1'],
              ['label'=>'👥 Monev CPL Mahasiswa', 'link'=>'monev_mahasiswa1.php', 'page'=>'monev_mahasiswa1'],
              ['label'=>'🧑‍ Monev CPL Angkatan', 'link'=>'monev_angkatan1.php', 'page'=>'monev_angkatan1'],
              ['label'=>'🎓 Monev CPL Lulusan', 'link'=>'monev_lulusan1.php', 'page'=>'monev_lulusan1'],
              ['label'=>'📈 Progress CPL Angkatan', 'link'=>'monev_angkatan2.php', 'page'=>'monev_angkatan2'],
              ['label'=>'📈 Progress CPL Lulusan', 'link'=>'monev_lulusan2.php', 'page'=>'monev_lulusan2'],
            ]
          ],
          [
            'label' => 'Pengembangan OBE',
            'icon'  => '📑',
            'children' => [
              ['label'=>'📓 Hasil & Tindak Rapat', 'link'=>'evaluasi_rapat.php', 'page'=>'evaluasi_rapat'],
              ['label'=>'📝 Evaluasi MK', 'link'=>'evaluasi_mk.php', 'page'=>'evaluasi_mk'],
              ['label'=>'📝 Evaluasi Dosen', 'link'=>'evaluasi_edom.php', 'page'=>'evaluasi_edom'],
              ['label'=>'👨‍🏫 Perwalian', 'link'=>'perwalian.php', 'page'=>'perwalian'],
              ['label'=>'🎓 Yudisium', 'link'=>'yudisium.php', 'page'=>'yudisium'],
            ]
          ],
          [
            'label' => 'Menu Utama SSO',
            'icon'  => '🡰',
            'link'  => '../main-menu1.html',
            'page'  => ''
          ]
        ];
      ?>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">
        <?php foreach ($menu as $m): ?>
          <?php
            $hasChildren = isset($m['children']);
            $open = $hasChildren && array_search($page, array_column($m['children'], 'page')) !== false
              ? 'show'
              : '';
            $collapseId = 'collapse' . str_replace(' ', '', $m['label']);
          ?>

          <li class="nav-item">
            <a
              class="nav-link <?= !$hasChildren && $page == $m['page'] ? 'active' : '' ?>"
              <?= $hasChildren
                ? 'data-toggle="collapse" href="#' . $collapseId . '"'
                : 'href="' . $m['link'] . '"' ?>
            >
              <?= $m['icon'] ?> <?= $m['label'] ?>
              <?php if ($hasChildren): ?>
                <span class="float-right">▾</span>
              <?php endif; ?>
            </a>

            <?php if ($hasChildren): ?>
              <div class="collapse <?= $open ?>" id="<?= $collapseId ?>">
                <ul class="nav flex-column ml-3">
                  <?php foreach ($m['children'] as $c): ?>
                    <li class="nav-item">
                      <?php
                      $isDemo = isset($c['demo']) && $c['demo'] === true;
                      ?>

                      <a href="<?= $isDemo ? '#' : $c['link'] . $q ?>"
                       class="nav-link <?= $page==$c['page']?'active':'' ?> <?= $isDemo ? 'nav-demo' : '' ?>"
                       <?= $isDemo ? 'data-demo="true"' : '' ?>>

                       <?= $c['label'] ?>
                       <?= $isDemo ? '<span class="badge badge-warning ml-1">Demo</span>' : '' ?>

                     </a>

                        <?= $c['label'] ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</aside>

<!-- Modal Pilih Peran -->
<div class="modal fade" id="modalPilihPeran" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Pilih Peran</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">
        <button class="btn btn-outline-primary btn-block mb-2 role-select" data-role="Admin">Admin</button>
        <button class="btn btn-outline-primary btn-block mb-2 role-select" data-role="Manajer">Manajer</button>
        <button class="btn btn-outline-primary btn-block mb-2 role-select" data-role="Dosen">Dosen</button>
        <button class="btn btn-outline-primary btn-block role-select" data-role="Mahasiswa">Mahasiswa</button>
      </div>

    </div>
  </div>
</div>
