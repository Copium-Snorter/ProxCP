<?php

if (count(get_included_files()) == 1) {
    exit("You just broke everything.");
}
if ($user->isLoggedIn() && $user->hasPermission("admin")) {
    $log->log("User ID " . parse_input(Input::get("id")) . " masquerade access attempted", "admin", 0, $user->data()->username, $_SERVER["REMOTE_ADDR"]);
    $userExists = $db->get("vncp_users", ["id", "=", parse_input(Input::get("id"))])->all();
    if (count($userExists) == 1 && $userExists[0]->group == 1 && $userExists[0]->id != $user->data()->id) {
        $oldUsername = $user->data()->username;
        $user->logout();
        $user = new User();
        $login = $user->admLogin($userExists[0]->username);
        if ($login) {
            $log->log("User ID " . parse_input(Input::get("id")) . " masquerade access successful", "admin", 0, $oldUsername, $_SERVER["REMOTE_ADDR"]);
            Redirect::to("index");
        } else {
            Redirect::to("login");
        }
    } else {
        Redirect::to("admin");
    }
} else {
    Redirect::to("index");
}

?>
