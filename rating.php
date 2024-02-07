<?php
  session_start();
  ini_set('display_errors', 1); 
  //include('insertrating.php'); 
  if(isset($_GET["bname"])){
    $_SESSION["bname"]=$_GET["bname"] ;
  } 
?>
<html>
  <head>
    <title>Rate the book</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <style>
      .modal-sheet .modal-dialog {
        width: 380px;
        transition: bottom 0.75s ease-in-out;
      }
      .modal-sheet .modal-footer {
        padding-bottom: 2rem;
      }
      body{
        background-image: url('photos/pic14.jpg');
        background-size:cover; 
        background-repeat: no-repeat;
      }

      .modal-alert .modal-dialog {
        width: 380px;
      }

      .modal-tour .modal-dialog {
        width: 380px;
      }

      .star {
        font-size: 2rem;
        color: #014f86;
        background-color: unset;
        border: none;
      }
      .star:hover {
        cursor: pointer;
      }
      .star_rating {
        user-select: none;
      }
    </style>
  </head>

  <body>
    <div
      class="modal modal-sheet position-static d-block py-5"
      tabindex="-1"
      role="dialog"
      id="modalSheet"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5" style="color: #014F86;">Add Rating</h1>
            
          </div>
          <div class="modal-body py-0">
            <div class="star_rating text-center">
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <button class="star">&#9734;</button>
              <p class="current_rating">0 of 5</p>
            </div>
          </div>
          <div class="modal-footer flex-column border-top-0">
            <form  method="post" >
              <input type="submit" name="submit" class="btn btn-lg btn-primary w-100 mx-0 mb-2" id="submit"/>
              <input type="button" name="close" class="btn btn-lg btn-light w-100 mx-0" value="Close" id="close"/>
            </form>
            
          </div>
        </div>
      </div>
    </div>
 
    <script type="text/javascript">
      const Allstarts = document.querySelectorAll(".star");
      let current_rating = document.querySelector(".current_rating");
      let btn2=document.getElementById("close");
      btn2.addEventListener('click',
        (e)=>{
         e.preventDefault();
         window.location='library.php'; 

        })
      Allstarts.forEach((star, i) => {
        star.onclick = function () {
          let current_star = i + 1;
          current_rating.innerText = `${current_star} of 5`; 

          let btn1=document.getElementById("submit");
          //console.log(btn1);
          btn1.addEventListener('click',
          (e)=>{
            e.preventDefault();
            window.location=`insertrating.php?rate=${current_star}`; 
          })
          //console.log(current_star);
          //console.log(i);
          Allstarts.forEach((star, j) => {
            //console.log(j+1);
            if (current_star >= j + 1) {
              star.innerHTML = "&#9733";
            } else {
              star.innerHTML = "&#9734";
            }
          }); 
        };    
      }); 
    </script>
  </body>
</html>
