<!DOCTYPE html>
<html lang="en">
<?php
include '../../inc/dbconnection.php';
function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
    $error="";

if(isset($_GET['id'])){
    $id=$_GET['id']/1111;
    $name = $_GET['n'];
    $profession = $_GET['prof'];
    $temp_email = $id.'@wooble.org';

    $query_prof = "UPDATE `user_details` SET `field_2`='$profession', `email`='$temp_email', `username`='$id', `password`='78256khsvksd76' WHERE `entry_id`='$id'";
    //echo $query_prof;
    $res_prof = mysqli_query($link, $query_prof);
}

?>
   <head>

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PZBV6NB');</script>
      <!-- End Google Tag Manager -->


      <style>
         .br{
         border:1px solid rgb(252, 10, 10);
         /* border-radius: 30px; */
         }
      </style>
      <style>
         div {
         position: relative;
         }
         div input {
         border: none;
         border-bottom: 1px solid #ccc;
         padding: 5px 0;
         width: 80%;
         }
         input:focus {
         outline: none;
         }
         .from-left span
         {
         position: absolute;
         bottom: 0;
         width: 0;
         height: 2px;
         background-color: #002366;
         transition: all 0.6s;
         }
         .from-left span {
         left: 0;
         }
         input:focus + span {
         width: 80%;
         }
         ::placeholder{
         color: rgba(48, 111, 178, 0.4);
         }
         @media(max-width:420px){
         .wid{
         font-size: 30px !important;
         }
         }
         @media(max-width:420px){
         .widd{
         font-size: 15px !important;
         }
         }
      </style>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Onbording</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
      <!-- Google Fonts Ubuntu -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
      <!-- Google Fonts Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
      <!-- MDB -->
      <link rel="stylesheet" href="../../css/mdb.min.css" />
   </head>
   <body onload="show_loading()">

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBV6NB"
                     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->



   <!-- Modal -->
   <div
           class="modal rounded-9"
           id="staticBackdrop"
           data-mdb-backdrop="static"
           data-mdb-keyboard="false"
           tabindex="-1"
           aria-labelledby="staticBackdropLabel"
           aria-hidden="true"
   >
       <div class="modal-dialog  rounded-9">
           <div class="modal-content  rounded-9">
               <div class="modal-body">
                   <center><img src="../../wooble-img/l_protfolio.gif" width="300px"></center>
               </div>
               <div id="pf_loading_msg" class="">
                   <center><p>Finding the best portfolio designs for you...</p></center>
               </div>
           </div>
       </div>
   </div>



      <script type="text/javascript" src="../../js/mdb.min.js"></script>
      <!-- Custom scripts -->
      <script type="text/javascript">


          function redirect_to(){
              console.log("Redirect to app");
              window.location.href = 'https://app.wooble.org/create/?id=<?php echo $_GET["id"] ?>&n=<?php echo $_GET["n"] ?>&prof=<?php echo $_GET["prof"] ?>';
          }



          function show_loading(){
              const myModal = new mdb.Modal(document.getElementById('staticBackdrop'))
              myModal.show();
              setTimeout(function() { redirect_to(); }, 5000);
          }
      </script>
   </body>
</html>