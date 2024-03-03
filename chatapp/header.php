<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mychats</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <style>
body{
 background-image: url("imgss.jpg");
 background-color: #cccccc;
 height: 500px; 
 background-position: center; 
 background-repeat: no-repeat; 
 background-size: cover;
}
.form form .button input{
  height: 45px;
  border: none;
  color: #fff;
  font-size: 17px;
  background: #3366FF;
  border-radius: 10px;
  cursor: pointer;
  margin-top: 13px;
}
.users header .logout{
  display: block;
  background: #3366FF;
  color: #fff;
  outline: none;
  border: none;
  padding: 7px 15px;
  text-decoration: none;
  border-radius: 10px;
  font-size: 17px;
}
.users .search button{
  position: relative;
  z-index: 1;
  width: 47px;
  height: 42px;
  font-size: 17px;
  cursor: pointer;
  border: none;
  background: #3366FF;
  color: #fff;
  outline: none;
  border-radius: 0 5px 5px 0;
  transition: all 0.2s ease;
}
.users .search button.active{
  background: #3366FF;
  color: #fff;
}
.outgoing .details p{
  background: #3366FF;
  color: #fff;
  border-radius: 18px 18px 0 18px;
}
.chat-box{
  position: relative;
  min-height: 500px;
  max-height: 500px;
  overflow-y: auto;
  padding: 10px 30px 20px 30px;
  background: #f7f7f7;
  box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
              inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
}
.typing-area button{
  color: #fff;
  width: 55px;
  border: none;
  outline: none;
  background: #3366FF;
  font-size: 19px;
  cursor: pointer;
  opacity: 0.7;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
  transition: all 0.3s ease;
}
</style>
</head>