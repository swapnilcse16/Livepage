<!DOCTYPE html>
<html lang="en">

<head>
    <?php	
		include('assets/Partials/headerfile.php');
	?>
    <link rel="stylesheet" href="assets/css/faculty-profile.css"/>

</head>

<body>



    <!-- Header -->

    <?php 
		$navdesign = 1;
		include('assets/Partials/home-menu.php'); 
	?>
    <!-- /Header -->











    

    <div class="container-fluid" style="height: 100px; border: solid;">

        <!--Dept name-->
    </div>
    <div class="container-fluid dept-name box-shadow">
        <h2>Department of Computer Science and Engineering</h2>
    </div>
    <!--End Dept-->


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <!--For image and bio-->
            <div class="col-md-3" id="faculty-image-bio">
                <img src="assets/img/FacultyPhotos/f1.jpg">
                <h3 id="faculty-name">Swapnil Biswas</h3>
                <p style="font-size: 1.3em;">Lecturer</p>
                <p>Department of Computer Science and Engineering</p>
                <div>
                    <i class="fa-regular fa-envelope"></i>
                    <span>swapnil.cse16@gmail.com</span>
                </div>
                <div style="margin-top: 5px;">
                    <i class="fa-solid fa-mobile"></i>
                    <span>+8801759957277</span>
                </div>
            </div>

            <!--For Others-->
            <div class="col-md-9" id="faculty-details">

                <div style="margin-left: 20px; margin-top: 20px">

                    <!--nav starts-->
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 30px;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Experiences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Research Interests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Publications</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
                    </div>
                    <!--nav ends-->


                </div>

                <div class="tab-content" id="nav-tabContent" style="margin-left: 20px;">
                    <!--Academic Career-->
                    <div id="faculty-academic-experience" class="faculty-attributes">
                        <h3>Education</h3>
                        <div>
                            <h4>M.Sc. in Computer Science and Engineering</h4>
                            <p>Military Institute of Science and Technology</p>
                            <p>Passing year: 2023</p>
                        </div>

                        <div>
                            <h4>B.Sc. in Computer Science and Engineering</h4>
                            <p>Military Institute of Science and Technology</p>
                            <p>Passing year: 2020</p>
                        </div>
                    </div>
                    <!--Academic Career Ends-->


                    <!--Experience-->
                    <div id="faculty-experience" class="faculty-attributes" style="margin-top: 70px">
                        <h3>Experiences</h3>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Organization</th>
                                        <th scope="col">From Date</th>
                                        <th scope="col">To Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lecturer</th>
                                        <td>Bangabandhu Sheikh Mujibur Rahman University, Kishoreganj</td>
                                        <td>Feb 2, 2023</td>
                                        <td>Present</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lecturer</th>
                                        <td>Military Institute of Science and Technology</td>
                                        <td>Jul 1, 2020</td>
                                        <td>Feb 1, 2023</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lecturer</th>
                                        <td>University of Information Technology and Sciences</td>
                                        <td>Jan 15, 2020</td>
                                        <td>Jun 30, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Experience Ends-->


                    <!--Research Interest-->
                    <div id="faculty-research-interest" class="faculty-attributes" style="margin-top: 50px">
                        <h3>Research Interests</h3>

                        <p style="margin-left: 2px;">Data Structures, Algorithms, Graph Theory</p>

                    </div>
                    <!--Research Interest Ends-->



                    <!--Publications-->
                    <div id="faculty-publication" class="faculty-attributes" style="margin-top: 50px">
                        <h3>Publications</h3>

                        <div>
                            <p>Razzak, M. A., Islam, M. N., Broti, T., Kamal, E. S., & Zahan, S. (2023). Exploring
                                usability problems of mHealth applications developed for cervical cancer: An empirical
                                study. SAGE Open Medicine, 11, 20503121231180413.</p>
                        </div>

                        <div>
                            <p>Razzak, M. A., Islam, M. N., Broti, T., Kamal, E. S., & Zahan, S. (2023). Exploring
                                usability problems of mHealth applications developed for cervical cancer: An empirical
                                study. SAGE Open Medicine, 11, 20503121231180413.</p>
                        </div>

                    </div>
                    <!--Publication Ends-->


                </div>

            </div>
        </div>






        <div style="height: 50px;">

        </div>


    </div>








    <script>
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
        $('#myTab li:first-child a').tab('show') // Select first tab
        $('#myTab li:last-child a').tab('show') // Select last tab
        $('#myTab li:nth-child(3) a').tab('show') // Select third tab
    </script>


    <!--Bootstrap JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>


</body>

</html>