<style>
input[type=text], select {
 width: 25%;
    padding: 0px 20px;
    margin: 2px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	    height: 2em;}
label{
color: #003d66
}

.btn-outline-success {
    color: #28a745;
    background-color: transparent;
    background-image: none;
    border-color: #28a745;
}
.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-outline-danger {
    color: #dc3545;
    background-color: transparent;
    background-image: none;
    border-color: #dc3545;
}
.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
h5{
	display:inline-block;
	    font-weight: 600;
}
.about_book{
	    border-radius: 2px;
    border-right: 2px solid #333;
    padding: 0 .75em;
    background: #dede;
    border-left: 2px solid #333;
	    font-weight: 600;
}
.msg{
	  border: 1px solid #e6e6e6;
    color: green;
    background: #f5f5f5;
    padding: 0.5em;
    border-radius: 15em;
    width: auto;
    text-align: center;
}
label{
	    font-size: 16px;
}
</style>


 <div class="row">
   <?php if($book_q->num_rows()){
	$book=$book_q->row();
	?>
 <div class="col-lg-6">
 <div class="form-group">

 <?= form_open();?>
  <label for="comment"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> أضف رأيك</label>
 <?=form_textarea('note',set_value('note'),'class="form-control"');?>

</div>
<div class="form-group">
<?=form_submit('submit','حفظ','class="btn btn-outline-success"');?>
<?=form_reset('reset','إلغاء','class="btn btn-outline-danger"');?>

</div>
<?php

 echo"<h4 class='msg'>".$msg."</h4>";?>
 </div>
 
 <div class="col-lg-6">
 <div class="well" style="text-align:right">
<h4><i class="fa fa-info-circle" aria-hidden="true"></i> معلومات الكتاب</h4>
<hr>
<h5><?php echo $book->BookName;?></h5>
<label>:اسم الكتاب</label>


<br>
<h5><?php echo $book->BookCategory;?></h5>
<label>:فئة الكتاب</label>

<br>
<h5><?php echo $book->PublishingHouse;?></h5>

<label>:دار النشر</label>
<br>


<label>:نبذة عن الكتاب</label>
<p class="about_book"><?php echo $book->AboutBook;?></p>
<?php }?>
</div>
</div></div>