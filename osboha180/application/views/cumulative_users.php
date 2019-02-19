<link rel="stylesheet" href="<?php echo base_url()?>style/css/style.css">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url = base_url () .'admin/B_book/';
?>
<h1 style="font-size:20pt;text-align:right">فريق جودة الكتب</h1>
<div class="">
<span style="float: left;color: #337ab7;font-weight: 600;">الإنجاز التراكمي للأعضاء</span>
 <span class="btn btn-defoult btn-sm btn-custom">  
 
 <?php echo anchor('admin/B_book/','رجوع')?>
</span>
  <div  class="table-books">
<table class="table" cellspacing="0" width="100%" id="user">
<thead>
<tr>

<?php foreach($sort_cols as $field_name => $field_display): ?>
    <th><i class="fa fa-sort sorting" aria-hidden="true"></i><?php echo anchor('admin/cumulative_users/'.$field_name.'/'.($sort_by == $field_name ? $sort_order : 'asc').'/'.$page, $field_display); ?></th>
<?php endforeach;?>


</tr>
</thead>
<tbody>
                <?php $i=1;foreach($data as $rec): ?>
                <tr>
				
		
					<td><?php echo $rec->accepted_reviews; ?></td>
					 <td><?php 
					 if($rec->thesis==6) {echo 'more';}
	else if($rec->thesis==7) {echo 'screenshot';}
	else{	echo $rec->thesis;}
	 ?>
					 
					 </td>
					<td><?php echo $rec->pages; ?></td>
                     <td><?php echo $rec->name; ?></td>      
							
                </tr>
                <?php endforeach; ?>
</tbody>
</table>
</div>
</div>