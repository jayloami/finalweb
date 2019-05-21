<?php
session_start();
session_destroy();
header('location: login.php');
?>

<?php include 'link.php'; ?>
<script>>
Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href>Why do I have this issue?</a>'
})
</script