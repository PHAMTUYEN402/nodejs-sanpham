<?php
function construct(){
    echo "load đầu tiên </br>";

}
function indexAction(){
  load_model('index');
  $list_user=get_list_users();
  print_r($list_user);
}
function updateAction(){
    echo "cập nhật";
}
?>