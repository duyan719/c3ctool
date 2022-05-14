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
$version ="0.2.1";
$c3cversion = "0.6.0";
@system("clear");
echo $nau,(" ____        __    ____        ____     _____   ______   
/\  _`\    /'__`\ /\  _`\     /\  _`\  /\  __`\/\__  _\  
\ \ \/\_\ /\_\L\ \\\ \ \/\_\   \ \ \L\ \\\ \ \/\ \/_/\ \/  
 \ \ \/_/_\/_/_\_<_\ \ \/_/_   \ \  _ <'\ \ \ \ \ \ \ \  
  \ \ \L\ \ /\ \L\ \\\ \ \L\ \   \ \ \L\ \\\ \ \_\ \ \ \ \ 
   \ \____/ \ \____/ \ \____/    \ \____/ \ \_____\ \ \_\
    \/___/   \/___/   \/___/      \/___/   \/_____/  \/_/
");
echo ("\n");
echo $red,(".______________________.\n");
echo $red,
    ("|"),
    $yellow,(" Version:$version        "),
    $red,("|\n");
echo $red,("|"),
    $yellow,(" C3CBOT $c3cversion support "),
    $red,("|\n");
echo $red,(".----------------------.\n");
echo $yellow,("+ C3C Create By: Le Quang Lam.\n
+ Tool Create By: Nguyen Huynh Tien Lam.\n
+ Advised by: Mai Bao Huy\n
              Nguyen Van Ha\n
              Nguyen Thang.\n");
echo $nau,("-------------------------\n");
if (file_exists("start-ubuntu.sh")){
  echo $yellow,("Đã khởi động Unbuntu!\n"); 
  echo $nau,("-------------------------\n");
  if (file_exists("/data/data/com.termux/files/home/ubuntu-fs/root/c3c.php")){
    echo $yellow,("Bạn vui lòng gõ \"php c3c.php\"để khởi động menu\n");
	@system("bash ./start-ubuntu.sh");
  }
  else {
	@system("echo \"apt-get update && apt-get install git && apt-get install php && apt-get install wget && wget https://raw.githubusercontent.com/HerokeyVN/c3ctool/main/linux/c3c.php\"|bash ./start-ubuntu.sh");
        @system("clear");
        echo $blue,("Chào mừng bạn đến với C3C BOT\n");
        echo $nau,("-------------------------\n");
        echo $green,("Vui lòng nhập \"php c3c.php\" để tiếp tục...\n");
        echo $nau,("-------------------------\n");
        @system("bash ./start-ubuntu.sh");
    //echo $yellow,("Bạn vui lòng dán lệnh này xuống dưới để tải về bộ cài C3C Bot cho Ubuntu(không sao chép ngoặc kép(\")):\n\"apt-get update && apt-get install git && apt-get install php && apt-get install wget && wget https://drive.google.com/u/0/uc?id=1asKfvI8zjvkGGUEyqZUzr0Fc5FAz5ORp && mv uc?id=1asKfvI8zjvkGGUEyqZUzr0Fc5FAz5ORp c3c.php && php c3c.php\"\n");
  };
  //echo $nau,("-------------------------\n");
}
else {
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,(" Để chạy Bot không ảnh hưởng đến trải nghiệm, hệ thống của \nmáy bạn phải đáp ứng yêu cầu sau:\n
+ Ram: 3gb trở lên\n
+ Rom: Còn trống ít nhất 3,5gb\n
+ Hệ điều hành: Android 7.0 trở lên\n
 Nếu máy bạn đáp ứng những yêu cầu trên thì hãy nhấn \"Enter\" còn không hãy nhấn \"Ctrl+C\" :3\n");
readline();
@system("clear");
echo $nau,("-------------------------\n");
echo $yellow,("Nếu bạn thấy hệ thống báo:\n");
echo $green,("\"What would you like to do about it ?  Your options are:\n
    Y or I  : install the package maintainer's version\n
    N or O  : keep your currently-installed version\n
      D     : show the differences between the versions\n
      Z     : start a shell to examine the situation\n
 The default action is to keep your current version.\"\n");
echo $yellow,("Thì hãy nhấn \"enter\" để chạy tiếp nha (cấm chọn lung tung).\n");
readline();
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu.\n");
sleep(0.5);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu..\n");
sleep(0.5);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu...\n");
sleep(0.5);
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt Ubuntu 18...\n");
echo $nau,("-------------------------\n");
echo $green,("");
@system("curl https://raw.githubusercontent.com/AndronixApp/AndronixOrigin/master/repo-fix.sh > repo.sh && chmod +x repo.sh && echo N|bash repo.sh && pkg update -y && pkg install wget curl proot tar -y && wget https://raw.githubusercontent.com/AndronixApp/AndronixOrigin/master/Installer/Ubuntu/ubuntu.sh -O ubuntu.sh && chmod +x ubuntu.sh && bash ubuntu.sh");
echo ("\n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động Ubuntu...\n");
echo $nau,("-------------------------\n");
sleep("2");
/*echo $yellow,("Hãy sao chép và dán đoạn mã vào bên dưới (Không sao chép \"<\" và \">\" nhé):\n"), $green,
("<\n
dpkg --configure -a\n
apt-get update && apt-get install git && apt-get install php && apt-get install wget && wget https://drive.google.com/u/0/uc?id=1asKfvI8zjvkGGUEyqZUzr0Fc5FAz5ORp && mv uc?id=1asKfvI8zjvkGGUEyqZUzr0Fc5FAz5ORp c3c.php && php c3c.php\n
>\n
"), 
$yellow,
("Nếu thấy nó báo:"), 
$green,("\"After this operation, \"...\" MB of additional disk space will be used.\"\n"),
$yellow,
("hãy nhấn \"Enter\" nhé.\n");
echo $nau,("-------------------------\n");
echo $yellow,("Nếu thấy thông báo lỗi. Xin chia buồn, vui lòng xóa dữ liệu termux và chạy lại từ đầu.\n");
echo $nau,("-------------------------\n"), $green;*/
@system("cd /data/data/com.termux/files/home/
echo \"dpkg --configure -a && apt-get update && echo y|apt install git && echo y|apt install php && echo y|apt install wget && wget https://raw.githubusercontent.com/HerokeyVN/c3ctool/main/linux/c3c.php\"|bash ./start-ubuntu.sh");
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Vui lòng nhập \"php c3c.php\" để tiếp tục...\n");
echo $nau,("-------------------------\n");
@system("bash ./start-ubuntu.sh");
};
?>
