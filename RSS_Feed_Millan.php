<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrick Castro RSS FEED</title>
   </head>
<style>
</style>
<body>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<div class="page">

<div class="archive">
<article class="article">
<?php

$feed = simplexml_load_file('https://www.vox.com/rss/index.xml');


foreach ($feed->entry as $entry) 
{
 echo '<h2> <a href="'.$entry->id.'">' .  $entry->title . '</a></h2>';
 echo "<p class='content'>" . $entry->content . "</p>";
 echo "<p class='pub'>" . $entry->published . "</p>";
 echo "<h2 class='author'>" . $entry->author . "</h2>";
} 
?>
</div>
</div>
</article>
</body>
</html>