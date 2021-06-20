<?php
if(!isset($_SESSION['user']))
{
    header('Location: ../');
}
?>

<div class="container" style="padding-bottom: 80px;padding-top: 20px;">
    <div class="row">
        <div class="col-md-8">
            <div id="Search_Results" style="height: 100%;border-radius: 20px;border-width: 1px;border-style: solid;">

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