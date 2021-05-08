<div class="topnav" id="myTopnav">

  <a href="<?php echo site_url('about/aboutus');?>" <?php if($active == 'aboutus'){ echo 'class="active"'; } ?>>Why Arni?</a>
  <a href="<?php echo site_url('about/governance');?>" <?php if($active == 'governance'){ echo 'class="active"'; } ?>>Governance</a>
  <a href="<?php echo site_url('about/management');?>" <?php if($active == 'management'){ echo 'class="active"'; } ?>>Management's Talk</a>
  <a href="<?php echo site_url('about/committee');?>" <?php if($active == 'committee'){ echo 'class="active"'; } ?>>University Committee</a>
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