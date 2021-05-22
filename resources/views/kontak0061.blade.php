<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>1461900061-Vincent Yulius Sukianto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
}
*{
    margin: 0px;
    padding: 0px;
}
.header{
    width: 100%;
    height: 50px;
    background-color: red;
}
.header ul a{
    position: relative;
    top: 10px;
    margin-left: 20px;
    text-decoration: none;
    font-size: 18pt;
    color: white;
}
.header nav a{
    position: relative;
    top: -14px;
    left: 90px;
    margin-left: 30px;
    text-decoration: none;
    font-size: 9pt;
    color: white;
}
.title-content{
    text-align: center;
    margin-top: 20px;
}
.list-materi{
    text-align: center;
    margin-top: 10px;
    color: black;
}
.list-materi-content{
    margin-top: 10px;
    text-align: justify;
    margin-left: 5px;
}
.about-me{
    text-align: center;
    margin-top: 10px;
    color: black;
}
.about-me-content{
    margin-top: 10px;
    text-align: justify;
    margin-left: 5px;
    margin-right: 10px;
}
.contact{
    text-align: center;
    margin-top: 10px;
    color: black;
}
.contact-content{
    margin-top: 10px;
    text-align: justify;
    margin-left: 5px;
    margin-right: 10px;
}
    </style>
</head>
<body>
    <div class="header">   
    <ul>
        <a>PTW</a>
    </ul>
    <nav> 
        <a href="{{url('/home0061')}}">Home</a>
        <a href="{{url('/home0061/artikel0061')}}">Artikel</a>
        <a href="{{url('/home0061/kontak0061')}}">Contact Us</a>
    </nav>
    </div>
    <div class="contact">
        <h1><p>Contact</p></h1>
    </div>
    <div class="contact-content">
        <img src="{{asset('img/vincent.jpg')}}" width=280px height=380px>
        <p>No WhatsApp : 08810262215 / 088217246612</p>
        <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: vincentyulius96@gmail.com</p>
        <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Wisma Kedung Asem Indah O-5, Rungkut, Surabaya</p>
    </div>
    </body>
</html>
