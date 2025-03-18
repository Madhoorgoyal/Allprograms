<?php

session_start();
$name = $_SESSION['name'];
?>
<html>

<head>

<script>


function exitt(){
   
window.open("http://localhost/my%20php%20project/project/index.html");

}



</script>
<style>
*{
margin:0px;
padding:0px;

}
.welcome{
margin-top:22%;
font-style:italic;
font-size:50px;
color: black;
text-align:center;
text-shadow: 1px 1px 0px #ccc, 2px 2px 0px #c9c9c9, 3px 3px 0px #bbb, 4px 4px 0px #b8b8b8;
  margin-bottom: 30px;
animation:pulse 2s infinite;




}
@keyframes pulse {
    0% {
        transform: scale(1);
		opacity:0.5;
    }
    50% {
        transform: scale(1.1);
		opacity:1;
    }
    100% {
        transform: scale(1);
    opacity:0.5;
	}
}
.logout{
	
margin-top:90px;
text-align:center;



	
}
button
{
		height:80px;
	width:175px;
	
		font-size:40px;
		border-radius:20px;
		background-color:black;
		color:white;
		cursor:pointer;
	 transition: all 0.8s ease-in-out;
		
}
button:hover
{    background-color: #fff;
    color: #333;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
	
}
</style>

</head>
    <body>
        
                    <marquee style="font-size:45px; color: aliceblue; position: absolute; top:4%; font-style:bold;" scrollamount="15"> SPACE RESERVED FOR CODES </marquee>
        
<div class="welcome"> Hello <?php echo($name);  ?></div>


<div class="logout"> <button onclick="exitt()"> Logout </button></div>
                </body>
</html>