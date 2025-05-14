<link rel="stylesheet" href="css/style.css" media="screen">

<div class="err_popup-bg">
  <div class="err_popup">
    <div class="container">
      <img class="close-popup" src="images/close.png" alt="icon">
      <input type="checkbox" id="check">
        <h2><?php echo $_SESSION['order_error']; ?></h2>
    </div>
  </div>
</div>

<script src="js/error.js"></script>