<?php
include 'db.php';

$result = mysqli_query($link,"SELECT * FROM aivcontent");
$result_s = mysqli_query($link,"SELECT * FROM aviterms");
$imageQuery = mysqli_query($link,"SELECT * FROM aivimages where name like 'hero image'");
$image = mysqli_fetch_assoc($imageQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utilities.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Spirit of Indonesia</title>
</head>

<body>
<nav id="navbarone">
    <div class="navcontainer">
        <img src="/images/aiv-header.svg" class="logo" href="#"></img>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary">$USD </button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" >EUR</a>
                    <a class="dropdown-item" >CAD</a>
                    <a class="dropdown-item" >AUD</a>
                    <a class="dropdown-item" >GBP</a>
                </div>
            </div>

        </div>

        <div class="social">
            <a href="http://facebook.com" target="_blank"><i class="fas fa-envelope fa-2x"></i></a>
            <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="http://pinterest.com" target="_blank"><i class="fab fa-pinterest fa-2x"></i></a>
        </div>

    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="logo" href="#"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">JOURNEYS</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Curated Journeys</a>
                        <a class="dropdown-item" href="#">Once Off Journeys</a>
                        <a class="dropdown-item" href="#">Exclusive Journeys</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">MELLAGAN ODESSEY</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GET INSPIRED</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">BLOGS</a>
                        <a class="dropdown-item" href="#">DESTINATIONS</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">WHY AIV?</a>
                        <a class="dropdown-item" href="#">OUR TEAM</a>
                        <a class="dropdown-item" href="#">GIFT CARDS</a>
                        <a class="dropdown-item" href="#">GRATITUDE LOYALTY PROGRAM</a>
                        <a class="dropdown-item" href="#">GET IN TOUCH</a>
                        <a class="dropdown-item" href="#">FAQs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">REVIEWS</a>
                </li>
            </ul>
            <div>
                <i class="fas fa-search"></i>
            </div>
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">GET STARTED</button>

        </div>
    </div>
</nav>






    <div class="hero" >

    <div class="container content hero-container">
        <img src="<?php echo $image['reference'];?>" class="img-hero" />
            <h1>Spirit of Indonesia</h1>
            <h3>Bali & Raja Ampat | December 01 - 10, 2022</h3>
        </div>
    </div>

        <section class="intro">
            <?php
        $i=0;
        while($row = mysqli_fetch_array($result)){
        ?>
            <p><?php echo $row["text"]; ?></p>

            <?php
            $i++;
        }
        ?>
        </section>

        <section class="tours">
            <div class="items">
                <div>
                    <h2 class="day">DAY 1 | D</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day3.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Necessitatibus rerum impedit excepturi nihil, quaerat sequi aut facilis sapiente
                                    repudiandae quisquam deleniti provident dolores ipsum ducimus consectetur iste
                                    libero nostrum voluptates!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="day">DAY 2 | B, L, D</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day2.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Doloremque accusantium iusto obcaecati tenetur neque facere facilis, adipisci rem
                                    magnam debitis sequi fuga soluta eius. Accusantium quos perspiciatis doloremque
                                    consequuntur laborum?</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="day">DAY 3 | B, L, D</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day3.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Eligendi vero molestiae incidunt sit ipsa, ea sunt maiores veritatis libero omnis at
                                    vitae qui ipsum eveniet aperiam labore fuga voluptas voluptatibus!</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="day">DAY 4 | B, L, D</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day4.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Fugit sapiente nobis pariatur, illum praesentium architecto nulla, voluptatem unde
                                    aliquid accusamus aliquam enim esse officia vitae tempora dicta animi quae id.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="day">DAY 5 | B, L</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day2.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Repellendus asperiores perferendis nihil voluptas totam fugiat at ad assumenda,
                                    obcaecati rem incidunt, id eveniet aperiam magnam aut quisquam recusandae non odit!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="day">DAY 6 | B, L, D</h2>
                    <div class="item">
                        <div class="item-image">
                            <img src="images/day4.jpeg" alt="" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Natus aut error ipsa animi. Inventore, explicabo commodi. Quae velit nulla
                                    voluptatem! Non architecto eveniet molestias ut, perspiciatis animi voluptates
                                    consequuntur quaerat!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </section>

    <section class="tours">
        <div class="items-tour">
            <div>
                <h2 class="day">DAY 7 | D</h2>
                <div class="item">
                    <div class="item-image">
                        <img src="images/day3.jpeg" alt="" />
                    </div>
                    <div class="item-text">
                        <div class="item-text-wrap">
                            <p class="item-text-category">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Necessitatibus rerum impedit excepturi nihil, quaerat sequi aut facilis sapiente
                                repudiandae quisquam deleniti provident dolores ipsum ducimus consectetur iste libero
                                nostrum voluptates!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="day">DAY 8</h2>
                <div class="item">
                    <div class="item-image">
                        <img src="images/day2.jpeg" alt="" />
                    </div>
                    <div class="item-text">
                        <div class="item-text-wrap">
                            <p class="item-text-category">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Doloremque accusantium iusto obcaecati tenetur neque facere facilis, adipisci rem magnam
                                debitis sequi fuga soluta eius. Accusantium quos perspiciatis doloremque consequuntur
                                laborum?</p>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="day">DAY 9 | B, L, D</h2>
                <div class="item">
                    <div class="item-image">
                        <img src="images/day3.jpeg" alt="" />
                    </div>
                    <div class="item-text">
                        <div class="item-text-wrap">
                            <p class="item-text-category">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Eligendi vero molestiae incidunt sit ipsa, ea sunt maiores veritatis libero omnis at
                                vitae qui ipsum eveniet aperiam labore fuga voluptas voluptatibus!</p>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="day">DAY 10 | B</h2>
                <div class="item">
                    <div class="item-image">
                        <img src="images/day4.jpeg" alt="" />
                    </div>
                    <div class="item-text">
                        <div class="item-text-wrap">
                            <p class="item-text-category">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Fugit sapiente nobis pariatur, illum praesentium architecto nulla, voluptatem unde
                                aliquid accusamus aliquam enim esse officia vitae tempora dicta animi quae id.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </section>

    <div class="checkout">
        <button class="btn" type="button">Block button</button>
        <button class="btn" type="button">Block button</button>
    </div>

    <section class="flex-columns">
        <div class="row">
            <div class="column">
                <div class="column-1">
                    <?php
                  $i=0;
                  while($row = mysqli_fetch_array($result_s)){
                      ?>
                    <p><?php echo $row["terms"]; ?></p>

                    <?php
                      $i++;
                  }
                  ?>
                </div>
            </div>


            <div class="column">
                <div class="column-2">
                    <h3>Our Offers</h3>

                    <div class="cont">

                        <div class="image-gallery h-2">
                            <div class="gallery-item">
                                <div class="image">
                                    <img src="images/day3.jpeg" class="img-1">
                                </div>
                            </div>
                        </div>


                        <div class="image-gallery h-2">
                            <div class="gallery-item">
                                <div class="image">
                                    <img src="images/day4.jpeg" class="img-1">
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <div class="image-gallery h-2">
                            <div class="gallery-item">
                                <div class="image">
                                    <img src="images/day4.jpeg" class="img-1">
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <div class="image-gallery h-2">
                            <div class="gallery-item">
                                <div class="image">
                                    <img src="images/day3.jpeg" class="img-1">
                                </div>
                                <p></p>
                            </div>
                        </div>

                    <div class="checkout">
                        <a href="#" class="btn">Book
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<section class="post">

    <div class="cont">

        <div class="image-gallery w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="images/day3.jpeg" class="img-1">
                </div>
            </div>
        </div>


        <div class="image-gallery h-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="images/day4.jpeg" class="img-1">
                </div>
            </div>
        </div>

        <div class="image-gallery w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="images/day1.jpeg" class="img-1">
                </div>
            </div>
        </div>

        <div class="image-gallery h-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="images/day5.jpeg" class="img-1">
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="main-footer" class="p-2">
    <div class="container footer-container">
        <div>
            <img src="/images/aiv-header.svg" class="logo" href="#"></img>
            <button class="btnlight" type="button">Block button</button>
            <button class="btnlight" type="button">Block button</button>
            <button class="btnlight" type="button">Block button</button>
        </div>
        <div>
            <h4>Partnerships & Media</h4>
            <ul class="list">
            <li><a href="#">lorem ipsum</a></li>
            <li><a href="#">lorem ipsum</a></li>
            </ul>

        </div>
        <div>
            <h4>What do you enjoy?</h4>
            <ul class="list">
                <li><a href="#">lorem ipsum</a></li>
                <li><a href="#">lorem ipsum</a></li>
                <li><a href="#">lorem ipsum</a></li>
                <li><a href="#">lorem ipsum</a></li>
                <li><a href="#">lorem ipsum</a></li>
                <li><a href="#">lorem ipsum</a></li>
            </ul>
        </div>
        <div>
            <h4>About Art In Voyage</h4>
            <ul class="list">
            <li><a href="#">lorem ipsum</a></li>
            <li><a href="#">lorem ipsum</a></li>
            <li><a href="#">lorem ipsum</a></li>
            <li><a href="#">lorem ipsum</a></li>
            </ul>
        </div>

    </div>
</footer>

</body>

</html>