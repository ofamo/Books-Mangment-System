 <title>مشروع اصبوحة- <?php echo $title;?></title>
<style>
form{
	float:right;
}
input[type=text], select {
     width: 100%;
    text-align: right;
    padding: 0px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px !important;
    box-sizing: border-box;
    height: 2em;}
label{
color: #003d66
}

h5{
	display:inline-block;
	    font-weight: 600;
}
h4{  text-align: right;}
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
		    float: right;
}   

</style>

 

 <div class="well clearfix">
<h4>معلومات العضو <i class="fa fa-info-circle" aria-hidden="true"></i> </h4>
<hr>
<?php

 echo $msg;?>
<?php if($user_q->num_rows()){
	$user=$user_q->row();?>
<?= form_open();?>
<label>:الإسم</label>
<?= form_input('name',$user->name);?>
<br>
<label>:عدد الصفحات</label>
<?= form_input('pages',$user->pages);?>
<br>
<label>:الأطروحات</label>
<?= form_dropdown('thesis',array(0=>'',1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'more',7=>'screenshot'),$user->thesis);?>
<br>
<label>:المراجعات المقبولة</label>
<?= form_input('accepted_reviews',$user->accepted_reviews);?>
<br>
<?=form_submit('submit','تعديل','class="btn btn-info"');?>
<?php }?>
<button class="btn btn-purple">  
 <a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book/">عودة للحلف</a></button>
</div>
