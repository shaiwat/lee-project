<?php $f = $this->session->userdata("section"); ?>
<div id="nav">
    
  <ul>
   <li <?php if($f=="report"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/report"); ?>">สรุปข้อมูล<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
    <li <?php if($f=="materials"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/materials"); ?>">จัดการวัสดุครุภัณฑ์์<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
     <li <?php if($f=="categories"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/categories"); ?>">จัดการกลุ่ม/ประเถท<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
    
    <li <?php if($f=="matain"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/maintain"); ?>">บำรุงรักษาวัสดุครุภัณ์<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
    <li <?php if($f=="tracking"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/rooms"); ?>">ติดตามวัสดุครุภัณ<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
    
      <li  <?php if($f=="users"){ echo 'id="current"';} ?> ><a href="<?php echo site_url("manage/users"); ?>">จัดการผู้ใช้งาน<span class="nav_tr">&nbsp;</span><span class="nav_br">&nbsp;</span><span class="nav_bl">&nbsp;</span></a></li>
  </ul>
</div>
<div style="clear:both;" ></div>

<style>

#nav{
background:url("images/nav.gif") repeat-x scroll center bottom transparent;
border-top:1px solid #F9F9F5;
float:left;
margin:0 auto;
padding:0 3%;
position:relative;
text-align:center;
width:94%;
}
#nav ul {
display:block;
list-style:none outside none;
margin:0 auto;
max-width:900px;
text-align:left;
}
#nav li {
display:inline;
float:left;
padding-bottom:4px;
}
#nav a {
color:#31363E;
float:left;
margin:3px 4px 0 0;
padding:4px 15px;
text-decoration:none;
}
#nav a:hover {
background:url("images/nav_tl.gif") no-repeat scroll left top #CCCCCC;
color:#202429;
position:relative;
}
#nav #current a {
background:url("images/nav_tl.gif") no-repeat scroll left top #A2A4A5;
color:#FFFFFF;
position:relative;
}
.nav_tr {
background:url("images/nav_tr.gif") repeat scroll right top transparent;
display:block;
height:4px;
position:absolute;
right:0;
top:0;
width:4px;
}
.nav_bl {
background:url("images/nav_bl.gif") repeat scroll left bottom transparent;
bottom:0;
display:block;
height:4px;
left:0;
position:absolute;
width:4px;
}
.nav_br {
background:url("images/nav_br.gif") repeat scroll right bottom transparent;
bottom:0;
display:block;
height:4px;
position:absolute;
right:0;
width:4px;
}
#nav a span {
display:none;
}
#nav a:hover span, #nav #current a span {
display:block;
}
</style>