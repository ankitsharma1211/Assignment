
<?php
 include "insert.php";

$connect=new insert();

if (isset($_POST['submit'])){

    $newdata['rightSPH']=$_POST['rightSPH'];
    $newdata['rightCYL']=$_POST['rightCYL'];
    $newdata['rightAXI']=$_POST['rightAXI'];
    $newdata['rightAdd']=$_POST['rightAdd'];
    $newdata['leftSPH']=$_POST['leftSPH'];
    $newdata['leftCYL']=$_POST['leftCYL'];
    $newdata['leftAXI']=$_POST['leftAXI'];
    $newdata['leftAdd']=$_POST['leftAdd'];
    $newdata['PDSPH']=$_POST['PDSPH'];
    $newdata['PDCYL']=$_POST['PDCYL'];
    $newdata['nearPDSPH']=$_POST['nearPDSPH'];

     if ($connect->registration($newdata)) {
                 $success = "Registration Successfull";
           } else {
          $error = "failed please try again!";
          }
}

 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <form name="submitdata"action="" method="POST" id="myform">
        <?php
         if (!empty($error)) {
            echo "<div class='alert alert-danger alert-dismissible'>
                     <button type='button' class='close' data-dismiss='alert'>&times;</button>$error
                  </div>";
         } elseif (!empty($success)) {
            echo "<div class='alert alert-success alert-dismissible'>
                     <button type='button' class='close' data-dismiss='alert'>&times;</button>$success
                  </div>";
         }
      ?>
   <div class="container-fluid">
        <div class="col-sm-2"> 
              <ul class="list-group">
            <br>
              <li class="list-group-item liheading extra" style="visibility: hidden;">Test</li>
              <li class="list-group-item">Right(OS)</li>
              <br><br>
               <li class="list-group-item">Left(OS)</li>
               <br><br>
                <li class="list-group-item">PD</li>
                <br><br>
                 <li class="list-group-item">Near PD</li>
                 <br><br>
                 <li class="list-group-item">Add Prism</li>
           </ul>
       
    </div>

       <div class="col-sm-2"><br>
           <label>Sphere(SPH)</label>
           <ul class="list-group">
            <br>
               <li class="list-group-item">
                 
                        <select id="rightsphere" name="rightSPH" required>
                                                            <option value="">None</option>
                                                            <option value="36228">-14.00</option>
                                                            <option value="36229">-13.75</option>
                                                            <option value="36230">-13.50</option>
                                                            <option value="36231">-13.25</option>
                                                            <option value="36232">-13.00</option>
                                                            <option value="36233">-12.75</option>
                                                            <option value="36234">-12.50</option>
                                                            <option value="36235">-12.25</option>
                                                            <option value="36236">-12.25</option>
                                                            <option value="36237">-12.00</option>
                                                            <option value="36238">-11.75</option>
                                                            <option value="36239">-11.50</option>
                                                            <option value="36240">-11.25</option>
                                                            <option value="36241">-11.00</option>
                                                            <option value="36242">-10.75</option>
                                                            <option value="36243">-10.50</option>
                                                            <option value="36244">-10.25</option>
                                                            <option value="36245">-10.00</option>
                                                            <option value="36246">-9.75</option>
                                                            <option value="36247">-9.50</option>
                                                            <option value="36248">-9.25</option>
                                                            <option value="36249">-9.25</option>
                                                            <option value="36250">-9.00</option>
                                                            <option value="36251">-8.75</option>
                                                            <option value="36252">-8.50</option>
                                                            <option value="36253">-8.25</option>
                                                            <option value="36254">-8.00</option>
                                                            <option value="36255">-7.75</option>
                                                            <option value="36256">-7.50</option>
                                                            <option value="36257">-7.25</option>
                                                            <option value="36258">-7.00</option>
                                                            <option value="36259">-6.75</option>
                                                            <option value="36260">-6.50</option>
                                                            <option value="36261">-6.25</option>
                                                            <option value="36262">-6.00</option>
                                                            <option value="36263">-5.75</option>
                                                            <option value="36264">-5.50</option>
                                                            <option value="36265">-5.25</option>
                                                            <option value="36266">-5.00</option>
                                                            <option value="36267">-4.75</option>
                                                            <option value="36268">-4.50</option>
                                                            <option value="36269">-4.75</option>
                                                            <option value="36270">-4.50</option>
                                                            <option value="36271">-4.25</option>
                                                            <option value="36272">-4.00</option>
                                                            <option value="36273">-3.75</option>
                                                            <option value="36274">-3.50</option>
                                                            <option value="36275">-3.25</option>
                                                            <option value="36276">-3.00</option>
                                                            <option value="36277">-2.75</option>
                                                            <option value="36278">-2.50</option>
                                                            <option value="36279">-2.25</option>
                                                            <option value="36280">-2.00</option>
                                                            <option value="36281">-1.75</option>
                                                            <option value="36282">-1.50</option>
                                                            <option value="36283">-1.25</option>
                                                            <option value="36284">-1.00</option>
                                                            <option value="36285">-0.75</option>
                                                            <option value="36286">-0.50</option>
                                                            <option value="36287">-0.25</option>
                                                            <option value="36288">+0.25</option>
                                                            <option value="36289">+0.50</option>
                                                            <option value="36290">+0.75</option>
                                                            <option value="36291">+1.00</option>
                                                            <option value="36292">+1.25</option>
                                                            <option value="36293">+1.50</option>
                                                            <option value="36294">+1.75</option>
                                                            <option value="36295">+2.00</option>
                                                            <option value="36296">+2.25</option>
                                                            <option value="36297">+2.50</option>
                                                            <option value="36298">+2.75</option>
                                                            <option value="36299">+3.00</option>
                                                            <option value="36300">+3.25</option>
                                                            <option value="36301">+3.50</option>
                                                            <option value="36302">+3.75</option>
                                                            <option value="36303">+4.00</option>
                                                            <option value="36304">+4.25</option>
                                                            <option value="36305">+4.50</option>
                                                            <option value="36306">+4.25</option>
                                                            <option value="36307">+5.00</option>
                                                            <option value="36308">+5.25</option>
                                                            <option value="36309">+5.50</option>
                                                            <option value="36310">+5.25</option>
                                                            <option value="36311">+6.00</option>
                                                            <option value="36312">+6.25</option>
                                                            <option value="36313">+6.50</option>
                                                            <option value="36314">+6.75</option>
                                                            <option value="36315">+7.00</option>
                                                            <option value="36316">+7.25</option>
                                                            <option value="36317">+7.50</option>
                                                            <option value="36318">+7.25</option>
                                                            <option value="36319">+7.25</option>
                                                            <option value="36320">+8.00</option>
                                                            <option value="36321">+8.25</option>
                                                            <option value="36322">+8.50</option>
                                                            <option value="36323">+8.75</option>
                                                            <option value="36324">+9.00</option>
    
                                                        </select>
                    
                </li><br><br>
                 <li class="list-group-item">
                 
                        <select id="rightsphere" name="leftSPH" required>
                                                            <option value="">None</option>
                                                            <option value="36228">-14.00</option>
                                                            <option value="36229">-13.75</option>
                                                            <option value="36230">-13.50</option>
                                                            <option value="36231">-13.25</option>
                                                            <option value="36232">-13.00</option>
                                                            <option value="36233">-12.75</option>
                                                            <option value="36234">-12.50</option>
                                                            <option value="36235">-12.25</option>
                                                            <option value="36236">-12.25</option>
                                                            <option value="36237">-12.00</option>
                                                            <option value="36238">-11.75</option>
                                                            <option value="36239">-11.50</option>
                                                            <option value="36240">-11.25</option>
                                                            <option value="36241">-11.00</option>
                                                            <option value="36242">-10.75</option>
                                                            <option value="36243">-10.50</option>
                                                            <option value="36244">-10.25</option>
                                                            <option value="36245">-10.00</option>
                                                            <option value="36246">-9.75</option>
                                                            <option value="36247">-9.50</option>
                                                            <option value="36248">-9.25</option>
                                                            <option value="36249">-9.25</option>
                                                            <option value="36250">-9.00</option>
                                                            <option value="36251">-8.75</option>
                                                            <option value="36252">-8.50</option>
                                                            <option value="36253">-8.25</option>
                                                            <option value="36254">-8.00</option>
                                                            <option value="36255">-7.75</option>
                                                            <option value="36256">-7.50</option>
                                                            <option value="36257">-7.25</option>
                                                            <option value="36258">-7.00</option>
                                                            <option value="36259">-6.75</option>
                                                            <option value="36260">-6.50</option>
                                                            <option value="36261">-6.25</option>
                                                            <option value="36262">-6.00</option>
                                                            <option value="36263">-5.75</option>
                                                            <option value="36264">-5.50</option>
                                                            <option value="36265">-5.25</option>
                                                            <option value="36266">-5.00</option>
                                                            <option value="36267">-4.75</option>
                                                            <option value="36268">-4.50</option>
                                                            <option value="36269">-4.75</option>
                                                            <option value="36270">-4.50</option>
                                                            <option value="36271">-4.25</option>
                                                            <option value="36272">-4.00</option>
                                                            <option value="36273">-3.75</option>
                                                            <option value="36274">-3.50</option>
                                                            <option value="36275">-3.25</option>
                                                            <option value="36276">-3.00</option>
                                                            <option value="36277">-2.75</option>
                                                            <option value="36278">-2.50</option>
                                                            <option value="36279">-2.25</option>
                                                            <option value="36280">-2.00</option>
                                                            <option value="36281">-1.75</option>
                                                            <option value="36282">-1.50</option>
                                                            <option value="36283">-1.25</option>
                                                            <option value="36284">-1.00</option>
                                                            <option value="36285">-0.75</option>
                                                            <option value="36286">-0.50</option>
                                                            <option value="36287">-0.25</option>
                                                            <option value="36288">+0.25</option>
                                                            <option value="36289">+0.50</option>
                                                            <option value="36290">+0.75</option>
                                                            <option value="36291">+1.00</option>
                                                            <option value="36292">+1.25</option>
                                                            <option value="36293">+1.50</option>
                                                            <option value="36294">+1.75</option>
                                                            <option value="36295">+2.00</option>
                                                            <option value="36296">+2.25</option>
                                                            <option value="36297">+2.50</option>
                                                            <option value="36298">+2.75</option>
                                                            <option value="36299">+3.00</option>
                                                            <option value="36300">+3.25</option>
                                                            <option value="36301">+3.50</option>
                                                            <option value="36302">+3.75</option>
                                                            <option value="36303">+4.00</option>
                                                            <option value="36304">+4.25</option>
                                                            <option value="36305">+4.50</option>
                                                            <option value="36306">+4.25</option>
                                                            <option value="36307">+5.00</option>
                                                            <option value="36308">+5.25</option>
                                                            <option value="36309">+5.50</option>
                                                            <option value="36310">+5.25</option>
                                                            <option value="36311">+6.00</option>
                                                            <option value="36312">+6.25</option>
                                                            <option value="36313">+6.50</option>
                                                            <option value="36314">+6.75</option>
                                                            <option value="36315">+7.00</option>
                                                            <option value="36316">+7.25</option>
                                                            <option value="36317">+7.50</option>
                                                            <option value="36318">+7.25</option>
                                                            <option value="36319">+7.25</option>
                                                            <option value="36320">+8.00</option>
                                                            <option value="36321">+8.25</option>
                                                            <option value="36322">+8.50</option>
                                                            <option value="36323">+8.75</option>
                                                            <option value="36324">+9.00</option>
                                                        </select>
                </li>
                <br><br>
                 <li class="list-group-item">
                  
                        <select id="rightsphere" name="PDSPH" required>
                                                            <option value="">None</option>
                                                            <option value="36228">-14.00</option>
                                                            <option value="36229">-13.75</option>
                                                            <option value="36230">-13.50</option>
                                                            <option value="36231">-13.25</option>
                                                            <option value="36232">-13.00</option>
                                                            <option value="36233">-12.75</option>
                                                            <option value="36234">-12.50</option>
                                                            <option value="36235">-12.25</option>
                                                            <option value="36236">-12.25</option>
                                                            <option value="36237">-12.00</option>
                                                            <option value="36238">-11.75</option>
                                                            <option value="36239">-11.50</option>
                                                            <option value="36240">-11.25</option>
                                                            <option value="36241">-11.00</option>
                                                            <option value="36242">-10.75</option>
                                                            <option value="36243">-10.50</option>
                                                            <option value="36244">-10.25</option>
                                                            <option value="36245">-10.00</option>
                                                            <option value="36246">-9.75</option>
                                                            <option value="36247">-9.50</option>
                                                            <option value="36248">-9.25</option>
                                                            <option value="36249">-9.25</option>
                                                            <option value="36250">-9.00</option>
                                                            <option value="36251">-8.75</option>
                                                            <option value="36252">-8.50</option>
                                                            <option value="36253">-8.25</option>
                                                            <option value="36254">-8.00</option>
                                                            <option value="36255">-7.75</option>
                                                            <option value="36256">-7.50</option>
                                                            <option value="36257">-7.25</option>
                                                            <option value="36258">-7.00</option>
                                                            <option value="36259">-6.75</option>
                                                            <option value="36260">-6.50</option>
                                                            <option value="36261">-6.25</option>
                                                            <option value="36262">-6.00</option>
                                                            <option value="36263">-5.75</option>
                                                            <option value="36264">-5.50</option>
                                                            <option value="36265">-5.25</option>
                                                            <option value="36266">-5.00</option>
                                                            <option value="36267">-4.75</option>
                                                            <option value="36268">-4.50</option>
                                                            <option value="36269">-4.75</option>
                                                            <option value="36270">-4.50</option>
                                                            <option value="36271">-4.25</option>
                                                            <option value="36272">-4.00</option>
                                                            <option value="36273">-3.75</option>
                                                            <option value="36274">-3.50</option>
                                                            <option value="36275">-3.25</option>
                                                            <option value="36276">-3.00</option>
                                                            <option value="36277">-2.75</option>
                                                            <option value="36278">-2.50</option>
                                                            <option value="36279">-2.25</option>
                                                            <option value="36280">-2.00</option>
                                                            <option value="36281">-1.75</option>
                                                            <option value="36282">-1.50</option>
                                                            <option value="36283">-1.25</option>
                                                            <option value="36284">-1.00</option>
                                                            <option value="36285">-0.75</option>
                                                            <option value="36286">-0.50</option>
                                                            <option value="36287">-0.25</option>
                                                            <option value="36288">+0.25</option>
                                                            <option value="36289">+0.50</option>
                                                            <option value="36290">+0.75</option>
                                                            <option value="36291">+1.00</option>
                                                            <option value="36292">+1.25</option>
                                                            <option value="36293">+1.50</option>
                                                            <option value="36294">+1.75</option>
                                                            <option value="36295">+2.00</option>
                                                            <option value="36296">+2.25</option>
                                                            <option value="36297">+2.50</option>
                                                            <option value="36298">+2.75</option>
                                                            <option value="36299">+3.00</option>
                                                            <option value="36300">+3.25</option>
                                                            <option value="36301">+3.50</option>
                                                            <option value="36302">+3.75</option>
                                                            <option value="36303">+4.00</option>
                                                            <option value="36304">+4.25</option>
                                                            <option value="36305">+4.50</option>
                                                            <option value="36306">+4.25</option>
                                                            <option value="36307">+5.00</option>
                                                            <option value="36308">+5.25</option>
                                                            <option value="36309">+5.50</option>
                                                            <option value="36310">+5.25</option>
                                                            <option value="36311">+6.00</option>
                                                            <option value="36312">+6.25</option>
                                                            <option value="36313">+6.50</option>
                                                            <option value="36314">+6.75</option>
                                                            <option value="36315">+7.00</option>
                                                            <option value="36316">+7.25</option>
                                                            <option value="36317">+7.50</option>
                                                            <option value="36318">+7.25</option>
                                                            <option value="36319">+7.25</option>
                                                            <option value="36320">+8.00</option>
                                                            <option value="36321">+8.25</option>
                                                            <option value="36322">+8.50</option>
                                                            <option value="36323">+8.75</option>
                                                            <option value="36324">+9.00</option>
                                                        
                    
                                                        </select>
                    
                </li>
                <br><br>
                 <li class="list-group-item">
              
                        <select id="rightsphere" name="nearPDSPH" required>
                                                            <option value="">None</option >
                                                            <option value="36228">-14.00</option>
                                                            <option value="36229">-13.75</option>
                                                            <option value="36230">-13.50</option>
                                                            <option value="36231">-13.25</option>
                                                            <option value="36232">-13.00</option>
                                                            <option value="36233">-12.75</option>
                                                            <option value="36234">-12.50</option>
                                                            <option value="36235">-12.25</option>
                                                            <option value="36236">-12.25</option>
                                                            <option value="36237">-12.00</option>
                                                            <option value="36238">-11.75</option>
                                                            <option value="36239">-11.50</option>
                                                            <option value="36240">-11.25</option>
                                                            <option value="36241">-11.00</option>
                                                            <option value="36242">-10.75</option>
                                                            <option value="36243">-10.50</option>
                                                            <option value="36244">-10.25</option>
                                                            <option value="36245">-10.00</option>
                                                            <option value="36246">-9.75</option>
                                                            <option value="36247">-9.50</option>
                                                            <option value="36248">-9.25</option>
                                                            <option value="36249">-9.25</option>
                                                            <option value="36250">-9.00</option>
                                                            <option value="36251">-8.75</option>
                                                            <option value="36252">-8.50</option>
                                                            <option value="36253">-8.25</option>
                                                            <option value="36254">-8.00</option>
                                                            <option value="36255">-7.75</option>
                                                            <option value="36256">-7.50</option>
                                                            <option value="36257">-7.25</option>
                                                            <option value="36258">-7.00</option>
                                                            <option value="36259">-6.75</option>
                                                            <option value="36260">-6.50</option>
                                                            <option value="36261">-6.25</option>
                                                            <option value="36262">-6.00</option>
                                                            <option value="36263">-5.75</option>
                                                            <option value="36264">-5.50</option>
                                                            <option value="36265">-5.25</option>
                                                            <option value="36266">-5.00</option>
                                                            <option value="36267">-4.75</option>
                                                            <option value="36268">-4.50</option>
                                                            <option value="36269">-4.75</option>
                                                            <option value="36270">-4.50</option>
                                                            <option value="36271">-4.25</option>
                                                            <option value="36272">-4.00</option>
                                                            <option value="36273">-3.75</option>
                                                            <option value="36274">-3.50</option>
                                                            <option value="36275">-3.25</option>
                                                            <option value="36276">-3.00</option>
                                                            <option value="36277">-2.75</option>
                                                            <option value="36278">-2.50</option>
                                                            <option value="36279">-2.25</option>
                                                            <option value="36280">-2.00</option>
                                                            <option value="36281">-1.75</option>
                                                            <option value="36282">-1.50</option>
                                                            <option value="36283">-1.25</option>
                                                            <option value="36284">-1.00</option>
                                                            <option value="36285">-0.75</option>
                                                            <option value="36286">-0.50</option>
                                                            <option value="36287">-0.25</option>
                                                            <option value="36288">+0.25</option>
                                                            <option value="36289">+0.50</option>
                                                            <option value="36290">+0.75</option>
                                                            <option value="36291">+1.00</option>
                                                            <option value="36292">+1.25</option>
                                                            <option value="36293">+1.50</option>
                                                            <option value="36294">+1.75</option>
                                                            <option value="36295">+2.00</option>
                                                            <option value="36296">+2.25</option>
                                                            <option value="36297">+2.50</option>
                                                            <option value="36298">+2.75</option>
                                                            <option value="36299">+3.00</option>
                                                            <option value="36300">+3.25</option>
                                                            <option value="36301">+3.50</option>
                                                            <option value="36302">+3.75</option>
                                                            <option value="36303">+4.00</option>
                                                            <option value="36304">+4.25</option>
                                                            <option value="36305">+4.50</option>
                                                            <option value="36306">+4.25</option>
                                                            <option value="36307">+5.00</option>
                                                            <option value="36308">+5.25</option>
                                                            <option value="36309">+5.50</option>
                                                            <option value="36310">+5.25</option>
                                                            <option value="36311">+6.00</option>
                                                            <option value="36312">+6.25</option>
                                                            <option value="36313">+6.50</option>
                                                            <option value="36314">+6.75</option>
                                                            <option value="36315">+7.00</option>
                                                            <option value="36316">+7.25</option>
                                                            <option value="36317">+7.50</option>
                                                            <option value="36318">+7.25</option>
                                                            <option value="36319">+7.25</option>
                                                            <option value="36320">+8.00</option>
                                                            <option value="36321">+8.25</option>
                                                            <option value="36322">+8.50</option>
                                                            <option value="36323">+8.75</option>
                                                            <option value="36324">+9.00</option>
                                                        
                    
                                                        </select>
                    
                </li>
            </ul>
                <br>
                 
                    <input type="checkbox" name="left-right" id="rightleft">(+31) Add prism  
                

       </div>
        <div class="col-sm-2"><br>
           <label>Cylinder (CYL)</label>
           <ul class="list-group">
            <br>
               <li class="list-group-item">
                   <select  name="rightCYL" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                         
                                                        </select>
               </li>
               <br><br>
                 <li class="list-group-item">
                   <select onchange="Cylinder(this.id);" id="rightcylinder" name="leftCYL" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        
                                                        </select>
                                                        
               </li>
               <br>
               <br>
               <li class="list-group-item" id="rightcylinderid">
                   <select onchange="Cylinder(this.id);" id="rightcylinder" name="PDCYL" >
                                                            <option value="36443">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        
                                                        </select>
                                                        
               </li>
               
              <input type="checkbox" name="left-right" id="rightleftid">     I have 2 numbers for my PD</label>
           </ul>
       </div>
        <div class="col-sm-2"><br>
           <label>Axis (AXI)</label>
           <ul class="list-group">
            <br>
               <li class="list-group-item">
                   <select onchange="Cylinder(this.id);" id="rightcylinder" name="rightAXI" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        
                      
                                                        </select>
               </li>
                <br><br>
                 <li class="list-group-item">
                   <select onchange="Cylinder(this.id);" id="rightcylinder" name="leftAXI" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        
                                                        </select>
                                                        
               </li>
               <br><br>
                
           </ul>
       </div>
        <div class="col-sm-2"><br>
           <label>Add (Near addition)</label>
           <ul class="list-group">
            <br>
               <li class="list-group-item">
                   <select id="rightcylinder" name="rightAdd" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        
                                                        </select>

               </li>
               <br><br>
                 <li class="list-group-item">
                   <select id="rightcylinder" name="leftAdd" required>
                                                            <option value="">None</option>
                                                            <option value="36444">-5.00</option>
                                                            <option value="36445">-4.75</option>
                                                            <option value="36446">-4.50</option>
                                                            <option value="36447">-4.75</option>
                                                            <option value="36448">-4.50</option>
                                                            <option value="36449">-4.25</option>
                                                            <option value="36450">-4.00</option>
                                                            <option value="36451">-3.75</option>
                                                            <option value="36452">-3.50</option>
                                                            <option value="36453">-3.25</option>
                                                            <option value="36454">-3.00</option>
                                                            <option value="36455">-2.75</option>
                                                            <option value="36456">-2.50</option>
                                                            <option value="36457">-2.25</option>
                                                            <option value="36458">-2.00</option>
                                                            <option value="36459">-1.75</option>
                                                            <option value="36460">-1.50</option>
                                                            <option value="36461">-1.25</option>
                                                            <option value="36462">-1.00</option>
                                                            <option value="36463">-0.75</option>
                                                            <option value="36464">-0.50</option>
                                                            <option value="36465">-0.25</option>
                                                            <option value="36466">+0.25</option>
                                                            <option value="36467">+0.50</option>
                                                            <option value="36468">+0.75</option>
                                                            <option value="36469">+1.00</option>
                                                            <option value="36470">+1.25</option>
                                                            <option value="36471">+1.50</option>
                                                            <option value="36472">+1.75</option>
                                                            <option value="36473">+2.00</option>
                                                            <option value="36474">+2.25</option>
                                                            <option value="36475">+2.50</option>
                                                            <option value="36476">+2.75</option>
                                                            <option value="36477">+3.00</option>
                                                            <option value="36478">+3.25</option>
                                                            <option value="36479">+3.50</option>
                                                            <option value="36480">+3.75</option>
                                                            <option value="36481">+4.00</option>
                                                            <option value="36482">+4.25</option>
                                                            <option value="36483">+4.50</option>
                                                            <option value="36484">+4.25</option>
                                                            <option value="36485">+5.00</option>
                                                        </select>
                                                        
               </li>
           </ul>
       </div>
   </div>

 <input type="submit" name="submit" id="submitdata" style="margin-left: 500px;height: 50px;width: 100px;cursor: pointer;">
 </form>
<script type="text/javascript">
    $(document).ready(function() {
        $('#rightcylinderid').hide();
        $('#rightleftid').click(function(){
            $('#rightcylinderid').toggle();

        });
    });


</script>

</body>

</html>