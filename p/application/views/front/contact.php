<div id="content"> 

<?php $this->user->messages(); ?>
 <?php echo  validation_errors('<div class="notification tip" style="display: block;"> <span class="strong"></span>', '<span title="Dismiss" class="close"></span></div>'); ?>

  <div class="clear"></div>
<div id="main_content">
<div id="contact">

<form name="myform" id="divform" class="form" style="width:335px;" method="post" action="<?php echo site_url("front/contact"); ?>">
<div class="title"><img src="images/contact_us.jpg" />
</div>

<div class="formtitle">ชื่อนามสกุลผู้ติดต่อ:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="name" value="<?php echo set_value("name"); ?>" /></div>
<div class="formtitle">บริษัท:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="company" value="<?php echo set_value("company"); ?>" /></div>
<div class="formtitle">อีเมล์:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="email" value="<?php echo set_value("email"); ?>" /></div>
<div class="formtitle">เบอร์โทร:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="tel" value="<?php echo set_value("tel"); ?>" /></div>
<div class="formtitle">ติดต่อเรื่อง:</div>
<?php $ctypes = $this->db->query("select * from contact_types")->result_array(); ?>
<div class="formfield"><select name="ctype_id" style="width: 317px;" >
<?php foreach($ctypes as $row){ ?>
<option value="<?php echo $row['ctype_id']; ?>"><?php echo $row['ctype_name_th']; ?></option>
<?php } ?>
</select></div>
<div class="formtitle">รายละเอียด:</div>
<div class="formfield"><textarea class="textareastyle" rows="5" cols="45" style="height: 150px; width: 300px;" name="message"></textarea></div>
<div style="clear: both;"></div>
<br/>
<button type="button"  onclick="document.forms['myform'].submit();" class="grey">ส่งข้อความ</button>

</form>

<div id="divaddress" style="margin-top: 10px;">
<div  id="map"><img alt="" src="images/map.jpg"></div>
<div id="address">
<div class="title">ที่อยู่</div>
<p class="margintop5">บริษัท ฟอร์เวิร์ด ซิสเต็ม จำกัด<br>
888/221&ndash;222 อาคาร มหาทุนพลาซ่า ชั้น 2 ถ.เพลินจิต  แขวงลุมพินี <br>
เขตปทุมวัน
กรุงเทพฯ 10330
<br/>
โทร 0-2643-7222   แฟกซ์ 0-2255-8986-7<br>
Email : mail@forwardsystem.co.th
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>


<style>
#content img{
border: 0px none;
}
</style>