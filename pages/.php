<?php

require_once('./config.php');

$pdo = new PDO('mysql:dbname=' . $mysql['dbname'] . ';host=' . $mysql['servername'] . '', '' . $mysql['username'] . '', '' . $mysql['password'] . '');

// User input
$site = (int)isset($_GET['site']) ? (int)$_GET['site'] : 1;
$perPage = (int)isset($_GET['max']) && $_GET['max'] <= 100 ? (int)$_GET['max'] : 12;

// Positioning
$start = ($site > 1) ? ($site * $perPage) - $perPage : 0;

// Query
$articles = $pdo->prepare("
   SELECT SQL_CALC_FOUND_ROWS *
   FROM mods
   LEFT JOIN user ON mods.m_authorid = user.id
   ORDER BY m_id DESC
   LIMIT {$start}, {$perPage};
");

$articles->execute();
$articles = $articles->fetchAll(PDO::FETCH_ASSOC);

// Query 2
$most = $pdo->prepare("
   SELECT SQL_CALC_FOUND_ROWS *
   FROM mods
   LEFT JOIN user ON mods.m_authorid = user.id
   WHERE m_approved = 0 AND m_blocked = 0
   ORDER BY m_downloads DESC
   LIMIT 0, 4;
");

$most->execute();
$most = $most->fetchAll(PDO::FETCH_ASSOC);

// Pages
$total = $pdo->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$sites = ceil($total / $perPage);


if (isset($_SESSION['downloadMod'])) {
   $downloadMod = $pdo->prepare("SELECT m_downloadlink FROM mods WHERE m_id = :id");
   $downloadMod->execute(array("id" => $_SESSION['lastDownload']));
   while ($row = $downloadMod->fetch()) {
      $downloadLink = $row['m_downloadlink'];
   }
   header("Location: $downloadLink");
   unset($_SESSION['downloadMod']);
}


?>
<style>
    .container-img {
        position: relative;
    }

    .text-block {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background-color: black;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
<div>
    <?php include('./include/header-banner.php'); ?>
    <section class="pt-5 pb-5 blinker">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3"><?php echo $lang['categories']; ?></h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1 rounded" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 rounded" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <a href="/search/?query=Vehicles&cat=1&submit-search=">
                                            <div class="card container-img rounded shadow1">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['vehicles']; ?>-348px-217px-cover" title="<?php echo $lang['vehicles']; ?>" src="https://wallpaperaccess.com/full/2192755.jpg">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['vehicles']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="/search/?query=Maps&cat=1&submit-search=">
                                            <div class="card container-img rounded shadow1">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['maps']; ?>-348px-217px-cover" title="<?php echo $lang['maps']; ?>" src="https://media.sketchfab.com/models/fe9ddaaea413487395b9f0656fd0afd7/thumbnails/36fefca8f37d405689ed7f618dc39857/62c7f8001ffc4936ab905945ad9264dd.jpeg">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['maps']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="/search/?query=Weapons&cat=1&submit-search=">
                                            <div class="card container-img rounded shadow1">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['weapons']; ?>-348px-217px-cover" title="<?php echo $lang['weapons']; ?>" src="https://img.gta5-mods.com/q95/images/real-weapons-v-animated/46f77a-20161130020713_1.jpg">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['weapons']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card container-img rounded shadow1">
                                            <a href="/search/?query=Peds&cat=1&submit-search=">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['peds']; ?>-348px-217px-cover" title="<?php echo $lang['peds']; ?>" src="https://libertycity.net/uploads/download/gta5_newskins/fulls/an4ttg7sk621gulo1957qdc9u0/15388334076961_32d199-grand-theft-auto-v-screenshot.jpg">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['peds']; ?></h4>
                                                </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card container-img rounded shadow1">
                                            <a href="/search/?query=Liveries&cat=1&submit-search=">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['liveries']; ?>-348px-217px-cover" title="<?php echo $lang['liveries']; ?>" src="https://wallpapercave.com/wp/wp3949177.png">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['liveries']; ?></h4>
                                                </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card container-img rounded shadow1">
                                            <a href="/search/?query=Scripts&cat=1&submit-search=">
                                                <img class="img-fluid cover-cat rounded" alt="img_<?php echo $lang['scripts']; ?>-348px-217px-cover" title="<?php echo $lang['scripts']; ?>" src="https://c4.wallpaperflare.com/wallpaper/579/458/496/computer-unixporn-unix-command-lines-wallpaper-preview.jpg">
                                                <div class="text-block">
                                                    <h4><?php echo $lang['scripts']; ?></h4>
                                                </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($site <= 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a class="page-link rounded" href="?site=<?php echo $site - 1; ?>&max=<?php echo $perPage; ?>#product"><?php echo $lang['previous']; ?></a>
                </li>
                <?php for ($x = 1; $x <= $sites; $x++) : ?>
                    <li class="page-item <?php if ($site === $x) {
                                                echo 'active';
                                            } ?>"><a class="page-link" href="?site=<?php echo $x; ?>&max=<?php echo $perPage; ?>#product"><?php echo $x; ?></a></li>
                <?php endfor; ?>
                <li class="page-item <?php if ($site == $x - 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a class="page-link rounded" href="?site=<?php echo $site + 1; ?>&max=<?php echo $perPage; ?>#product"><?php echo $lang['next']; ?></a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <?php foreach ($articles as $article) : ?>
                    <?php

                    if ($article['m_downloads'] >= 1000 && $article['m_downloads'] < 1000000) {
                        $suffix = "k";
                        $donwloads = $article['m_downloads'] / 1000;
                        $donwloads = round($donwloads, 1);
                    } elseif ($article['m_downloads'] >= 1000000) {
                        $suffix = "M";
                        $donwloads = $article['m_downloads'] / 1000000;
                        $donwloads = round($donwloads, 1);
                    } else {
                        $suffix = "";
                        $donwloads = $article['m_downloads'];
                    }

                    if ($article['m_approved'] != "0" || $article['m_blocked'] != "0") {
                        continue;
                    }

                    ?>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4 shadow-sm rounded shadow1 <?php echo $do; ?>">
                            <a href="/product/<?php echo $article['m_id']; ?>/">
                                <img class="card-img-top img-fluid cover rounded" async=on src="<?php echo explode(" ", $article['m_picture'])[0]; ?>" alt="<?php echo $article['m_name']; ?>-IMAGE">

                            </a>
                            <div class="card-body">
                                <a href="/product/<?php echo $article['m_id']; ?>/" class="<?php echo $css_text ?>">
                                    <h5 class="card-topic"><?php echo $article['m_name']; ?></h5>
                                </a>
                                <p class="card-text"><?php echo str_replace("<br />", " ", substr($article['m_description'], 0, 130) . "..."); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <?php

                                    if (empty($article['m_price'])) {
                                        echo '<div class="btn-group">
                              <form action="/helper/manage.php?o=index&download=' . $article['m_id'] . '" method="post">
                                 <button type="submit" class="btn btn-sm btn-outline-success">' . $lang['download'] . '</button>
                              </form>
                              <button type="button" class="btn btn-sm btn-success" title="' . number_format($article['m_downloads']) . ' downloads">' . $donwloads . $suffix . ' <i class="fas fa-download"></i></button>
                           </div>';
                                    } else {
                                        echo '<div class="btn-group">

                              <form action="/product/' . $article['m_id'] . '/" method="post">
                                 <button type="submit" class="btn btn-sm btn-outline-info">Purchase</button>
                              </form>
                              <button type="button" class="btn btn-sm btn-info" title="' . $article['m_price'] . '€">' . $article['m_price'] . '€</button>
                           </div>';
                                    }

                                    ?>
                                    <small class="text-muted"><?php echo $lang['by']; ?> <a href="/user/<?php echo $article['name']; ?>"><b><?php echo $article['name']; ?></b></a> <?php if ($article['premium'] == 1) {
                                                                                                                                                                                        echo '<a href="/partner-program/" class="fas fa-crown text text-muted" title="Premium content creator"></a>';
                                                                                                                                                                                    } ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="centerBasedFooterAd" style="text-align: center; bottom: 35%;">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Footer-Block-Ads -->
        <ins class="adsbygoogle" style="display:inline-block;width:820px;height:175px" data-ad-client="ca-pub-9727102575141971" data-ad-slot="1867802594"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <section>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($site <= 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a class="page-link rounded" href="?site=<?php echo $site - 1; ?>&max=<?php echo $perPage; ?>#product"><?php echo $lang['previous']; ?></a>
                </li>
                <?php for ($x = 1; $x <= $sites; $x++) : ?>
                    <li class="page-item <?php if ($site === $x) {
                                                echo 'active';
                                            } ?>"><a class="page-link" href="?site=<?php echo $x; ?>&max=<?php echo $perPage; ?>#product"><?php echo $x; ?></a></li>
                <?php endfor; ?>
                <li class="page-item <?php if ($site == $x - 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a class="page-link rounded" href="?site=<?php echo $site + 1; ?>&max=<?php echo $perPage; ?>#product"><?php echo $lang['next']; ?></a>
                </li>
            </ul>
        </nav>
    </section>
</div>
<?php
$pdo = null;
?>