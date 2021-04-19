<!DOCTYPE html>
<html>
    <head>
        <title>edX</title>
        <link rel = "stylesheet" href = "{{ asset('css/styleindex.css') }}" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#menuButton_1, #course_inf_text").hover( function(){
                    $("#course_inf_text").show();
                }, function(){
                    setTimeout(function(){
                        if(!($("#course_inf_text:hover").length > 0))
                            $("#course_inf_text").hide();
                    }, 0)
                })
            })
            $(document).ready(function(){
                $("#menuButton_2, #course_inf_text_2").hover( function(){
                    $("#course_inf_text_2").show();
                }, function(){
                    setTimeout(function(){
                        if(!($("#course_inf_text_2:hover").length > 0))
                            $("#course_inf_text_2").hide();
                    }, 0)
                })
            })
            $(document).ready(function(){
                $("#menuButton_3, #course_inf_text_3").hover( function(){
                    $("#course_inf_text_3").show();
                }, function(){
                    setTimeout(function(){
                        if(!($("#course_inf_text_3:hover").length > 0))
                            $("#course_inf_text_3").hide();
                    }, 0)
                })
            })

            $(document).ready(function(){
            $("#TA_img").click(function(){
                var div = $("#TA_img");
                div.animate({height: '300px',width: '300px', }, "slow");
                div.animate({height: '100px',width: '100px', }, "slow");
                });
            });
        </script>
        
        
    </head>
    <body>
        <!-- Menu Bar -->
        <div class = "menuBar">
            <div id = "menu_position">
                <div style = "display: flex; align-items:center">
                    <img id = "logoedX" src = "{{ asset('image/logo.png') }}"   style = "max-width: 5%; height: auto; ">
                    <button  id = "menuButton_1" >@lang('main.courses')</button>
                    <button  id = "menuButton_2" >@lang('main.schools_partners')</button>
                <a id ="menu3" href = "{{ asset('html/office.html') }}"><button  id = "menuButton_3" >@lang('main.branch_office')</button></a>
                </div>
                <div style = "display: flex; align-items:center">
                    <a class="localization" href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a>
                    <a href = "{{ url('/login') }}"><button id = "login">Login</button></a>
                </div>
            </div>
            <!-- Course(btn) infrmation -->
            <div class = "course_inf">
                <div id = "course_inf_text">
                    <p style="font-size: 20px; color:#00008B; font-size: 1.5vw;">@lang('main.courses_by_subject')</p>
                    <hr>
                    <div id = "course_conteiner">
                        <div id = "course_conteiner_1">
                            <a id = "course_name" href = ""  >Architecture</a>
                            <a id = "course_name" href = "" >Art & Culture</a>
                            <a id = "course_name" href = "" >Biology & Life Sciences</a>
                            <a id = "course_name" href = "" >Business & Management</a>
                            <a id = "course_name" href = "" >Chemistry</a>
                            <a id = "course_name" href = "" >Communication</a>
                            <a id = "course_name" href = "" >Computer Science</a>
                            <a id = "course_name" href = "" >Data Analysis & Statistics</a>
                            <a id = "course_name" href = "" >Design</a>
                        </div>
                        <div id = "course_conteiner_1">
                            <a id = "course_name" href = "" >Economics & Finance</a>
                            <a id = "course_name" href = "" >Education & Teacher Training</a>
                            <a id = "course_name" href = "" >Electronics</a>
                            <a id = "course_name" href = "" >Energy & Earth Sciences</a>
                            <a id = "course_name" href = "" >Engineering</a>
                            <a id = "course_name" href = "" >Environmental Studies</a>
                            <a id = "course_name" href = "" >Ethics</a>
                            <a id = "course_name" href = "" >Food & Nutrition</a>
                            <a id = "course_name" href = "" >Health & Safety</a>
                        </div>
                        <div id = "course_conteiner_1">
                            <a id = "course_name" href = "" >History</a>
                            <a id = "course_name" href = "" >Humanities</a>
                            <a id = "course_name" href = "" >Language</a>
                            <a id = "course_name" href = "" >Law</a>
                            <a id = "course_name" href = "" >Literature</a>
                            <a id = "course_name" href = "" >Math</a>
                            <a id = "course_name" href = "" >Medicine</a>
                            <a id = "course_name" href = "" >Music</a>
                            <a id = "course_name" href = "" >Philanthropy</a>
                        </div>
                    </div>
                </div>
                <div id = "course_inf_text_2">
                    <p style = "font-size: 1.5vw; color:#00008B">@lang('main.university')</p>
                    <hr>
                    <div id = "course_conteiner">
                        <div id = "course_conteiner_1">
                            <a href = "https://sdu.edu.kz/" id = "course_name" >SDU University</a>
                            <a href = "https://www.bu.edu/" id = "course_name" >Boston University</a>
                            <a href = "https://www.harvard.edu/" id = "course_name" >Harward University</a>
                            <a href = "https://www.harvard.edu/" id = "course_name" >HangKong University</a>
                            <a href = "https://www.massachusetts.edu/" id = "course_name" >Massachusetts University</a>
                            <a href = "https://www.cam.ac.uk/" id = "course_name" >Cambridge University</a>
                        </div>
                        <div id = "course_conteiner_1">
                            <a href = "https://www.wpunj.edu/" id = "course_name" >Princeton University</a>
                            <a href = "https://www.kaznu.kz/en/" id = "course_name" >KazNu University</a>
                            <a href = "https://www.kbtu.kz/en/" id = "course_name" >KBTU University</a>
                            <a href = "https://www.kimep.kz/en/" id = "course_name" >KIMEP University</a>
                            <a href = "https://www.almau.edu.kz/en" id = "course_name" >ALMAU University</a>
                            <a href = "https://astanait.edu.kz/en/aitu-2/" id = "course_name" >AITU University</a>
                        </div>
                        <div id = "course_conteiner_1">
                            <a href = "https://nu.edu.kz/" id = "course_name" >NU University</a>
                            <a href = "https://www.eiu.am/en/home-2/" id = "course_name" >EIU University</a>
                            <a href = "https://www.ox.ac.uk/" id = "course_name" >Oxford University</a>
                            <a href = "https://www.stanford.edu/" id = "course_name" >Stanford University</a>
                            <a href = "https://www.manchester.ac.uk/" id = "course_name" >Manchester University</a>
                            <a href = "https://www.brown.edu/" id = "course_name" >Brown University</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Image/Information -->
        <div class = "menu_image">
            <div id = "first_glance">
                <p id = "text_inf" >@lang('main.Access_2500')</p>  
                <img id = "girl_image" src = "{{ asset('image/girls2.jpg') }}" alt = "Error"  height = "100%">
            </div>
        </div>
        <!-- Search input line -->
        <!-- <div class = "search_input">
            <div id = "search_line">
                <p id = "search_text" ><strong>What do you want to learn?</strong></p>
                <img id = "search_icon" src = "style/icon/icon.png" width="15px" height="15"></img>
                <input id = "search" type = "text" placeholder="Search..." >
            </div>
        </div> -->
        <!-- University Icons -->
        <div class = "university">
            <a href = "https://www.bu.edu/"><img id = "boston" src = "{{ asset('image/boston.jpg') }}" width="80px" height="35px"></a>
            <a href = "https://www.harvard.edu/"><img id = "harward" src = "{{ asset('image/harward.png') }}" width="140px" height="80px"></a>
            <a href = "https://www.hku.hk/"><img id = "hongHong" src = "{{ asset('image/HongKong.png') }}" width="120px" height="130px"></a>
            <a href = "https://sdu.edu.kz/"><img id = "sdu" src = "{{ asset('image/sdu.png') }}" width="110px" height="110px"></a>
            <a href = "https://www.massachusetts.edu/"><img id = "massachusetts" src = "{{ asset('image/massachusetts.jpg') }}" width="90px" height="70px"></a>
            <a href = "https://www.cam.ac.uk/"><img id = "berkeley" src = "{{ asset('image/berkeleylogo.jpg') }}" width="120px" height="35px"></a>
        </div>
        <!-- Advertising -->
        <div class = "TA">
            <div id = "TA_inf">
                <p id = "TA_text_inf"><strong>@lang('main.executive_education')</strong></p>
                <p id = "Ta_text_inf_2">@lang('main.A_4-week')</p>
                <a href = "{{ asset('html/ta.html') }}"><button id = "TA_button">@lang('main.information')</button></a>
            </div>
            <img id = "TA_img" src = "{{ asset('image/photo_2020-11-21_13-58-40.jpg') }}" width="40%" height="100%">
        </div>
        <!-- Subject -->
        <div class = "Subject">
            <p id = "Subject_text"><strong>@lang('main.popular_subjects')</strong></p>
            <div id = "Subject_block_1">
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img  src = "{{ asset('icon/computer.png') }}" width="35dpx" height="27px" style="position: relative; right: 39px;">
                        <p id = "Line_1_text" ><strong>@lang('main.computer_science')</strong></p>
                    </div>
                    <div id = "Line_2">
                        <ul >
                            <li><a id = "course_text" href="" >Azure</a></li>
                            <li><a id = "course_text" href="" >Blockchain</a></li>
                            <li><a id = "course_text" href="" >C Programming</a></li>
                            <li><a id = "course_text" href="" >Devops</a></li>
                            <li><a id = "course_text" href="" >Django</a></li>
                            <li><a id = "course_text" href="" >Full Stack Development</a></li>
                            <li><a id = "course_text" href="" >Html</a></li>
                            <li><a id = "course_text" href="{{ url('/java') }}" >Java</a></li>
                            <li><a id = "course_text" href="" >Javascript</a></li>
                            <li><a id = "course_text" href="" >Pythton</a></li>
                        </ul>
                    </div>
                </div>
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img src = "{{ asset('icon/globe.png') }}" width="35dpx" height="29px" style="position: relative; right: 39px;">
                        <p id = "Line_1_text"><strong>@lang('main.language')</strong></p>
                    </div>
                    <div id ="Line_2">
                        <ul>
                            <li><a id = "course_text" href="" >Chinese</a></li>
                            <li><a id = "course_text" href="" >English</a></li>
                            <li><a id = "course_text" href="" >ESL</a></li>
                            <li><a id = "course_text" href="" >Grammar</a></li>
                            <li><a id = "course_text" href="">Italian</a></li>
                            <li><a id = "course_text" href="">Japanese</a></li>
                            <li><a id = "course_text" href="">Mandarin</a></li>
                            <li><a id = "course_text" href="" >Sign Language</a></li>
                            <li><a id = "course_text" href="" >Spanish</a></li>
                            <li><a id = "course_text" href="" >Writing</a></li>
                        </ul>
                    </div>
                </div>
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img  src = "{{ asset('icon/presentation.png') }}" width="35dpx" height="29px" style="position: relative; right: 39px;">
                        <p id = "Line_1_text" ><strong>@lang('main.data_science')</strong></p>
                    </div>
                    <div id = "Line_2">
                        <ul>
                            <li><a id = "course_text" href="" >Artificial Intelligence</a></li>
                            <li><a id = "course_text" href="" >Big Data</a></li>
                            <li><a id = "course_text" href="" >Cloud Computing</a></li>
                            <li><a id = "course_text" href="" >Computer Programming</a></li>
                            <li><a id = "course_text" href="" >Data Analysis</a></li>
                            <li><a id = "course_text" href="">Data Mining</a></li>
                            <li><a id = "course_text" href="" >Machina Learning</a></li>
                            <li><a id = "course_text" href="" >Power BI</a></li>
                            <li><a id = "course_text" href="" >Pythton</a></li>
                            <li><a id = "course_text" href="" >Quantum Computing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div id = "Subject_block_1">
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img  src = "{{ asset('icon/paper-money.png') }}" width="35dpx" height="27px" style="position: relative; right: 39px;" >
                        <p id = "Line_1_text"><strong>@lang('main.business_managment')</strong></p>
                    </div>
                    <div id = "Line_2">
                        <ul >
                            <li><a id = "course_text" href="" >Business Administration</a></li>
                            <li><a id = "course_text" href="">Business Analysis</a></li>
                            <li><a id = "course_text" href="" >Corporate Finance</a></li>
                            <li><a id = "course_text" href="" >Economics</a></li>
                            <li><a id = "course_text" href="">Entrepeneurship</a></li>
                            <li><a id = "course_text" href="" >Finance</a></li>
                            <li><a id = "course_text" href="">Financial Literacy</a></li>
                            <li><a id = "course_text" href="" >Leadership</a></li>
                            <li><a id = "course_text" href="">Project Managment</a></li>
                            <li><a id = "course_text" href="" >Statistics</a></li>
                        </ul>
                    </div>
                </div>
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img  src = "{{ asset('icon/desk-clock.png') }}" width="35dpx" height="29px" style="position: relative; right: 39px;">
                        <p id = "Line_1_text"><strong>@lang('main.engineering')</strong></p>
                    </div>
                    <div id = "Line_2">
                        <ul>
                            <li><a id = "course_text" href="">Aerospase Engineering</a></li>
                            <li><a id = "course_text" href="" >Biomedical Engineering</a></li>
                            <li><a id = "course_text" href="" >Chemical Engineering</a></li>
                            <li><a id = "course_text" href="" >Civil Engineering</a></li>
                            <li><a id = "course_text" href="" >Computer Engineering</a></li>
                            <li><a id = "course_text" href="" >Electrical Engineering</a></li>
                            <li><a id = "course_text" href="" >Industrial Engineering</a></li>
                            <li><a id = "course_text" href="">Mechanical Engineering</a></li>
                            <li><a id = "course_text" href="" >Software Engineering</a></li>
                            <li><a id = "course_text" href="" >Structural Engineering</a></li>
                        </ul>
                    </div>
                </div>
                <div id = "Block">
                    <div id = "Line_1">
                        <svg height="65" width="57">
                            <circle cx="35" cy="32.5" r="21" stroke="white"  fill="white" />
                        </svg>
                        <img  src = "{{ asset('icon/paper.png') }}" width="35dpx" height="29px" style="position: relative; right: 39px;">
                        <p id = "Line_1_text"><strong>@lang('main.humanities')</strong></p>
                    </div>
                    <div id = "Line_2">
                        <ul >
                            <li><a id = "course_text" href="" >Art</a></li>
                            <li><a id = "course_text" href="" >Child Development</a></li>
                            <li><a id = "course_text" href="" >Epidemics</a></li>
                            <li><a id = "course_text" href="" >Fashion</a></li>
                            <li><a id = "course_text" href="" >History</a></li>
                            <li><a id = "course_text" href="" >Human Anatomy</a></li>
                            <li><a id = "course_text" href="" >Literature</a></li>
                            <li><a id = "course_text" href="">Psychology</a></li>
                            <li><a id = "course_text" href="" >Public Speaking</a></li>
                            <li><a id = "course_text" href="" >Shakespeare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact edX/Bottom edX -->
        <br><br><br>
        <div class = "Contact_edX">
            <div id = "edX_inf">
                <img id ="edX_logo" src = "{{ asset('image/logo.png') }}"  height="35px">
                
                <!-- <div id = "edX_block"> -->
                    
                    <!-- <a id = "edx_block_text_2" href = "" >About</a> -->
                    <!-- <a id = "edx_block_text_2" href = "" >edX for Business</a>
                    <a id = "edx_block_text_2" href = "" >Afiliates</a>
                    <a id = "edx_block_text_2" href = "" >Open edX</a>
                    <a id = "edx_block_text_2" href = "" >Careers</a>
                    <a id = "edx_block_text_2" href = "" >News</a> -->
                <!-- </div> -->
                
                <!-- <div id = "edX_block">
                    <img  src = "style/image/Download-on-the-App-Store-01.png"height="138px" >
                    <img  src = "style/image/Google-Play-Store-Download-Button-500x164-300x98.png"  height="35px" style="position: relative; top:-40px" >
                </div> -->
            </div>
        </div>
    </body>
</html>