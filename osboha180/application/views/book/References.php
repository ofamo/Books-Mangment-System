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

	 	$heading=array('No', 'اسم المراجع','الوظيفة','قبول الطلب' ,'رفض');
	 	 foreach ($Refe as $Refe){
	 	 	$id_refe=$Refe['id'];
	 	 	$flag = "";
    if($Refe['flag'] == 1){
        $flag = "مراجع";
    }
    else{$flag = "مسؤول";}
        $this->table->add_row(array(
                            'id'                      =>$Refe['id'],
                            'username'                    =>$Refe['Name'],
                            'flag'                      =>$flag,
                            'dail'                    =>anchor('https://osboha180suggestion.000webhostapp.com/osboha180/admin/add_refe/'. 1 .'/'.$id_refe,
                             'قبول',
                              array('onClick'         => "return confirm('Are you sure?')")),
                            'notdail'                    =>anchor('https://osboha180suggestion.000webhostapp.com/osboha180/admin/add_refe/'. 2 .'/'.$id_refe,
                             'رفض',
                              array('onClick'         => "return confirm('Are you sure?')"))
                            
));
        }

	 	 $this->table->set_heading($heading);
echo $this->table->generate();
?>
<div id='pagin'><?php echo $pagination;?></div>

    
</body>
</html>
