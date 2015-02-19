<?php
# fileTypes contains an array of file types, simply just put a // or # infront of each file type you don't want to display in that file.
   require 'includes/config.php';
   require 'includes/fileTypes.php';
?>
<body>
<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>
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
            <p><!-- Please don't remove my URL, it's the least you can do for me. -->Made By <a href="https://twitter.com/ItsYive" target="_blank">Yive</a></p>
         </div>
      </div>
   </div>
</body>