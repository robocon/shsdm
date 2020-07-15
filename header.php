<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบข้อมูลผู้ป่วยเบาหวาน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    
    <link href="bulma-calendar-master/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <script src="bulma-calendar-master/dist/js/bulma-calendar.min.js"></script>

    <script src="https://kit.fontawesome.com/6b4c2963a2.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container is-widescreen is-mobile">

	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="javascript:void(0);">
      <img src="images/Untitled-2.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">หน้าหลัก</a>
      <a class="navbar-item" href="index.php?page=patient_form">ฟอร์มบันทึก</a>
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
	el.addEventListener('click', () => {

	  // Get the target from the "data-target" attribute
	  const target = el.dataset.target;
	  const $target = document.getElementById(target);

	  // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
	  el.classList.toggle('is-active');
	  $target.classList.toggle('is-active');

	});
  });
}

});
</script>