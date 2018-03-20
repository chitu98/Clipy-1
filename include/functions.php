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

function getallclips(){
    include('config.php');
    $user = $_COOKIE['user'];
    
    $sql = "SELECT users.*, clips.* 
            from users,clips 
            where clips.user_id = users.id
            and users.id= $user";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0 ){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                           <input type="title" class="form-control title-card" placeholder="Title" value="<?=htmlspecialchars(trim($row['title']))?>" readonly>
                            <button class="btn btn-sm btn-danger float-right" style="margin-left:10px">Delete</button>
                            <button class="btn btn-sm btn-primary float-right" onclick=edit(this.parent)>Edit</button>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            <textarea class="form-control clip-card" name="" id="" placeholder="A New Clip" readonly><?=htmlspecialchars(trim($row['clip']))?></textarea>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
        }
    }else{
        
    }
    
}



?>