<!DOCTYPE html>
<?php

$name = $_GET['n'];

$parts = explode(" ", $name);
if(count($parts) > 1) {
    $lastname = array_pop($parts);
    $firstname = implode(" ", $parts);
}
else
{
    $firstname = $name;
    $lastname = " ";
}

//echo "Lastname: $lastname\n";
//echo "Firstname: $firstname\n";

?>
<html lang="en">
   <head>
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
      <title>Profession</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
      <!-- Google Fonts Ubuntu -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <!-- Google Fonts Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
      <!-- MDB -->
      <link rel="stylesheet" href="../css/mdb.min.css" />
   </head>
   <body>
      <!-- Start your project here-->
      <div class="d-none d-sm-block">
         <div class="row">
            <div class="col-lg-6" style="z-index: 1; min-height: 100vh;" data-mdb-toggle="animation" data-mdb-animation="fade-in-left" data-mdb-animation-start="onLoad" data-mdb-animation-duration="1000">
               <a href="../../" class="d-flex align-items-center m-1" style="height: 64px;">
                  <img src="img/wooble logo 1.svg" alt="Wooble Logo" class="src " loading="lazy" style="width: 58px;">
                  <span class="fs-1 fw-bolder" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</span>
               </a>
               <!-- input name -->         
               <div style="margin-top: 20vh; padding-left: 3vw;">
                  <div class="from-left">
                      <p class="wid" style="font-size: 2vw; font-style: italic; color: #306FB2;">Hey <?php echo $firstname ?>, You're a...</p>
                     <input id="profession" class="wid" style="font-size: 3vw;" type="text" placeholder="your profession">
                     <span></span>
                  </div>
                  <br><br>
                  <p class="widd">Be as specific as possible so we can give you the best and most personalized experience. Below some examples.</p>
                  <div class="form">
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Student"  class="btn btn-outline-dark btn-rounded">Student</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Graphic Designer" class="btn btn-outline-dark btn-rounded mt-1">Graphic Designer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Software Developer" class="btn btn-outline-dark btn-rounded mt-1">Software Developer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Video Editor" class="btn btn-outline-dark btn-rounded mt-1">Video Editor</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Researcher"  class="btn btn-outline-dark btn-rounded mt-1">Researcher</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Marketing Strategist" class="btn btn-outline-dark btn-rounded mt-1">Marketing Strategist</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Architect" class="btn btn-outline-dark btn-rounded mt-1">Architect</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Fashion Designer"  class="btn btn-outline-dark btn-rounded mt-1">Fashion Designer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Founder" class="btn btn-outline-dark btn-rounded mt-1">Founder</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="CEO"class="btn btn-outline-dark btn-rounded mt-1">CEO</button>
                  </div>
               </div>
               <div class="d-none d-sm-block">
                  <div class="position-absolute top-50 start-100 translate-middle" style="margin-left: 10px; margin-top: -220px;">
                     <img src="img/brac overlap img.svg" alt="">
                  </div>
               </div>
               <div class="position-relative" style="height: 20vh;">
                  <div class="position-absolute" style="bottom:0; right: 120px;">
                    <button onclick="update_custom_prof()" class="btn btn-primary btn-rounded border border-1 border-dark text-capitalize fw-lighter fs-3" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
                     Submit
                     </button>
                  </div>
               </div>
            </div>
            <div class="col-lg-6" data-mdb-toggle="animation" data-mdb-animation="fade-in-right"  data-mdb-animation-start="onLoad" data-mdb-animation-duration="1000"  style="min-height: 100vh; background-image: url(img/Group\ 3.svg); background-position: center center;  background-repeat: no-repeat; background-size: cover; border-top-left-radius: 40px; border-bottom-left-radius: 40px; box-shadow: 0px 0px 20px 1px black ;">
            </div>
         </div>
      </div>
      <!-- for mobile view -->
      <div class="d-block d-sm-none">
         <div  style="min-height: 100vh;">
            <div data-mdb-toggle="animation" data-mdb-animation="fade-in-right" data-mdb-animation-duration="1000"  data-mdb-animation-start="onLoad"  style="background-image: url(img/image1\ 12.04.10\ PM.svg);  background-position: center center;  background-repeat: no-repeat; background-size: cover;"></div>
            <div data-mdb-toggle="animation" data-mdb-animation="fade-in-left" data-mdb-animation-start="onLoad" data-mdb-animation-duration="1000">
               <a href="../../" class="d-flex align-items-center">
                  <img src="img/wooble logo 1.svg" alt="Wooble Logo" class="src img-fluid" loading="lazy" style="width: 48px;">
                  <span class="fs-1 fw-bolder" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</span>
               </a>
               <div data-mdb-toggle="animation" data-mdb-animation="fade-in-right" data-mdb-animation-duration="1000"  data-mdb-animation-start="onLoad"  style="background-image: url(img/Group\ 3.svg);  background-position: center center;  background-repeat: no-repeat; background-size: cover; height: 40vh;"></div>
               <!-- input name -->         
               <div style=" padding-left: 3vw;">
                  <div class="from-left">
                     <p class="wid" style="font-size: 2vw; font-style: italic; color: #306FB2;">Hey <?php echo $firstname ?>, You're a...</p>
                     <input id="profession" class="wid" style="font-size: 3vw;" type="text" placeholder="your profession">
                     <span></span>
                  </div>
                  <br>
                  <p class="widd lh-sm">Be as specific as possible so we can give you the best and most personalized experience. Below some examples.</p>
                  <div class="form">
                     <button onclick="update_prof(this)" data-mdb-ripple-color="primary" value="Student"  class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Student</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Graphic Designer" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Graphic Designer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Software Developer" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Software Developer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Video Editor" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Video Editor</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Researcher"  class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Researcher</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Marketing Strategist" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Marketing Strategist</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Architect" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Architect</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Fashion Designer"  class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Fashion Designer</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="Founder" class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">Founder</button>
                     <button onclick="update_prof(this)"  data-mdb-ripple-color="primary" value="CEO"class="btn border-1 border border-dark btn-rounded btn-sm fw-normal mt-1">CEO</button>
                  </div>
               </div>
                  <div class="me-4 mb-2 text-end">
                    <button onclick="update_custom_prof()" class="btn btn-primary btn-rounded text-capitalize btn-lg" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Submit</button>
                  </div>

            </div>
         </div>
      </div>
      
      <!-- Modal -->
      <div
              class="modal fade rounded-9"
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

      <!-- End your project here-->
      <!-- MDB -->
      <script type="text/javascript" src="../js/mdb.min.js"></script>
      <!-- Custom scripts -->
      <script type="text/javascript">
          let prof="";
          function redirect_to(){
              window.location.href = 'create/?id=<?php echo $_GET["id"] ?>&n=<?php echo $_GET["n"] ?>&prof='+prof;
          }

          function update_prof(a){
              prof = a.value;
              console.log(prof);
              document.getElementById('profession').value=prof;
              const myModal = new mdb.Modal(document.getElementById('staticBackdrop'))
              myModal.show();
              setTimeout(function() { redirect_to(); }, 2000);
          }

          function update_custom_prof(){
              prof = document.getElementById('profession').value;
              console.log(prof);
              document.getElementById('profession').value=prof;
              const myModal = new mdb.Modal(document.getElementById('staticBackdrop'))
              myModal.show();
              setTimeout(function() { redirect_to(); }, 2000);
          }
      </script>
   </body>
</html>