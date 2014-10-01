<div id="primary-column">
    <div id="primary-content">
        <?php
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        mysql_select_db($dbname,$conn);




        $sql = "SELECT * from feature";
        $result= mysql_query($sql);
        while($row=mysql_fetch_array($result)) {                                                                                            
        if($row['id'] != 1) {?>

        <!-- <div id="Feature">
            <?php
            $id =$row['id'];
            $sql3 = "SELECT * from contents where id='{$id}'";
            $result3= mysql_query($sql3);
            $row3 = mysql_fetch_array($result3);
            ?><?php
            $id =$row['id'];
            $sql31 = "SELECT * from contents where id='{$row['Heading']}'";
            $result31= mysql_query($sql31);
            $row31 = mysql_fetch_array($result31);
            ?><a href="subpage.php?id=%3C?php%20echo%20$row['Heading'];?%3E">
            <h1><?php echo $row31['title'];?></h1></a>

            <div id="img"><img src="%3C?=$base.$row['Image'];?%3E"></div>

            <p><?=$row['Des'];?>
            </p>

            <div style="margin:0 auto;width:80%;">
                <a href=
                "subpage.php?id=%3C?php%20echo%20$row['Heading'];?%3E"><img src="images/rm.jpg"
                style="height:60px;width:100%;"></a>
            </div>
        </div><?php
        }else { ?><?php
        $id =$row['id'];
        $sql3 = "SELECT * from contents where id='{$id}'";
        $result3= mysql_query($sql3);
        $row3 = mysql_fetch_array($result3);
        ?> -->

        <div id="FeatureB" class="Jumbotron">
            <?php

            $id =$row['id'];
            $sql31 = "SELECT * from contents where id='{$row['Heading']}'";
            $result31= mysql_query($sql31);
            $row31 = mysql_fetch_array($result31);
            ?><a href="subpage.php?id=%3C?php%20echo%20$row['Heading'];?%3E">
            <h1><?php echo $row31['title'];?></h1></a>

            <div id="img"><img src="$row['Image'];" style=
            "width:200px;height:180px;float:left;margin:5px;"></div>


            <p><?=$row['Des'];?>
            </p>
        </div><?php
        }

        }
        ?>
    </div>
</div>