<?php $this->load->view("report/report_filter"); ?>


<?php function get_thumbail($file)
{
		if(!($file["thumbnail"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=30&h=24&zc=1" alt="" />';
		}
	
}
?>


<table id="list">
          <tbody><tr class=" odd">
           
            <th >เลขที่ครุภัณฑ์</th>
             <th>ชื่อ</th>
		   <th>หมวด</th>
		   <th>ราคาที่ซื้อมา</th>
			<th>วันที่ซื้อมา</th>
			<th>สถานที่จัดเก็บ</th>
           <th>บริษัทที่ซื้อ</th>
           <th>ปีการศึกษา</th>
            <th style="width: 25px;" >รูป</th>
          </tr>
         <?php foreach($rows as $row){ ?>
          
          <tr >
          
            <td class="tl"><span><?php echo $row['code'] ?></span></td>
            <td><span><?php echo $row['name'] ?></span></td>
            <td><span><?php echo $row['category_name'] ?></span></td>
            <td><span><?php echo $row['buy_date']; ?></span></td>
            <td><span><?php echo $row['buy_price']; ?></span></td>
            <td><span><?php echo $row['place_name']; ?></span></td>
            <td><span><?php echo $row['company_name']; ?></span></td>
            
            <td><span><?php echo $row["year"] ?></span></td>
              <td class="left"><span><?php echo get_thumbail($row) ?></span></td>
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>