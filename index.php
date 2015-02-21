<?php
# fileTypes contains an array of file types, simply just put a // or # infront of each file type you don't want to display in that file.
   require 'includes/config.php';
   require 'includes/fileTypes.php';
   include 'includes/head.php';
   $count = new FilesystemIterator(__DIR__.$files_location, FilesystemIterator::SKIP_DOTS);
?>
<body>
<?php include 'includes/navbar.php'; ?>
   <div class="container">
      <div class="row">
         <div class="jumbotron">
            <table class="table table-condensed">
               <thead>
                  <tr>
                     <th>File Name</th>
                     <th>File Type</th>
                     <th>Date Modified</th>
                     <th>Publicity</th>
                  </tr>
               </thead>
               <tbody>
                  <?php include 'includes/script.php'; ?>
               </tbody>
            </table>
         </div>
         <div class="footer">
            <?php if($i < $max_displayed) { $max_displayed = $i; } ?>
            <p><!-- Script made by https://twitter.com/ItsYive | Please don't remove this comment. --><?php echo '&copy; '.$owner; ?><span class="pull-right">Displaying <?php echo $max_displayed.' of '.number_format(iterator_count($count)).' files.';?></p>
         </div>
      </div>
   </div>
</body>