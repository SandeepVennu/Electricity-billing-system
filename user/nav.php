<?php 
    require_once ("../Includes/session.php") ;
    if (isset($_SESSION['user'])) 
    {
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
    }
    else
        header("../index.php");
    
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="index.php"><i class="fa fa-bolt"></i> E-Billing System</a> 
    </div>
    <!-- /.navbar-header -->
    
    <a style="position:absolute;top:35px;left:-1px;font-size:20px;color:#7f7f7f;padding:5px;background-color: #000;border-bottom-right-radius:10px; " href="#menu-toggle" id="menu-toggle" <i class="fa fa-dedent"></i></a>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav" style="margin-right: 10px">
        <li class="dropdown">
            <?php 
                echo "<a style=\"font-size:16px\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> $user <b class=\"caret\"></b></a> ";
             ?>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" data-toggle="modal" data-target="#profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.top-nav -->
</nav>
<!-- /.navbar -->

<?php 
    require_once("../Includes/user.php");
    $result = retrieve_user_details($_SESSION['uid']);
    $row = mysqli_fetch_assoc($result);
 ?>

 <!-- MODAL -> USER INFO -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title"><b><i class="fa fa-fw fa-user"></i>PROFILE</b></h3>
            </div>
        <div class="modal-body text-center">
            <h4>Name : <code><?php echo $user ?></code></h4>
            <h4>Email : <code><?php echo $email ?></code></h4>
      
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->      

                                                                                                                     