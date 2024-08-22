<html>
  <head>
    <title>Response</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        font-size: 14px;
        font-weight: 300;
        line-height: 25px;
        color: #3b4045;
        font-family: "Josefin Sans", sans-serif;
        -webkit-font-smoothing: antialiased;
      }
    </style>
  </head>

  <body>
    <center>
      <br><br>
      <h1 style="font-size: 50px;"> Form Response </h1>
      <br><br>
      Welcome <?php echo $_GET["name"]; ?>!<br>
      Your comment is: <?php echo $_GET["comment"]; ?><br><br>
      <button> <a href="index.html">
      Back
     </a> </button>
     <div>
            <img src="images/cheetah.png" alt="cheetah" />
        </div>
    </center>
  </body>
</html>