<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page not found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&family=Roboto:wght@100&display=swap"
      rel="stylesheet"
    />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }

      img {
        display: block;
        width: 100%;
      }
      body {
        min-height: 100vh;
        background: url(../images/endless-constellation.svg);
      }
      .c404-wrapper {
        color: #fff;
        font-family: "Dosis", sans-serif;
        text-align: center;
        max-width: 400px;
        margin: 42px auto 0;
        position: relative;
      }
      .c404 {
        font-size: 100px;
        font-weight: 800;
        margin: 0 0 24px 0;
      }

      .c404-text {
        font-size: 19px;
        font-weight: 400;
        max-width: 301px;
        margin: 0 auto;
      }

      .astronaut {
        width: 43px;
        position: absolute;
        right: 20px;
        top: 210px;
        animation: spin 4.5s infinite linear;
      }

      @keyframes spin {
        0% {
          transform: rotateZ(0deg);
        }
        100% {
          transform: rotateZ(360deg);
        }
      }

      .c404-text span {
        position: relative;
      }

      .c404-text span::before {
        content: "";
        border-bottom: 3px solid #8b3dff;
        position: absolute;
        left: 0;
        top: 43%;
        width: 100%;
      }

      /*  */
      p.go-home-text {
        text-align: center;
        display: flex;
        justify-content: center;
      }

      .go-home {
        position: relative;
        font-family: "Dosis", sans-serif;
        color: #fff;
        cursor: pointer;
        background: #8b3dff;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 185px;
        height: 53px;
        font-size: 16px;
        font-weight: 600;
        /* text-transform: uppercase; */
        letter-spacing: 0.1em;
        border: 0;
        white-space: nowrap;
        text-decoration: none;
        outline: none;
        border-radius: 8px;

        transition: all 0.3s ease-in;
      }

      .go-home:hover {
        background: #9e77f3;
      }
    </style>
  </head>
  <body>
    <div class="c404-wrapper">
      <h2 class="c404">404</h2>
      <h3 class="c404-text">
        LOST IN <span>SPACE</span> Hmm, looks like that page doesn't exist.
      </h3>
      <div class="c404-images astronaut">
        <img src="../images/astronaut.svg" alt="astronaut" />
      </div>
      <div class="c404-images planet">
        <img src="../images/planet.svg" alt="astronaut" />
      </div>
    </div>
    <p class="go-home-text">
      <a class="go-home" href="../index.php">Go Home</a>
    </p>
  </body>
</html>
