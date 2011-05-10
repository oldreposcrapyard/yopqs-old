<?PHP
/* Skrypt pochodzi z ksi¹¿ki "505 skryptów dla webmastera" */
/* autor: Marcin Lis                 http://marcinlis.com  */
function checkPass($pass)
{
  if(!($fd = fopen("k5abdayc9nauyds.txt","r"))){
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
    include('ga6kr9sjw92mwshqus.html');
  }
  else{
    include('index.php');
  }
}
else{
  include('index.php');
}

?>