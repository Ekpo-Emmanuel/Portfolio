<style>

    .container1 {
      text-align: center;
      /* margin-top: 5em; */
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      place-content: center;
    }

    .error-code {
      font-size: 8rem;
      color: #e74c3c;
    }

    .error-message {
      font-size: 1.5rem;
      color: #333;
    }

    .back-link 
    {
      margin-top: 10px;
      text-decoration: none;
      color: #3498db;
      /* font-weight: bold; */
      opacity: .7;
      transition: .3;
      text-transform: uppercase;
    }
    .back-link:hover 
    {
        opacity: 1;
    }
  </style>

    <div class="container1 showcase">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page not found.</div>
    <p class="text-anime" style="font-size: 2em; width: 80%">I am a talented Developer, and I am focused on creating high-quality and impactful digital experiences.</p>
    <a href="<?php echo $app; ?>" class="back-link">See Projects</a>
    </div>