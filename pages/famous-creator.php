<?php include('./include/header-banner.php'); ?>
<section class="bg-white text-dark pt-5 pb-5">
   <div class="container">
      <div class="row text-center">
         <div class="col">
            <h1 class="mb-4"><?php echo $lang['famous-creator'];?></h1>
         </div>
      </div>
      <div class="row text-center mt-md-5">
         <?php
            $sql = "SELECT * FROM user ORDER BY totaldownloads DESC LIMIT 8";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                  if (!empty($row['name'])) {
                     echo '<div class="col-md-3 mb-5 col-12">
                     <a class="profile" href="/user/'.$row["name"].'" title="Go to the profile">
                     <img alt="Profile Picture" style="width: 150px; height: 150px;" class="img-fluid mb-4 mt-3 rounded-circle img-rised" src="'.$row["picture"].'">
                     </a>
                     <h4 class="text text-primary"><b>'.$row["totaldownloads"].' <i class="fas fa-download"></i></b></h4>
                     <h3><strong><a class="profile" href="/user/'.$row["name"].'" title="Go to the profile">'.$row["name"].'</a></strong></h3>';
                  if($row["premium"] == 1) {
                     echo '<p><i class="fas fa-crown" title="Premium content creator"></i> Premium Content Creator</p>';
                  }
                  echo '<div class="mr-3 align-self-center d-block">';
                  if(!empty($row["discord"])) {
                     echo '<a href="/ref?rdc='.$row["discord"].'" role="button" class="fab fa-discord fa-md text-primary smallButton"></a>';
                  }
                  if(!empty($row["twitter"])) {
                     echo '<a href="/ref?rdc='.$row["twitter"].'" role="button" class="fab fa-twitter fa-md text-primary smallButton"></a>';
                  }
                  if(!empty($row["youtube"])) {
                     echo '<a href="/ref?rdc='.$row["youtube"].'" role="button" class="fab fa-youtube fa-md text-primary smallButton"></a>';
                  }
                  if(!empty($row["github"])) {
                     echo '<a href="/ref?rdc='.$row["github"].'" role="button" class="fab fa-github fa-md text-primary smallButton"></a>';
                  }
                  echo '</div></div>';
                  }
               }
            }
         ?>
      </div>
   </div>
</section>