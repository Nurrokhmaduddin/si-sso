<?php  
date_default_timezone_set('Asia/Jakarta');
session_start();

$con = mysqli_connect('localhost','imam','masakdiquailx2022!@#','akuntansi'); 

if (!$con) 
{
    die('Connect Error: ' . mysqli_connect_errno());
}

if(isset($_COOKIE['___ACCOUNTING_PTTMI___']))
{
  $cookie      = $_COOKIE['___ACCOUNTING_PTTMI___'];
  $cookieData  = explode('|', $cookie);

  $_SESSION['username'] = $cookieData[0];
  $_SESSION['Id'] = $cookieData[1];
  $_SESSION['nama'] = $cookieData[2];
  $_SESSION['status'] = $cookieData[3];
}



function base_url($url = null)

  {
    $base_url = "https://accounting.pttmi.id";
    if ($url != null)
    {
    	return $base_url."/".$url;
    }
    else
    {
    	return $base_url;
    }

  } 

?>
