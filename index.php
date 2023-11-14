<?php
include 'components/header.php'; 
?>
    <div class="landing-page-wrapper">
      <div class="banner">
        <div class="banner-bg">
          <img src="images/banner.jpg" alt="banner" />
        </div>
        <div class="banner-content">
          <h2 class="b-main">
            Quiz Like a Pro, <br />
            Achieve Your Best.
          </h2>
          <p class="b-sub">
            Explore 40 Vital PHP and MySQL Questions in Our Quiz!
          </p>
          <div class="banner-btn">
            <a href="components/sign-up.php" class="btn-sign-up"
              >Sign up for free</a
            >
          </div>
        </div>
      </div>
      <section class="meet-the-team">
        <div class="meet-the-team-container">
          <h2 class="site-title">Meet The Team</h2>
          <div class="mtt-items">
            <div class="mtt-item">
              <img src="images/efraim.jpg" alt="team1" />
              <div class="team-content">
                <h2 class="team-name">
                  Efraim <br />
                  Gondraneos
                </h2>
                <p class="team-title">Technical Lead</p>
              </div>
            </div>
            <div class="mtt-item">
              <img src="images/marvin.jpg" alt="team2" />
              <div class="team-content">
                <h2 class="team-name">
                  Marvin <br />
                  Genosolango
                </h2>
                <p class="team-title">Content Manager</p>
              </div>
            </div>
            <div class="mtt-item">
              <img src="images/sam-ty.jpg" alt="team3" />
              <div class="team-content">
                <h2 class="team-name">
                  Samantha <br />
                  Ty
                </h2>
                <p class="team-title">Graphic Design Supervisor</p>
              </div>
            </div>
            <div class="mtt-item">
              <img src="images/angeee.jpg" alt="team4" />
              <div class="team-content">
                <h2 class="team-name">
                  Angelica <br />
                  Lopez
                </h2>
                <p class="team-title">Operations Manager</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer-container">
          <div class="footer-content">
            <h2 class="footer-logo">Q</h2>
            <p class="footer-text">
              &copy;
              <?php echo date("Y"); ?>
              GGLT Crew
            </p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
