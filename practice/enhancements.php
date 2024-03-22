<!DOCTYPE html>
<html lang="en">
<?php include('header.inc')?>
<body id="enhancements">
<?php include('menu.inc')?>
    
    <main>
            <h1 class="enc-h">Our  <span>Enhancement</span></h1>
        <section>
            <h2 class="enc-h2">1. Dark mode – light mode (Entire website)</h2>
            <br><br>
            <h3 class="enc-h3">Response based on the user’s system setting:</h3>
            <div class="dark-mode">

                <img id="settings" src="images/Picture1.svg" alt="System Setting Image">
                <ul id="en-p">
                    <li>Being a medical oriented website, we thought of creating another version of our web that has an X-ray-esque feel to it (with black background and contrasting content). The light mode - dark mode thus, each delivers different feels/mood to the overall website. </li>
                    <br> <br>
                    <li>Having a second display mode for the website means that we can allow the users to have a personalised experience as they can freely “toggle” between light and dark mode in their system setting as long as it seems aesthetically pleasing.</li>
                </ul>
            </div>
            <h3 class="enc-h3">Why Red (Dark mode) and Blue (Light mode)?</h3>
            <section class="mid">
                <div class="row_main">
                    <div class="first">
                        <img src="images/Picture2.svg" alt="darkindex">
                    </div>
                    <div class="second">
                        <img src="images/Picture3.svg" alt="lightindex">
                    </div>

                </div>
                <p class="enc-p">Blue and Red is perhaps one of the few colors that still “seem to go well together” despite them not following any color wheel theory.</p>
                <p class="enc-p">In fact, there is more to do with the human brain. Blue and Red have always been seen together in situations that are pleasing, or just simply through repeated simulation in neutral contexts.  Despite of not being the most pleasing color combos (in theory), Red and Blue wins in familiarity. </p>
            </section>
            <!-- add padding -->    
        
            <div class="enhancement-section-container">
                <h3 class="enc-h3e">How we implement it</h3>
                <h3 class="enc-h3">1. Color codes</h3>
                <img src="images/Picture6.svg" alt="color-root">
                <p class="enc-p">We implemented two color groups for the light mode and dark mode. 
                    All contents, elements in light-blue will be set to red; the background will be set from default white to light-black. Any containers, including hero section with a gray background will be set to dark-gray. </p>
                <p class="enc-p">Using the media query “prefers-color-scheme: dark” will let the program know that the below changes will only be applied to the web once the user’s system setting is set to dark mode. </p>
            </div>

            <h3 class="h-favi">2. Favicon</h3>
            <div class="favicon-cont">
                <div class="favi1">
                        <img src="images/Picture8.svg" alt="darktab">
                        <img src="images/Picture9.svg" alt="lighttab">
                </div>
                <div class="favi2">
                    <p>For our company’s logo displayed on the tab, we have utilized favicon to allow automatic toggle between two modes. Changing the display on the tab will provide a more holistic appearance for the entire web. </p>
                    <p>One downside of this feature is that after you change your system settings from light-> dark mode, you need to refresh the page once to updated this icon. </p>
                </div>
            </div>
        </section>

        <section class="responsive-index">
            <h2 class="enc-h2">2. Index Menu (Responsive) </h2>
            <div class="section-index-menu-container"> 
                <div class="picture-container">
                    <img src="images/Picture10.svg" alt="menu">
                    <img src="images/Picture11.svg" alt="dropdown-menu">
                    <img src="images/Picture12.svg" alt="code-menu">

                </div>
            </div>
            <div class="section-index-menu-content">
                <p>The menu icon will only be visible when the website is under responsive media query.
                A drop-down menu will show up once the menu icon is clicked on.
                To toggle between the menu icon and the close icon, we’ve utilized a check button.
                When the checkbox is selected, the corresponding icon would be displayed.
                *Please note that the menu-icon and close-icon’s visibility is set to hidden in desktop mode and would only be visible for screens of 1024px width and under.* </p>
                <!-- margin đoạn này cho nó giống trong file -->
            </div>
        </section>
    </main>
    <?php include('footer.inc') ?>
</body>
</html>