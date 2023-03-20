<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Take a chance on a new best friend with our pet raffle!</h1>
          <h2>A new best friend is just a raffle ticket away!</h2>
          <div class="d-flex">
            <a href="#pet_tastic" class="btn-get-started scrollto">Buy Ticket</a>
         
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <main id="main">
     <section id="how" class="about">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <img src="assets/img/about.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>How Pet-Tastic Raffle Works</h3>
                <p class="fst-italic">
                Don't miss out on the chance to win a fantastic pet! Simply follow the instructions to enter our raffle.
                </p>
                <ul>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                </ul>
            </div>
            </div>
        </div>
        </section>
        
        <section id="pet_tastic" class="services section-bg">
            <div class="container">
                <div class="section-title">
                    <span>Raffle</span>
                    <h2>Raffle-List</h2>
                    <p>Check out the exciting prizes on our pet raffle list</p>
                </div>
                <div class="row" id="raffle-list">
                    <!-- Raffle items will be displayed here -->
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
            <p>Please don't hesitate to reach out to us at any time. We will respond as promptly as possible to all inquiries.</p>
            </div>
            <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            </div>
        </div>
    </section>
  </main>
    <?php include 'includes/modal.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script.php'; ?>