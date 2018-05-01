<?php get_header(); ?>
<div class="container">
    <div class="grid-container">
        <div class="grid menu">
            <div class=" logo">
                <div class="mylogo">
                    <img src="img/logow.svg" id="logo" alt="">
                </div>
            </div>
            <div class="item-mainmenu">
                <div class="menu-line">
                    <div class="main-menu-icon">
                        <a href="#">
                            <div class="hmbgr">
                                <span class="hamburger hamburger-top"></span>
                                <span class="hamburger hamburger-mid"></span>
                                <span class="hamburger hamburger-bottom"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid content">
            <div class="main-content">
                <div class="content-top">
                    <main id="interface" class="pages c-interface">
                        <div id="link">
                            <div class="svg-wrapper">
                                <a href="#home" class="click-home">
                                    <svg height="100%" width="100%">
                                        <rect class="shape-h" height="100%" width="100%" />
                                    </svg>
                                    <div class="text">home</div>
                                </a>
                            </div>
                        </div>
                        <div id="link">
                            <div id="rect-portfolio" class="svg-wrapper">
                                <a href="#portfolio" class="click-portfolio">
                                    <svg height="100%" width="100%">
                                        <rect class="shape-p" height="100%" width="100%" />
                                    </svg>
                                    <div class="text">portfolio</div>
                                </a>
                            </div>
                        </div>
                        <div id="link">
                            <div id="rect-about" class="svg-wrapper">
                                <a href="#about" class="click-about">
                                    <svg height="100%" width="100%">
                                        <rect class="shape-a" height="100%" width="100%" />
                                    </svg>
                                    <div class="text">about</div>
                                </a>
                            </div>
                        </div>
                        <div id="link">
                            <div id="rect-contact" class="svg-wrapper">
                                <a href="#contact" class="click-contact">
                                    <svg height="100%" width="100%">
                                        <rect class="shape-c" height="100%" width="100%" />
                                    </svg>
                                    <div class="text">contact</div>
                                </a>
                            </div>
                        </div>
                    </main>
                    <main id="home" class="pages c-home">
                        <div class="home-container">
                            <div class="me-img-home">
                                <!--pic here-->
                            </div>
                            <div class="desc">
                                <div class="hero-desc">
                                    <div class="hero-txt ">
                                        <label class="hero-iam">i am</label>
                                    </div>
                                    <div class="hero-txt">
                                        <label class="hero-name"> nathaniel </label>
                                    </div>
                                    <div class="hero-txt">
                                        <label class="hero-wd"> Web Developer </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <main id="portfolio" class="pages c-portfolio">
                        <div class="p-container">
                            <div id="sub" class="works-container">
                                <div class="portfolio-txt">
                                    <p style="color:#c83737; margin: 4% 0 0 10%; font-style:italic;font-size:1.3rem">Everything starts from somewhere...</p>
                                </div>
                                <div class="works-sub-con">
                                    <section class="works work-1">
                                        <div class="work-details">
                                            <div class="work-title">WhereIs App</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">Javascript | Local Storage</div>
                                                <hr>
                                                <div class="work-description">
                                                    <p>A simple personal directory.
                                                        <br> Letting your co-workers, employees, etc.. where you are (if you
                                                    want). </p>
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href="https://github.com/NatsBud/AceTracker">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                   <!-- <span class="work-btn work-demo">
                                                        <a class="github-button demo-button" target="_blank" href="/">
                                                            <button class="btn-submit btn-link">DEMO</button>
                                                        </a>
                                                    </span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="works work-2">
                                        <div class="work-details">
                                            <div class="work-title">Contact Form</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">PHP | Bootstrap </div>
                                                <hr>
                                                <div class="work-description">
                                                    <p> A basic contact form.<br> With validation wherein the data will be send to your email. </p>
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href="https://github.com/NatsBud/Contact-Form">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                    <!--<span class="work-btn work-demo">
                                                        <a class="github-button demo-button" target="_blank" href="/">
                                                            <button class="btn-submit btn-link">DEMO</button>
                                                        </a>
                                                    </span> -->
                                                </div>
                                            </div>
                                        </div>          
                                    </section>
                                    <section class="works work-3">
                                        <div class="work-details">
                                            <div class="work-title">PSD to HTML</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">HTML | CSS | Adobe Photoshop</div>
                                                <hr>
                                                <div class="work-description">
                                                    <p> PSD file to HTML and CSS.
                                                    <br> My very first PSD to HTML conversion. </p>       
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href="https://github.com/NatsBud/AceTracker">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                   <!--<span class="work-btn work-demo">
                                                        <a class="github-button demo-button" target="_blank" href="/">
                                                            <button class="btn-submit btn-link">DEMO</button>
                                                        </a>
                                                    </span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="works work-4">
                                        <div class="work-details">
                                            <div class="work-title">Basic PHP CRUD</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">Bootstrap | PHP | MYSQL </div>
                                                <hr>
                                                <div class="work-description">
                                                    <p> A basic Create, Read, Update, Delete in PHP. <br>
                                                        This uses Bootstrap as its front-end.
                                                    </p>
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href="https://github.com/NatsBud/CRUD-php">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                  <!--  <span class="work-btn work-demo">
                                                        <a class="github-button demo-button" target="_blank" href="/">
                                                            <button class="btn-submit btn-link">DEMO</button>
                                                        </a>
                                                    </span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="works work-5">
                                        <div class="work-details">
                                            <div class="work-title">Basic Javascript Exercises</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">HTML | CSS | Javascript </div>
                                                <hr>
                                                <div class="work-description">
                                                    <p> Some of my javascript exercises. <br>
                                                        Temp Conversion, Odd 0r Even, Determine larger number.
                                                    </p>
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href="https://github.com/NatsBud/Wk2-Challenges/tree/master/Day2-jscript">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="works work-6">
                                        <div class="work-details">
                                            <div class="work-title">Basic Clock</div>
                                            <div class="work-wrapper">
                                                <div class="work-tags">PHP | Javascript </div>
                                                <hr>
                                                <div class="work-description">
                                                    <p> Basic digital and analog clock. <br>
                                                        Shows Time of different places using PHP.
                                                    </p>
                                                </div>
                                                <div class="work-btn-container">
                                                    <span class="work-btn work-web">
                                                        <a class="github-button" target="_blank" href=" https://github.com/NatsBud/challenge2">
                                                            <button class=" btn-submit btn-link">GITHUB</button>
                                                        </a>
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--
                                <section class="works">work7</section>
                            <section class="works">work8</section>
                        <section class="works">work9</section>
                    <section class="works">work10</section>
                    -->
                    <br>
                </div>
            </div>
        </main>
        <main id="about" class="pages c-about">
            <div class="about-container">
                <div class="sub-abt abt-img">
                    <!--pic here-->
                </div>
                <div class="sub-abt abt-text">
                    <div class="me">
                        <p class=" me-header whois">Who is </p>
                        <hr>
                        <p>
                            <div> <span style="font-size:2rem">I'm</span> an aspiring
                            <span>fullstack web developer</span>.
                            <br> It is my passion to create unique and finely crafted websites that portray
                            <span>simplicity</span> and
                            <span>elegance</span>.
                            <br>
                            Currently, Iam focusing in honing my skills to be the
                            <span>best</span> in everything I do.
                        </p>
                        <p>I spend my
                            <span>free time</span> infront of my laptop
                            <span>learning new trends</span> and technologies in web development, if not, I'm on the
                            <span>basketball</span> court playing with my great buddies.
                        </p>
                        <p>
                            I grew up in
                            <span>Gusaran, Kabayan, Benguet</span>.
                            <br> Iam an
                            <span>Ibaloi</span>
                        </p>
                    </div>
                    <div class="abt-site">
                        <p class="me-header">This site</p>
                        <hr>
                        <p>This
                            <span>website</span> is the very first one that i made.</p>
                            <p>Build on
                                <span> wordpress</span> using my own
                                <span>customized theme</span>.</p>
                                <p>This site will always be a
                                    <span>work in progress</span> as I discover new and better ways and methods in rendering
                                websites at its best.</p>
                            </div>
                        </div>
                    </div>
                </main>
                <main id="contact" class="pages c-contact">
                    <div class="contact-container">
                        <h1>Contact </h1>
                        <p style="font-style:italic; color:#343434">Let's bring your great idea into reality!
                            <br>
                            <br> Feel free to
                            <span style="font-style:normal; color:#c83737">send me message.</span>
                        </p>
                        <form id="user-form" method="post" onsubmit="submitForm(); return false;">
                            <div class="frm-container">
                                <div class="frm-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-all">
                                        <path d="M256 0c88.366 0 160 71.634 160 160s-71.634 160-160 160S96 248.366
                                            96 160 167.634 0 256 0zm183.283 333.821l-71.313-17.828c-74.923 53.89-165.738
                                            41.864-223.94 0l-71.313 17.828C29.981 344.505 0 382.903 0 426.955V464c0 26.51
                                            21.49 48 48 48h416c26.51 0 48-21.49 48-48v-37.045c0-44.052-29.981-82.45-72.717-93.134z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="frm-line">
                                        <input type="text" name="name" id="name" class="frm-input" placeholder="Your name">
                                    </div>
                                </div>
                                <br>
                                <div class="frm-container">
                                    <div class="frm-icon ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-all">
                                            <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5
                                                0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1
                                                15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256
                                                320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5
                                                9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2
                                                18.9 30.6 23.9 40.732.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                                            </svg>
                                        </div>
                                        <div class="frm-line">
                                            <input type="text" name="email" id="email" class="frm-input" placeholder="Your email">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="frm-container">
                                        <div class="frm-icon mail-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-all">
                                                <path d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2
                                                    15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="frm-line">
                                                <textarea type="text" name="message" id="message" form="user-form" class="frm-input text-area" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="frm-container ">
                                            <div class="frm-icon validation">
                                                <span id="status"></span>
                                            </div>
                                            <div class="frm-line send">
                                                <div>
                                                    <button type="submit" name="submit" id="buttonSubmit" class="btn-submit">SEND</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
                <script>
                function submitForm() {
                document.getElementById("buttonSubmit").disabled = true;
                var formdata = new FormData();
                formdata.append("name", document.getElementById("name").value);
                formdata.append("email", document.getElementById("email").value);
                formdata.append("message", document.getElementById("message").value);
                var ajax = new XMLHttpRequest();
                ajax.open("POST", "<?php echo get_template_directory_uri(); ?>/mycontactform.php");
                ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "success") {
                document.getElementById("status").innerHTML = '<span>Thanks ' + document.getElementById("name").value + ' , your message has been sent. </span>';
                document.querySelector(".text-area").style = "45px";
                } else {
                document.getElementById("status").innerHTML = ajax.responseText;
                document.getElementById("buttonSubmit").disabled = false;
                }
                }
                }
                ajax.send(formdata);
                }
                </script>
                <?php get_footer(); ?>