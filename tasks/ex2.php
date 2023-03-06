<?php include "header.php"?>
   
<style>
  body{
      background-color:none;
        font-family: latha;
        color:whitesmoke;
        background:url(food.jpg)no-repeat;
        background-size: cover;
    }
/* delete the border color */
  .box{width: 900px;
      float: right;
      color: rgb(217, 156, 81);
    }
.text
{
  /* float: left; */
  padding: 10%;
  padding-left: 5%;

}
  .box ul li{
        width: 130px;
        float: right;
        margin: 10px;
        text-align:right;
        }

  .box ul li a{
        text-decoration: none;
        color:orange;    
        }

           
  .box ul li a:hover{
    color:whitesmoke;
    cursor: pointer;
        }

.wd {
    width: 539px;
    height: 300px;
    opacity: 0.9;
    padding: 55px;
    image-resolution: 1px;
    text-align: center;
    display: grid;
}

.wd1{
width: 20px;
height: auto;
float: right;
display: flex;
image-resolution: 1px;
padding-right: 20px;
}


.wd h1 {
text-align: center;
text-transform: uppercase;
font-weight: 100px;
color: orange;

}
.opt 
{
  align-items: center;
}
/* CSS */
.button-64 {
  margin-left: 55px;
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 3px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button-64:active,
.button-64:hover {
  outline: 0;
}

.button-64 span {
  background-color: rgb(5, 6, 45);
  padding: 16px 24px;
  border-radius: 6px;
  width: 100%;
  height: 100%;
  transition: 300ms;
}

.button-64:hover span {
  background: none;
}

@media (min-width: 768px) {
  .button-64 {
    font-size: 24px;
    min-width: 196px;
  }
}
.wd h4{
    text-align: justify;
    color: whitesmoke;
    font-weight: normal;
}
     .wd h2{
        text-align: center;
        text-transform: uppercase;
        font-weight: normal;
        margin: 40px auto;
        color: orange;
    
    
    }       
    .footer {
    width: 100%;
    color: orange;
    text-align: center;
    text-align: 1vw;
    line-height: 0.6;
    padding-bottom: 15px;
    margin:0 auto;
    max-width: 400px;
}
.contact-info{
    display: flex;
    flex-direction: column;
}
.social-links {
  display: flex;
  justify-content: last  baseline;
}

.social-links a {
  margin: 0 10px;
  text-decoration: none;
  color: #333;
}

.social-links .facebook {
  background: darkgray;
  padding: 10px;
  border-radius: 50%;
}

.social-links .instagram {
  background:darkgray;
  padding: 10px;
  border-radius: 50%;

}
.social-links .whatsapp{
background-color: darkgray;
padding:10px ;
border-radius:50%;
}
.social-links .youtube{
  background:darkgray;
  padding: 10px;
  border-radius: 50%;
}
.col-md-5 > article img{
  padding-right: 5%;
  padding-top: 0;
  padding-left: 20%;
    display: flex;
    float:right;
    width:33%;
    height:auto;
   margin-top: 50px;
  border-radius: 50%;

}

 </style>
</head>
 <body> 

   <h1> Welcome</h1>
  <h4>The first sentence of the description clearly outlines something unique about the restaurant: its passion for masa. This establishes the "traditional" component of Suerte's menu, which blends traditional Mexican cooking with local Texas ingredients. The photo beside the description further amplifies this idea, showcasing traditional Mexican art while establishing a bright, exuberant visual style for the brand. When image and text work in harmony like this, it can be extremely powerful.
 </div>

 
<h2>
    Reservation
</h2>
<div class="opt">
    <form action="" method="post">
  
    <!-- HTML !-->
<button class="button-64" role="button"><span class="text">Book a Table </span></button>

    </form>
  
</div>

</div>

</div>




<?php include "footer.php"?>
