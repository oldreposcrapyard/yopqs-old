<?PHP
/* Skrypt pochodzi z ksi¹¿ki "505 skryptów dla webmastera" */
/* autor: Marcin Lis                 http://marcinlis.com  */
function checkPass($pass)
{
  if(!($fd = fopen("7894w5y42y9n2cfh758n29c.txt","r"))){
    return false;
  }

  while (!feof ($fd)){
    $line = trim(fgets($fd));
    if($line == $pass){
      return true;
    }
  }
  return false;
}

if(isSet($_POST["haslo"])){
  if(checkPass($_POST["haslo"])){
    include('85nygnw73w9niu.html');
  }
  else{
    include('index.php');
  }
}
else{
  include('index.php');
}

?>