<div class="topnav" id="myTopnav">
<?php foreach ($submenu as $item => $value) { ?>
  <a href="<?php echo site_url($value[0]);?>" <?php if($subpage == $value[1]){ echo 'class="active"'; } ?>><?php echo $item; ?></a>
<?php } ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>