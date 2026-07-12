<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">
    <span class="brand-text font-weight-light">SI-PTA</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center"
    style="border-bottom: 1px solid rgba(255,255,255,.2);">
    <!-- User Icon -->
    <div class="image">
      <span class="img-circle elevation-2 d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#ffffff;"><i class="fas fa-user text-black"></i>
      </span>
    </div>
    <!-- User Info -->
    <div class="info ml-2">
      <span class="d-block text-white">Username</span>
      <small class="text-success">
        <i class="fas fa-circle mr-1"></i> Role
      </small>
    </div>
  </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false">

        <!-- ================= DASHBOARD ================= -->
        <li class="nav-item <?php echo in_array($page, ['dashboard_executive','dashboard_academic_management','dashboard_lecturer','dashboard_student','dashboard_repository','dashboard_monitoring','dashboard_audit','dashboard_system']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['dashboard_executive','dashboard_academic_management','dashboard_lecturer','dashboard_student','dashboard_repository','dashboard_monitoring','dashboard_audit','dashboard_system']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="dashboard-executive.php" class="nav-link <?php echo $page == 'dashboard_executive' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Executive Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-academic-management.php" class="nav-link <?php echo $page == 'dashboard_academic_management' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Academic Management Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-lecturer.php" class="nav-link <?php echo $page == 'dashboard_lecturer' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Lecturer Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-student.php" class="nav-link <?php echo $page == 'dashboard_student' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Student Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-repository.php" class="nav-link <?php echo $page == 'dashboard_repository' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Repository Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-monitoring.php" class="nav-link <?php echo $page == 'dashboard_monitoring' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Monitoring Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-audit.php" class="nav-link <?php echo $page == 'dashboard_audit' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Audit Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard-system.php" class="nav-link <?php echo $page == 'dashboard_system' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>System Dashboard</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- ================= MY WORK CENTER ================= -->
        <li class="nav-item <?php echo in_array($page, ['my_tasks','notifications','activity_tracker']) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, ['my_tasks','notifications','activity_tracker']) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              My Work Center
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="my-tasks.php" class="nav-link <?php echo $page == 'my_tasks' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>My Tasks</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="notifications.php" class="nav-link <?php echo $page == 'notifications' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Notifications</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="activity-tracker.php" class="nav-link <?php echo $page == 'activity_tracker' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Activity Tracker</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- ================= MASTER DATA ================= -->
        <li class="nav-item <?php echo in_array($page, [
              'master_paper_type','master_topic_category','master_research_area','master_assessment_rubric','master_document_template',
              'master_student','master_lecturer','master_staff','master_external_assessor',
              'master_academic_year','master_semester','master_program','master_academic_facility',
              'master_ref_status','master_ref_category','master_ref_type','master_ref_workflow_stage','master_ref_academic_term'
            ]) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, [
              'master_paper_type','master_topic_category','master_research_area','master_assessment_rubric','master_document_template',
              'master_student','master_lecturer','master_staff','master_external_assessor',
              'master_academic_year','master_semester','master_program','master_academic_facility',
              'master_ref_status','master_ref_category','master_ref_type','master_ref_workflow_stage','master_ref_academic_term'
            ]) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <!-- Academic Asset -->
            <li class="nav-item <?php echo in_array($page, ['master_paper_type','master_topic_category','master_research_area','master_assessment_rubric','master_document_template']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['master_paper_type','master_topic_category','master_research_area','master_assessment_rubric','master_document_template']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Academic Asset
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="master-paper-type.php" class="nav-link <?php echo $page == 'master_paper_type' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Paper Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-topic-category.php" class="nav-link <?php echo $page == 'master_topic_category' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Topic Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-research-area.php" class="nav-link <?php echo $page == 'master_research_area' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Research Area</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-assessment-rubric.php" class="nav-link <?php echo $page == 'master_assessment_rubric' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Assessment Rubric</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-document-template.php" class="nav-link <?php echo $page == 'master_document_template' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Document Template</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Academic Stakeholder -->
            <li class="nav-item <?php echo in_array($page, ['master_student','master_lecturer','master_staff','master_external_assessor']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['master_student','master_lecturer','master_staff','master_external_assessor']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Academic Stakeholder
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="master-student.php" class="nav-link <?php echo $page == 'master_student' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Student</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-lecturer.php" class="nav-link <?php echo $page == 'master_lecturer' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Lecturer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-staff.php" class="nav-link <?php echo $page == 'master_staff' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Staff</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-external-assessor.php" class="nav-link <?php echo $page == 'master_external_assessor' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>External Assessor</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Academic Administration -->
            <li class="nav-item <?php echo in_array($page, ['master_academic_year','master_semester','master_program','master_academic_facility']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['master_academic_year','master_semester','master_program','master_academic_facility']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Academic Administration
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="master-academic-year.php" class="nav-link <?php echo $page == 'master_academic_year' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic Year</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-semester.php" class="nav-link <?php echo $page == 'master_semester' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Semester</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-program.php" class="nav-link <?php echo $page == 'master_program' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Major / Program</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-academic-facility.php" class="nav-link <?php echo $page == 'master_academic_facility' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic Facility</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Reference & Classification -->
            <li class="nav-item <?php echo in_array($page, ['master_ref_status','master_ref_category','master_ref_type','master_ref_workflow_stage','master_ref_academic_term']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['master_ref_status','master_ref_category','master_ref_type','master_ref_workflow_stage','master_ref_academic_term']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Reference & Classification
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="master-ref-status.php" class="nav-link <?php echo $page == 'master_ref_status' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Status</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-ref-category.php" class="nav-link <?php echo $page == 'master_ref_category' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-ref-type.php" class="nav-link <?php echo $page == 'master_ref_type' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-ref-workflow-stage.php" class="nav-link <?php echo $page == 'master_ref_workflow_stage' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Workflow Stage</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="master-ref-academic-term.php" class="nav-link <?php echo $page == 'master_ref_academic_term' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic Term</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- ================= WORKSPACE ================= -->
        <li class="nav-item <?php echo in_array($page, [
              'ws_skripsi_registration','ws_skripsi_topic','ws_skripsi_supervisor','ws_skripsi_bimbingan','ws_skripsi_exam_registration','ws_skripsi_scheduling','ws_skripsi_examination','ws_skripsi_post_exam_revision','ws_skripsi_repository',
              'ws_pa_registration','ws_pa_topic_selection','ws_pa_supervisor','ws_pa_bimbingan','ws_pa_examination','ws_pa_repository'
            ]) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, [
              'ws_skripsi_registration','ws_skripsi_topic','ws_skripsi_supervisor','ws_skripsi_bimbingan','ws_skripsi_exam_registration','ws_skripsi_scheduling','ws_skripsi_examination','ws_skripsi_post_exam_revision','ws_skripsi_repository',
              'ws_pa_registration','ws_pa_topic_selection','ws_pa_supervisor','ws_pa_bimbingan','ws_pa_examination','ws_pa_repository'
            ]) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Workspace
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <!-- Skripsi S1 -->
            <li class="nav-item <?php echo in_array($page, ['ws_skripsi_registration','ws_skripsi_topic','ws_skripsi_supervisor','ws_skripsi_bimbingan','ws_skripsi_exam_registration','ws_skripsi_scheduling','ws_skripsi_examination','ws_skripsi_post_exam_revision','ws_skripsi_repository']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['ws_skripsi_registration','ws_skripsi_topic','ws_skripsi_supervisor','ws_skripsi_bimbingan','ws_skripsi_exam_registration','ws_skripsi_scheduling','ws_skripsi_examination','ws_skripsi_post_exam_revision','ws_skripsi_repository']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Skripsi S1
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="ws-skripsi-registration.php" class="nav-link <?php echo $page == 'ws_skripsi_registration' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Registration</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-topic.php" class="nav-link <?php echo $page == 'ws_skripsi_topic' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Topic & Title Management</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-supervisor.php" class="nav-link <?php echo $page == 'ws_skripsi_supervisor' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Supervisor Assignment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-bimbingan.php" class="nav-link <?php echo $page == 'ws_skripsi_bimbingan' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Bimbingan Skripsi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-exam-registration.php" class="nav-link <?php echo $page == 'ws_skripsi_exam_registration' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Exam Registration</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-scheduling.php" class="nav-link <?php echo $page == 'ws_skripsi_scheduling' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Scheduling</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-examination.php" class="nav-link <?php echo $page == 'ws_skripsi_examination' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examination</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-post-exam-revision.php" class="nav-link <?php echo $page == 'ws_skripsi_post_exam_revision' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Post Exam Revision</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-skripsi-repository.php" class="nav-link <?php echo $page == 'ws_skripsi_repository' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Repository</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Proyek Akhir D3 -->
            <li class="nav-item <?php echo in_array($page, ['ws_pa_registration','ws_pa_topic_selection','ws_pa_supervisor','ws_pa_bimbingan','ws_pa_examination','ws_pa_repository']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['ws_pa_registration','ws_pa_topic_selection','ws_pa_supervisor','ws_pa_bimbingan','ws_pa_examination','ws_pa_repository']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Proyek Akhir D3
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="ws-pa-registration.php" class="nav-link <?php echo $page == 'ws_pa_registration' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Registration</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-pa-topic-selection.php" class="nav-link <?php echo $page == 'ws_pa_topic_selection' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Topic Selection</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-pa-supervisor.php" class="nav-link <?php echo $page == 'ws_pa_supervisor' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Supervisor Assignment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-pa-bimbingan.php" class="nav-link <?php echo $page == 'ws_pa_bimbingan' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Bimbingan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-pa-examination.php" class="nav-link <?php echo $page == 'ws_pa_examination' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examination</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ws-pa-repository.php" class="nav-link <?php echo $page == 'ws_pa_repository' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Repository</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- ================= INSIGHT ================= -->
        <li class="nav-item <?php echo in_array($page, [
              'insight_skripsi_academic_progress','insight_skripsi_supervisor_performance','insight_skripsi_examiner_performance','insight_skripsi_repository_analytics','insight_skripsi_academic_kpi',
              'insight_pa_academic_progress','insight_pa_supervisor_performance','insight_pa_examiner_performance','insight_pa_repository_analytics','insight_pa_academic_kpi'
            ]) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, [
              'insight_skripsi_academic_progress','insight_skripsi_supervisor_performance','insight_skripsi_examiner_performance','insight_skripsi_repository_analytics','insight_skripsi_academic_kpi',
              'insight_pa_academic_progress','insight_pa_supervisor_performance','insight_pa_examiner_performance','insight_pa_repository_analytics','insight_pa_academic_kpi'
            ]) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
              Reporting
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <!-- Skripsi S1 -->
            <li class="nav-item <?php echo in_array($page, ['insight_skripsi_academic_progress','insight_skripsi_supervisor_performance','insight_skripsi_examiner_performance','insight_skripsi_repository_analytics','insight_skripsi_academic_kpi']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['insight_skripsi_academic_progress','insight_skripsi_supervisor_performance','insight_skripsi_examiner_performance','insight_skripsi_repository_analytics','insight_skripsi_academic_kpi']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Skripsi S1
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="insight-skripsi-academic-progress.php" class="nav-link <?php echo $page == 'insight_skripsi_academic_progress' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic Progress</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-skripsi-supervisor-performance.php" class="nav-link <?php echo $page == 'insight_skripsi_supervisor_performance' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Supervisor Performance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-skripsi-examiner-performance.php" class="nav-link <?php echo $page == 'insight_skripsi_examiner_performance' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examiner Performance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-skripsi-repository-analytics.php" class="nav-link <?php echo $page == 'insight_skripsi_repository_analytics' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Repository Analytics</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-skripsi-academic-kpi.php" class="nav-link <?php echo $page == 'insight_skripsi_academic_kpi' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic KPI</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Proyek Akhir D3 -->
            <li class="nav-item <?php echo in_array($page, ['insight_pa_academic_progress','insight_pa_supervisor_performance','insight_pa_examiner_performance','insight_pa_repository_analytics','insight_pa_academic_kpi']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['insight_pa_academic_progress','insight_pa_supervisor_performance','insight_pa_examiner_performance','insight_pa_repository_analytics','insight_pa_academic_kpi']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Proyek Akhir D3
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="insight-pa-academic-progress.php" class="nav-link <?php echo $page == 'insight_pa_academic_progress' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic Progress</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-pa-supervisor-performance.php" class="nav-link <?php echo $page == 'insight_pa_supervisor_performance' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Supervisor Performance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-pa-examiner-performance.php" class="nav-link <?php echo $page == 'insight_pa_examiner_performance' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examiner Performance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-pa-repository-analytics.php" class="nav-link <?php echo $page == 'insight_pa_repository_analytics' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Repository Analytics</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="insight-pa-academic-kpi.php" class="nav-link <?php echo $page == 'insight_pa_academic_kpi' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Academic KPI</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- ================= MONITORING ================= -->
        <li class="nav-item <?php echo in_array($page, [
              'monitoring_skripsi_progress','monitoring_skripsi_approval','monitoring_skripsi_discussion','monitoring_skripsi_examination','monitoring_skripsi_workflow_tracking',
              'monitoring_pa_progress','monitoring_pa_approval','monitoring_pa_discussion','monitoring_pa_examination','monitoring_pa_workflow_tracking'
            ]) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, [
              'monitoring_skripsi_progress','monitoring_skripsi_approval','monitoring_skripsi_discussion','monitoring_skripsi_examination','monitoring_skripsi_workflow_tracking',
              'monitoring_pa_progress','monitoring_pa_approval','monitoring_pa_discussion','monitoring_pa_examination','monitoring_pa_workflow_tracking'
            ]) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Monitoring
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <!-- Skripsi S1 -->
            <li class="nav-item <?php echo in_array($page, ['monitoring_skripsi_progress','monitoring_skripsi_approval','monitoring_skripsi_discussion','monitoring_skripsi_examination','monitoring_skripsi_workflow_tracking']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['monitoring_skripsi_progress','monitoring_skripsi_approval','monitoring_skripsi_discussion','monitoring_skripsi_examination','monitoring_skripsi_workflow_tracking']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Skripsi S1
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="monitoring-skripsi-progress.php" class="nav-link <?php echo $page == 'monitoring_skripsi_progress' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Progress Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-skripsi-approval.php" class="nav-link <?php echo $page == 'monitoring_skripsi_approval' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Approval Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-skripsi-discussion.php" class="nav-link <?php echo $page == 'monitoring_skripsi_discussion' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Discussion Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-skripsi-examination.php" class="nav-link <?php echo $page == 'monitoring_skripsi_examination' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examination Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-skripsi-workflow-tracking.php" class="nav-link <?php echo $page == 'monitoring_skripsi_workflow_tracking' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Workflow Tracking</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Proyek Akhir D3 -->
            <li class="nav-item <?php echo in_array($page, ['monitoring_pa_progress','monitoring_pa_approval','monitoring_pa_discussion','monitoring_pa_examination','monitoring_pa_workflow_tracking']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['monitoring_pa_progress','monitoring_pa_approval','monitoring_pa_discussion','monitoring_pa_examination','monitoring_pa_workflow_tracking']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Proyek Akhir D3
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="monitoring-pa-progress.php" class="nav-link <?php echo $page == 'monitoring_pa_progress' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Progress Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-pa-approval.php" class="nav-link <?php echo $page == 'monitoring_pa_approval' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Approval Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-pa-discussion.php" class="nav-link <?php echo $page == 'monitoring_pa_discussion' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Discussion Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-pa-examination.php" class="nav-link <?php echo $page == 'monitoring_pa_examination' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Examination Monitoring</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="monitoring-pa-workflow-tracking.php" class="nav-link <?php echo $page == 'monitoring_pa_workflow_tracking' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Workflow Tracking</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- ================= SYSTEM ADMINISTRATION ================= -->
        <li class="nav-item <?php echo in_array($page, [
              'sysadmin_user','sysadmin_role','sysadmin_permission',
              'sysadmin_general_setting','sysadmin_workflow','sysadmin_approval_rule','sysadmin_notification_template','sysadmin_document_numbering',
              'sysadmin_activity_log','sysadmin_change_log','sysadmin_system_event'
            ]) ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link <?php echo in_array($page, [
              'sysadmin_user','sysadmin_role','sysadmin_permission',
              'sysadmin_general_setting','sysadmin_workflow','sysadmin_approval_rule','sysadmin_notification_template','sysadmin_document_numbering',
              'sysadmin_activity_log','sysadmin_change_log','sysadmin_system_event'
            ]) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              System Administration
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <!-- Access Control -->
            <li class="nav-item <?php echo in_array($page, ['sysadmin_user','sysadmin_role','sysadmin_permission']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['sysadmin_user','sysadmin_role','sysadmin_permission']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Access Control
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="sysadmin-user.php" class="nav-link <?php echo $page == 'sysadmin_user' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-role.php" class="nav-link <?php echo $page == 'sysadmin_role' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Role</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-permission.php" class="nav-link <?php echo $page == 'sysadmin_permission' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Permission</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Configuration -->
            <li class="nav-item <?php echo in_array($page, ['sysadmin_general_setting','sysadmin_workflow','sysadmin_approval_rule','sysadmin_notification_template','sysadmin_document_numbering']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['sysadmin_general_setting','sysadmin_workflow','sysadmin_approval_rule','sysadmin_notification_template','sysadmin_document_numbering']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Configuration
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="sysadmin-general-setting.php" class="nav-link <?php echo $page == 'sysadmin_general_setting' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>General Setting</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-workflow.php" class="nav-link <?php echo $page == 'sysadmin_workflow' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Workflow</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-approval-rule.php" class="nav-link <?php echo $page == 'sysadmin_approval_rule' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Approval Rule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-notification-template.php" class="nav-link <?php echo $page == 'sysadmin_notification_template' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Notification Template</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-document-numbering.php" class="nav-link <?php echo $page == 'sysadmin_document_numbering' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Document Numbering</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Audit Center -->
            <li class="nav-item <?php echo in_array($page, ['sysadmin_activity_log','sysadmin_change_log','sysadmin_system_event']) ? 'menu-open' : ''; ?>">
              <a href="#" class="nav-link <?php echo in_array($page, ['sysadmin_activity_log','sysadmin_change_log','sysadmin_system_event']) ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Audit Center
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="sysadmin-activity-log.php" class="nav-link <?php echo $page == 'sysadmin_activity_log' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Activity Log</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-change-log.php" class="nav-link <?php echo $page == 'sysadmin_change_log' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Change Log</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sysadmin-system-event.php" class="nav-link <?php echo $page == 'sysadmin_system_event' ? 'active' : ''; ?>">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>System Event</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- ================= KEMBALI MENU UTAMA ================= -->
        <li class="nav-item mt-3">
          <a href="../menu.php" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Kembali Menu Utama</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
