<nav class="navbar navbar-expand-lg navbar-light " style="background-color: cyan;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" style="width: 100px" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home")? 'active': '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about")? 'active': '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "contact")? 'active': '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "faq")? 'active': '' }}" href="/faq">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
