<?php
//     ___           __ _      
//    / __|___ _ _  / _(_)__ _ 
//   | (__/ _ \ ' \|  _| / _` |
//    \___\___/_||_|_| |_\__, |
//                       |___/ 
	$owner = 'Yive';
// config end (no clue why I added this xD) //

   $png = new GlobIterator('*.png');
   $txt = new GlobIterator('*.txt');
?>
<head>
   <title><?php echo $owner;?>'s File Dump</title>
   <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/darkly/bootstrap.min.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">a {color: #FF8800;}a:hover, a:focus {color: #FFBF00;}</style>
<body>
   <div class="container">
      <div class="row">
         <div class="jumbotron" style="margin-top:-35px;">
            <h1>
               <center><?php echo $owner;?>'s File Dump</center>
            </h1>
            <h4>
               <center><?php echo $png->count();?> Images &amp; <?php echo $txt->count();?> Documents</center>
            </h4>
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>&nbsp;</th>
                     <th>File Name</th>
                     <th>File Type</th>
                     <th>Date Modified</th>
                     <th>Publicity</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $files = glob('*');
                     
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
                     foreach ($files as $key => $file) {
                         if(in_array($file, $filenames)){
                     
                         } else {
                     if(strrpos($file, '.txt')) {
                         echo
                         '
                             <tr>
                               <th><i class="fa fa-file fa-7"></i></th>
                               <td>********************************</td>
                               <td>Text Document</td>
                               <td>'.date ("F j, Y, g:i a", filemtime($file))." ".date('T').'</td>
                               <td>Private</td>
                             </tr>
                         ';
                     } elseif(strrpos($file, '.png')) {
                         echo
                         '
                             <tr>
                               <th><i class="fa fa-file fa-7"></i></th>
                               <td>********************************</td>
                               <td>Image</td>
                               <td>'.date ("F j, Y, g:i a", filemtime($file))." ".date('T').'</td>
                               <td>Private</td>
                             </tr>
                         ';
                       }
                         }
                     }
                     ?>
               </tbody>
            </table>
         </div>
         <div class="footer">
            <p>&copy; <?php echo $owner;?> 2014</p>
         </div>
      </div>
   </div>
</body>