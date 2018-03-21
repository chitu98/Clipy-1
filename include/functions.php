<?php



function getidbyemail($email){
    include('config.php');
    $sql ="SELECT id from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0 ){
        while($row = mysqli_fetch_assoc($result)){
            return $row['id'];
        }
    }else{
        return 0;
    }
}

function getnamebyemail($email){
    include('config.php');
    $sql ="SELECT f_name from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0 ){
        while($row = mysqli_fetch_assoc($result)){
            return $row['f_name'];
        }
    }else{
        return 0;
    }
}

function getallclips(){
    include('config.php');
    $user = $_COOKIE['user'];
    
    $sql = "SELECT users.*, clips.* 
            from users,clips 
            where clips.user_id = users.id
            and users.id='$user'
            order by clips.id desc";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0 ){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="col-sm-4 mt-2">
                <form method="post" action="modify.php">
                    <div class="card">
                        <div class="card-header">
                            <input type="hidden" name="id" value="<?=htmlspecialchars(trim($row['id']))?>">
                            <input type="title" class="form-control title-card" placeholder="Title" value="<?=htmlspecialchars(trim($row['title']))?>" readonly>
                            <a class="btn btn-sm btn-danger float-right" style="color:white">Delete</a><a class="float-right">&nbsp;</a>
                            <a class="btn btn-sm btn-primary float-right" style="color:white" onclick=edit(this)>Edit</a>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control clip-card" name="" id="" placeholder="A New Clip" readonly><?=htmlspecialchars(trim($row['clip']))?></textarea><br>
                            <input class="btn btn-primary" style="width:100%;" type="hidden" Value="Save" name="save">
                        </div>
                    </div>
                </form>
             </div>
            <?php
        }
    }else{
        
    }
    
}



?>