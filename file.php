<?php
#write a file...................

$a=fopen("fprac.txt","w");
 echo fwrite($a,"iam akhila");
fclose($a);
#read a file......................
$h=fopen("fprac.txt","r");
 echo fread($h,filesize("fprac.txt"));
fclose($h);
#append
$j=fopen("fprac.txt","a");
fwrite($j,"seediri akhila");
fclose($j);
$l=fopen("fprac.txt","r");
 echo fread($l,filesize("fprac.txt"));
fclose($l);
#new file creation
$s=fopen("ff.txt","x");
fwrite($s,"this is new file ");
fclose($s);
$h=fopen("ff.txt","r");
 echo fread($h,filesize("ff.txt"));
fclose($h);

#it gives line by line
echo file_get_contents("fprac.txt");
$li=file("fprac.txt");
foreach($li as $lt){
    echo $lt."<br>";
}
echo file_put_contents("fprac.txt","ihloo",FILE_APPEND);#file_append for no override

echo file_get_contents("fprac.txt");

#FILE INFORMATION................

if(file_exists("fprac.txt"))
{
    echo "file existed....";
}
else{
    echo "not existed";

}

echo "hello";
echo filesize("fprac.txt")."bytes";
echo filetype("fprac.txt");
$z="fprac.txt";
echo date("d-m-y H:i:s",filectime("fprac.txt"))."<br>";
echo date("d-m-y H:i:s",fileatime("$z"))."<br>";
echo date("d-m-y H:i:s",filemtime("$z"))."<br>";

echo fileowner("$z")."<br>";
echo filegroup("$z");
echo fileinode("$z")."<br>"


#FILE HANDLING FUNCTIONS.....................................
copy("fprac.txt","ff.txt");
rename("ff.txt","gg.txt");
#permanently removed
unlink("dd.txt");
mkdir("lakhila");
rmdir("lakhila");#removes empty directory
if(is_file("fprac.txt")){
    echo "yes it is a file"."<br>";
}
if(is_dir("hpp")){
    echo "yes it is a directory";
}

#DIRECTORY HANDLING............................................
$a=scandir("hpp");
print_r($a);
echo getcwd();//current working directory
chdir("akh");//change current directory name
echo getcwd();
$dir=opendir("hpp");
readdir($dir);
closedir($dir);

#file locking.......................................................
$fp=fopen("fprac.txt","w");
if(flock($fp,LOCK_EX)){
    fwrite($fp,"good yaar");
    flock($fp,LOCK_UN);

}
fclose($fp);
echo file_get_contents("fprac.txt");

?>

