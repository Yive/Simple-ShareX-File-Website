<?php
   $files = glob('files/*');
   
   usort($files, function($file_1, $file_2)
   {
       $file_1 = filemtime($file_1);
       $file_2 = filemtime($file_2);
       if($file_1 == $file_2)
       {
           return 0;
       }
       return $file_1 < $file_2 ? 1 : -1;
   });
   $i = 0;
   foreach ($files as $key => $file) {
      $file_display_name = str_replace('files/', '', $file);
      $filename = '<a href="'.$file.'" target="_blank">'.$file_display_name.'</a>';
      $publicity = 'Public';
    if($public == 'false') {
      $filename = '*****************';
      $publicity = 'Private';
    }
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(in_array($ext, $fileTypes)){
       echo
       '
           <tr>
             <td>'.$filename.'</td>
             <td>'.strtoupper($ext).'</td>
             <td>'.date ("F j, Y, g:i a", filemtime($file))." ".date('T').'</td>
             <td>'.$publicity.'</td>
           </tr>
       ';
    }
    $i++;
    if($i==$max_displayed) break;
   }
?>