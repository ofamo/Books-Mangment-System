<link rel="stylesheet" href="<?php echo base_url()?>style/css/style.css">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url = base_url () .'admin/index/';
?>

<h1 style="font-size:20pt;text-align:right">فريق جودة الكتب</h1>
<div class="">



<div class="well clearfix">
	<div class="col-lg-12">
		
 <div class="form-group form-inline pull-right">
 <?= form_open(base_url()."admin/add_user/");?>
  <?=form_submit('submit','إضافة','class="btn btn-purple btn-sm"');?>
 <?=form_input('name','','class="form-control"');?>
<label for="comment">  :إضافة عضو <i class="fa fa-pencil-square-o" aria-hidden="true"></i></label>

</div>

	</div><!-- /.nav-add-user -->
	</div>
<span style="float: left;"><?php echo 'Total records - '. $total_rows;?></span>
 <span class="btn btn-defoult btn-sm btn-custom">  
 
 <?php echo anchor('admin/cumulative_users/','الإحصائيات التراكمية')?>
</span>
<div class="table-books">
<table class="table" cellspacing="0" width="100%" id="user">
<thead>
<tr>
<th><?php echo $actions;?></th>
<?php foreach($sort_cols as $field_name => $field_display): ?>
    <th><i class="fa fa-sort sorting" aria-hidden="true"></i><?php echo anchor('admin/B_book/'.$field_name.'/'.($sort_by == $field_name ? $sort_order : 'asc').'/'.$page, $field_display); ?> </th>
<?php endforeach;?>


</tr>
</thead>
<tbody>
                <?php 
				
			
				foreach($data as $rec): ?>
                <tr>
				
				<?php 
					echo '<td>';
	    echo'<a class="delete" href="'.base_url("admin/delete/".$rec->id).'" Onclick="return ConfirmDelete()">delete<i class="a"></i></a>';
	echo" ";
	echo'<a  class="edit" href="'.base_url("admin/edit/".$rec->id).'"><i class="a" aria-hidden="true"></i>edite</a>';
	echo'</td>';?>
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
<div>
<div style="float: left;"><?php echo $links; ?></div>
</div>
<!--*****************-->
<script>
    function ConfirmDelete()
    {
      var x = confirm("هل انت متأكد من الحذف؟");
      if (x)
          return true;
      else
        return false;
    }
</script>   
