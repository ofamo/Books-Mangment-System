<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url()?>style/css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<title>books</title>

</head>
<body dir="rtl" style="text-align: right;">
    
  <!--form name="frmproduct" method="post"!-->
   <?php 
        $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
        echo form_open("admin/search/".$pg, $attr);?>

  <div class="header">
    <?php
    $option['0']='--حدد صنف--';
    foreach ($cbooks as $classbook) {
      $option[$classbook['id']] = $classbook['BookCategory'];
    }
    echo form_dropdown('selector',$option);
      echo form_submit  ('submit', 'بحث');
        
         echo anchor('https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/'.$pg,'عرض الجميع',array('class' =>'btn btn-primary' ));

      ?>
  
   
    

   
  </div>
  <div  class="table-books">
    <?php
      $Refe_idI='';
        $Refe_idII='';
    if ($books != NULL) {
      if ($pg==1) {
        foreach ($books as $books) {
      foreach ($cbooks as $cbook) {
        if ($books['BookCategory']==$cbook['id']) {
          $classbook=$cbook['BookCategory'];
        }
      }
      foreach ($rbooks as $rbook) {
        if($books['ReferencesI']!=NULL){
          if ($books['ReferencesI']==$rbook['id']) {
          $ReferencesI=$rbook['Name'];
          $Refe_idI=$rbook['id'];
         }
        }
        else
          $ReferencesI='NULL';
      }

       foreach ($rbooks as $rbook) {
        if($books['ReferencesII']!=NULL){
          if ($books['ReferencesII']==$rbook['id']) {
          $ReferencesII=$rbook['Name'];
          $Refe_idII=$rbook['id'];
         }
        }
        else
          $ReferencesII='NULL';
        
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

      $book_id=$books['No'];
      $chars = 15;  
      if ($ReferenceOpinion!='NULL'||$ReferenceOpinion2!='NULL') {
          $story_desc  =$ReferenceOpinion;
          $story_desc  =substr($story_desc,0,$chars);
          $story_desc  =$story_desc.anchor('https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/edit_book/'.$book_id.'/'. $ReferencesI .'/' . $ReferencesII,
                             'Read More...');
          
      }
      else{
        $story_desc = 'NULL';
                
        }
                $msg="Are";  
                $try=1;
        $this->table->add_row(array(
                            'No'                      =>"<input  type='checkbox'class='sub_chk' data-id=$book_id>",
                            'BookName'                =>$books['BookName'],
                            'BookCategory'            =>$classbook,
                            'PublishingHouse'         =>$books['PublishingHouse'],
                            'Link'                    =>anchor($books['Link'],'رابط الكتاب'), 
                            'ReferencesI'             =>$ReferencesI,
                            'ReferencesII'            =>$ReferencesII,
                            'ReferenceOpinion'        =>$story_desc,
                            'updata'                  =>anchor('https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/edit_book/'.$book_id.'/'. $ReferencesI .'/' . $ReferencesII,
                             'تعديل'),
                            'Delete'                  =>anchor('https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/delete_book/'.$book_id,
                             'حذف',
                              array('onClick'         => "return confirm('Are you sure?')"))
));
      
    }
      $this->table->set_heading($heading);
      echo $this->table->generate();
      }
      elseif ($pg==2) {
        foreach ($books as $books) {
          foreach ($cbooks as $cbook) {
            if ($books['BookCategory']==$cbook['id']) {
              $classbook=$cbook['BookCategory'];  
            }
          }
          $book_id=$books['No'];
          $this->table->add_row(array(
                            'No'                      =>"<input  type='checkbox'class='sub_chk' data-id=$book_id>",
                            'BookName'                =>$books['BookName'],
                            'BookCategory'            =>$classbook,
                            'PublishingHouse'         =>$books['PublishingHouse'],
                            'Link'                    =>anchor($books['Link'],'رابط الكتاب'), 
                            'restor'                  =>anchor('https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/restor_book/'.$book_id,
                             'استعادة',
                              array('onClick'         => "return confirm('Are you sure?')"))
                        ));
        }
        $this->table->set_heading($heading);
        echo $this->table->generate();
      }?>
        </div>
    <!--/form!-->
    
        <?php echo form_close(); ?>

<div id='pagin'><?php echo $pagination;?></div>
    <div id='pagin'>
      <?php if ($pg==1) {?>
      <button style="margin-bottom: 10px;font-size:18px" class="btn btn-primary delete_all" data-url="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/deleteAll">حذف كل العناصر المحددة</button>
      <?php } else if ($pg==2) {?>
      <button style="margin-bottom: 10px;font-size:18px" class="btn btn-primary delete_all" data-url="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/restorAll">استعادة كل العناصر المححددة</button><?php } ?>
    </div> <?php
  }
  else{?>
    <div id='pagin'> 
<?php echo '<h1>' . 'NULL' . '</h1>' ; ?>
</div>
    
  <?php }
   ?>
      <div id='pagin'>
        <input type="button" name="btnBack" id="btnBack" value="عودة" onclick="window.location.href='<?php echo "https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book" ?>'" />
        
      </div>
<script type="text/javascript">
    $(document).ready(function () {
 
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
 
        $('.delete_all').on('click', function(e) {
 
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
 
            if(allVals.length <=0)  
            {  
                alert("رجاء حدد كتاب.");  
            }  else {  
 
                var check = confirm("Are you sure?");  
                if(check == true){  
 
                    var join_selected_values = allVals.join(","); 
                    
 
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'POST',
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                          console.log(data);
                          $(".sub_chk:checked").each(function() {  
                              $(this).parents("tr").remove();
                          });
                          alert("Item Deleted successfully.");
                             
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
 
                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
    });
</script>

</body>
</html>