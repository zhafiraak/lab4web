<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <table>

                <?php
                $mod = $_REQUEST['mod'];
                switch ($mod) {
                    case "home":
                        require("home.php");
                        break;
                    case "about":
                        require("about.php");
                        break;
                    case "tambah":
                        require("tambah.php");
                        break;
                    case "kontak":
                        require("kontak.php");
                        break;
                    default:
                        require("home.php");
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>