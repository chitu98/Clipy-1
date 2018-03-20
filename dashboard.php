<?php
    include('include/config.php');
?>
    <?php
    include('include/header.php');
?>

        <?php 
    if(isset($_GET['success'])){
        if($_GET['success'] == 1){
            echo '<div class="alert alert-success fade show" role="alert" style="margin:35px;"><strong>Hey there,</strong> Login Successful</div>';
        }
    } 
?>

        <style>
            .title-card{
                width:auto;text-align:left;display:inline;max-width:166px;
            }
            .clip-card{
                height:250px
            }

        </style>
        <div class="container">
            <div class="row mt-2">
                <div class="col-sm-4">
                   <form method="post" action="save.php">
                    <div class="card">
                        <div class="card-header">
                           
                            <input type="title" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="card-body">
                            <textarea class="form-control clip-card" name="clip" placeholder="A New Clip"></textarea><br>
                            <button class="btn btn-primary" style="width:100%;" type="submit" name="save">Save</button>
                        </div>
                        
                    </div>
                    </form>
                </div>
                
       <?php include('include/functions.php') ?>
               
               <?php getallclips(); ?>
                <!-- 
                  <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            Title
                        </div>
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                -->
                
            </div>
        </div>

<script>
function edit(block){
    console.log('edit-clicked');
    console.log(block);
}
</script>

<?php
    include('include/footer.php');
?>
