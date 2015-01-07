<!DOCTYPE html>
<html lang="en" class="">
<head>
    <title><?= $this->config->siteName; ?>: <?= $this->meta->title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $this->meta->description; ?>"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/skin/uniwers/font/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/skin/uniwers/css/main.css">
    <link rel="stylesheet" href="/skin/uniwers/css/prettyPhoto.css">
    <link rel="stylesheet" href="/skin/uniwers/css/style.css">
    <link rel="stylesheet" type="text/css" href="/skin/uniwers/css/main.css" rel="stylesheet"/>
    <script src="/skin/shared/js/jquery-2.1.1.min.js"></script>
</head>
<body>
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/skin/uniwers/images/logo.png" alt="Uniwers logo" class="logo"/>
                    <h1><?= $this->config->siteName; ?></h1>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <?= $this->navigation->render(); ?>
            </div>
        </div>
    </header>
    <section id="home" class="fill">
        <div class="container">
            <div class="wrapper">
                <h1>WELCOME TO P.W. Uniwers</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur. 
                    Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                </p>
                <a class="btn btn-large btn-chunkfive" href="#contact" id="connect-now"><i class="icon-envelope-alt"></i> Contact</a>
            </div>
        </div>
    </section>
    <section id="services" class="fill">
        <div class="container">
            <div class="wrapper">
                <h1 class="the-head">Services</h1>
                <div class="row-fluid">
                    <div class="span4">
                        <h2>Renovation</h2>
                        <i class="icon-"></i>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                    </div>
                    <div class="span4">
                       <h2>Renovation</h2>
                        <i class="icon-"></i>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                    </div>
                    <div class="span4">
                        <h2>Renovation</h2>
                        <i class="icon-"></i>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a dui non nisl congue efficitur.
                            Morbi mattis lacus vitae est lacinia tristique ac quis metus. Sed ultrices suscipit risus, at ornare leo semper non.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="the-team" class="fill">
        <div class="container">
            <div class="wrapper">
                <h1 class="the-head">Our Team</h1>
                <div class="row-fluid">
                    <div class="span3">
                        <h2 class="cntr">Jon Doe</h2>
                        <div class="photo"><i class="icon-user"></i></div>
                        <p class="cntr">
                            Director of Takeaway
                        </p>
                    </div>
                    <div class="span3">
                        <h2 class="cntr">Jon Doe</h2>
                        <div class="photo"><i class="icon-user"></i></div>
                        <p class="cntr">
                            Team Member
                        </p>
                    </div>
                    <div class="span3">
                        <h2 class="cntr">Jon Doe</h2>
                        <div class="photo"><i class="icon-user"></i></div>
                        <p class="cntr">
                            Team Member
                        </p>
                    </div>
                    <div class="span3">
                        <h2 class="cntr">Jon Doe</h2>
                        <div class="photo"><i class="icon-user"></i></div>
                        <p class="cntr">
                           Team Member
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="fill">
        <div class="container">
            <div class="wrapper">
                <h1 class="the-head">work</h1>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="scrollbar">
                            <div class="handle">
                                <div class="mousearea"></div>
                            </div>
                        </div>
                        <div class="frame effects" id="the-portfolio">
                            <ul class="clearfix">
                                <li><img src="themes/images/1.png" alt=""></li>
                                <li><img src="themes/images/2.png" alt=""></li>
                                <li><img src="themes/images/3.png" alt=""></li>
                                <li><img src="themes/images/4.png" alt=""></li>
                                <li><img src="themes/images/5.png" alt=""></li>
                                <li><img src="themes/images/6.png" alt=""></li>
                                <li><img src="themes/images/7.png" alt=""></li>
                                <li><img src="themes/images/8.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="controls center">
                            <button class="prev"><i class="icon-double-angle-left"></i></button>
                            <button class="next"><i class="icon-double-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="fill">
        <div class="container">
            <div class="wrapper">
                <h1 class="the-head">Contact</h1>
                <div class="row-fluid">
                    <div class="span6 offset3">
                        <form class="contact-form" action="">
                            <fieldset>
                                <div class="control-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="input-xlarge" name="name" id="name">
                                </div>
                                <div class="control-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="input-xlarge" name="phone" id="phone">
                                </div>
                                <div class="control-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="input-xlarge" name="email" id="email">
                                </div>
                                <div class="control-group">
                                        <label for="message">Your Message</label>
                                        <textarea class="input-xlarge" name="message" id="message" rows="3"></textarea>
                                </div>
                                <div class="control-group">
                                    <button type="submit" class="btn btn-large btn-chunkfive">Send Message</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="go-top" style="display: none;"><i class="icon-double-angle-up"></i></a>
    <div id="footer" class="footer">
        <div class="container">
            <p>&copy; P.W. Uniwers <?= date('Y'); ?></p>
        </div>
    </div>
    <script src="/skin/shared/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/skin/uniwers/js/jquery.easing-1.3.min.js"></script>
    <script src="/skin/uniwers/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="/skin/uniwers/js/jquery.vegas.js"></script>
    <script src="/skin/uniwers/js/sly.min.js"></script>
    <script src="/skin/uniwers/js/jquery.prettyPhoto.js"></script>
    <script src="/skin/uniwers/js/main.js"></script>
</body>
</html>
