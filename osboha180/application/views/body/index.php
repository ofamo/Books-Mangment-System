<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table.table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table.table  td, table.table th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align:right;
}

table.table  tr:nth-child(even){
    background-color: #f2f2f2;
    }

table.table  tr:hover {background-color: #f5f5f5;}

table.table  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: right;
    background-color:  #5C6776;
    color: white;
}

.table_container{
        border: 1px solid #e6e6e6;
}
.table-responsive{
    padding: 0 2em !important;
    padding-top:3em !important;
}
.table_header{
        width: 100%;
    height: 3em;
    background-color: #404851;
}

.table_header h5{
     color: #fff;
    position: absolute;
    margin-right: 1em;
    left: auto;
    right: 16px;

}
</style>
<div class="table_container">
<div class="table_header">
<h5> 
<i class="fa fa-cogs" aria-hidden="true"></i>
مراجعة الكتب
</h5>
</div>
 <div class="table-responsive">   
<table class="table">
<thead>


<th>إضافة رأي</th>
<th>رأي المراجع</th>

<th>نبذة عن الكتاب</th>
<th>اسم دار النشر</th>
<th>رابط الكتاب</th>
<th>فئة الكتاب</th>
<th>اسم الكتاب</th>
<th>رقم الكتاب</th>

</thead>
<tbody>
<?php
$chars = 15;  
//set counter variable 
 $counter = 0;

      
foreach($books->result() as $row)
{   $counter++;
   if ($row->ReferenceOpinion!=NULL) {
                $story_desc  =$row->ReferenceOpinion;
                $story_desc  =substr($story_desc,0,$chars);
                $story_desc  =$story_desc.anchor('http://localhost/osboha180/admin',
                             'Read More...');
            }
            else{
                $story_desc = 'NULL';
                
                }
          
    if($row->ReferencesI==$id_refe || $row->ReferencesII==$id_refe)
    {
    $this->load->helper('text');    
    $string = $row->AboutBook;
    $string = word_limiter($string, 10);
  
     echo '<t >';
    echo '<td>';
    echo'<a href="'.base_url("admin/review/".$row->No .'/' . $id_refe).'">Add<i class="fa fa-paper-plane" aria-hidden="true"></i> </a>';
    echo'</td>';
    echo '<td>'.$story_desc.'</td>';
      echo '<td>'.$string.'</td>';
       echo '<td>'.$row->PublishingHouse.'</td>';
	    echo '<td><a href="'.$row->Link.'" target="_blank">'.$row->Link.'</A></td>';
		    echo '<td>'.$row->BookCategory.'</td>';
	
 echo '<td>'.$row->BookName.'</td>';
  echo '<td>'. $counter.'</td>';
    echo'</tr>';
    
    }
} 
?>
</tbody>
</table>
  </div>  
  </div>    
<?php 
echo $this->pagination->create_links();

?>