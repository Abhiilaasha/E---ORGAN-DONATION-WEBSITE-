
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organ Donation Sytem</title>
  <!-- Icon needed -->
  <link rel="stylesheet" href="css/style.css">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="shortcut icon" href="./images/hands.png" type="image/x-icon">

  <!-- CHATBOT -->
  <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/c3b613a2-5d97-4770-a820-ebdfec761d21/webchat/config.js" defer></script>

</head>
          
<body>

  <header class="sticky-top">
   <a href="#" class="brand">Organ Donation</a> 
                                          
    <div class="navigation">              
      <div class="navigation-items">
        <a href="#">Home</a>
        <a href="#">Our Vision</a>
        <a href="login.php">Donate Organ</a>
        <a href="FAQ.php">FAQ's</a>
        <a href="#">Contact</a>
      </div>
    </div>
  </header>

  <section class="home">
  
    <video class="video-slide active" src="Organ Main.mp4" autoplay muted loop></video>

    <div class="content active">
      <h1 style="color: lightgreen">Donate Organ <br>Save a life</h1>
     
      <div class="center">
          <div class="btn-1">
            <a href="login.php"><span>Login</span></a>
          </div>
          <div class="btn-2">
            <a href="registration.php"><span>Sign Up</span></a>
          </div>
      </div>

    </div>
   
    

  <style>
  /*Login And Sign Up Button Style Start*/
 
    body {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/newbg.png');
  background-size: cover;
  background-blend-mode: overlay;

  }

    .center {
      display: flex;
      align-items: center;
      min-height: 50vh;
      font-size: 1rem;
    }

    header {
      background-color: white;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 15px;
    }

    .navigation-items a {
      color: black;
      text-decoration: none;
      margin-left: 20px;
      transition: color 0.3s ease;
    }

    .navigation-items a:hover {
      color: green ; 
    }
    .btn-1,
    .btn-2 {
      width: 132px;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

   
   
    .btn-1 a,
    .btn-2 a {
      text-decoration: none;
      border: 2px solid #010100;
      padding: 15px;
      color: #000;
      text-transform: uppercase;
      letter-spacing: 2px;
      position: relative;
      display: inline-block;
    }

    span {
      position: relative;
      /* z-index coz when we put bg to before and after this span text will not be visible */
      z-index: 3;
    }

    /* Button 1 styles */
    .btn-1 a::before {
      content: "";
      position: absolute;
      top: 5px;
      left: -2px;
      width: calc(100% + 6px);
      height: calc(100% - 10px);
      background-color: #ffffff;
      transition: all 0.5s ease-in-out;
      transform: scaleY(1);
    }

    .btn-1 a:hover::before,
    .btn-2 a:hover::before {
      transform: scaleY(0);
    }

    .btn-1 a::after {
      content: "";
      position: absolute;
      left: 5px;
      top: -5px;
      width: calc(100% - 10px);
      height: calc(100% + 10px);
      background-color: #ffffff;
      transition: all 0.5s ease-in-out;
      transform: scaleX(1);
    }

    .btn-1 a:hover::after,
    .btn-2 a:hover::after {
      transform: scaleX(0);
    }

    /* Button 2 styles */
    .btn-2 a::before {
      content: "";
      position: absolute;
      top: 5px;
      left: -2px;
      width: calc(100% + 6px);
      /*100% plus double the times left values*/
      height: calc(100% - 10px);
      background-color: #ffffff;
      transition: all 0.5s ease-in-out;
      transform: scaleY(1);
    }

    .btn-2 a::after {
      content: "";
      position: absolute;
      left: 5px;
      top: -5px;
      width: calc(100% - 10px);
      /*100% plus double the times left values*/
      height: calc(100% + 10px);
      background-color: #ffffff;
      transition: all 0.5s ease-in-out;
      transform: scaleX(1);
    }
    /*Login And Sign Up Button Style End*/

    </style>
    </section>


<section>

    <section class="container">
      <div class="card">
        <div class="card-image card-1"> </div>  <!-- no image used -->
        
        <div class="card-text card_1">
        
          <h2>Request for Organ</h2>
          <div class="value"><a href="login.php"  rel="noopener noreferrer">Request</a></div>


        </div>
      </div>
       <!-- card 2 starts -->

      <div class="card">
        <div class="card-image card-2"></div>
         <div class="card-text card_2">
          <h2>Donate A Organ</h2>
          <div class="value"><a href="login.php"  rel="noopener noreferrer">Donate</a></div>
         </div>
        </div>
      </div>

      <!-- card  3 starts-->
      
      <div class="card">
        <div class="card-image card-3"></div>
         <div class="card-text card_3">
          <h2>Donation Record</h2>
          <div class="value"><a href="login.php"  rel="noopener noreferrer">Record</a></div>
         </div>
        </div>
      </div>
</section>


<style>

.container {
    display : flex;
    justify-content: center;
    flex-wrap: wrap;
}

.card {
    background: white ;
    height: 460px;
    width: 270px;
    margin: 10px;
    border-radius: 15px;
}

.card-image{
    background-color: lightblue;
    height:220px;
    margin-bottom: 15px;
    background-size: cover;
    border-radius: 10px 12px 0 0;
}

.card-text {
  grid-area: text;
  margin: 30px;
  text-align: center;
}

.card-text p {
  color: grey;
  font-size: 10px;
  font-weight: 300;
}

.card-text h2 {
  margin-top: 0px;
  font-size: 28px;
  padding: 10px;
  
}


/*card1*/
.card-1 {
    background-image: url("images/request.jpg");
    background-size: cover;
}
.card-2 {
    background-image: url("images/donation.jpg");
    
}

.card-3 {
  background-image: url("images/02.jpg");
}

.card-text.card3 .date {
  color: rgb(0, 189, 63);
}

.card a{
    background-color: black;
    color: white;
    padding: 15px  20px;
    display: block;
    text-align: center;
    margin : 20px 50px;
    text-decoration: none;
}

.card:hover{
    background-color: lightblue;
    color: green;
    cursor: pointer;
    transform: scale(1.03);
    transition: all 0.5 ease ;
}
footer {
      background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.8));
      padding: 50px;
      text-align: center;
      position: relative;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .media-icons a {
      margin: 0 10px;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .media-icons a:hover {
      color: black;
      transform: scale(1.2);
    }

 
      
    </style>
  </section>
  <footer>
    <div class="media-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <p>&copy; 2024 E- Donor Life. All Rights Reserved.</p>
  </footer>


</body>

</html>
