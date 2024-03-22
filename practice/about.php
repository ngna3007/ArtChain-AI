

<!DOCTYPE html>
<html class="html-about" lang="en">
<?php include('header.inc')?>
    
    <body class="body-about">
        <section class="header-main index-section">
        <?php include('menu.inc')?>
        </section>

        <main>

                <section class="team section-about">
                    <div class="center">
                        <h2 class="h2-about" id="our-team">Our Team</h2>
                    </div>
            
                    <div class="team-content">
                        <div class="infor-group-box">
                            <img src="images/ngocanh 5.jpg" alt="Ngoc Anh">
                            <h3 class="h3-about">Nguyen Ngoc Anh</h3>
                            <div class="icons-profile">
                                <a href="https://github.com/ngna3007" target="_blank"><i class="ri-github-fill"></i>Github</a>
                                <a href="https://www.facebook.com/profile.php?id=100040059621995" target="_blank"><i class="ri-facebook-box-fill"></i>Facebook</a>
                            </div>
                        </div>
            
                        <div class="infor-group-box">
                            <img src="images/ngochuyen1 2.JPG" alt="Huyen">
                            <h3 class="h3-about">Truong Ngoc Huyen</h3>
                            <div class="icons-profile">
                                <a href="https://github.com/hualiqnc" target="_blank"><i class="ri-github-fill"></i>Github</a>
                                <a href="https://www.facebook.com/illao.rip" target="_blank"><i class="ri-facebook-box-fill"></i>Facebook</a>
                            </div>
                        </div>
            
                        <div class="infor-group-box">
                            <img src="images/phuonglinh 1.jpg" alt="Linh">
                            <h3 class="h3-about">Nguyen Ngoc Phuong Linh</h3>
                            <div class="icons-profile">
                                <a href="https://github.com/GMKaitoKid" target="_blank"><i class="ri-github-fill"></i>Github</a>
                                <a href="https://www.facebook.com/phuonglinhnbn" target="_blank"><i class="ri-facebook-box-fill"></i>Facebook</a>
                            </div>
                        </div>
                    </div>
                </section>
            <div class="clearfix"></div>
        
            <section class="group-info-section section-about">
                <h2 class="section-heading h2-about" id="group-infomation">Group Infomation</h2>
                <div id="aboutLARGEpic-con">
                    <figure id="aboutlargepic-wrapper">
                     
                        <div id="aboutlargepic">
                         <img src="images/group-photo-small.jpg" alt="GroupPic" />

                           <div class="overlay">
                                <div id="Membersoverpic">Founders Who Made &nbsp; <div id="ITcolor">IT</div> &nbsp; Possible</div>
                            </div>
                        </div>
                    </figure>
                    <div class="buttons-contact">
                        <div class="container-contact">
                            <a href="mailto:105004243@student.swin.edu.au" class="btn-about effect01" target="_blank">
                            <span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="group-info-grid">
                    <dl class="group-info-item">
                        <dt>
                            <h4><img src="./images/tutor.svg" alt="Tutor Icon"> Tutor</h4>
                        </dt>
                        <dd>Eric Le</dd>
                    </dl>
                    <dl class="group-info-item">
                        
                        <dt>
                            <h4><img src="./images/course.svg" alt="Course Icon" > Course ID</h4>
                        </dt>
                        <dd>COS10026</dd>
                    </dl>

                    <dl class="group-info-item">
                        
                        <dt>
                            <h4><img src="./images/name.svg" alt="Group Name Icon" > Group Name</h4>
                        </dt>
                        <dd><strong>1920x1080</strong></dd>
                    </dl>
        
                    <dl class="group-info-item">
                        
                        <dt>
                            <h4><img src="./images/id.svg" alt="Group ID Icon"> Group ID</h4>
                        </dt>
                        <dd>CS1920</dd>
                    </dl>

                    
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="time-table-section section-about">
                <h2 class="section-heading h2-about" id="time-tabel">Time Table</h2>
                <table id="timetable">
                    <tr>
                      <th>Time</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                      <th>Sunday</th>
                    </tr>
                    <tr>
                      <td>7:00-9:00</td>
                      <td class="has-schedule">COS10025 </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="has-schedule">TNE1006</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>9:00-11:00</td>
                      <td class="has-schedule">COS10025 </td>
                      <td></td>
                      <td class="has-schedule">VOV101</td>
                      <td></td>
                      <td></td>
                      <td class="has-schedule">TNE1006</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>11:00-13:00</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>13:00-15:00</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td  class="has-schedule">COS10026</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>15:00-17:00</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="has-schedule">COS10026</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>17:00-19:00</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
            </section>
            <?php include('footer.inc') ?>
        </main>
    
    </body>
    