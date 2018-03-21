<?php
    include('include/config.php');
?>
    <?php
    include('include/header.php');
?>


        <style>
            .title-card {
                text-align: left;
                display: inline;
                max-width: 166px;
            }

            .clip-card {
                height: 250px
            }
        </style>

        <div class="container">

            <div class="jumbotron">
                <h1 class="text-primary">Hello
                    <?php echo htmlspecialchars(trim($_COOKIE['name'])) ?>,
                    <span class="h1 text-primary">Add Some Clips Today</span>
                    <button class="btn float-right btn-lg btn-success" data-toggle="modal" data-target="#addclip">Add</button>
                </h1>

                <!-- Model For Adding Clip -->
                <div class="modal fade" id="addclip" tabindex="-1" role="dialog" aria-labelledby="addclipLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="save.php">
                                <div class="card">
                                    <div class="card-header">

                                        <input type="title" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="card-body">
                                        <textarea class="form-control clip-card" name="clip" placeholder="A New Clip"></textarea>
                                        <br>
                                        <button class="btn btn-primary" style="width:100%;" type="submit" name="save">Save</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">

                <!-- <div class="col-sm-4 mt-2">
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
                </div> -->

                <?php include('include/functions.php') ?>

                <?php getallclips(); ?>

            </div>
        </div>

        <script>
            var editableBlocks = Array();
            var editableClicked = false;

            function edit(block) {
                if (editableBlocks.indexOf(block) > -1) {
                    return;
                }
                if (editableClicked) {
                    alert('You Can Edit only One blok at a Time');
                    return;
                }
                editableClicked = true;
                editableBlocks.push(block);
                console.log('edit-clicked');
                block.parentNode.getElementsByTagName("input")[1].removeAttribute('readonly');
                block.parentNode.parentNode.getElementsByTagName("input")[2].setAttribute("type","button");
                block.parentNode.parentNode.getElementsByTagName("textarea")[0].removeAttribute('readonly');
                block.parentNode.parentNode.getElementsByClassName('card-body')[0].appendChild(document.createElement('br'));
                console.log(block.parentNode);


            }
        </script>

        <?php
    include('include/footer.php');
?>