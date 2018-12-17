<!DOCTYPE html>
<html>


<head>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="travelstyle.css">
</head>


<body>

  <div class=top>
    <img src="logo1.png" alt="Views of the World" style="width:414px;height:42px;">
  </div>
    <ul class="menu">
     <li><a class="tile" id="p01" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
     <li><p class="mark" id="p01">Travel  <i class="fa fa-plane" aria-hidden="true"></i>
</p></li>
     <li><a class="tile" id="p01" href="syria.htm">Syria</a></li>
     <li><a class="tile" id="p01" href="guatemala.htm">Guatemala</a></li>
     <li><p class="mark" id="p01">Politics <i class="fa fa-university" aria-hidden="true"></i>
</p></li>
     <li><a class="tile" id="p01" href="catalonia.htm">Catalonia</a></li>
     <li><a class="tile" id="p01" href="america.htm">America</a></li>
     <li><a class="tile2" id="p01" href="archives.php">All user posts</a></li>
     <li><a class="tile2" id="p01" href="createblog.php">Create your own post      <i class="fa fa-plus" aria-hidden="true"></i></a></li>
    </ul>


  <?php

  $servername = "127.0.0.1";
  $username = "thom";
  $password = "thom";

  $id=$_GET['id'];

  $conn = new mysqli($servername, $username, $password, "thom", 3306);

  $sql = sprintf("SELECT id, name, detail FROM fquestions WHERE id = %d", $id);

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  echo
  '<div class="row">'.
   '<div class="column sidebar">'.
   '</div>'.
   '<div class="textbody" id="p06">'.
   "<br>Your post ID is:  ".
   $row["id"].'<br><br>'.
   '<h1><i>'.$row["name"].'</i></h1>'." <br><br>" .
   $row["detail"] . "<br>".
   'Author: '.$row["username"].

   '</div>'.
  '</div>'.



  $conn->close();

   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   ?>

</body>
</html>
