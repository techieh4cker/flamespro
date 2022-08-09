<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
    <script src="flames.js">
    </script>
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
    <script>
    $("#btn").live("click",function(){  
      var fname = $("#fname").val();  
      var lname = $("#lname").val();  
      $.ajax({  
      type:"POST",  
      url:"index.php",  
      data:"fname="+fname+'&lname='+lname,  
    //   success:function(data){  
    //       alert(data);
    //   }  
      });   
    }); 
    </script>   
    <title>Flames Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("button").click(function(event){
    event.preventDefault();
    });
    });
    </script>
    <style>
    #fname,#lname{
    background-color: rgb(240, 255, 173);
    border-radius: 25px;
    border: 2px solid rgb(144, 0, 62);
    border-width: 3px;
    height: 50px;
    width: 70%;
    transition: 0.05s;
    font-size: 25px;
    color: rgb(58, 0, 0);
    }
    #name1:focus{
    border: 2px solid #555;
    background-color: rgb(200, 253, 108);
    }
    #fname:focus{
    border: 2px solid #555;
    background-color: rgb(200, 253, 108);
    }
    #lname:focus{
    border: 2px solid #555;
    background-color: rgb(108, 248, 253);
    }
    #btn{
    background-image: linear-gradient(orange,red);
    border-radius: 25px;
    height: 35px;
    font-size: large;
    font-weight: bold;
    width: 100px;
    cursor: pointer;
    }
    #btn:active{
    background-color: rgb(255, 0, 0);
    border-color: red;
    width: 70px;
    transition: 0.25s;
    }
    #btn:hover{
    cursor: pointer;
    border-color: rgb(255, 0, 0);
    }
    </style>  
    </head>
    <body>
    <header >
        <h1><marquee scrollamount="25">FLAMES CALCULATOR &#128571;</marquee>  </h1> 
    </header>
    <div>
        <p id="p1"> <b>This flames calculator is used to find the compatibility
             between you and your partner. This is just a fun please don't take it seriously. </b> </p>

        <div>
            <form action="index.php" method="get"  onclick='flames()' autocomplete="on" novalidate>
            <input type='text' id='fname'  placeholder="Your name"  name="fname" ><br><br>
            <input type='text' id='lname' placeholder="Your crush name"  name="lname"><br><br>
            <button id="btn">Submit</button>
            <!-- <input type='button' id="check" value='Check'> -->
            <input type='reset' id="reset" value='Reset'>
            <h2 id='output'></h2>
            </form>
        </div>
        <h2 id="h2">  How does this flames calculator work? </h2>
        <p id="p2"> &nbsp;   &nbsp;   &nbsp;   It is always hard to define the relationship between two people in a simple word like
         friendship, love, affection and enemy or to predict the outcome, like marriage.
        The above tool tries to find the answer to questions likes "what is our relationship?" or 
        to give you a sense of what is going on between you and another person. You are only asked 
        to enter the two names between which you want to calculate the relationship. The flames 
        calculator is based on quite a simple algorithm in which FLAMES stands for: </p>
        <p id="p3">
            &#128109; Friendship <br>
            &#128143; Love <br>
            &#128525; Affection <br>
            &#128141; Marriage <br>
            &#128545; Enemy <br>
            &#128696; Siblings <br>
        </p>
    </div>
    <footer>
        <i>Created by </i><br><br>
        <span class="tech">Techieh4cker</span>aka <span class="karthi">KARTHIKEYAN </span> <br><br>
        <i><u style="color:rgb(0, 255, 0)">Follow me on... </u></i><br><br>
        <a href="https://bit.ly/3BM7fFp" target="_new"><img src="ig.png" height="40" width="40"></a>
        <a href="https://t.me/karthi_msd_vj/" target="_new"><img src="tg.png" height="40" width="40"></a>
        <a href="https://github.com/techieh4cker/" target="_new"><img src="gi.png" height="40" width="40"></a>
        <br>
       <span class="copy">Copyright &copy 2022 Karthikeyan</span>
    </footer>
</body>
</html>   