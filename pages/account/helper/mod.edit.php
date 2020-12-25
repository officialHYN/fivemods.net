<?php 

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "Not allowed!";
    header('location: /account/logout/?url=error');
    exit();
  } else {


    function editMod() {

        $modName = htmlspecialchars($_POST['modName']);
        $modDesc = htmlspecialchars($_POST['modDesc']);
        $modCategory = htmlspecialchars($_POST['modCategory']);
        $tags = htmlspecialchars($_POST['tags']);
        $requiredMod = htmlspecialchars($_POST['requiredMod']);
        $mid = htmlspecialchars($_POST['id']);

        try {
        require_once('../../../config.php');

          $conn = new PDO('mysql:dbname=' . $mysql['dbname'] . ';host=' . $mysql['servername'] . '', '' . $mysql['username'] . '', '' . $mysql['password'] . '');
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
          $sql = "UPDATE mods SET m_name='$modName', m_category='$modCategory', m_description='$modDesc', m_tags='$tags', m_requiredmod='$requiredMod' WHERE m_authorid = '$mid'";
        
          // Prepare statement
          $stmt = $conn->prepare($sql);
        
          // execute the query
          $stmt->execute();
        
          // echo a message to say the UPDATE succeeded
          echo $stmt->rowCount() . " records UPDATED successfull";
          session_start();
          $_SESSION['success'] = '<div class="alert alert-success" id="success-alert">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>Successfully changed! </strong> Your mod got updated.
        </div>';
        header('location: /account/');
        } catch(PDOException $e) {
          echo "X";
          header('location: /account/');
          // echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn = null;
    }

    if(htmlspecialchars($_POST['call']) == "callFunc") {
        editMod();
        exit();
        die();
    }

  }