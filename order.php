<?php $ROOT_ = './';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Orden</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body>
    <header>
        <nav class="nav_bar order_nav">
            <div class="nav_list_collection">
                <div class="info_content">
                    <h2>Gaming Hub</h2>
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
                    <div class="navbar_title">
                        <h3>Dirección</h3>
                        <div class="line"></div>
                    </div>
                    <p>Reparto San Juan. Centro de Salud Edgard Munguía, 1 C. al este, 1&#xbd; C. al norte.</p>
                    <div class="navbar_title">
                        <h3>Horarios</h3>
                        <div class="line"></div>
                    </div>
                    <div class="nav_bar_schedule">
                        <div class="columns">
                        <div class="schedule_column days">
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
                    </div>
                </div>
            </div>
            <a class="parent_link">
                <div class="nav_logo">
                    <object data="<?php echo $ROOT_;?>sfx/images/logo/logo.svg" type="image/svg+xml" class="svg-object" id="LOGO_">
                        <img src="<?php echo $ROOT_;?>sfx/images/logo/logo_fallback.png" alt="logo_fallback.png" id="LOGOFALLBACK_">
                    </object>
                </div>
            </a>
            <div class="burger">
                <div class="on"><i class="fa-solid fa-bars icon"></i></div>
                <div class="turn_off off"><i class="fa-solid fa-xmark icon"></i></div>
            </div>
        </nav>
    </header>
    <div class="container in_order">
        <div class="welcome_container">
            <div class="img_container">
                <img src="<?php echo $ROOT_;?>sfx/images/stock/title_background.png" alt="title_background" loading="lazy" />  
            </div>
            <div class="text_container">
                <h2>Welcome!</h2>
                <div class="line"></div>
                <h1 class="table_code" table-data="GH-NS-P1">GH-NS-P1</h1>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="container order" id="tutorial_section" menu-data-code="TUT_">
        <div class="container_title">
            <div class="line"></div>
            <h2>Tutorial</h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/TUT_01.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Wings of Hyrule</p>
                        <p class="menu_item_desc">
                            Alitas con salsa BBQ, Buffalo Sauce, agridulce o miel mostaza.
                            Con apio o zanahoria + aderezo ranch.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">6 pza.</p>
                            <p class="menu_item_price">C$ <span>180</span></p>
                            <div class="menu_add_item cart_section"  menu-item="TUT_01_01">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_01_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_01_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">12 pza.</p>
                            <p class="menu_item_price">C$ <span>350</span></p>
                            <div class="menu_add_item cart_section"  menu-item="TUT_01_02">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_01_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_01_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">18 pza.</p>
                            <p class="menu_item_price">C$ <span>440</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_01_03">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_01_03">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_01_03">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/TUT_02.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Nukes</p>
                        <p class="menu_item_desc">
                            Chunks con salsa BBQ, Buffalo, agridulce o miel mostaza.
                            Apio o zanahora + aderezo ranch.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">10 pza.</p>
                            <p class="menu_item_price">C$ <span>160</span></p>
                            <div class="menu_add_item cart_section"  menu-item="TUT_02_01">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_02_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_02_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">15 pza.</p>
                            <p class="menu_item_price">C$ <span>320</span></p>
                            <div class="menu_add_item cart_section"  menu-item="TUT_02_02">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_02_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_02_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">20 pza.</p>
                            <p class="menu_item_price">C$ <span>500</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_02_03">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_02_03">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_02_03">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/TUT_03.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Nachos of Chaos</p>
                        <p class="menu_item_desc">
                            Nachos con queso derretido, guacamole fresco, salsa de tomate
                            picante y jalapeños.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Pollo</p>
                            <p class="menu_item_price">C$ <span>240</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_03_01">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_03_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_03_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Res</p>
                            <p class="menu_item_price">C$ <span>260</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_03_02">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_03_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_03_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Mixto</p>
                            <p class="menu_item_price">C$ <span>500</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_03_03">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_03_03">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_03_03">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/TUT_04.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Koopas</p>
                        <p class="menu_item_desc">
                            Tostones con queso, frijoles y pico de gallo.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>130</span></p>
                            <div class="button_section cart_section" menu-item="TUT_04_01">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_04_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_04_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/TUT_05.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Sausage Men</p>
                        <p class="menu_item_desc">
                            Salchichas parrilleras con queso cheddar, jalapeños.
                            (No incluye DLC de papas)
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Single</p>
                            <p class="menu_item_price">C$ <span>180</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_05_01">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_05_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_05_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Squad</p>
                            <p class="menu_item_price">C$ <span>200</span></p>
                            <div class="menu_add_item cart_section" menu-item="TUT_05_02">
                                <button class="menu_button" id="removeFromCart" menu-data="TUT_05_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="TUT_05_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container order" id="single_drops" menu-data-code="SDS_">
        <div class="container_title">
            <div class="line"></div>
            <h2>Single Drops</h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/SDS_01.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Porkyburger</p>
                        <p class="menu_item_desc">
                            Jugosa hamburguesa de carne de res, queso derretido, tocino crujiente
                            y salsa especial de la casa.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Clásica</p>
                            <p class="menu_item_price">C$ <span>200</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_01_01">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_01_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_01_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Porky&#178;</p>
                            <p class="menu_item_price">C$ <span>440</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_01_02">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_01_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_01_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/SDS_02.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Tripletakos</p>
                        <p class="menu_item_desc">
                            Tacos suaves de pollo o res, con salsa picante, lechuga fresca
                            con queso rallado y guacamole.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Pollo</p>
                            <p class="menu_item_price">C$ <span>140</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_02_01">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_02_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_02_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Res</p>
                            <p class="menu_item_price">C$ <span>165</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_02_02">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_02_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_02_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/SDS_03.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Quesadillas Eidar</p>
                        <p class="menu_item_desc">
                            Quesadillas de tortilla de trigo, rellenas de queso derretido,
                            pimientos y cebollas salteadas, crema agria y salsa de tomate.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Pollo</p>
                            <p class="menu_item_price">C$ <span>155</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_03_01">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_03_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_03_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Res</p>
                            <p class="menu_item_price">C$ <span>180</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_03_02">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_03_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_03_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/SDS_04.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Watch Dog</p>
                        <p class="menu_item_desc">
                            Hot Dog con salsa de mostaza, ketchup y mayonesa. Con cebolla
                            caramelizada y pepinillos en rodajas.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Bacon</p>
                            <p class="menu_item_price">C$ <span>150</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_04_01">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_04_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_04_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Normal</p>
                            <p class="menu_item_price">C$ <span>100</span></p>
                            <div class="menu_add_item cart_section" menu-item="SDS_04_02">
                                <button class="menu_button" id="removeFromCart" menu-data="SDS_04_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="SDS_04_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container order" id="loot_boxes" menu-data-code="LBS_">
        <div class="container_title">
            <div class="line"></div>
            <h2>Loot Boxes</h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/LBS_01.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Big Smork Combo</p>
                        <p class="menu_item_desc">
                            3 Porky Clásicas o Porky&#178;.
                            3 Tres DLC de papas.
                            bebidas al gusto.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Clásica</p>
                            <p class="menu_item_price">C$ <span>650</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_01_01">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_01_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_01_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Porky&#178;</p>
                            <p class="menu_item_price">C$ <span>800</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_01_02">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_01_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_01_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/LBS_02.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Takos Royale</p>
                        <p class="menu_item_desc">
                            3 órdenes de Tripletakos.
                            2 Koopas.
                            3 bebidas al gusto.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Pollo</p>
                            <p class="menu_item_price">C$ <span>390</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBL_02_01">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_02_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_02_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Res</p>
                            <p class="menu_item_price">C$ <span>435</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_02_02">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_02_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_02_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/LBS_03.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Cofre de Quesadillas Eidar</p>
                        <p class="menu_item_desc">
                            3 Quesadillas Eidar.
                            3 DLC de papas o nachos.
                            3 bebidas al gusto.
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Pollo</p>
                            <p class="menu_item_price">C$ <span>385</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_03_01">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_03_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_03_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Res</p>
                            <p class="menu_item_price">C$ <span>405</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_03_02">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_03_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_03_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/LBS_04.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Watch Dogs Legion</p>
                        <p class="menu_item_desc">
                            3 órdenes de Watch Dogs. 
                            3 DLC de Papas.
                            3 bebidas al gusto
                        </p>
                        <div class="menu_price_section">
                            <div class="button_section" id="variant">
                                <button class="menu_button" id="open_variants">
                                    <i class="fa-solid fa-chevron-down icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu_item_interaction turn_off">
                    <div class="menu_variant">
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Bacon</p>
                            <p class="menu_item_price">C$ <span>450</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_04_01">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_04_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_04_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="menu_variant_item">
                            <p class="menu_item_detail">Normal</p>
                            <p class="menu_item_price">C$ <span>400</span></p>
                            <div class="menu_add_item cart_section" menu-item="LBS_04_02">
                                <button class="menu_button" id="removeFromCart" menu-data="LBS_04_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="LBS_04_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container order" id="dlcs" menu-data-code="DLC_">
        <div class="container_title">
            <div class="line"></div>
            <h2>DLC<span>s</span></h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/DLC_01.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Expansión de Papas</p>
                        <p class="menu_item_desc">
                            Papas fritas con queso cheddar, salsa de tomate y mayonesa.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>40</span></p>
                            <div class="button_section cart_section" menu-item="DLC_01_01">
                                <button class="menu_button" id="removeFromCart" menu-data="DLC_01_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="DLC_01_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/DLC_02.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Salchipapas</p>
                        <p class="menu_item_desc">
                            Salchichas y papas con queso cheddar. El clásico de toda la vida.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>80</span></p>
                            <div class="button_section cart_section" menu-item="DLC_02_01">
                                <button class="menu_button" id="removeFromCart" menu-data="DLC_02_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="DLC_02_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/DLC_03.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Pandora's Box</p>
                        <p class="menu_item_desc">
                            Una caja de nachos y salchichas con salsa de elección aleatoria de la casa.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>90</span></p>
                            <div class="button_section cart_section" menu-item="DLC_03_01">
                                <button class="menu_button" id="removeFromCart" menu-data="DLC_03_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="DLC_03_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container order" id="stat_ups" menu-data-code="STU_">
        <div class="container_title">
            <div class="line"></div>
            <h2>Stat-Ups</h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_01.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Gaseosas</p>
                        <p class="menu_item_desc">
                            La bebida (no) natural de toda la vida, elección al gusto. Inflige un buff 
                            de regeneración de mana.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>30</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_01">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_01">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_01">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_02.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Redbull</p>
                        <p class="menu_item_desc">
                            No hay como un buen boost para ganarle a tu rival. Inflige un buff de corta duración
                            a tu velocidad.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>30</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_02">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_02">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_02">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_03.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Agua</p>
                        <p class="menu_item_desc">
                            La bebida natural de toda la vida. Inflige un buff de regeneración de HP, mana, 
                            y stamina.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price"><span>DEMO</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_03">
                                <!-- <button class="menu_button" id="removeFromCart" menu-data="STU_01_03">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button> -->
                                <p class="menu_item_detail water">Pedir al mesero</p>
                                <!-- <button class="menu_button" id="addToCart" menu-data="STU_01_03">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_04.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Limonada</p>
                        <p class="menu_item_desc">
                            Dicen que si estás en el último pixel de HP, una buena limonada te recupera un 50%.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>50</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_04"> 
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_04">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_04">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_05.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Limonada de fresa</p>
                        <p class="menu_item_desc">
                            Por si prefieres un sabor más dulce para subir tu HP. Añade un buff de inmunidad
                            a debuffs.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>60</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_05">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_05">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_05">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_06.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Té de limón</p>
                        <p class="menu_item_desc">
                            No te sube mucho HP, pero da efectos adicionales. (Patch notes - 
                            Bugged, será arreglado en la Ver. 1.3eR.)
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>45</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_06">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_06">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_06">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_07.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Margarita</p>
                        <p class="menu_item_desc">
                            La limonada en testosterona. Inflige un ligero debuff de vulnerabilidad.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>145</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_07">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_07">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_07">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_08.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Piña Colada</p>
                        <p class="menu_item_desc">
                            O si prefieres un sabor a piña. Inflige un ligero debuff a la precisión de tus
                            ataques.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>140</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_08">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_08">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_08">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_09.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Smirnoff</p>
                        <p class="menu_item_desc">
                            La bebida del Battle Pass, buenos stats a un ligero costo. 
                            Inflige un ligero debuff a tu visión.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>95</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_09">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_09">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_09">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_10.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Bamboo</p>
                        <p class="menu_item_desc">
                            Si el anterior era el battle pass, esta es la suscripción mensual. 
                            Inflige un ligero debuff a evasión.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>85</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_10">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_10">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_10">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_11.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Victoria Clásica</p>
                        <p class="menu_item_desc">
                            La bebida del gamer nica.
                            Inflige un debuff significativo a tu defensa, pero aumenta el ataque.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>45</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_11">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_11">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_11">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="main_menu_item">
                    <div class="menu_item_img img_container">
                        <img src="<?php echo $ROOT_;?>sfx/images/menu_stock/STU_12.jpg" alt="stock_image" loading="lazy"/>   
                    </div>
                    <div class="menu_item_content">
                        <p class="menu_item_name">Toña</p>
                        <p class="menu_item_desc">
                            Otra bebida del gamer nica.
                            Inflige un debuff significativo a tu defensa, pero aumenta tu vigor.
                        </p>
                        <div class="menu_price_section">
                            <p class="menu_item_price">C$ <span>45</span></p>
                            <div class="button_section cart_section" menu-item="STU_01_12">
                                <button class="menu_button" id="removeFromCart" menu-data="STU_01_12">
                                    <i class="fa-solid fa-minus icon"></i>
                                </button>
                                <p class="menu_item_detail">0</p>
                                <button class="menu_button" id="addToCart" menu-data="STU_01_12">
                                    <i class="fa-solid fa-plus icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="continue_to_order off_">
        <div class="order_desc">
            <p>Total DMG</p>
            <h2>C$ <span class="bill">0</span></h2>
        </div>
        <button class="make_order">
            Ver pedido
        </button>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>