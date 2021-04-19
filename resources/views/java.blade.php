<!DOCTYPE html>
<html>
    <head>
        <title>Java Course</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href = "{{ asset('css/java.css') }}" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
          function myfunction(){
              alert("To go to lectures you need to register");
          }
      </script>
    </head>
    <body>
      <header class="v-header container">
        <div class="fullscreen-video-wrap">
          <video src="{{ asset('video/Typing_dark_03_Videvo.mov') }}" autoplay muted loop>
        </video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content text-md-center">
          <h1>Welcome Everyone</h1>
          <p>INTRODUCTION TO JAVA PROGRAMMING</p>
          <p><a style="color:white" href = "{{ url("/") }}">Menu</a></p>
        </div>
      </header>
      <!-- Section -->
      <a href = "{{ asset('html/preface.html') }}">
        <section class="section section-a section-preface">
          <div class="container">
            <h2>Preface</h2>
            <p>Dear Reader,
              Many of you have provided feedback on earlier courses, and your comments and
              suggestions have greatly improved the course. This course has been substantially enhanced in
              presentation, organization, examples, exercises, and supplements. The new course: ....</p>
          </div>
      </section>
      </a>
    
      <a href = "{{ asset('html/chapter1.html') }}">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 1</h2>
            <p>INTRODUCTION TO COMPUTERS, PROGRAMS, AND JAVA</p>
          </div>
        </section>
      </a>

      <a href = "{{ asset('html/chapter2.html') }}">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 2</h2>
            <p>How to use the JavaTA service</p>
          </div>
      </section>
      </a>

      <a href = "{{ asset('html/chapter3.html') }}">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 3</h2>
            <p>Virtual machine and first team</p>
          </div>
        </section>
      </a>

      <a href = "{{ asset('html/chapter4.html') }}">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 4</h2>
            <p>Ready for the first program</p>
          </div>
      </section>
      </a>

      <a href = "{{ asset('html/chapter5.html') }}">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 5</h2>
            <p>Ellie, variables and their types</p>
          </div>
        </section>
      </a>

      <a href = "{{ asset('html/chapter6.html') }}">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 6</h2>
            <p>What is not taught in school</p>
          </div>
      </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 7</h2>
            <p>What are compilers?</p>
          </div>
        </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 8</h2>
            <p>Meet Kim</p>
          </div>
      </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 9</h2>
            <p>Zero level summary</p>
          </div>
        </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 10</h2>
            <p>You have reached level 1</p>
          </div>
      </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-b">
          <div class="container">
            <h2>Chapter 11</h2>
            <p>Getting to know the program</p>
          </div>
        </section>
      </a>

      <a href = "#" onclick="myfunction()">
        <section class="section section-a">
          <div class="container">
            <h2>Chapter 12</h2>
            <p>Sentence</p>
          </div>
      </section>
      </a>
    </body>
</html>