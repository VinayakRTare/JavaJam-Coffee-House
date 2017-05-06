<!DOCTYPE html>
<!-- Student Name: Vinayak Tare  -->
<html lang="en">
  <head>
    <title>A Music Web Application</title>
    <meta charset="utf-8"/>
    <script type="text/javascript" src="<?php echo base_url();?>js/music.js">
    </script>
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url();?>css/JavaJam.css">
  </head>
  <body id="wrapper" onload="initialize();">
<!--    <form>
       <label>Artist name: <input type="text" id="form-input"/></label>
       <input type="hidden"  id="hide" value="<?php echo $artist ?>"/>
       <input type="button" onclick="sendRequest();" value="Display Info"/>
    </form>-->
      <div class="full-content">
            <table class="nav-bar">
                <tr><td><img alt="coffee icon" src="<?php echo base_url();?>img/javajamlogo.jpg"></td></tr>
                <tr><td><nav role="navigation">	
                            <a href="http://localhost/JavaJam/IndexController"><strong>Home</strong></a>
                            <a href="http://localhost/JavaJam/MenuController"><strong>Menu</strong></a> 
                            <a href="http://localhost/JavaJam/MusicController"><strong>Music</strong></a>
                            <a href="http://localhost/JavaJam/JobController"><strong>Jobs</strong></a> 
                        </nav></td></tr>
            </table>
      <div class="main">
          <header class="main-header">
                    <h1 class="main-heading">JavaJam Coffee House</h1>
          </header>
          <form><input type="hidden"  id="hide" value="<?php echo $artist ?>"/></form>
          <div id="artist-name"></div>
          <table >
              <tr>
                  <td><img id="artist-img"/></td>
                  <td><a id ="artist-url"></a></td>
              </tr>
          </table>
              <h3>
                  Top 3 Albums
              </h3>
              <ol type="1">
                  <li><p id="topAlbmName[0]"></p><img id="topAlbm[0]"/></li>
                  <li><p id="topAlbmName[1]"></p><img id="topAlbm[1]"/></li>
                  <li><p id="topAlbmName[2]"></p><img id="topAlbm[2]"/></li>
<!--                  <td><p id="output2"></p></td>-->
              </ol>
              <h3>
                  Similar Artists
              </h3>
              <ol type="1">
                  <li><p id="simArt[0]"></p></li>
                  <li><p id="simArt[1]"></p></li>
                  <li><p id="simArt[2]"></p></li>
<!--                  <td><p id="output2"></p></td>-->
              </ol>
              
          
          <div id="artist-name"></div><br>
<!--          <img id="artist-img"/><br><a id ="artist-url"></a>-->
          <div><h3>Summary</h3></div>
          <div id="descrptn"></div>
          
          <div id="img-container"></div>
          <div id="second-api"></div>
          
          
          </div>
  </body>
</html>
