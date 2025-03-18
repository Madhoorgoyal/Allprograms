



<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      @media(max-width:720px){
        #but{
          position:absolute;

top:10px;
left:60%;
border-radius: 5%;
height:40px;
background:black;
color:white;
padding: 5px;;
font-size:26px;
      } 

      }
      .texttop{
        position:absolute;

        top:-10px;
        border-radius: 5%;
        height:30px;
        background:black;
        color:white;
        padding: 5px;
		//animation:move 3s infinite;
      }
      
      @media(max-width:720px){
        .texttop{
        position:absolute;

        top:-10px;
        border-radius: 5%;
        height:30px;
        background:black;
        color:white;
        padding: 5px;;
        font-size:23px;
      } 
      }
      #but:hover{
        background:white;
        color:black;
        cursor: pointer;

      }
      @keyframes bc
      {
        0%
        {
        position: absolute;
        top:-350px;
        }
        100%
        {
        position: absolute;
        top:50px;
        }
      }
      .bca2{
        position: absolute;
        top:50px;
        animation: bc 2s ;
      }

     

      
      html{
        
        background: linear-gradient(to right,rgb(126, 205, 223),rgb(127, 230, 230),rgb(68, 223, 247));
        
      }
      
      #copp{
        font-family: arial black;
        font-size:16px;
        border: none;
        background: linear-gradient(to right,rgb(126, 205, 223),rgb(127, 230, 230),rgb(68, 223, 247));
		animation: co 1s infinite;
		animation-timing-function:inherit;
	 }

      @media(max-width:720px)
      {
        #copp{
        font-family: arial black;
        font-size:30px;
        border: none;
        background: linear-gradient(to right,rgb(126, 205, 223),rgb(127, 230, 230),rgb(68, 223, 247));
      }
      }
	  /*@keyframes co{
	  0%{
	  background:#81f7f7;
      }
	  20%{
	  background:#55f2f2;
      
	  }
	  40%{
	  background:#17e6e6 ;
	  }
	  60%{
	  background: #08c4c4;
	  }
	  80%{
	  background: #05a3a3;
	  }
	  100%{
	  background:#047a7a;
      
	  }
	  }*/
	  
	  @keyframes move{
	  0%{
	  position:absolute;
	  left:10px;
	  }
	  50%{
	  position:absolute;
	  left:250px;

	  }
	  100%{
	  position:absolute;
	  left:10px;
	  }
	  }
    </style>
<script>
    function copyy(){
        var x=document.getElementById("copp");
        x.focus();
        x.select();
		document.execCommand("copy");
        alert("CODE COPIED SUCCESSFULLY");
    }
    </script>
    </head>
<body>

    <p class="texttop"> SORTING OF ARRAY</p>
    <input type="button" id="but" value="SELECT FULL CODE" onclick="copyy()"><br>
    <div class="bca2">
    <textarea  rows="50" cols="120" id="copp" readonly>
import java.util.Scanner;

class sorting
{
	public static void main(String args[])
	{
	
		Scanner scan=new Scanner(System.in);
		System.out.print("Please enter a number of elements :- ");
		int n=scan.nextInt();
		
		int[] ar = new int[10];
		
		
		for(int i=0; i<n; i++)
		{	
			System.out.print("Enter " + i + " Element : ");
			ar[i]=scan.nextInt();
		}
		System.out.println("\n Array before sorting : - ");
				for(int i=0; i<n; i++)
		{
				System.out.print(ar[i] + " ");
		}
		
				
			for(int i=0; i<n; i++)
				{
					for(int j=i+1; j<n; j++)
					{
						if(ar[i]>ar[j])
						{
							int temp=ar[i];
							ar[i]=ar[j];
							ar[j]=temp;
							
						}
					}
				}

				System.out.println("\n Array After sorting : - ");
						for(int i=0; i<n; i++)
		{
			System.out.print(ar[i] + " ");
		}
		
		
		
	}


}
</textarea>

 </div>
</body>

</html>