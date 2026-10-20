<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- AdminLTE style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.html" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE System</span>
    </a>

    <!-- COMPONENT 1: USER PANEL -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <i class="fas fa-user-circle fa-2x text-white"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">Mathew Mpemba</a>
          <small class="text-muted">Administrator</small>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="users.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>User Management</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>Login</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>Register</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper p-3">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">System Overview</h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- COMPONENT 2: CHARTS -->
          <div class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i> Monthly Activity Chart</h3>
              </div>
              <div class="card-body">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>

          <!-- COMPONENT 3: SPINNERS / LOADING OVERLAY -->
          <div class="col-md-5">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Live Server Sync</h3>
              </div>
              <div class="card-body">
                <p>Syncing background processes with local database server...</p>
                <button class="btn btn-sm btn-outline-info" id="toggleSpinner">Toggle Loading State</button>
              </div>
              <!-- AdminLTE Spinner Overlay -->
              <div class="overlay" id="loadingOverlay">
                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">AdminLTE Implementation</div>
    <strong>Copyright &copy; 2026.</strong>
  </footer>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Chart.js initialization
  const ctx = document.getElementById('barChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Active Logins',
        data: [65, 59, 80, 81, 56, 95],
        backgroundColor: '#007bff'
      }]
    }
  });</script>

<script>
  $(document).ready(function() {
    $('#toggleSpinner').on('click', function() {
      // Use AdminLTE's built-in card refresh/overlay toggle command
      var card = $(this).closest('.card');
      card.CardWidget('toggleOverlay');
    });
  });
</script>
</body>
</html>
