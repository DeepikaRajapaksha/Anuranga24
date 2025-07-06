<nav class="navbar">
  <div class="logo-container">
    <img src="{{ asset('images/pagelogo.png') }}" alt="Logo" class="logo">
  </div>
  <ul class="nav-links">
    <li><a href="/">Home</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="projects">Projects</a></li>
    <li><a href="booking">Booking</a></li>
    <li><a href="contact">Contact Us</a></li>
  </ul>
  <div class= "login-button">
    <button> Login </button>
  </div>
  <!-- Golden Snowflakes -->
  <div class="snowflake" style="top: 10%; left: 20%; animation-duration: 10s;"></div>
  <div class="snowflake" style="top: 30%; right: 70%; animation-duration: 12s;"></div>
  <div class="snowflake" style="top: 50%; left: 40%; animation-duration: 8s;"></div>
  <div class="snowflake" style="top: 80%; right: 10%; animation-duration: 11s;"></div>
  <div class="snowflake" style="top: 20%; left: 80%; animation-duration: 9s;"></div>
</nav>

<script>
  const navbar = document.querySelector('.navbar');

  for (let i = 0; i < 50; i++) {
    const snowflake = document.createElement('div');
    snowflake.classList.add('snowflake');

    snowflake.style.top = `${Math.random() * 100}%`;
    snowflake.style.left = `${Math.random() * 100}%`;
    snowflake.style.right = `${Math.random() * 100}%`;

    snowflake.style.animationDuration = `${8 + Math.random() * 10}s`;

    snowflake.style.animationDelay = `${Math.random() * 5}s`;

    navbar.appendChild(snowflake);
  }
</script>
