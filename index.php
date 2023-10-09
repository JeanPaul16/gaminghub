<?php $ROOT_ = './';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Inicio</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body>
    <?php include($ROOT_.'includes/header.inc.php');?>
    <div class="container" id="home">
        <div class="welcome_container">
            <div class="img_container">
                <img src="<?php echo $ROOT_;?>sfx/images/stock/title_background.png" alt="title_background" loading="lazy" />  
            </div>
            
            <div class="text_container">
                <h2>Welcome to</h2>
                <div class="line"></div>
                <h1 id="scramble_">Gaming Hub</h1>
                <div class="line"></div>
                <h2>La puerta al elixir gamer</h2>
            </div>
        </div>
    </div>
    <div class="container" id="gallery">
        <div class="gallery_container">
            <ul class="stock_collection" id="image_collection">
                <li class="img_container">
                    <img src="<?php echo $ROOT_;?>sfx/images/stock/stock_1.jpg" alt="stock_image" loading="lazy"/>   
                </li>
                <li class="img_container">
                    <img src="<?php echo $ROOT_;?>sfx/images/stock/stock_3.jpg" alt="stock_image" loading="lazy"/>  
                </li>
                <li class="img_container">
                    <img src="<?php echo $ROOT_;?>sfx/images/stock/stock_2.jpg" alt="stock_image" loading="lazy"/>  
                </li>
                <li class="img_container">
                    <img src="<?php echo $ROOT_;?>sfx/images/stock/stock_4.jpg" alt="stock_image" loading="lazy"/>  
                </li>
            </ul>
            <div class="map_container">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=608&amp;hl=en&amp;q=3%20Av%20Sureste,%20Managua%2014036%20Managua+(Gaming%20Hub)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
    <div class="container" id="pricing">
        <div class="pricing_container">
            <div class="container_title">
                <h2>Estadía</h2>
                <div class="line"></div>
            </div>
            <div class="inner_container">
                <div class="text_container">
                    <h2>Gasto Mínimo</h2>
                    <div class="columns">
                        <div class="container_column">
                            <h3>Adulto</h3>
                            <div class="line"></div>
                            <div class="item">
                                <p><span>2</span> Jugadores</p>
                                <p>300 C$</p>
                            </div>
                            <div class="item">
                                <p><span>3</span> Jugadores</p>
                                <p>500 C$</p>
                            </div>
                            <div class="item">
                                <p><span>4+</span> Jugadores</p>
                                <p>700 C$</p>
                            </div>
                        </div>
                        <div class="container_column">
                            <h3>Menor de 18</h3>
                            <div class="line"></div>
                            <div class="item">
                                <p><span>2</span> Jugadores</p>
                                <p>150 C$</p>
                            </div>
                            <div class="item">
                                <p><span>3</span> Jugadores</p>
                                <p>250 C$</p>
                            </div>
                            <div class="item">
                                <p><span>4+</span> Jugadores</p>
                                <p>450 C$</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img_container">
                    <img src="<?php echo $ROOT_;?>sfx/images/stock/availability.jpg" alt="availability_image" loading="lazy" />  
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="games">
        <div class="games_container">
            <div class="container_title">
                <h2>Games</h2>
                <div class="line"></div>
            </div>
            <div class="games_table">
                <table>
                    <tr>
                        <th data-name="ps5">PlayStation 5</th>
                        <th data-name="xbox">Xbox</th>
                        <th data-name="switch">Nintendo Switch</th>
                        <th data-name="retro">Retro</th>
                    </tr>
                    <tr>
                        <td>Marvel's Spider-Man</td>
                        <td>Forza Horizon 5</td>
                        <td>The Legend of Zelda: Breath of the Wild</td>
                        <td>Super Mario 64</td>
                    </tr>
                    <tr>
                        <td>God of War</td>
                        <td>Halo Infinite</td>
                        <td>Mario Kart 8</td>
                        <td>Donkey Kong</td>
                    </tr>
                    <tr>
                        <td>The Last of Us</td>
                        <td>Fall Guys</td>
                        <td>Super Smash Bros. Ultimate</td>
                        <td>Kirby's Adventure</td>
                    </tr>
                    <tr>
                        <td>Red Dead Redemption 2</td>
                        <td>Call of Duty: Black Ops III</td>
                        <td>Pikmin 4</td>
                        <td>¡Y mucho más!</td>
                    </tr>
                    <tr>
                        <td>Horizon Forbidden West</td>
                        <td>¡Y mucho más!</td>
                        <td>Super Smash Bros. Ultimate</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Devil May Cry 5</td>
                        <td></td>
                        <td>Hollow Knight</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>¡Y mucho más!</td>
                        <td></td>
                        <td>Bayonetta 3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>¡Y mucho más!</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container" id="availability">
        <div class="availability_container">
            <div class="container_title">
                <h2>Disponibilidad</h2>
                <div class="line"></div>
            </div>
            <div class="columns">
                <div class="schedule_column">
                    <h3>Miércoles - Viernes</h3>
                    <h3>Sábado - Domingo</h3>
                    <h3>Lunes - Martes</h3>
                </div>
                <div class="schedule_column hours">
                    <h3>2:00 PM - 10:00 PM</h3>
                    <h3>11:00 AM - 11:00 PM</h3>
                    <h3>Cerrado</h3>
                </div>
            </div>
            <div class="social_media">
                <ul class="social_links">
                    <li>
                        <a href="./">
                            <i class="fa-brands fa-square-instagram icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./">
                            <i class="fa-brands fa-facebook icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./">
                            <i class="fa-brands fa-tiktok icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./">
                            <i class="fa-brands fa-discord icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>