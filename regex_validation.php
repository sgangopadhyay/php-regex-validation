<?php
// Program : PHP Regex validation of some important stuffs EMAIL, URL, MOBILE Number, PAN, GST
// Programmed By : Suman Gangopadhyay
// Date : 20-Jan-2017
// Caveats : Indian and Mobile number may change

//Email validation
function email_validation($email){
  $regex = '/([a-z0-9])+\@+([a-z])+(\.)+([a-z]{2,6})/';
  if (preg_match($regex,$email)) {
    return 1;
  }else {
    return 0;
  }
}
//Indian mobile number validation
function indian_mobile_validation($mobile){
  $regex = '/[7-9]\d{9}/';
  if (preg_match($regex,$mobile)) {
    return 1;
  }else {
    return 0;
  }
}
//Bangladesh mobile number validation
function bangladesh_mobile_validation($mobile){
  $regex = '/01[^1-4]\d{8}/';
  if (preg_match($regex,$mobile)) {
    return 1;
  }else {
    return 0;
  }
}
// URL validation
function url_validation($url){
  $regex1 = '/((https://|http://|w{3}\.)+[a-z]{1,180}\.[a-z]{2,10})/';
  $regex2 = '/(www\.)+([a-z]{1,180}\.)+([a-z]{2,10})/';
  $regex3 = '/\b[a-z]{1,180}\.[a-z]{1,3}\b/';
  if (preg_match($regex1,$url)||preg_match($regex2,$url)||preg_match($regex3,$url)) {
    return 1;
  }else {
    return 0;
  }
}
//Indian PAN CARD validation
function pannumber_validation($pannumber){
  $regex = '/\b[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}\b/';
  if (preg_match($regex,$pannumber)) {
    return 1;
  }else {
    return 0;
  }
}
//Indian GST Number validation
function gst_validation($gst){
  $regex = '/\b[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}\b/';
  if (preg_match($regex,$gst)) {
    return 1;
  }else {
    return 0;
  }
}
//Indian PINCODE Number validation
function indian_pincode_validation($pincode){
  $regex = '/\b[1-9]\d{5}\b/';
  if (preg_match($regex,$pincode)) {
    return 1;
  }else {
    return 0;
  }
}
// HTML tag validation
function html_tag_validation($html_tag){
  $regex = '/((<+[a-z]+>)|<+/+[a-z]+>)/';
  if (preg_match($regex,$html_tag)) {
    return 1;
  }else {
    return 0;
  }
}
//Stop SQL Injection into the Database by disallowing all "Special Characters"
function stop_sql_injection_validation($sql_injection){
  $regex = '/^([1-zA-Z0-1@.\s]{1,255})$/';
  if (preg_match($regex,$sql_injection)) {
    return 1;
  }else {
    return 0;
  }
}
?>
