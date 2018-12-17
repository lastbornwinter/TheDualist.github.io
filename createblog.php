<!DOCTYPE HTML>
<head>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="travelstyle.css">
</head>


<body>
<!                            MENU                             >
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








  <form action="handle.php" method="post">
    <p id="p04"><i>Input your name</i></p><br>
    <input type="text" name="username"><br><br>
    <p id="p04"><i>Input the name of your blog post</i></p><br>
    <input type="text" name="blogname"><br><br>
    <p id="p04"><i>Write your post here. If you want to be accredited,
    put your name at the bottom of your text.<br>
    If you leave the page while typing you post, Your
    current text will NOT be saved.</i></p><br>
    <textarea name="blogtext" rows="10" cols="60">
    </textarea><br>
    <input type="submit" value="Submit">

  </form>

</body>
