<?php
/*function checkPass($pass)
{
    if (!($fd = fopen("passwords.txt", "r"))) {
        return false;
    } //!($fd = fopen("passwords.txt", "r"))
    while (!feof($fd)) {
        $line = trim(fgets($fd));
        if ($line == $pass) {
            return true;
        } //$line == $pass
    } //!feof($fd)
    return false;
}
*/
/*$arr = array(
    "haslo1",
    "haslo2",
    "haslo3"
  );*/
  //done
function checkPass($array,$passwd_given)
{
  foreach($array as $pass){
    if($passwd_given == $pass){
      return true;
    }
  }
  return false;
}
?>