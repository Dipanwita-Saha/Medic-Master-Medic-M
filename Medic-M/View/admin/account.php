
<?php
session_start();
require '../../Model/QueryDB.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../hover-design.css">

    <title>Medic-M</title>
  </head>
  <body style="background-color: #22212e;">
    <div style="width: 50%">
      <div style="float: left; width: 50%; margin-left: 0%">
        <section
          style="
            background-color: #0f0e1a;
            width: 280px;
            height: 100vmin;
            position: fixed;
            overflow-y: scroll;
            scroll-behavior: smooth;
            scrollbar-width: none;
          "
        >
        <dl style="color: #1dd8c8">
            
            <dt align="center" style="padding-top: 10px; padding-bottom: 20px">
                <font
                  style="
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                      sans-serif;
                    font-size: 30px;
                  "
                  >
                  
                  Dashboard</font
                >
              </dt>
              <dt align="center" style="padding-top: 10px; padding-bottom: 20px">
                <img
                  src="../../View/image/defaultprofile.png"
                  alt=""
                  style="border-radius: 50%; width: 100px; height: 100px"
                />
              </dt>
  
              <dt align="center" style="padding-bottom: 30px">
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 22px;
                  "
                  ><?php echo $_SESSION["uname"]?></font
                >
              </dt>
  
              <br/><br/>
              <a href="admin_profile.php" style="text-decoration: none; color: azure">
                <dt
                  style="
                    background-color: #d63549;
                    border-style: groove;
                    border-color: #d3b3b3;
                    padding-top: 6px;
                    padding-bottom: 6px;
                  "
                >
              
                  <img
                    src="../../View/image/profile_icon.png"
                    alt=""
                    style="width: 23px; padding-left: 10px; padding-right: 5px"
                  />
                  <font
                    style="
                      font-family: 'Times New Roman', Times, serif;
                      font-size: 24px;
                    "
                    ><b>Profile</b></font
                  >
                </dt> </a
              ><br />
              <a href="search_user.php" style="text-decoration: none; color: azure"
                ><dt
                 class="left-option"
                >
                  <img
                    src="../../View/image/search_red_icon.png"
                    alt=""
                    style="width: 23px; padding-left: 10px; padding-right: 5px"
                  />
                  <font
                    style="
                      font-family: 'Times New Roman', Times, serif;
                      font-size: 24px;
                    "
                    ><b>Search User</b></font
                  >
                </dt> </a
              ><br />
              <a href="view_orders.php" style="text-decoration: none; color: azure"
                ><dt
                class="left-option"
                >
                  <img
                    src="../../View/image/job_red_icon.png"
                    alt=""
                    style="width: 23px; padding-left: 10px; padding-right: 5px"
                  />
                  <font
                    style="
                      font-family: 'Times New Roman', Times, serif;
                      font-size: 24px;
                    "
                    ><b>View Orders</b></font>
                </dt> </a
              ><br />
              <a href="view_products.php" style="text-decoration: none; color: azure"
                ><dt
                class="left-option"
                >
                  <img
                    src="../../View/image/NOTIFICATION_ICON.png"
                    alt=""
                    style="width: 23px; padding-left: 10px; padding-right: 5px"
                  />
                  <font
                    style="
                      font-family: 'Times New Roman', Times, serif;
                      font-size: 24px;
                    "
                    ><b>View Products</b></font
                  >
                </dt> </a
              ><br />
              
              <br /><br /><br /><br /><br /><br /><br /><br /><br />
              <dt align="center">
                <a
                  href="../../View/logout.php"
                  class="log-out"
                >
                  <font style="font-size: 20px"><b>Log Out</b></font>
                </a>
              </dt>
            </dl>
        </section>
      </div>
  
      <div
        style="
          float: left;
          width: 50%;
          margin-left: 43%;
          background-color: #22212e;
          padding-left: 2px;
          width: 150%;
          border-radius: 15px;
        "
      >
        <table style="width: 100%;">
          <tr>
            <td align="center"><h1 style="color: #d63549;">User's Account</h1>
              <hr style="width: 300px;"></td>
          </tr>

          <tr>
            <td align="center"><br><br>
              <img
                src="../../View/image/account.svg"
                alt=""
                style="width: 150px; height: 150px; border-radius: 50%"
              />
              <br><br>
              <hr>
            </td>
          </tr>

          <tr>
            <td style="position: relative; left: 15%; color: #d63549; font-size: 24px ;">
<?php
$result=querydb("SELECT BALANCE FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
$row = mysqli_fetch_assoc($result);
$balance=$row['BALANCE'];
?>

              <br />
              <font style="color: #d63549;"><b>Account Balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><span style="color: #b9f1ed;"> <?php echo $balance;?> &nbsp;&nbsp;&nbsp;BDT</span></font>
            </td>
          </tr>
          <tr>
            <td style="position: relative; left: 45%; color: #d63549; font-size: 24px ;">
              <br />
              <font style="color: #d63549;"><b>Enter Amount</b></font>
            </td>
          </tr>
          <tr>
            <td style="position: relative; left: 43%; color: #d63549; font-size: 24px ;">
              <br />
              <form action="../../Controller/admin/account.php" method="post">
              <font style="color: #d63549;"><b><input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="number" value="<?php echo $taka;?>" name="taka" required></b></font>
            </td>
          </tr>
          <tr>
            <td style="position: relative; left: 44%; color: #d63549; font-size: 24px ;">
              <br />
              <input type="submit" value="Deposit" name="deposit" class="button">
              <input type="submit" value="Withdraw" name="withdraw" class="button">

            </form> </td>
          </tr>
        
          <tr>
            <td style="position: relative; left: 85%; color: #d63549; font-size: 24px ;">
              <br><br><a href="admin_profile.php"><input type="submit" value="Go Back" name="goback" class="button"></a>
              <br><br><br>
            </td>
          </tr>
        </table>
      </div>


    </div>
    <script type="text/javascript">
  window.onload = function() {
    // alert("hi"); 
var image="../../Controller/";
image+="<?php echo $_SESSION["profile_pic"] ?>";
//imageshow

document.getElementById("imageshow").src = image;

  };
   
  </script>
  </body>
</html>
