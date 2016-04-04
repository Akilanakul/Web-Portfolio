<?php 
	require_once( "includes/header.php"); 
	require_once( "includes/projectManager.php"); 
	require_once( "includes/view.php"); 
	require_once( "includes/project.php"); 
?>

<div class="title">
    <h1>I am AKHILA A.J,</h1>
    <h1>a passionate Web Developer</h1>
</div>
</section>
</div>
<div class="sectionTwo">
    <h2 class="margin">Thanks for visiting</h2>
    <p>I designed this site so you can get to know me better.My career as a Web Developer,my portfolio,my interests,my favorite quotes and so much more.</p>
</div>
<span class="anchor" id="about"></span>
<div class="aboutMeContainer">
    <h2 class="margin">About Me</h2>
    <p>I am a young developer based in Auckland(Newzealand) with <span class="spanOrange">"can do attitude"</span>. I enjoy everything to do with Web. I am truly <span class="spanOrange">passionate</span> about what I do and quality of work I produce.</p>
    <p class="aboutMeSpan">
        My adventure for Web Development started in 07.When I used ready-made templates of websites to learn their anatomy and see how they work.
    </p>
    <p class="aboutMeSpan">
        In 2008 I went to a prestigious IT university in India to pursue <span class="spanOrange">Bachelors of Engineering</span> in Information and Science,Which helped me to build basics skills needed for my Web Developmet career.
    </p>
    <p class="aboutMeSpan">
        In the middle of my Bachelors journey I got a chance to be a Web Development <span class="spanOrange">Intern for IEEE foundation</span>.
    </p>
    <p class="aboutMeSpan">
        Because of my passion for Web Development I got into one of the biggest IT industry Tata Consultancy Services as <span class="spanOrange">Junior Web Developer</span>.
    </p>
    <p class="aboutMeSpan">
        Currently I am Web Development student at <span class="spanOrange">Yoobee School Of Design</span>.
    </p>
    <p class="aboutMeSpan">
        In 7 years I have gained lots of ability that help me today to build incredible projects.
    </p>
</div>
<div class="hobbiesContainer">
    <!-- <div class="hobbiesOverlay"></div> -->
    <div class="hobbieTitle">
        <h2>I Love</h2>
    </div>
    <div class="hobbieContent">
        <div>
            <i class="fa fa-plane circle  fa-3x"></i>
            <p>Travelling</p>
        </div>
        <div>
            <i class="fa fa-laptop circle fa-3x"></i>
            <p>Coding</p>
        </div>
        <div>
            <i class="fa fa-street-view circle fa-3x"></i>
            <p>Dancing</p>
        </div>
        <div>
            <i class="fa fa-cutlery circle fa-3x"></i>
            <p>Food</p>
        </div>
    </div>

</div>
<span class="anchor" id="skills"></span>
<div class="skillsContainer">
    <h2 class="margin">My Skills</h2>
    <p>These are my skills I'm most proud of</p>
    <div class="chart" data-percent="90">HTML5
    </div>
    <div class="chart" data-percent="90">CSS3</div>
    <div class="chart" data-percent="60">SASS</div>
    <div class="chart" data-percent="70">jQuery</div>
    <div class="chart" data-percent="60">SQL</div>
    <div class="chart" data-percent="80">JAVASCRIPT</div>
    <div class="chart" data-percent="50">PHOTOSHOP</div>
    <div class="chart" data-percent="80">PHP</div>
</div>
<div class="quotesContainer">
    <h2 class="margin">Favourite Quotes</h2>
    <div class "quotesContent">
        <!-- <i class="fa fa-quote-left" style="color:black;"> -->
        <!-- /i> -->
        <p>If you do what you love you wont work even for a day</p>
        <!-- <i class="fa fa-quote-right"></i> -->
    </div>


</div>
<span class="anchor" id="work"></span>
<div class="workContainer">
    <h2 class="margin">My Work</h2>
    <p>Few of my projects</p>
    <ul class="list">
        <?php $aProject=projectManager::getAllProjects(); // echo "<pre>"; // print_r($aProject[1]->projectname); // echo "</pre>"; echo view::renderProject($aProject); ?>

    </ul>
</div>

<?php require_once( "includes/footer.php"); ?>

