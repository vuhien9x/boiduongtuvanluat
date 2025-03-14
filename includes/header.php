<script type="application/javascript">
  /** After windod Load */
  $(window).bind("load", function() {
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 4000);
  });
</script>


<h1 style="display:none">BLT</h1>
<!-- Begin wrap_block_1 -->
<div id="wrap_block_1">
  <div class="container">
    <div class="col-lg-9 col-xs-12 wrap_phone">
      <span id="wrap_phone">
        <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;
        079.72.99078 </span>
      <span class="separation"> | </span>
      <span id="wrap_email">
        <i class="fa-regular fa-envelope"></i>&nbsp;&nbsp;
        lawtrainingcourses@gmail.com </span>

    </div>
    <div class="col-lg-3 col-xs-10 search_div">
      <!-- Begin wrap_search -->
      <!-- <div id="wrap_search">
					<form action="" method="post">
						<input name="key_word" type="text" required="required" placeholder="Tìm kiếm ..." />
						<input type="submit" value="" />
					</form>
				</div> -->
      <!-- End wrap_search -->
    </div>
  </div>
</div>
<!-- End wrap_block_1 -->