<html>
    <head>
        <title>Music</title>
        <link rel="stylesheet" type="text/css" href = "<?php echo base_url();?>css/JavaJam.css">
        <script type="text/javascript" src = '<?php echo base_url();?>js/music.js'></script>

    </head>

    <body id="wrapper">
        <div class="full-content">
            <table class="nav-bar">
                <tr><td><img alt="coffee icon" src="<?php echo base_url();?>img/javajamlogo.jpg"></td></tr>
                <tr><td><nav role="navigation">	
                            <a href="IndexController"><strong>Home</strong></a>
                            <a href="MenuController"><strong>Menu</strong></a> 
                            <a href="MusicController"><strong>Music</strong></a>
                            <a href="JobController"><strong>Jobs</strong></a> 
                        </nav></td></tr>
            </table>
            <div class="main">
                <header class="main-header">
                    <h1 class="main-heading">JavaJam Coffee House</h1>
                </header>
                <img class="main-img" src="<?php echo base_url();?>img/gregthumb.jpg"/>

                <header>
                    <h3 class="margin-left35px padding-left15px">Music at JavaJam</h3>
                </header>
                <p class="margin-left35px">The first Friday night each month at JavaJam is a special night.
                    Join us from 8pm to 11pm for some music you won't want to miss!
                </p>
                <div>
                    <?php
                    //require_once('musicians.php');
                    //print_r($result);
                    if ($result!=NULL) {
                        $data = array();
                        $items = array();
                        foreach ($result as $row) {
                            
                            $data[] = $row;
                            $d = date_parse_from_format("Y-m-d", $row->monthYear);
                            $month_name = date("F", mktime(0, 0, 0, $d['month'], 15));
                            $items[] = $d['month'];
                        }
                        $items = array_unique($items);
                        asort($items);
                        foreach ($items as $value) {
                            $month_name = date("F", mktime(0, 0, 0, $value, 15));
                            echo "<header >
                                  <h3 class='month-header' >" . $month_name . "</h3>
                                  </header>";
                            echo "<table class='music-table'><tr><th>  Musician Name  </th><th>  Genre  </th></tr>";
                            foreach ($data as $val) {
                                $d2 = date_parse_from_format("Y-m-d", $val->monthYear);
                                $month_name2 = date("F", mktime(0, 0, 0, $d2['month'], 15));
                                //$items = array($d['month']);
                                if ($month_name2 == $month_name) {
                                   // $_SESSION['regName'] = $val->name;
                                   
                                    echo "<tr>
                                            <td ><a href='MusicController/loadArtist/".$val->name."' id = 'musician_name'>" . $val->name . "</td>
                                            <td>" . $val->genre . "</td>
                                          </tr>";
                                }
                            }
                            echo "</table>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                    <br>
                    <br>
                </div>
            </div>
            <footer>
                Copyright &copy 2016 JavaJam Coffee House<br>
                <a href="mailto:vinayak@tare.com">vinayak@tare.com</a>
            </footer>
        </div>

    </body>
</html>