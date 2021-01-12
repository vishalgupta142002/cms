<?php

function getUsersList($method, $action) {
    include_once("app/admin/views/layouts/header-view.php");
    //  include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
   
    $page = (isset($_GET['page']) && ($_GET['page'] <= 1)) ? 0 : @$_GET['page'];
    $per_page = 2;
    $start_limit = $page * $per_page;
    $end_limit = $per_page;
    $users_list = getUsers($start_limit, $end_limit);
    $users_count = getUsersCount();
    $total_pages = ceil($users_count/$per_page);
    include_once("app/admin/views/users/users-list-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}


 function editUser($method, $action){
    if($method === 'get'){
        include_once("app/admin/models/views/users/Users-Model.php");

        $user_profile = getProfile();
        
        include_once("app/admin/views/layouts/edit-user.php");
        
        exit();
    }
}


function  profileUser($method, $action){
    if($method === 'get'){
        include_once("app/admin/models/users/Users-Model.php");
        $user_profile = getProfile();
        include_once("app/admin/views/layouts/admin-user-profile.php");
        exit();
    }else if($method ==='post'){
        include_once("app/admin/models/users/users-Model.php");
        if(setProfile()){
            header("Location: index.php?admin=show&module=users&action=userprofile");
        }else{
            $message = " There is something error.";
            header("Location: index.php?admin=show&module=users&action=edituserprofile&error=$message");
        }
        // echo "<pre>"; print_r($_REQUEST);die;
    }
}
// function setDeleteUsers() {
//     include_once("app/admin/models/users/users-Model.php");
//     deleteUser();
//     header("Location: ?admin=show&module=users&action=list");
// }
?>