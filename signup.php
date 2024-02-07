<html>
  <head>
    <title>Sign Up</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="formstyle.css" />
    <style>
      
      body {
        height: 100%;
      }

      .form-signup {
        max-width: 500px;
        padding: 15px;
      }

      
      span{
        bottom: 12px;
        right: 17px;
        font-size: 14px;
        color: red;
      }
      
    </style>
    
  </head>
  <body class="container">
    <form class="form-signup w-100  m-auto" method="post" action="insertaccount.php" onSubmit="return validateinput();">
      <div class="p-4 border rounded-3" style="background-color: #edf2fb">
        <h1
          class="h3 mb-3 fw-normal text-center"
          style="
            color: #013a63;
            font-family: 'Great Vibes', cursive;
            font-size: 60;
          "
        >
          WormsClub
        </h1>

        <div class="row g-3 r">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input
              type="text"
              class="form-control"
              id="firstname"
              name="fname"/>            
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastname"/>    
          </div>

          <div class="col-12">
            <label for="phonenumber" class="form-label">phone number</label>
            <input
              type="text"
              class="form-control"
              id="phonenumber"
              name="phonenumber" />
              
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email </label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="you@example.com"
              name="email"/>
          </div>

          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="Password"
              placeholder="Password"
              name="password"/>
          </div>

          <div class="col-12">
            <label  class="form-label">What was your favorite school teacher's name?</label>
            <input
              type="Security question"
              class="form-control"
              id="Security question"
              placeholder="Security question"
              name="Securityquestion"/>
          </div>
          
        </div>
        <hr class="my-4" />      
        <input class="w-100 btn btn-lg btn-primary" type="submit" id="submit" name="submit"/>
        <p class="mt-3 mb-3 text-muted text-center">
          you have an account?
          <a type="button" href="signin.php"> Sign In </a>
        </p>
      </div>
    </form>
    
    <script>        

      //let btn1=document.getElementById("submit");
      let fname=document.getElementById("firstname");
      let lname=document.getElementById("lastName");
      let phone=document.getElementById("phonenumber");
      let email=document.getElementById("email");
      let pass=document.getElementById("Password");
      let Securityq=document.getElementById("Security question");

      function validateinput(){

          if (fname.value.length==0){
            alert("first name is required");
            return false;
          } if (lname.value.length==0){
            alert("last name is required");
            return false;
          } if (phone.value.length==0){
            alert("phone number is required");
            return false;
          } else{
            if(isNaN(phone.value)){
              alert("phone number not valid");
              return false;
            } 
          }         
          if (email.value.length==0){
            alert("Email is required");
            return false;
          } 
          if (pass.value.length==0){
            alert("password is required");
            return false;
          } else if(pass.value.length<8){
            alert("password should be 8 or more characters");
            return false;
          }          
          if (Securityq.value.length==0){
            alert("Security question answer is required");
            return false;
          }  
      }        
    </script>
  </body>
</html>
