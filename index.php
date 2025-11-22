    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clases terraria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php 
    require 'src/views/layouts/header.php';
    require 'src/helpers/functions.php';
    $classes = getClasses();
    ?>

    <div class="div-main">
        
        <h1 id="title">Clases</h1>
        <hr>

        <div id="cite">
        <blockquote cite="https://terraria.fandom.com/es/wiki/Clases">
            <p>
        Terraria no tiene una clase de jugador formal ni un sistema de nivelación. Sin embargo, las armas se pueden agrupar en cuatro 
        categorías distintas según su tipo de daño: cuerpo a cuerpo, a distancia, mágicas e invocador. Cada clase tiene sus fortalezas y 
        debilidades, y ofrece una amplia variedad de armas para elegir.
            </p>
        </blockquote>
        <p>—Wiki Terraria, <cite>Clases</cite></p>
        </div>

        <div class="index">
            <p>Índice</p>
            <ol>
                <li><a href="#melee">Melee</a></li>
                <li><a href="#rango">Rango</a></li>
                <li><a href="#mago">Mago</a></li>
                <li><a href="#invocador">Invocador</a></li>
                <li><a href="#invocador">Ejemplos de armas y armaduras</a></li>
            </ol>
        </div>
        <br>
        
        <main id = "clases">
        <?php foreach($classes as $class) : ?>
            <section id = <?=$class['id']?>>
                <H2><?=$class['name']?></H2>
                <?=$class['description']?>
                <br><br>
            </section>
        <?php endforeach ?>


            <div class="grid-cont">

                <div class="melee-grid-weapons">
                    <p>Armas melee</p>
                    <ul>
                        <li>Filo de la noche</li>
                        <li>Excalibur</li>            
                        <li>Terrablade</li>
                    </ul>
                </div>

                <div class="melee-grid-armor">
                    <p>Armadura melee</p>
                    <ul>
                        <li>Minituburón</li>
                        <li>Megatiburón</li>
                        <li>Arco de tormentas de Dédalo</li>

                    </ul>
                </div>

                <div class="range-grid-weapons">
                    <p>Armas de rango</p>

                    <ul>
                        <li>Minituburón</li>
                        <li>Megatiburón</li>
                        <li>Arco de tormentas de Dédalo</li>
                    </ul>
                </div>

                <div class="range-grid-armor">
                    <p>Armadura de rango</p>

                    <ul>
                        <li>Bastón de limo</li>
                        <li>Bastón óptico</li>
                        <li>Bastón del dragón estelar</li>
                    </ul>
                </div>

                <div class="mage-grid-weapons">
                    <p>Armas de mago</p>
                    
                    <ul>
                        <li>Varita de chispas</li>
                        <li>Serpiente de cristal</li>
                        <li>Esfera magnética</li>
                    </ul>
                </div>

                <div class="mage-grid-armor">
                    <P>Armadura de mago</P>

                    <ul>
                        <li>Armadura mago</li>
                        <li>Armadura mago</li>
                        <li>Armadura mago</li>
                    </ul>
                </div>

                <div class="summoner-grid-weapons">
                    <p>Armas de invocador</p>

                    <ul>
                        <li>Bastón de limo</li>
                        <li>Bastón óptico</li>
                        <li>Bastón del dragón estelar</li>
                    </ul>
                </div>

                <div class="summoner-grid-armor">
                    <p>Armadura de invocador</p>

                    <ul>
                        <li>Armadura invocador</li>
                        <li>Armadura invocador</li>
                    </ul>
                </div>

                <div class="summoner-grid-accesories">
                    <p>Accesorios de invocador</p>
                    <ul>
                        <li>Accesorio inv</li>
                        <li>Accesorio inv</li>
                    </ul>
                </div>
            </div>

            <section class = "card-container">

                <div class="card">
                <div class="content">
                    <img src="<?=ASSETS_PATH?>/zenit_recipe.jpg" alt="no">
                </div>
                
                <div class="card-footer">
                    <h2>Zenit</h2>
                    <p>Arma melee del endgame</p>
                    <button class ="card-button">Más info</button>
                </div>
            </div>
            
            <div class="card">
                <div class="content">
                    <img src="<?=ASSETS_PATH?>/duke.webp" alt="no">
                </div>
                
                <div class="card-footer">
                    <h2>Duke fishron</h2>
                    <p>Uno de los jefes más difíciles</p>
                    <button class ="card-button">Más info</button>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <img src="<?=ASSETS_PATH?>/dungueon.webp" alt="no">
                </div>
                
                <div class="card-footer">
                    <h2>Mazmorra</h2>
                    <p>Información sobre la mazmorra</p>
                    <button class ="card-button">Más info</button>
                </div> 
            </div>
            
            <div class="card">
                <div class="content">
                    <img src="<?=ASSETS_PATH?>/frost_moon.jpg" alt="no">
                </div>
                
                <div class="card-footer">
                    <h2>Luna gélida</h2>
                    <p></a>Guía de el evento "Luna gélida"</p>
                    <button class ="card-button"><a href="frost-moon.html">Más info</a></button>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <img src="<?=ASSETS_PATH?>/pumping_moon.png" alt="no">
                </div>
                
                <div class="card-footer">
                    <h2>Luna de calabaza</h2>
                    <p>Guía de el evento "Luna de calabaza"</p>
                    <button class ="card-button">Más info</button>
                </div>
            </div>

        </section>
            <!--
            <div>
                <br>
                Wiki de terraria: <br>
                <iframe src="https://terraria.fandom.com/es/wiki/Clases" frameborder="0" width="500" height="500"></iframe>
            </div>   
            -->

            <!--
                <div class="image-cont">
                <video autoplay muted controls>
                <source src = "assets/pecao2.mp4" type = "video/mp4">
                </video>
            </div>             
            -->


            <form action="">

                <h3>Dejanos tus comentiarios</h3>

                <input type="text" class="form-input" placeholder="Ingresa tu nombre de usuario"> <br>

                <textarea name="" class="form-textarea" placeholder="Danos alguna sugerencia"></textarea> <br>

                <input type="text" class="form-input" placeholder="Qué navegador usas" list="browsers">
                <datalist id="browsers">
                    <option value="Chorome"></option>
                    <option value="FireFox"></option>
                    <option value="Edge"></option>
                    <option value="Safari"></option>
                </datalist> <br>

                <select name="" class="form-input" id="">
                    <option value="" disabled selected>Motivo de comentario (seleccionar)</option>
                    <optgroup label="Reportes">
                        <option value="reporte">Reporte</option>
                        <option value="sugerencia">sugerencia</option>
                    </optgroup>
                    <optgroup label="Dudas">
                        <option value="pregunta">Pregunta</option>
                    </optgroup>
                </select> <br>

                <button>Enviar</button>

            </form>

            <br>
            <?php require 'src/views/layouts/footer.php'?>

        </main>
    </div>
</body>
</html>
