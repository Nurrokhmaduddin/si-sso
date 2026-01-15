<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notification Table</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f6fa;
      padding: 20px;
    }
    .notif-table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .notif-table th, .notif-table td {
      padding: 14px 16px;
      border-bottom: 1px solid #eee;
    }
    .notif-table th {
      background: #f0f0f0;
      text-align: left;
      font-weight: 600;
      color: #444;
    }
    .notif-icon {
      font-size: 18px;
      width: 28px;
      text-align: center;
    }
    .action-required {
      color: #e74c3c;
    }
    .regular-msg {
      color: #3498db;
    }
  </style>
</head>
<body>

  <h2>All Notifications</h2>

  <table class="notif-table">
    <thead>
      <tr>
        <th>Time</th>
        <th>Type</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <!-- Required Action Example -->
      <tr>
        <td>2025-03-15 14:23:00</td>
        <td><i class="fas fa-exclamation-circle notif-icon action-required"></i> Required Action</td>
        <td>Approval Needed</td>
        <td>You have <strong>8 actions</strong> requiring your confirmation.</td>
        <td><button style="padding:6px 12px; border:none; background:#e74c3c; color:#fff; border-radius:6px; cursor:pointer;">Respond</button></td>
      </tr>

      <!-- Regular Message Example -->
      <tr>
        <td>2025-03-15 23:10:00</td>
        <td><i class="fas fa-envelope notif-icon regular-msg"></i> Message</td>
        <td>New Messages</td>
        <td>You received <strong>4 new messages</strong> from system updates.</td>
        <td><button style="padding:6px 12px; border:none; background:#3498db; color:#fff; border-radius:6px; cursor:pointer;">View</button></td>
      </tr>

    </tbody>
  </table>

  <!-- Modal Popup -->
  <div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="notifModalLabel">Notification Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Title:</strong> <span id="modalTitle"></span></p>
          <p><strong>Description:</strong></p>
          <p id="modalDesc"></p>

          <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" value="" id="markAsRead">
            <label class="form-check-label" for="markAsRead">
              Anggap sudah dibaca dan tidak dimunculkan lagi
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.btn-outline-info').forEach(btn => {
      btn.addEventListener('click', function() {
        const row = this.closest('tr');
        const title = row.children[2].innerText;
        const desc = row.children[3].innerText;

        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalDesc').innerText = desc;

        const modal = new bootstrap.Modal(document.getElementById('notifModal'));
        modal.show();
      });
    });
  </script>
</body>
</html>
