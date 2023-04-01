<?php
// PHP for sending contact form data via email
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'info@burgershop.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  if (mail($to, $subject, $body)) {
    echo '<p>Thank you for your message. We will be in touch soon.</p>';
  } else {
    echo '<p>There was an error sending your message. Please try again later.</p>';
  }
}
?>

<?php
  // PHP code for dynamically generating menu items
  $menu_items = array(
    array("name" => "Menu Item 1", "description" => "Description of Menu Item 1", "image" => "images/menu-item-1.jpg"),
    array("name" => "Menu Item 2", "description" => "Description of Menu Item 2", "image" => "images/menu-item-2.jpg"),
    array("name" => "Menu Item 3", "description" => "Description of Menu Item 3", "image" => "images/menu-item-3.jpg")
  );
  
  foreach ($menu_items as $item) {
    echo "<div>";
    echo "<img src='" . $item["image"] . "' alt='" . $item["name"] . "'>";
    echo "<h3>" . $item["name"] . "</h3>";
    echo "<p>" . $item["description"] . "</p>";
    echo "</div>";
  }
?>




