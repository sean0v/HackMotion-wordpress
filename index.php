<?php get_header(); ?>

<div class="page-container">

    <main class="main-container">
        <!-- first section with text -->
        <section class="section-one">
            <div class="text-container">
                <h1>We have put together a swing improvement solution to help you <span id="dynamic-content" class="highlight">Break 80</span></h1>
                <p class="pack-includes">Pack includes:</p>
                <div class="list-container">
                    <ul>
                        <li>Swing Analyzer - HackMotion Core</li>
                        <li>Drills by coach Tyler Ferrell</li>
                        <li>Game improvement plan by HackMotion</li>
                    </ul>
                </div>
                <div class="button-content">
                    <button class="start-button">
                        Start Now <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- second section with images -->
        <section class="section-two">
            <div class="image-container">
                <img class="graph" src="<?php echo get_template_directory_uri(); ?>/assets/images/graph.png" alt="graph">
                <img class="bar-frame" src="<?php echo get_template_directory_uri(); ?>/assets/images/bar-frame.png" alt="bar and frame">
                
                <!-- Mobile images -->
                <img class="bar-frame-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/progress-bar.png" alt="bar frame left">
                <img class="bar-frame-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.png" alt="bar frame right">
            </div>
        </section>
    </main>
    



    <div class="second-section">
    <h2 class="section-title">The best solution for you: Impact Training Program</h2>
        <div class="content-container">
            <div class="video">
                <video id="impact-video" class="video" src="<?php echo get_template_directory_uri(); ?>/assets/videos/impact-drill.mp4" autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/impact-drill.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-progress">
                <div class="video-progress-bar-background"></div>
                <div class="video-progress-bar" id="video-progress-bar"></div>
            </div>

            <div class="scroll-list">
                <div class="list-item" id="item-1" data-time="5">
                    <div class="arrow-text-container">
                        <span class="arrow-toggle material-icons">expand_more</span>
                        <p>Static top drill</p>
                    </div>
                    <div class="extra-content">
                        Get a feel for the optimal wrist position at Top of your swing
                    </div>
                </div>
                <div class="list-item" id="item-2" data-time="14">
                    <div class="arrow-text-container">
                        <span class="arrow-toggle material-icons">expand_more</span>
                        <p>Dynamic top drill</p>
                    </div>
                    <div class="extra-content">
                        Dynamically train your wrist position at Top
                    </div>
                </div>
                <div class="list-item" id="item-3" data-time="24">
                    <div class="arrow-text-container">
                        <span class="arrow-toggle material-icons">expand_more</span>
                        <p>Top full swing challenge</p>
                    </div>
                    <div class="extra-content">
                        Train your maximum power swing
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>

document.addEventListener('DOMContentLoaded', function() {
    const listItems = document.querySelectorAll('.list-item');
    const video = document.getElementById('impact-video');
    const progressBar = document.getElementById('video-progress-bar');
    const item1 = document.getElementById('item-1');
    const item2 = document.getElementById('item-2');
    const item3 = document.getElementById('item-3');
    const timestamps = [5, 14, 24];
    
    const toggleContent = (item) => {
        item.classList.toggle('open');
    };

    document.querySelectorAll('.arrow-toggle').forEach(arrow => {
        arrow.addEventListener('click', function() {
            const listItem = this.closest('.list-item');
            toggleContent(listItem);
        });
    });

    listItems.forEach(item => {
        item.addEventListener('click', () => {
            const time = parseFloat(item.getAttribute('data-time'));
            video.currentTime = time;
            video.play();
        });
    });

    function updateProgressBar() {
        const progress = (video.currentTime / video.duration) * 100;
        
        if (window.innerWidth > 768) {  
            progressBar.style.width = '40%';
            progressBar.style.height = progress + '%';
        } else {  
            progressBar.style.height = '40%';
            progressBar.style.width = progress + '%';
        }

        const currentTime = video.currentTime;

        if (currentTime >= timestamps[0] && currentTime < timestamps[1]) {
            item1.classList.add('open');
        } else {
            item1.classList.remove('open');
        }

        if (currentTime >= timestamps[1] && currentTime < timestamps[2]) {
            item2.classList.add('open');
        } else {
            item2.classList.remove('open');
        }

        if (currentTime >= timestamps[2]) {
            item3.classList.add('open');
        } else {
            item3.classList.remove('open');
        }
    }

    video.addEventListener('timeupdate', updateProgressBar);

    function getUrlParameter(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    const goal = getUrlParameter('goal');
    const dynamicContent = document.getElementById('dynamic-content');
    if (goal) {
        // Проверка на валидные значения
        const validGoals = ['Break Par', 'Break 80', 'Break 90', 'Break 100'];
        if (validGoals.includes(goal)) {
            dynamicContent.textContent = `${goal}`; 
        }
    }
});


</script>

<?php get_footer(); ?>
