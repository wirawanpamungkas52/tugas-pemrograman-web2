<?php 
//  MYSQL_CONNECT() 
// hostname or ip of server $servername='localhost'; 
 
// username and password  
$dbusername='root'; 
$dbpassword=''; 
$link=mysql_connect ("$servername","$dbusername","$dbpassword") 
or die ( " Not able to connect to server "); 
if ($link) 
{  
echo "ok....koneksi berhasil"; 
} 
?> 

<? 
// MYSQL_QUERY() 
mysql_connect("localhost","root",""); 
$dbname="lat_dbase"; 
$cek=mysql_query("CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");   
if($cek){  
 echo "Database $dbname berhasil dibuat"; 
} 


<? 
// MYSQL_SELECT_DB() 
mysql_connect("localhost","root",""); //koneksi 
mysql_select_db("lat_dbase"); // mengaktifkan database 
//membuat tabel 
$sql = "CREATE TABLE tbl_mhs     
( mhsID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(mhsID), 
FirstName varchar(15), 
LastName varchar(15), 
Age int )"; 
mysql_query($sql); 
// input data 
$input=mysql_query("insert into tbl_mhs(FirstName,LastName,Age) 
values('Anjar','Prabowo',25)"); 
?>
