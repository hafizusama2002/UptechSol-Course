

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <?php
// Assuming you have obtained the username and password from the login mechanism
$username = $_SESSION['username']; // Change this based on your form field names
// $password = $_POST['password']; // Change this based on your form field names

// Check if username and password are "admin"
if ($username === "admin" ) {
    // Display SuperAdmin link
    echo '<li class="nav-item">
            <a class="nav-link collapsed" href="super-admin.php">
              <i class="bi bi-menu-button-wide"></i><span>SuperAdmin</span></i>
            </a>
          </li>';
}
?><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="view-user.php">
      <i class="bi bi-journal-text"></i><span>View Users</span></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="add-product.php">
      <i class="bi bi-layout-text-window-reverse"></i><span>Add Product</span></i>
    </a>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="view-product.php">
      <i class="bi bi-layout-text-window-reverse"></i><span>View Product</span></i>
    </a>
  </li><!-- End Tables Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="pending-order.php">
      <i class="bi bi-gem"></i><span>Pending Order</span></i>
    </a>
  </li><!-- End Icons Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="report.php">
      <i class="bi bi-envelope"></i>
      <span>Report</span>
    </a>
  </li><!-- End Contact Page Nav -->


</ul>

</aside><!-- End Sidebar-->

