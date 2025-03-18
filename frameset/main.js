function copyy(){
        var x=document.getElementById("copp");
        x.focus();
        x.select();
		document.execCommand("copy");
        alert("CODE COPIED SUCCESSFULLY");
    }

    function showoutput(){
      document.getElementById("php11").style.display="block";
      document.getElementById("codeid").style.display="block";
      document.getElementById("copp").style.display="none";
      document.getElementById("outputid").style.display="none";
      
     
    }
    function showcode()
    {

      document.getElementById("php11").style.display="none";

      document.getElementById("outputid").style.display="block";
      document.getElementById("copp").style.display="block";

      document.getElementById("codeid").style.display="none";

    }