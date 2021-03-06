<?php
/*
 * PHP PDO CRUD Tutorial 
 * In this tutorial we will see that how to create database 
 * CRUD operations using Object Oriented concept in PDO
 * @author 	: Mohamad Zaki Mustafa
 * @contact 	: mohdzaki04@gmail.com
 * @fb	 	: https://www.facebook.com/zakimedia
 * @tw	 	: https://twitter.com/mzmfizaki
 */

/*
 * @name Index page
 * @description this file will show the records from the mysql database. 
 */
?>
<?php
/*
 * the database connection
 */
include_once 'inc/inc.config.php';


/*
 * included at the beginning of all files
 */
include_once 'inc/inc.header.php';
?>

<div class="row mzm">    
    <div class="btn-group pull-right" role="group" aria-label="...">
        <a class="btn btn-info" href="add.php">Add Data</a>
    </div>
    <table id="index_users" class="table table-striped table-bordered table-highlight table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email ID</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            #Query Statement Select All from users
            $query = "SELECT * FROM staffs";

            $users = $crud->get_all_data($query);
            ?>
            <?php //var_dump($users) ?>
            <?php foreach ($users as $user): ?>
                <tr id="user-<?php echo $user['id']; ?>">
                    <td><?php echo $user['id']; ?></td>
<td><?php echo $user['fname']." ".$user['lname']; ?></td> 
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="edit.php?edit_id=<?php print($user['id']); ?>">Edit</a>                        
                        <a class="btn btn-warning btn-sm" href="view.php?view_id=<?php print($user['id']); ?>">View</a>                        
                        <a class="btn btn-danger btn-sm" href="delete.php?delete_id=<?php print($user['id']); ?>" onClick="return confirm('are you sure you want to delete?');">Delete</a>                        
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
