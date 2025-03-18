
		
<html>

    <style>
              #but{
        position:absolute;
        left:84%;
        top:3px;
        border-radius: 5%;
        height:30px;
        background:black;
        color:white;
      } 
      #but:hover{
        background:white;
        color:black;
        cursor: pointer;

      } 
      p{
        position: absolute;
        top: 5px;
        font-family:arial black;
        font-size: 15px;
      }
      #te{
        position: relative;
           top:40px;
           font-size: 16px;
    }
	.admin{
		
		display:none;
	}
	 body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
          width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
        </style>
    <body>
	<div class="admin" id="admin">
        <p> ENTER CODE YOU WANT  TO SEND TO DEVELOPER </p>
            <form name="form11" action="admin.php" method="post">
                
                <textarea cols="100" rows="120" id="te" name="name1">
 
                </textarea>
                <input type="submit" value="SEND" id="but">
				
            </form>
			</div>
			
			
			<div class="login" id="login">
  <div class="form-container">
        <h2>Sign Up</h2>

		<form id="signup-form" name="form1" method="post" action="admindb.php" onsubmit="return fun()">

            <div class="input-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" required placeholder="Enter your ID">
            </div>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your Name">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" required placeholder="Enter your Password">
            </div>
            <button type="submit" >Submit</button>
         </Form>
    </div>
	</div>
	<script>
        // Check if login was successful using localStorage
    function fun(){
            if (localStorage.getItem("loggedIn") == "true") {
                document.getElementById("login").style.display = "none"; // Hide login form
                document.getElementById("admin").style.display = "block"; // Show admin section
				return true;
            }
			return false;

        }
		

    </script>
    </body>
</html>	