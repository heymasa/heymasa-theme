<?php get_header(); ?>

    <section class="fadein1 row" id="home">
        <div class="center col-md-12">
            <h2><span>Hello,</span> I'm a well-experienced<br>
            web designer/developer in<br>
            Auckland, New Zealand.</h2>
            <div class="skill">
                <a class="trats experience" href="#" title="Years of experiences"><span class="number">6</span> <span class="subtitle">years of experience</span></a><a class="trats language" href="#" title="Numbers of language"><span class="number">5</span> <span class="subtitle">number of language<br>I use</span></a>
                <a class="trats" href="#" title="Do Paper design as well"><span class="number"><i class="fa fa-file-text-o"></i></span> <span class="subtitle">as well</span></a>
            </div>
        </div>
    </section>
    <section class="fadein row" id="design">
        <div class="center col-md-12">
            <h2><span>What I do,</span> websites,SEO,Graphic design and more.</h2>
            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <div class="task">
                    <img alt="web design" src="img/webdesign.png">
                    <div class="task-desc">
                        <h3><span>Web</span> design</h3>
                        <p>I develop a website to make everything better.</p>
                    </div>
                </div>
                <div class="task">
                    <img alt="SEO" src="img/seo2.png">
                    <div class="task-desc">
                        <h3><span>SEO</span> (Search Engine Optimization)</h3>
                        <p>No one archives great goal without SEO.</p>
                    </div>
                </div>
                <div class="task">
                    <img alt="HTML Mail" src="img/edm.png">
                    <div class="task-desc">
                        <h3><span>HTML</span> Mail</h3>
                        <p>Simple, Old, but Effecttive. Email Marketing connects your customer directly.</p>
                    </div>
                </div>
                <div class="task">
                    <img alt="Graphic design" src="img/paper.png">
                    <div class="task-desc">
                        <h3><span>Graphic</span> design</h3>
                        <p>Not only digital but also real.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fadein row" id="about">
        <div class="center col-md-12">
            <h2><span>My Name is Masa.</span> I'm a web designer/developer.</h2>
            <div class="career">
                <div class="ele-a">
                    <img alt="Development Method" src="/img/about-1.jpg">
                    <h3><span>Development Method</span></h3>
                    <p>My development is based on marketing strategies. I provide that is not only beautiful design, but also innovative solutions for clients.</p>
                </div>
                <div class="ele-b">
                    <img alt="Japanese Market" src="/img/about-2.jpg">
                    <h3><span>Japanese Market</span></h3>
                    <p>I'm a native Japanese. If clients want to expand their business to Japanese market, I'm happy to help it using my experience, language skills and backgrounds.</p>
                </div>
                <div class="ele-c">
                    <img alt="Communication" src="/img/about-3.jpg">
                    <h3><span>Communication</span></h3>
                    <p>I love communication with people to discuss about business strategies, branding and web development. If you would like to something to talk with me, Please feel free to contact
                    me.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="fadein row" id="portfolio">
        <div class="center col-md-12">
            <ul class="project-list">
                <li>
                    <a data-lightbox="portfolio" data-title="Building Company Website" href="img/portfolio/portfolio-1.png"><img alt="Building Company Website" src="img/portfolio/portfolio-1-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Restaurant Website" href="img/portfolio/portfolio-2.png"><img alt="Restaurant Website" src="img/portfolio/portfolio-2-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Rental Car Company Website" href="img/portfolio/portfolio-3.png"><img alt="Rental Car Company Website" src="img/portfolio/portfolio-3-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Event Venue Website(Japanese)" href="img/portfolio/portfolio-4.png"><img alt="Event Venue Website(Japanese)" src="img/portfolio/portfolio-4-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Music Rehearsal Studio Website(Japanese)" href="img/portfolio/portfolio-5.png"><img alt="Music Rehearsal Studio Website(Japanese)" src="img/portfolio/portfolio-5-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Local Listing Website" href="img/portfolio/portfolio-6.png"><img alt="Local Listing Website" src="img/portfolio/portfolio-6-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Restaurant Logo Design" href="img/portfolio/portfolio-7.png"><img alt="Restaurant Logo Design" src="img/portfolio/portfolio-7-small.png"></a>
                </li>
                <li>
                    <a data-lightbox="portfolio" data-title="Restaurant Menu Design" href="img/portfolio/portfolio-8.png"><img alt="Restaurant Menu Design" src="img/portfolio/portfolio-8-small.png"></a>
                </li>
            </ul>
        </div>
    </section>
    <section class="fadein row" id="contact">
        <div class="center col-md-12">
            <h2><span>Send me a message!</span>I'll definitely reply!</h2><?php echo do_shortcode('[contact-form-7 id="212" title="Contact form 1"]'); ?>
        </div>
    </section>

<?php get_footer(); ?>