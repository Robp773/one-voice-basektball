<?php

get_header(); ?>

<div class="page__bg" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/syd-hailey-trap.jpg')">
<div class="drill-types page__content">

    <h2 class='page__h2'>Drills</h2>

    <div class="drill-types__intro">

    <p class='page__paragraph'>The drills found here address three levels of training. 
    The basic level is for those learning new skills and working to 
    become competent in those skills. Once the basic competency is achieved 
    the best drills are those that closely replicate game like conditions. 
    These are  the intermediate and advanced level drills.</p>

    <p class='u-emphasize'>It takes 21 days of conscientious work to change a habit.</p>


    <div class="drill-types__five-points">
        <h3 class='page__h3'>FIVE POINTS</h3>
        <div class="drill-types__ul-parent">

        <div>
            <h4 class='page__h4 u-primary-color'>COACHES:</h4>
            <ul class=''>
                <li>BE POSITIVE</li>
                <li>BE PREPARED</li>
                <li>BE EXCITED</li>
                <li>BELIEVE IN YOURSELF AND YOUR PLAYERS</li>
                <li>GET TO KNOW THE CUSTODIANS</li>
            </ul>
        </div>
  
        <div>        
            <h4 class='page__h4 u-primary-color'>PLAYERS:</h4>
            <ul>
                <li>GET THE REPETITIONS NECESSARY</li>
                <li>WORK 4-5 DAYS PER WEEK</li>
                <li>WORK BY YOURSELF IF NECESSARY</li>
                <li>FAITH - BELIEVE IN YOURSELF</li>
                <li>PASSION - LOVE OF THE GAME</li>
                <li>TO CHANGE YOUR GAME CHANGE YOUR WORK ETHIC</li>
            </ul>
        </div>

        </div>
        
    </div>
   
    <p class='page__paragraph'>
        Basketball has changed. Effective offensive philosophy can no longer 
        rely simply on ball movement, player movement and screening. 
        Defenses have become much more effective at stopping these simple 
        offensive designs. Most defenses can take away one, two or even three
        effective offensive players. To effectively challenge today’s defensive schemes every player on the court has to be seen as an offensive threat. Each time a player touches the ball they must have the ability to draw the defense’s attention. This requires every player to be disciplined at catching, pivoting to face the basket, bringing their eyes to the rim (so they can see all the options available), recognizing what the defense is giving away and attacking their defender. A simple jab step can influence the nearest help defender and change the defense. The offensive player’s goal must be to attack the defense and draw the help defender in order to create an advantage for her offensive teammates. This requires the development of multiple skills.
    </p>
    <p class='page__paragraph'>
        When we first start to play most of us just want to shoot. Scoring gets 
        people to respond, they cheer when we score. We’re recognized and sometimes praised for our ability to score. It makes us feel good. Consequently we focus on shooting and often fail to develop other parts of our game.  As we get older the game gets a little more complicated. Teams learn how to defend. It’s not as easy to score. We learn that there’s more to the game. Scoring is more about team play and developing more advanced skills, such as dribbling, passing, cutting, and using a teammate’s screen to create space for the best scoring opportunity. At the higher levels of competition we won’t be able to shoot and score unless we combine skill development with team chemistry.
        The fundamental skills of dribbling, passing and shooting are greatly 
        enhanced by proper footwork, balance and vision. This is where offensive 
        skill development begins.
    </p> 

    <h3 class='page__h3'>COURT VISION</h3>
    <h4>Fundamental rule #1:</h4>
    <p class='page__paragraph'>Every time you receive the ball – catching a pass, pulling down a 
        rebound, while dribbling, after a steal…every time you receive 
        the ball, bring your eyes to your rim – the offensive rim. By 
        finding the rim you bring your peripheral vision into play. You’ll 
        then quickly know if you have an open teammate in a position to 
        score, or if defenders are coming to trap you, or, if and where 
        you can dribble, if there is a better ball handler to pass to…..
    </p> 
    <h4>Fundamental rule #2:</h4>
    <p class='page__paragraph'>
        Avoid turning your back to the defense. You can’t see the rim if you’re
        not facing it. When you are coming to meet a pass, with the defender 
        behind you, catch, pivot and face the basket – bring your eyes to the
        rim. If you are on the sideline, waiting to receive an outlet pass, keep 
        your back to the sideline. This again allows you to use your peripheral 
        vision to see approaching defenders and avoid offensive fouls or 
        travelling violations that occur when you quickly turn into an 
        on-coming defender. If you are dribbling under pressure, use a power 
        dribble position to keep the defensive pressure away and allow you to 
        see the rim – and all the offensive possibilities. Dribbling with your
        back to the defense keeps you from seeing these possibilities and 
        invites double teams and turnovers.
    </p>
</div>

<div class="drill-types__parent">
    <h2 class='page__h3'>Categories</h2>

    <?php
    while(have_posts()) {
        the_post(); 
    ?>

    <div class='drill-type u-flex-center'>
            <a class="drill-type__title" href='<?php the_permalink( $post->ID )?>' >    
                <h4 class='page__h4' >
                    <?php the_title();?>    
                </h4>    
                <div class="drill-type__description">
                    <?php echo get_field('drill_type_description');?>
                </div>
            </a>
    </div>

<?php } ?>

</div>
</div>

<?php get_footer(); ?>

</div>



