<!DOCTYPE html>

<?php error_reporting(0); ?>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PORTFOLIO - Mathilde H. | Développeuse Front-End à Angers.">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="./styles.scss">

        <title>Mathilde H. - Développeuse Front-End.</title>
    </head>

    <body>
        <header>
            <div class="nav">
                <input type="checkbox" id="nav-check">
                <div class="nav-btn">
                    <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>

                <div class="nav-links">
                    <a href="index.php">home</a>
                    <a href="#about">à propos</a>
                    <a href="#skills">compétences</a>
                    <a href="#portfolio">portfolio</a>
                    <a href="#education">formation</a>
                    <a href="#contact">contact</a>
                </div> 
            </div>
            <div class="little-nav"></div>
        </header>

        <div class="name-index" id="name-index">
            <div class="name">
                <h1>Mathilde H.</h1>
                <h2>Développeuse Front-End</h2>
            </div>
        </div>

        <section class="index" id="index">
            <div class="container">
                <div class="img-index">
                    <img src="./assets/images/background.jpg" alt="">
                </div>

                <div class="pres">
                    <h3 class="hello">Hello !</h3>
                    <h4>Je m'appelle Mathilde Hamon et je suis Développeuse Front-End Junior à Angers.</h4>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <h5>_ Un mélange de créativité, de passion pour le digital et de curiosité.</h5>
                <p>Après une formation au Développement Web commencée en 2019 et un diplôme obtenu en septembre 2020, je continue jour après jour à m'exercer sur mes compétences, à en acquérir d'autres et à m'inspirer pour imaginer de nouvelles choses et créer de jolis petits projets.
                <br />
                Passionnée par la création sous toutes ses formes et l'univers du web en général, j'ai naturellement choisi de m'orienter vers ce métier qui me plait de plus en plus. Créative et plutôt spécialisée dans le visuel, je me suis orientée vers le Front-End.</p>
                <h6 class="hobbies">Mes centres d'intérêt : l'art/le graphisme, la décoration d'intérieur, les séries TV, les jeux vidéos, les nouvelles technologies, les animaux, la cuisine et plein d'autres choses.</h6>
            </div>
        </section>

        <section class="skills" id="skills">
            <div class="container">
                <div class="section-heading">
                    <h4>Compétences</h4>
                </div>

                <div class="my-skills">
                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-html5"></i>
                        </div>
                        <h6>HTML5</h6>
                    </div>
                
                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-css3"></i>
                        </div>
                        <h6>CSS3</h6>
                    </div>

                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-js"></i>
                        </div>
                        <h6>JavaScript</h6>
                    </div>

                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-react"></i>
                        </div>
                        <h6>React</h6>
                    </div>

                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-node"></i>
                        </div>
                        <h6>Node.js</h6>
                    </div>

                    <div class="skill">
                        <div class="icon-container">
                            <i class="fab fa-sass"></i>
                        </div>
                        <h6>Sass</h6>
                    </div>
                </div>
                
                <div class="others">
                    <div class="tools">
                        <h6>BDD -</h6>
                        <p>MySQL, MongoDB.</p>
                    </div>

                    <div class="tools">
                        <h6>Outil de test -</h6>
                        <p>Postman.</p>
                    </div>

                    <div class="tools">
                        <h6>Versioning -</h6>
                        <p>Git, GitHub.</p>
                    </div>

                    <div class="tools">
                        <h6>IDE -</h6>
                        <p>VS Code, IntelliJ.</p>
                    </div>

                    <div class="tools">
                        <h6>Hébergement -</h6>
                        <p>Hostinger.</p>
                    </div>

                    <div class="tools">
                        <h6>Méthode -</h6>
                        <p>Agile.</p>
                    </div>

                    <div class="languages">
                        <h6>Langues -</h6>
                        <p>Anglais (courant), Espagnol (courant).</p>
                    </div>

                    <div class="soft-skills">
                        <h6>Soft Skills -</h6>
                        <p>Créativité, sens esthétique, détermination, curiosité, esprit d'équipe.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-heading">
                    <h4>Portfolio</h4>
                    <h5>Quelques exemples de projets réalisés dans le cadre de mon autoformation</h5>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img class="portfolio-img" src="./assets/images/portitem-2.png" alt="portitem-2">
                    </div>

                    <div class="portfolio-description">
                        <h5>Compte à rebours - <i class="fab fa-html5"></i> <i class="fab fa-css3-alt"></i> <i class="fab fa-js-square"></i></h5>
                        <p>Une petite application de compte à rebours. J'ai réalisé cela avec HTML/CSS pour tout le visuel et les calculs se font avec JavaScript. Sur le visuel, la date d'échéance était fixée à Noël, mais la logique reste la même.</p>
                        <a href="https://github.com/MathildeHmn/countdown-timer" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img class="portfolio-img" src="./assets/images/portitem-5.png" alt="portitem-5">
                    </div>

                    <div class="portfolio-description">
                        <h5>Générateur de prénoms - <i class="fab fa-html5"></i> <i class="fab fa-css3-alt"></i> <i class="fab fa-js-square"></i></h5>
                        <p>C'est un générateur de prénoms masculins et féminins très simple développé avec HTML/CSS et JavaScript. J'ai utilisé des constantes de prénoms et des constantes "random" pour obtenir un nombre et un nom au hasard. Ensuite, une autre constante permet de récupérer les noms, et enfin une méthode qui permet de générer des noms aux clic, et un affichage.</p>
                        <a href="https://github.com/MathildeHmn/firstname-generator" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img class="portfolio-img" src="./assets/images/portitem-6.png" alt="portitem-6">
                    </div>

                    <div class="portfolio-description">
                        <h5>Application météo - <i class="fab fa-html5"></i> <i class="fab fa-css3-alt"></i> <i class="fab fa-js-square"></i></h5>
                        <p>J'ai réalisé une petite application de météo en anglais. Dès qu'on saisit la ville de son choix, et qu'on tape sur "Entrée", la ville apparaît instantanément ainsi que la date, la température, le temps qu'il fait et enfin les minimale/maximale.</p>
                        <a href="https://github.com/MathildeHmn/weather-app" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="education" id="education">
            <div class="container">
                <div class="section-heading">
                    <h4>Formation</h4>
                </div>

                <div class="studies">
                    <ul>
                        <li class="educ-content">
                            <h5>septembre 2019 - mai 2020</h5>
                            <h6>Formation au Développement Web et Mobile (Titre équivalent Bac+2) - Titre obtenu - à l'ENI École Informatique - Angers.</h6>
                        </li>
                        <br>
                        <br>

                        <li class="educ-content">
                            <h5>septembre 2014 - juin 2017</h5>
                            <h6>Licence en Langues Étrangères Appliquées - Licence obtenue - à la Faculté de Lettres, Langues et Sciences Humaines - Angers.</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <?php
            if (isset($_POST['submit'])) {

                $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

                if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
                    $name_error = 'Nom invalide.';
                }

                if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
                    $subject_error = 'Sujet invalide.';
                }

                if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
                    $email_error = 'Email invalide.';
                }

                if (strlen($message) === 0) {
                    $message_error = 'Le message ne peut pas être vide.';
                }
            }
        ?>

        <section class="contact" id="contact">
            <div class="container">
                <div class="section-heading">
                    <h4>Contact</h4>
                </div>

                <a name="myAnchor"></a>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#myAnchor" method="POST">
                    <label for="name">Nom</label>
                        <input type="text" id="name" name="name" maxlength="100" required>
                        <p><?php if (isset($name_error)) echo $name_error; ?></p>
                    
                    <label for="email">Email</label>
                        <input type="email" id="email" name="email" maxlength="50" required>
                        <p><?php if (isset($email_error)) echo $email_error; ?></p>
                    
                    <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" maxlength="100" required>
                        <p><?php if (isset($subject_error)) echo $subject_error; ?></p>
                    
                    <label for="message">Message</label>
                        <textarea name="message" id="message" cols="10" rows="10" maxlength="500"></textarea>
                        <p><?php if (isset($message_error)) echo $message_error; ?></p>
                    
                    <input type="submit" name="submit" value="Envoyer">

                    <?php 
                        if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
                            $to = 'mathildehmnpro@gmail.com';
                            $body = " Nom: $name\n Email: $email\n Message:\n $message";
                            if (mail($to, $subject, $body)) {
                                echo '<p style="color: white; padding: 10px; font-size: 14px;">✓ Message envoyé.</p>';
                            } else {
                                echo '<p style="color: white; padding: 10px; font-size: 14px;">✗ Une erreur est survenue, veuillez réessayer ultérieurement.</p>';
                            }
                        }
                    ?>
                </form>
            </div>
        </section>

        <section class="bottom" id="bottom">
            <div class="word">
                <h5>M'envoyer un petit mot ?</h5>
                <p>mathildehmnpro@gmail.com</p>
                <br />
            </div>
            <div class="signature">
                <h5>Mathilde Hamon</h5>
                <h6>Développeuse Front-End</h6>
                <br />
            </div>
            <div class="links">
                <h5>Me retrouver :</h5>
                <h6><a href="./assets/media/Mathilde Hamon - CV (mars.21).pdf" target="_blank">Mon CV</a></h6>
                <h6><a href="https://github.com/MathildeHmn" target="_blank">GitHub</a></h6>
                <h6><a href="https://www.linkedin.com/in/mathilde-hamon-769121189/" target="_blank">LinkedIn</a></h6>
            </div>
        </section>

        <footer class="copyright">
            <p>&copy; Créé avec ♥ par moi-même; 2020 - 2021.</p>
        </footer>

        <script src="https://kit.fontawesome.com/8e770cc2bc.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>

</html>

