<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    html { scroll-behavior: smooth; }
    body { padding-top: 70px; }
    .hero { background: #f8f9fa; padding: 100px 0; text-align: center; }
    .hero img { border-radius: 50%; width: 150px; height: 150px; object-fit: cover; }
    .progress { height: 25px; }
    footer { background-color: #f1f1f1; padding: 20px 0; text-align: center; }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">MyPortfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="hero">
    <div class="container">
      <img src="{{ asset('images/profile1.jpg') }}" alt="Profile Photo">

      <h1 class="mt-3">Hi, I'm Yves D. Torres</h1>
      <p>Web Development Student | Future Front-End Wizard</p>

      <a href="#projects" class="btn btn-primary">View My Projects</a>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-5">
    <div class="container">

      <h2 class="text-center mb-4">About Me</h2>
      <p>
        I'm a passionate and driven individual with a solid foundation in web development and programming.
        My tech journey began in senior high school at <strong>Northville 15 Integrated School</strong>, where I was introduced to HTML and CSS.
      </p>

      <p>
        I'm currently pursuing a degree in <strong>Computer Science</strong> at <strong>City College of Angeles</strong>,
        learning software development, data structures, front-end and back-end technologies.
      </p>

      <p>
        I'm especially passionate about front-end development, UI/UX design, and solving real-world problems with code.
      </p>

      <!-- Timeline -->
      <div class="row g-4 mt-5">
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5>Senior High School</h5>
              <h6 class="text-muted">Northville 15 Integrated School</h6>
              <p>Started learning HTML and CSS basics.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5>2024</h5>
              <h6 class="text-muted">City College of Angeles</h6>
              <p>Improved JavaScript, Python, and web development skills.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5>2025</h5>
              <p>Building this portfolio and mastering modern front-end tools.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Projects</h2>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100">

            <div id="gradingSystemCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <div class="carousel-item active">
                  <img src="{{ asset('images/p1.png') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                  <img src="{{ asset('images/p2.png') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                  <img src="{{ asset('images/p3.png') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                  <img src="{{ asset('images/p4.png') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                  <img src="{{ asset('images/p5.png') }}" class="d-block w-100">
                </div>

              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#gradingSystemCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#gradingSystemCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>

            </div>

            <div class="card-body">
              <h5 class="card-title">Student Grading System (Python)</h5>
              <p>A program that calculates student grades automatically.</p>
              <a href="#" class="btn btn-outline-primary btn-sm">View Code</a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-5">
    <div class="container">

      <h2 class="text-center mb-4">Skills</h2>

      <div class="mb-3">
        <label>HTML</label>
        <div class="progress"><div class="progress-bar bg-success" style="width: 90%">90%</div></div>
      </div>

      <div class="mb-3">
        <label>CSS</label>
        <div class="progress"><div class="progress-bar bg-info" style="width: 80%">80%</div></div>
      </div>

      <div class="mb-3">
        <label>JavaScript</label>
        <div class="progress"><div class="progress-bar bg-warning" style="width: 70%">70%</div></div>
      </div>

      <div class="mb-3">
        <label>Python</label>
        <div class="progress"><div class="progress-bar bg-secondary" style="width: 65%">65%</div></div>
      </div>

      <div class="mb-3">
        <label>Photo Editing</label>
        <div class="progress"><div class="progress-bar bg-danger" style="width: 75%">75%</div></div>
      </div>

    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Contact Me</h2>

      <form>
        <div class="mb-3"><label class="form-label">Name</label><input class="form-control"></div>
        <div class="mb-3"><label class="form-label">Email</label><input class="form-control"></div>
        <div class="mb-3"><label class="form-label">Subject</label><input class="form-control"></div>
        <div class="mb-3"><label class="form-label">Message</label><textarea class="form-control" rows="4"></textarea></div>

        <button class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; {{ date('Y') }} MyPortfolio. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
