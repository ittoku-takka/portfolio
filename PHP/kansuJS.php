<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        let syoukei1 = 2000;

        function Zeikomi(syoukei0, zeiritu = "1.1") {
            return syoukei0 * zeiritu
        }
        
        console.log(Zeikomi(syoukei1)); //2200

        console.log(Zeikomi(syoukei1 , "1.2")); //2400

    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleJV.css">
</head>

<body>

    <div>
        <input type="text" id="right" name="right">
        <input type="button" id="rlink" value="右に配置" onclick="display(r)">
    </div>
     <div>
        <input type="text" id="center" name="center">
        <input type="button" id="clink" value="中央に配置" onclick="display(c)">
    </div>
     <div>
        <input type="text" id="left" name="left">
        <input type="button" id="llink" value="左に配置" onclick="display(l)">
    </div>
    <p id="rightmessage" ></p>
    <p id="centermessage" ></p>
    <p id="leftmessage" ></p>
    <script>
        'use strict';
          const r = "right";
          const c = "center";
          const l = "left";

       function display(place){
            var input = document.getElementById(place);
            var msg = document.getElementById(place + 'message');
            msg.innerHTML =  input.value;
       }
       
    </script>






    <!-- <div>
        <input type="text" id="right" name="right">
        <input type="button" id="rlink" value="右に配置" onclick="rdisplay()">
    </div>
     <div>
        <input type="text" id="center" name="center">
        <input type="button" id="clink" value="中央に配置" onclick="cdisplay()">
    </div>
     <div>
        <input type="text" id="left" name="left">
        <input type="button" id="llink" value="左に配置" onclick="ldisplay()">
    </div>
    <p id="rmessage" style="text-align: right;"></p>
    <p id="cmessage" style="text-align: center;"></p>
    <p id="lmessage" style="text-align: left;"></p>
    <script>
        'use strict';
       function rdisplay(){
            var rmsg = document.getElementById('rmessage');
            rmsg.innerHTML =  document.getElementById('right').value;
       }
       function cdisplay(){
            var cmsg = document.getElementById('cmessage');
            cmsg.innerHTML =  document.getElementById('center').value;
       }
       function ldisplay(){
            var lmsg = document.getElementById('lmessage');
            lmsg.innerHTML =  document.getElementById('left').value; 
       }-->
<!--         
        // document.getElementById('rlink').addEventListener('click' , function () {
        //    document.getElementById('rmessage').textContent = document.getElementById('right').value;
        //  })
        //   document.getElementById('clink').addEventListener('click' , function () {
        //    document.getElementById('cmessage').textContent = document.getElementById('center').value;
        //  })
        //   document.getElementById('llink').addEventListener('click' , function () {
        //    document.getElementById('lmessage').textContent = document.getElementById('left').value;
        //  }) -->
       
    
</body>

</html>