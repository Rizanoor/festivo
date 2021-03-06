<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

{{-- Header auth --}}
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

  .content-4-1 .btn:focus,
  .content-4-1 .btn:active {
    outline: none !important;
  }

  .content-4-1 .width-left {
    width: 0%;
  }

  .content-4-1 .width-right {
    width: 100%;
    height: 100%;
    padding: 8rem 2rem;
    background-color: #ffffff;
  }

  .content-4-1 .centered {
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  .content-4-1 .right {
    width: 100%;
  }

  .content-4-1 .title-text {
    font: 600 1.875rem/2.25rem Poppins, sans-serif;
    margin-bottom: 0.75rem;
  }

  .content-4-1 .caption-text {
    font: 400 0.875rem/1.75rem Poppins, sans-serif;
    color: #a8adb7;
  }

  .content-4-1 .input-label {
    font: 500 1.125rem/1.75rem Poppins, sans-serif;
    color: #39465b;
  }

  .content-4-1 .div-input {
    font: 300 1rem/1.5rem Poppins, sans-serif;
    padding: 1rem 1.25rem;
    margin-top: 0.75rem;
    border-radius: 0.75rem;
    border: 1px solid #cacbce;
    color: #2a3240;
    transition: 0.3s;
  }

  .content-4-1 .div-input:focus-within {
    border: 1px solid #2ec49c;
    color: #2a3240;
    transition: 0.3s;
  }

  .content-4-1 .div-input input::placeholder {
    color: #cacbce;
    transition: 0.3s;
  }

  .content-4-1 .div-input:focus-within input::placeholder {
    color: #2a3240;
    outline: none;
    transition: 0.3s;
  }

  .content-4-1 .div-input .icon-toggle-empty-4-1 path,
  .content-4-1 .div-input:focus-within .icon path {
    transition: 0.3;
    fill: #2ec49c;
    transition: 0.3s;
  }

  .content-4-1 .input-field {
    font: 300 1rem/1.5rem Poppins, sans-serif;
    width: 100%;
    background-color: #ffffff;
    transition: 0.3s;
  }

  .content-4-1 .input-field:focus {
    outline: none;
    transition: 0.3s;
  }

  .content-4-1 .forgot-password {
    font: 400 0.875rem/1.25rem Poppins, sans-serif;
    color: #cacbce;
    transition: 0.3s;
    text-decoration: none;
  }

  .content-4-1 .forgot-password:hover {
    color: #2a3240;
  }

  .content-4-1 .btn-fill {
    font: 500 1.25rem/1.75rem Poppins, sans-serif;
    background-image: linear-gradient(rgba(91, 203, 173, 1),
        rgba(39, 194, 153, 1));
    padding: 0.75rem 1rem;
    margin-top: 2.25rem;
    border-radius: 0.75rem;
    transition: 0.5s;
  }

  .content-4-1 .btn-fill:hover {
    background-image: linear-gradient(#2ec49c, #2ec49c);
    transition: 0.5s;
  }

  .content-4-1 .bottom-caption {
    font: 400 0.875rem/1.25rem Poppins, sans-serif;
    margin-top: 2rem;
    color: #2a3240;
  }

  .content-4-1 .green-bottom-caption {
    color: #2ec49c;
    font-weight: 500;
  }

  .content-4-1 .green-bottom-caption:hover {
    color: #2ec49c;
    cursor: pointer;
    text-decoration: underline;
  }

  @media (min-width: 576px) {
    .content-4-1 .width-right {
      padding: 8rem 4rem;
    }

    .content-4-1 .right {
      width: 58.333333%;
    }
  }

  @media (min-width: 768px) {
    .content-4-1 .right {
      width: 66.666667%;
    }
  }

  @media (min-width: 992px) {
    .content-4-1 .width-left {
      width: 48%;
    }

    .content-4-1 .width-right {
      width: 52%;
    }

    .content-4-1 .right {
      width: 75%;
    }
  }

  @media (min-width: 1200px) {
    .content-4-1 .right {
      width: 58.333333%;
    }
  }
</style>

{{-- Header --}}
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

  .header-2-2 .modal-item.modal {
    top: 2rem;
  }

  .header-2-2 .navbar,
  .header-2-2 .hero {
    padding: 3rem 2rem;
  }

  .header-2-2 .navbar-light .navbar-nav .nav-link {
    font: 300 18px/1.5rem Poppins, sans-serif;
    color: #1d1e3c;
    transition: 0.3s;
  }

  .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
    font: 600 18px/1.5rem Poppins, sans-serif;
    color: #1d1e3c;
    transition: 0.3s;
  }

  .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
  .header-2-2 .navbar-light .navbar-nav .nav-link.active,
  .header-2-2 .navbar-light .navbar-nav .nav-link.show,
  .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
    font-weight: 600;
    transition: 0.3s;
  }

  .header-2-2 .navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  .header-2-2 .btn:focus,
  .header-2-2 .btn:active {
    outline: none !important;
  }

  .header-2-2 .btn-fill {
    font: 600 18px / normal Poppins, sans-serif;
    background-color: #27c499;
    border-radius: 12px;
    padding: 12px 32px;
    transition: 0.3s;
  }

  .header-2-2 .btn-fill:hover {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    transition: 0.3s;
  }

  .header-2-2 .btn-no-fill {
    font: 300 18px/1.75rem Poppins, sans-serif;
    color: #1d1e3c;
    padding: 12px 32px;
    transition: 0.3s;
  }

  .header-2-2 .modal-item .modal-dialog .modal-content {
    border-radius: 8px;
    transition: 0.3s;
  }

  .header-2-2 .responsive li a {
    padding: 1rem;
    transition: 0.3s;
  }

  .header-2-2 .text-caption {
    font: 600 0.875rem/1.625 Poppins, sans-serif;
    margin-bottom: 2rem;
    color: #27c499;
  }

  .header-2-2 .left-column {
    margin-bottom: 2.75rem;
    width: 100%;
  }

  .header-2-2 .right-column {
    width: 100%;
  }

  .header-2-2 .title-text-big {
    font: 600 2.25rem/2.5rem Poppins, sans-serif;
    margin-bottom: 2rem;
    color: #272e35;
  }

  .header-2-2 .btn-try {
    font: 600 1rem/1.5rem Poppins, sans-serif;
    padding: 1rem 1.5rem;
    border-radius: 0.75rem;
    background-color: #27c499;
    transition: 0.3s;
  }

  .header-2-2 .btn-try:hover {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    transition: 0.3s;
  }

  .header-2-2 .btn-outline {
    font: 400 1rem/1.5rem Poppins, sans-serif;
    border: 1px solid #555b61;
    color: #555b61;
    padding: 1rem 1.5rem;
    border-radius: 0.75rem;
    background-color: transparent;
    transition: 0.3s;
  }

  .header-2-2 .btn-outline:hover {
    border: 1px solid #27c499;
    color: #27c499;
    transition: 0.3s;
  }

  .header-2-2 .btn-outline:hover div path {
    fill: #27c499;
    transition: 0.3s;
  }

  @media (min-width: 576px) {
    .header-2-2 .modal-item .modal-dialog {
      max-width: 95%;
      border-radius: 12px;
    }

    .header-2-2 .navbar {
      padding: 3rem 2rem;
    }

    .header-2-2 .hero {
      padding: 3rem 2rem 5rem;
    }

    .header-2-2 .title-text-big {
      font-size: 3rem;
      line-height: 1.2;
    }
  }

  @media (min-width: 768px) {
    .header-2-2 .navbar {
      padding: 3rem 4rem;
    }

    .header-2-2 .hero {
      padding: 3rem 4rem 5rem;
    }

    .header-2-2 .left-column {
      margin-bottom: 3rem;
    }
  }

  @media (min-width: 992px) {
    .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
      padding-right: 1.25rem;
      padding-left: 1.25rem;
    }

    .header-2-2 .navbar {
      padding: 3rem 6rem;
    }

    .header-2-2 .hero {
      padding: 3rem 6rem 5rem;
    }

    .header-2-2 .left-column {
      width: 50%;
      margin-bottom: 0;
    }

    .header-2-2 .right-column {
      width: 50%;
    }

    .header-2-2 .title-text-big {
      font-size: 3.75rem;
      line-height: 1.2;
    }
  }
</style>



{{-- Footer --}}
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

  .footer-2-2 .list-space {
    margin-bottom: 1.25rem;
  }

  .footer-2-2 .footer-text-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #000000;
    margin-bottom: 1.5rem;
  }

  .footer-2-2 .list-menu {
    color: #c7c7c7;
    text-decoration: none !important;
  }

  .footer-2-2 .list-menu:hover {
    color: #555252;
  }

  .footer-2-2 hr.hr {
    margin: 0;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }

  .footer-2-2 .border-color {
    color: #c7c7c7;
  }

  .footer-2-2 .footer-link {
    color: #c7c7c7;
  }

  .footer-2-2 .footer-link:hover {
    color: #555252;
  }

  .footer-2-2 .social-media-c:hover circle,
  .footer-2-2 .social-media-p:hover path {
    fill: #555252;
  }

  .footer-2-2 .footer-info-space {
    padding-top: 3rem;
  }

  .footer-2-2 .list-footer {
    padding: 5rem 1rem 3rem 1rem;
  }

  .footer-2-2 .info-footer {
    padding: 0 1rem 3rem;
  }

  @media (min-width: 576px) {
    .footer-2-2 .list-footer {
      padding: 5rem 2rem 3rem 2rem;
    }

    .footer-2-2 .info-footer {
      padding: 0 2rem 3rem;
    }
  }

  @media (min-width: 768px) {
    .footer-2-2 .list-footer {
      padding: 5rem 4rem 6rem 4rem;
    }

    .footer-2-2 .info-footer {
      padding: 0 4rem 3rem;
    }
  }

  @media (min-width: 992px) {
    .footer-2-2 .list-footer {
      padding: 5rem 6rem 6rem 6rem;
    }

    .footer-2-2 .info-footer {
      padding: 0 6rem 3rem;
    }
  }
</style>