<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#004e92">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-control" content="NO-STORE">
    <meta name="robots" content="noindex, nofollow">
    <title>City of Heroes - Codex</title>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" sizes="72x72" href="../images/icons/icon-72x72.png">
    <link rel="icon" sizes="96x96" href="../images/icons/icon-96x96.png">
    <link rel="icon" sizes="128x128" href="../images/icons/icon-128x128.png">
    <link rel="icon" sizes="144x144" href="../images/icons/icon-144x144.png">
    <link rel="icon" sizes="152x152" href="../images/icons/icon-152x152.png">
    <link rel="icon" sizes="192x192" href="../images/icons/icon-192x192.png">
    <link rel="icon" sizes="384x384" href="../images/icons/icon-384x384.png">
    <link rel="icon" sizes="512x512" href="../images/icons/icon-512x512.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/codex.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/enhance.js"></script>
    <script language="javascript" type="text/javascript">
    var images = new Array()
    var images2 = new Array()
    var images3 = new Array()

    images[0] = "../images/cov_large.png";
    images[1] = "../images/coh_gr_large.png";
    images[2] = "../images/coh_large.png";
    images2[0] = "../images/city_back_blue.png";
    images2[1] = "../images/city_back_red.png";
    images2[2] = "../images/city_back_gr.png";
    images3[0] = "linear-gradient(#000428, #004e92)";
    images3[1] = "linear-gradient(#1f1c18, #8e0e00)";
    images3[2] = "linear-gradient(#333333, #c9ad1c)";

    var x = 0


    function changeImage() {
        document.getElementById("switch").src = images[x]
        x++;
        if (images.length == x) {
            x = 0;
        }
    }

    function changeImage2() {
        document.getElementById("switch2").style.backgroundImage = "url(" + images2[x] + ")";
        $("#switch2").fadeIn(1600);

    }

    function changeImage3() {
        $('.enhance_display_menu').css("background", images3[x]);
        if (x == 1) {
            document.getElementById("paragon").src = '../images/arachnos.png';
        }
        if (x == 0) {
            document.getElementById("paragon").src = '../images/statesman.png';
        }
        if (x == 2) {
            document.getElementById("paragon").src = '../images/Praetoria_Icon_Web.png';
        }
    }
    </script>
    <script>
    function force_change() {
        changeImage();
        changeImage2();
        changeImage3();
    }
    </script>

    <script>
    $(document).ready(function() {
        $(".enhance_display").click(function() {
            var label = $(this).attr("value");
            $("#the_list").append('<li>' + label + '</li>');
            $(label).empty();
        });
    });
    </script>
    <script>
    function clear_list() {
        $('#the_list').empty();
    }
    </script>
</head>

<body id="switch2">
    <div class="main_title" onclick="force_change();"><img src="../images/coh_large.png" width="256" height="256"
            id="switch"></div>
    <div class="sub_title"><img src="../images/codex.png" width="200" height="45"></div>
    <hr />
    <div class="page_header" onclick="location.reload();">Training/DO/SO<br />Enhancements</div>
    <hr />
    <div class="sub_header_enhance">Shopping List</div>

    <div class="list_container">
        <ul id="the_list">
        </ul>
    </div>
    <div class="list_container_btn">
        <button class="btn btn-danger" onclick="clear_list();"><i class="fas fa-trash"></i></button>
    </div>
    <div class="training">
        <br />
        <div class="sub_header_enhance">Types</div>

        <div class="enhance_body_display">
            <div class="enhance_display_menu accuracy" onclick="toggleaccuracy()"><img
                    src="./images/training/TO-Training-Accuracy.png">
                <div class="enhance_text">Accuracy</div>
            </div>
            <div class="enhance_display_menu accuracy_deBuff" onclick="toggleaccuracy_debuff()"><img
                    src="./images/training/TO-Training-ToHit-DeBuffs.png">
                <div class="enhance_text">Accuracy / ToHit
                    DeBuff</div>
            </div>
            <div class="enhance_display_menu confusion" onclick="toggleconfusion()"><img
                    src="./images/training/TO-Training-Confusion-Duration.png">
                <div class="enhance_text">Confusion</div>
            </div>
            <div class="enhance_display_menu damage" onclick="toggledamage()"><img
                    src="./images/training/TO-Training-Damage.png">
                <div class="enhance_text">Damage</div>
            </div>
            <div class="enhance_display_menu defence_buff" onclick="toggledefence_buff()"><img
                    src="./images/training/TO-Training-Defense-Buff.png">
                <div class="enhance_text">Defense
                    Buff</div>
            </div>
            <div class="enhance_display_menu defence_debuff" onclick="toggledefence_debuff()"><img
                    src="./images/training/TO-Training-Defense-DeBuff.png">
                <div class="enhance_text">Defense
                    DeBuff</div>
            </div>
            <div class="enhance_display_menu disorient" onclick="toggledisorient()"><img
                    src="./images/training/TO-Training-Disorient-Duration.png">
                <div class="enhance_text">Disorient / Stun</div>
            </div>
            <div class="enhance_display_menu endurance_modification" onclick="toggleendurance_modification()">
                <img src="./images/training/TO-Training-Endurance-Modification.png">
                <div class="enhance_text">Endurance
                    Modification</div>
            </div>
            <div class="enhance_display_menu endurance_reduction" onclick="toggleendurance_reduction()"><img
                    src="./images/training/TO-Training-Endurance-Cost.png">
                <div class="enhance_text">Endurance
                    Reduction</div>
            </div>
            <div class="enhance_display_menu fear" onclick="togglefear()"><img
                    src="./images/training/TO-Training-Fear-Duration.png">
                <div class="enhance_text">Fear
                    Duration</div>
            </div>
            <div class="enhance_display_menu fly" onclick="togglefly()"><img
                    src="./images/training/TO-Training-Flight-Speed.png">
                <div class="enhance_text">Flying</div>
            </div>
            <div class="enhance_display_menu heal" onclick="toggleheal()"><img
                    src="./images/training/TO-Training-Heal.png">
                <div class="enhance_text">Healing / Absorb</div>
            </div>
            <div class="enhance_display_menu hold" onclick="togglehold()"><img
                    src="./images/training/TO-Training-Hold-Duration.png">
                <div class="enhance_text">Hold
                    Duration</div>
            </div>
            <div class="enhance_display_menu immobilization" onclick="toggleimmobilization()"><img
                    src="./images/training/TO-Training-Immobilization-Duration.png">
                <div class="enhance_text">Immobilization
                    Duration</div>
            </div>
            <div class="enhance_display_menu interrupt" onclick="toggleinterrupt()"><img
                    src="./images/training/TO-Training-Interrupt-Time.png">
                <div class="enhance_text">Interrupt
                    Reduction</div>
            </div>
            <div class="enhance_display_menu jump" onclick="togglejump()"><img
                    src="./images/training/TO-Training-Jump.png">
                <div class="enhance_text">Jumping</div>
            </div>
            <div class="enhance_display_menu knockback" onclick="toggleknockback()"><img
                    src="./images/training/TO-Training-KnockBack-Distance.png">
                <div class="enhance_text">Knockback
                    Distance</div>
            </div>
            <div class="enhance_display_menu range" onclick="togglerange()"><img
                    src="./images/training/TO-Training-Range.png">
                <div class="enhance_text">Range
                    Increase</div>
            </div>
            <div class="enhance_display_menu recharge" onclick="togglerecharge()"><img
                    src="./images/training/TO-Training-Attack-Rate.png">
                <div class="enhance_text">Recharge
                    Reduction</div>
            </div>
            <div class="enhance_display_menu resist_damage" onclick="toggleresist_damage()"><img
                    src="./images/training/TO-Training-Damage-Resistance.png">
                <div class="enhance_text">Resist
                    Damage</div>
            </div>
            <div class="enhance_display_menu run" onclick="togglerun()"><img
                    src="./images/training/TO-Training-Running-Speed.png">
                <div class="enhance_text">Run Speed
                    Increase</div>
            </div>
            <div class="enhance_display_menu sleep" onclick="togglesleep()"><img
                    src="./images/training/TO-Training-Sleep-Duration.png">
                <div class="enhance_text">Sleep
                    Duration</div>
            </div>
            <div class="enhance_display_menu slow" onclick="toggleslow()"><img
                    src="./images/training/TO-Training-Slow-powers.png">
                <div class="enhance_text">Slow</div>
            </div>
            <div class="enhance_display_menu taunt" onclick="toggletaunt()"><img
                    src="./images/training/TO-Training-Taunt-Effectiveness.png">
                <div class="enhance_text">Taunt
                    Duration</div>
            </div>
            <div class="enhance_display_menu tohit_buffs" onclick="toggletohit_buff()"><img
                    src="./images/training/TO-Training-ToHit-Buffs.png">
                <div class="enhance_text">ToHit
                    Buff</div>
            </div>
        </div>
    </div>
    <div class="sub_header_enhance origins">Origins</div>

    <div class="enhance_body_display">
        <div class="enhance_display_menu magic_mutation" onclick="togglemm();"><img
                src="./images/rings/E_origin_magic_mutant.png">
            <div class="enhance_text">Magic /
                Mutation</div>
        </div>
        <div class="enhance_display_menu natural_magic" onclick="togglenm();"><img
                src="./images/rings/E_origin_natural_magic.png">
            <div class="enhance_text">Natural /
                Magic</div>
        </div>
        <div class="enhance_display_menu natural_technology" onclick="togglent();"><img
                src="./images/rings/E_origin_natural_tech.png">
            <div class="enhance_text">Natural /
                Technology</div>
        </div>
        <div class="enhance_display_menu science_technology" onclick="togglest();"><img
                src="./images/rings/E_origin_science_tech.png">
            <div class="enhance_text">Science /
                Technology</div>
        </div>
        <div class="enhance_display_menu mutation_science" onclick="togglems();"><img
                src="./images/rings/E_origin_mutant_scientific.png">
            <div class="enhance_text">Mutation /
                Science</div>
        </div>
        <div class="enhance_display_menu mutation" onclick="togglemutation();"><img
                src="./images/rings/E_origin_mutant.png">
            <div class="enhance_text">Mutation</div>
        </div>
        <div class="enhance_display_menu magic" onclick="togglemagic();"><img src="./images/rings/E_origin_magic.png">
            <div class="enhance_text">Magic</div>
        </div>
        <div class="enhance_display_menu natural" onclick="togglenatural();"><img
                src="./images/rings/E_origin_natural.png">
            <div class="enhance_text">Natural</div>
        </div>
        <div class="enhance_display_menu science" onclick="togglescience();"><img
                src="./images/rings/E_origin_scientific.png">
            <div class="enhance_text">Science</div>
        </div>
        <div class="enhance_display_menu technology" onclick="toggletechnology();"><img
                src="./images/rings/E_origin_tech.png">
            <div class="enhance_text">Technology</div>
        </div>
    </div>
    <hr />
    <div class="magic_mutation">
        <div class="sub_header_enhance">Magic/Mutation
            <div class="sub_sub_header">Dual Origin</div>
        </div>

        <div class="enhance_body_display">

            <?php
        include '../enhancements/enhancement_db.php';
        $mysqli = new mysqli("localhost", $username, $password, $dbname);
        $query = "SELECT * FROM enhancements WHERE origin_type='Magic-Mutation' AND origin='DO' ";
        if ($result=$mysqli->query($query)){
        while ($row=$result->fetch_assoc()){
        $id = $row['id'];
        $type= $row['type'];
        $class= $row['class'];
        $origin = $row['origin'];
        $origin_type = $row['origin_type'];
        $name = $row['name'];
        $img_file = $row['img_file'];

          echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
            echo "<div class='enhance_text'>$name</div><br/>";
            echo "<div class='enhance_sub_text'>$type</div>";
            echo "</div>";
          }
          $result->free();
            }
      ?>
        </div>
    </div>

    <br />


    <div class="natural_magic">
        <div class="sub_header_enhance">Natural / Magic
            <div class="sub_sub_header">Dual Origin</div>
        </div>

        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Natural-Magic' AND origin='DO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="natural_technology">
        <div class="sub_header_enhance">Natural / Technology
            <div class="sub_sub_header">Dual Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Natural-Technology' AND origin='DO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="science_technology">
        <div class="sub_header_enhance">Science / Technology
            <div class="sub_sub_header">Dual Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Technology-Science' AND origin='DO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    </div>
    <div class="mutation_science">
        <div class="sub_header_enhance">Mutation / Science
            <div class="sub_sub_header">Dual Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Mutation-Science' AND origin='DO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="mutation">
        <div class="sub_header_enhance">Mutation
            <div class="sub_sub_header">Single Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Mutation' AND origin='SO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="magic">
        <div class="sub_header_enhance">Magic
            <div class="sub_sub_header">Single Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Magic' AND origin='SO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="natural">
        <div class="sub_header_enhance">Natural
            <div class="sub_sub_header">Single Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Natural' AND origin='SO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="technology">
        <div class="sub_header_enhance">Technology
            <div class="sub_sub_header">Single Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Technology' AND origin='SO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    <div class="science">
        <div class="sub_header_enhance">Science
            <div class="sub_sub_header">Single Origin</div>
        </div>
        <div class="enhance_body_display">

            <?php
      include '../enhancements/enhancement_db.php';
      $mysqli = new mysqli("localhost", $username, $password, $dbname);
      $query = "SELECT * FROM enhancements WHERE origin_type='Science' AND origin='SO' ";
      if ($result=$mysqli->query($query)){
      while ($row=$result->fetch_assoc()){
      $id = $row['id'];
      $type= $row['type'];
      $class= $row['class'];
      $origin = $row['origin'];
      $origin_type = $row['origin_type'];
      $name = $row['name'];
      $img_file = $row['img_file'];

        echo "<div class='enhance_display $class' value='$name'><img src='../enhancements/images/$img_file'>";
          echo "<div class='enhance_text'>$name</div>";
          echo "</div>";
        }
        $result->free();
          }
    ?>
        </div>
    </div>
    <br />
    </div>
    <hr />
    <div class="clear_all" onclick="clear_page();"><img src="../images/coh_badge.png">
        <br />Clear
    </div>

    <a href="../" target="_self">
        <div class="btn btn-primary home_button"><i class="fas fa-home"></i></div>
    </a>
</body>

</html>