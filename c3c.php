<?php
@system("clear");
//colors
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blue="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$while="\033[1;37m";
//program
$ggid="15iNqqBSQDR57-p5UkzSMRiJW3DqfGHm1";
If (file_exists("install.php") == false){
  echo $red,("Khởi động tải về bộ cài C3C BOT...\n");
  sleep(2);
  echo $nau,("-------------------------\n"),$green;
  @system("wget https://raw.githubusercontent.com/HerokeyVN/c3ctool/main/install.php && php install.php");
}
else {
  echo $red,("Khởi động cập nhập bộ cài C3C BOT...\n");
  echo $nau,("-------------------------\n"),$green;
  sleep(2);
  @system("rm install.php && wget https://raw.githubusercontent.com/HerokeyVN/c3ctool/main/install.php && php install.php");
};
?>
