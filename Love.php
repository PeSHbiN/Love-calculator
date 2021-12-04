<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body{
            background-color: rgb(204, 197, 211);

        }
        .flex{
            display: flex;
            justify-content: center;
        }
        .form{
            background-color: #ff99ff;
            box-shadow: 5px 10px 5px 10px #888888;
            width: 250px;
            height: 100px;
            border-radius: 10px;
            
        }
        form{
            padding: 10px;
            margin: 10px;
            size: 16px;
        }
        
    </style>
</head>
<body>
    <div class="flex">
        <div class="form">
            <form action="get">

                <?php
                    
                    $name1 = $_GET['name1'];
                    $name2 = $_GET['name2'];
                    $number = rand(70, 100);
                    echo $name1.' && '.$name2."<br>";
                    if($name1 == $name2){
                        $number = 100;
                    }
                    echo $number."% ";
                    
                    file_put_contents('Love.txt', $_GET['name1']."\t". $_GET['name2']. "\n", FILE_APPEND)
                    
                ?>
            </form>
        </div>  
    </div>    
</body>
</html>