@extends ('layout.frontend', ['title' => 'Anthony Ho | Full-Stack Developer'])

@section ('content')

<!--============================== HOME ==============================-->
      <section id="home" class="home-container">
        <div class="emblem-item">
          <img
            class="emblem"
            src="{{asset('assets/images/placeholder-emblem.png')}}"
            alt="Placeholder emblem for website."
          />
        </div>
        <h1 class="main-title">
          Full-Stack<span class="next-line">Developer</span>
        </h1>
        <div class="subtext">
          <p>Front-End • Back-End</p>
          <p>UX • Design • UI</p>
          <p>Web • Mobile • Apps</p>
        </div>
        <div class="social-icons">
        <a
          href="https://github.com/sonnto"
          aria-label="Click for Anthony's Github"
          rel="noopener"
          ><i class="fa-brands fa-square-github"></i
        ></a>
        <a
          href="https://linkedin.com/in/anthonykfho"
          aria-label="Click for Anthony's LinkedIn"
          rel="noopener"
          ><i class="fa-brands fa-linkedin"></i
        ></a>
        <a
          href="https://twitter.com/anthonykfho"
          aria-label="Click for Anthony's Twitter"
          rel="noopener"
          ><i class="fa-brands fa-square-twitter"></i
        ></a>
        </div>
      </section>
    <hr id="division" />
    <!--============================== ABOUT ==============================-->
    <section id="about" class="about-container">
      <h2 class="section-heading desktop-sect-heading">
        Kee-Fung<span class="next-line">Anthony Ho</span>
      </h2>
      <div class="about-content-container">
        <div class="profile-pic-item">
          <img
            class="profile-pic"
            src="{{asset('assets/images/anthony-side-profile.jpg')}}"
            alt="Headshot profile photo of Kee-Fung Anthony Ho."
          />
        </div>
        <div class="bio-text-wrapper">
          <h2 class="section-heading mobile-sect-heading">
            Kee-Fung <span class="next-line">Anthony Ho</span>
          </h2>
          <div class="bio">
            <p>
              Based in the heart of Toronto, Canada, I am a full-stack developer
              with a passion for building responsive and innovative digital
              products that solve real-world problems. With a background in law,
              I have transitioned into the dynamic world of software
              development. I have designed and developed efficient, scalable,
              and high-performance projects with a variety of languages,
              frameworks, and tools including JavaScript, C#, ASP.NET, MongoDB,
              PHP, and Node.js. I am always looking to stay ahead of the curve
              and keep up-to-date with the latest trends and technologies to
              bring innovative solutions to the challenges of tomorrow.
            </p>
          </div>
          <div class="contact-info">
            <p>
              <i class="fa-solid fa-envelope"></i>
              <a
                href="mailto:anthonykfho@gmail.com"
                aria-label="Click to e-mail Anthony"
                rel="noopener"
                >&nbsp;&nbsp;&nbsp;anthonykfho@gmail.com</a
              >
            </p>
            <p>
              <i class="fa-solid fa-mobile-screen-button"></i>
              <a
                href="tel:1-647-588-4334"
                aria-label="Click to call Anthony via his mobile phone number"
                rel="noopener"
                >&nbsp;&nbsp;&nbsp;+1 (647) 588-4334</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>
    <hr id="division" />
    <!--============================== RESUME ==============================-->
    <section id="resume" class="resume-container">
    <h2 class="section-heading">Resume</h2>
      <div class="experience-container">
        <h3 class="experience-type">Education</h3>
      @foreach ($education as $edu)
        <h3 class="experience-name">{{$edu->institute}}</h3>
        <h4>{{$edu->location}}</h4>
        <h4>{{date('M. Y', strtotime($edu->started_at))}} - {{date('M. Y', strtotime($edu->ended_at))}}</h4>
        <h4>{{$edu->qualification}}</h4>
        <ul>
          @foreach(explode(';', $edu->content) as $bullet)
              <li>{{ $bullet }}</li>
          @endforeach
        </ul>
      @endforeach
        <h3 class="experience-type">Employment</h3>
      @foreach ($employments as $employment)
        <h3 class="experience-name">{{$employment->title}}</h3>
        <h3 class="experience-name">{{$employment->employer}}</h3>
        <h4>{{$employment->location}}</h4>
        <h4>{{date('M. Y', strtotime($employment->started_at))}} - {{date('M. Y', strtotime($employment->ended_at))}}</h4>
        <ul>
          @foreach(explode(';', $employment->content) as $bullet)
              <li>{{ $bullet }}</li>
          @endforeach
        </ul>
      @endforeach
    </section>
    <hr id="division" />
    <!--============================== PROJECTS ==============================-->
    <section id="projects" class="projects-container">
      <h2 class="section-heading">Projects</h2>
      <div class="projects-content-container">
    @foreach ($projects as $project)
      <div class="project-card-item">
        <!-- PROJECT PREVIEW -->
        @if($project->image)
          <div class="project-preview">
            <img src="{{asset('storage/'.$project->image)}}" width="800px" alt="Preview of {{@$project->title}}."/>
          </div>
          @else
            <p>[ This project does not have a preview ]</p>
        @endif
        <!-- PROJECT NAME -->
        <h3 class="project-name">{{$project->title}}</h3>
        <!-- PROJECT DESCRIPTION -->
        <div class="project-description">{{$project->content}}</div>
        <!-- PROJECT URLs/LINKS -->
        <div class="project-media-icon"><a href="{{$project->url}}" aria-label="Click for Github repository" rel="noopener"><i class="fa-solid fa-code"></i></a>
        @php
          $urlTest="";
          $urlAria="";
        @endphp
        @if($project->urlTest)
          @php
            $urlTest=$project->urlTest;
            $urlAria="Click for Github repository";
          @endphp
          @else
            @php
              $urlTest="#";
              $urlAria="Nothing to click here";
            @endphp
        @endif
        <a href="{{$project->$urlTest}}}}" aria-label="{{$urlAria}}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </div>
    @endforeach
    </section>