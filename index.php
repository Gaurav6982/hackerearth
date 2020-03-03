

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .main{
        margin-top:100px;
    }
</style>
<body>
    <div class="container main">
        <form action="run.php" method="post">
            <label for="code" >Enter Your Code:</label><br>
            <textarea name="code" id="code" cols="30" rows="10" class="form-control"></textarea><br>
            <input type="submit" name="submit"value="submit" class="submit btn btn-primary">
        </form>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
   $(function() {
        $(".submit").click(function(){
            // const message=$("#code").val();
            // // alert(message);
            // // var response=$.getJSON("");
            // // import requests;
            // var RUN_URL = 'https://api.hackerearth.com/v3/code/run/';
            // var CLIENT_SECRET = 'e2135791eb36c62e2fb53d0730f8488cb5a15569';
            // var source = "print 'Hello World'"
            // var data = {
            //     'client_secret': CLIENT_SECRET,
            //     'async': 0,
            //     'source': source,
            //     'lang': "PYTHON",
            //     'time_limit': 5,
            //     'memory_limit': 262144,
            //  }

            // var r = requests.post(RUN_URL, data=data)
            // console.log(r.json());



        })
    
    });
</script>
</html>