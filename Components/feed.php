<?php
require_once('AJAX/Utility/users.class.php');
$user = new user();



if(!isset($_SESSION['user']))
{
    header('Location: ../');
}

$subscriber_id = $_SESSION['user'];

$isActiveUser = $user->isActiveSubscriber($subscriber_id);

if(!$isActiveUser){
    header('Location: Components/profilesettings.php');
}
?>

<div class="container" style="padding-bottom: 80px;padding-top: 20px;">
    <div class="row">
        <div class="col-md-8">
            <div id="Search_Results" style="height: 100%;">

        </div>
        </div>
        <div class="col-md-4">
            <div>
                <ul class="list-group" style="border-radius: 20px;" id="feedCategories">

                </ul>
            </div>
        </div>
    </div>
</div>