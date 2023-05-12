<!DOCTYPE html>
<html>
    <head>
        <title>mail info</title>
    </head>
    <body>
    <h4> username - {{$maildata ['title'] }} </h4>    
    <p> password -  {{$maildata ['body'] }} </p>    
    <p>  <a href="{{$maildata ['link'] }} ">click here -</a> </p>    
    
    </body>
</html>    