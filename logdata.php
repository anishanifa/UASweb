<?php 
    session_start();
    include('include/config.php');
    if(strlen($_SESSION['login'])==0)
    { 
    header('location:index.php');
    }
    else{
    date_default_timezone_set('Asia/Makassar');
    $currentTime = date( 'd-m-Y h:i:s A', time () );

    if(isset($_GET['del']))
    {
    mysqli_query($con,"delete from userlog where id = '".$_GET['id']."'");
    $_SESSION['delmsg']="User Logs deleted !!";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
        <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
        <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
      
    </head>
    <body>
    <br /><br />
    <div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="logout.php">Logout !!</a>
        </div>
    </div>
    </nav>
    <br />
    <br />

    <div class="form-group">

    <?php if(isset($_GET['del']))
    {?>
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
        </div>
    <?php } ?>

    <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>User Email</th>
            <th>User IP </th>
            <th>Login Time</th>
            <th>Logout Time </th>
            <th>Status </th>
            <th>Action </th>
        </tr>
        </thead>
        <tbody>

        <?php $query=mysqli_query($con,"select * from userlog");
        $cnt=1;
        while($row=mysqli_fetch_array($query))
        {
            ?>                  

            <tr>

            <td><?php echo htmlentities($cnt);?></td>
            <td><?php echo htmlentities($row['username']);?></td>
            <td><?php echo htmlentities($row['userip']);?></td>
            <td> <?php echo htmlentities($row['loginTime']);?></td>
            <td><?php echo htmlentities($row['logout']); ?></td>
            <td><?php $st=$row['status'];

            if($st==1)
            {
            echo "Successfull";
            }
            else
            {
            echo "Failed";
            }
            ?></td>
            <td>
            <a href="dashbord.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>
        </td> 
        </tr>

        <?php $cnt=$cnt+1; } ?>                           

    </table>
    
    
    </div>

    <!--Script Javascript-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'colvis'
        ]
        } );
    } );
    </script>

    </body>
</html>
<?php } ?>