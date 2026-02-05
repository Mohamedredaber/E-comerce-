<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @php 
        $var= 100 ;
    @endphp 
    @if(  $var=== 100)
    <div>reda brh</div>
    <div>reda brh</div>
    @endif  
    <!-- <?php   
    if(1===1){
        echo ' <div>reda brh</div>' ; 
        echo ' <div>reda brh 2</div>' ; 
    }
    ?> -->
    <form action="">
        @csrf
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="submit">
    </form>
</body>
</html>