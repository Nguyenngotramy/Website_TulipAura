<?php
include_once('../database/database.php');

// function get_menudacap($id_parent){
//     $menu = get_menu();
//      $list_menu = [];
//      foreach ($menu as $value){
//         if($value['id_parent'] == $id_parent){
//             $list_menu[] = $value;
//             $child = get_menudacap($value['id']);
//             $list_menu = array_merge($list_menu,$child);
            
//         }
//      }
// return $list_menu;
// }
// $menu = get_menudacap(0);
// foreach ($menu as $value){
// echo '<pre>';
// echo $value['namemenu'];
// echo '</pre>';
// }
function get_menudacap($id_parent) {
    $menu = get_menu();
    $list_menu = [];

    foreach ($menu as $value) {
        if ($value['id_parent'] == $id_parent) {
            $value['submenu'] = get_menudacap($value['id']); // Gọi đệ quy để lấy menu con
            $list_menu[] = $value;
        }
    }

    return $list_menu;
}
