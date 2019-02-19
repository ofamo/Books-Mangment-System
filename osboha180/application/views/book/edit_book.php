<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url()?>style/css/style.css">
<title>Edit</title>
</head>

<body dir="rtl">
<h2 align="center">تعديل</h2>

<?php 
      $books=$book;
      $ReferencesI=$ReferencesI;
      $ReferencesII=$ReferencesII;
      $book_id =$book['No'];
       foreach($reviews as $review)
       {
      $options[$review['id']] =   $review['Name'] ;
       }
       foreach($cbooks as $cbook) {
      if($books['BookCategory']==$cbook['id'])
        $classbook=$cbook['BookCategory'];
    }
          foreach ($notes as $note) {
        if($books['ReferenceOpinion']!=NULL){
          if ($books['ReferenceOpinion']==$note['id']) {
          $ReferenceOpinion=$note['ReferenceOpinion'];
         }
        }
        else
          $ReferenceOpinion='NULL';   
      } 
            foreach ($notes as $note) {
        if($books['ReferenceOpinion2']!=NULL){
          if ($books['ReferenceOpinion2']==$note['id']) {
          $ReferenceOpinion2=$note['ReferenceOpinion'];
         }
        }
        else
          $ReferenceOpinion2='NULL';   
      } 


 ?>

<?php 
echo form_open("https://osboha180suggestion.000webhostapp.com/osboha180/admin/edit_book/$book_id/$ReferencesI/$ReferencesII/");?>
	<table class="table-books">
		<tr>
			<td width="130" align="left"> اسم الكتاب: </td>
			<td ><?php echo $book['BookName'] ?></td>
		</tr>
		<tr>
			<td width="130" align="left"> تصنيف الكتاب: </td>
			<td ><?php echo ($classbook) ?></td>
		</tr>
		<tr>
			<td align="left">حول الكتاب:</td>
			<td><?php echo $book['AboutBook'] ?></td>
		</tr>
		<tr>
			<td align="left">رابط الكتاب:</td>
			<td><?php echo anchor($books['Link'],'رابط الكتاب')?></td>
		</tr>

		<tr>
			<td align="left">المراجعين:</td>
			
			<td>
				<?php 
				if($book['ReferenceOpinion']==NULL){
				echo form_dropdown('selec', $options);
			    echo form_dropdown('selec2', $options);
			    }
			    else if($book['ReferenceOpinion']!=NULL)
			    echo $ReferencesI . '&' . $ReferencesII;
			    ?>
			</td>

		</tr>
	<?php if($book['ReferenceOpinion']!=NULL) {?>
		<tr>
			<td align="left">عمل المراجع   <?php echo $ReferencesI ?> </td>
			<td><?php echo $ReferenceOpinion ?></td>
		</tr>
   	<?php } ?>
   		<?php if($book['ReferenceOpinion2']!=NULL) {?>
		<tr>
			<td align="left"> عمل المراجع   <?php echo $ReferencesII ?></td>
			<td><?php echo $ReferenceOpinion2 ?></td>
		</tr>
   	<?php } ?>

		<tr>
			<td>&nbsp;</td>
			<td><?php echo form_submit('submit','موافق',array('onClick' => "return confirm('هل تريد حفظ التعديل؟')"));

			?>
				<a href="javascript:window.history.go(-1);">عودة</a>
			</td>
		</tr>
	</table>

<?php echo form_close(); ?>
</body>
</html>
