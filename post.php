    
    <?php require_once('header.php'); ?>
    <?php require_once('db.php');
     
       if(empty($_SESSION['id'])) {
         
         header('Location:login.php');
       }
       if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = true;
        $sql = "DELETE FROM `blog` WHERE `blog`.`id` = '$id'";
        $result = mysqli_query($con, $sql);
      }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset( $_POST['snoEdit'])){
            $id = $_POST["snoEdit"];
            $title = $_POST["titleEdit"];
            $description = $_POST["descriptionEdit"];
            // Sql query to be executed
          //$sql = "UPDATE `blog` SET `title` = '$title' , `description` = '$description' WHERE `blog`.`post_id` = $post_id";
          $sql= "UPDATE `blog` SET `title` = '$title', `description` = '$description' WHERE `blog`.`id` ='$id'";
          $result = mysqli_query($con, $sql);
          if($result){
              $update = true;
            }
        }
     }
     ?>
     <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?php echo $base_url; ?>post.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Note Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div> 
          </div>
          <!-- <div class="form-group">
              <label for="desc">Note Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div> 
          </div> -->
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
   
   
    <div class="container">
        <table class="table" id="myTable">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">&nbsp;Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * FROM `blog` WHERE `user_id` = ".$_SESSION['id'];
                $result = mysqli_query($con, $sql);
                $id=0;
                while($row= mysqli_fetch_assoc($result)){
                    $id = $id + 1;
                    echo "<tr>
                    <th scope='row'>". $id . "</th>
                    <td>". $row['title'] . "</td>
                    <td>". $row['description'] . "</td>
                    <td>". $row['img_add'] . "</td>
                    <td><button class='edit btn btn-sm btn-primary' id=".$row['id'].">Edit</button> <button class='delete btn btn-sm btn-danger' id=d".$row['id'].">Delete</button></td>
                    </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/blog/post.php?delete=${id}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
    </script>
     <?php require_once('footer.php'); ?>

