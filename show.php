
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <li>
            
                <?php echo $row['title'] ?>
                               </a>
            </li>
            <?php end?>
        </ul>
    </body>
</html>

<?php
mysql_close($link);
?>
