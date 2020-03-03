<?php

    if(isset($_POST['submit']))
    {
        require_once __DIR__.'\sdk\index.php';
        $hackerearth = Array(
            'client_secret' => 'e2135791eb36c62e2fb53d0730f8488cb5a15569',
            'time_limit' => '5',   
            'memory_limit' => '262144'  
        );
        $source=$_POST['code'];
        $config = Array();
        $config['time']='5';	 	
        $config['memory']='262144'; 
        $config['source']=$source;    	
        $config['input']='';    
        $config['language']='PYTHON';
        
        $responseOfCompile = compile($hackerearth,$config);

        // print_r($responseOfCompile);

        $responseOfRun = run($hackerearth,$config);

        print_r($responseOfRun);
        // print_r($responseOfRun);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>
    <div >
        <h1>Output of Your code is:</h1>
        <p class="jumbotron"><?php echo $responseOfRun['run_status']['output']?></p>
        <a href="index.php" class="btn btn-danger">Back
        </a>
    </div>
</body>
</html>