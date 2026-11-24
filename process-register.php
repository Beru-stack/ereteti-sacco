<?php $page_title = 'Registration Received'; $page_heading = 'Ereteti Dairy Sacco'; include 'includes/header.php'; ?>

  <main>
<?php
$routes = ['1' => 'Kiserian', '2' => 'Ngong', '3' => 'Rongai'];

// post, because the applicant's name and phone number should not appear in the address bar, be saved in a bookmark, or be sent in a link.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['first_name']) && !empty($_POST['last_name'])) {
    $first = htmlspecialchars($_POST['first_name']);
    $last = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $route_key = $_POST['route'] ?? '';
    $route_name = $routes[$route_key] ?? 'Unknown route';
    echo "<h2>Thank you, $first $last</h2>";
    echo "<p>Your application to join Ereteti Dairy Sacco has been received.</p>";
    echo "<p>Route: $route_name</p>";
    echo "<p>Phone: $phone</p>";
    echo '<p><a href="register.php">Back to the application form</a></p>';
} else {
    echo "<h2>No application</h2>";
    echo "<p>There is no application to show here. Please use the <a href=\"register.php\">join form</a>.</p>";
}
?>
  </main>

<?php include 'includes/footer.php'; ?>
