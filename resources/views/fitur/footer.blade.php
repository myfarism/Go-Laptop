<style>
    body {
        background-color: #ffffff;
        color: #000000;
        font-family: Arial, sans-serif;
    }

    .footer {
        background-color: #121212;
        color: #ffffff;
        padding: 2rem 1rem;
        margin-top: 2rem;
        border-radius: 20px;
    }

    .footer .navbar-brand {
        color: #ffffff;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
    }

    .footer .navbar-brand img {
        margin-right: 0.5rem;
    }

    .footer .navbar-nav .nav-link {
        color: #ffffff;
        margin-right: 1rem;
    }

    .footer .navbar-nav .nav-link:hover {
        text-decoration: underline;
    }

    .footer .contact-section h5 {
        background-color: #B9FF66;
        color: #121212;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        display: inline-block;
    }

    .footer .contact-section p {
        margin: 0.5rem 0;
    }

    .footer .subscribe-section input {
        background-color: #1c1c1c;
        border: 1px solid #ffffff;
        color: #ffffff;
        border-radius: 5px;
        padding: 0.5rem;
        margin-right: 1rem;
    }

    .footer .subscribe-section button {
        background-color: #B9FF66;
        color: #121212;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
    }

    .footer .social-icons a {
        color: #ffffff;
        margin: 0 0.5rem;
    }

    .footer .footer-bottom {
        text-align: center;
        margin-top: 2rem;
        border-top: 1px solid #ffffff;
        padding-top: 1rem;
    }

    .footer .footer-bottom a {
        color: #ffffff;
        text-decoration: underline;
    }
</style>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center mb-4">
                    <a class="navbar-brand" href="#">
                        <img alt="Company Logo" class="d-inline-block align-text-top" height="30"
                            src="https://storage.googleapis.com/a1aa/image/kdsfGeWI1AiAbkPKqNtEZMavIipBOfTxlrrnQBgRX5CGpK6nA.jpg"
                            width="30" />
                        Positivus
                    </a>
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Use Cases
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-linkedin">
                            </i>
                        </a>
                        <a href="#">
                            <i class="fab fa-facebook">
                            </i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 contact-section">
                    <h5>
                        Contact us:
                    </h5>
                    <p>
                        Email: info@positivus.com
                    </p>
                    <p>
                        Phone: 555-567-8901
                    </p>
                    <p>
                        Address: 1234 Main St
                        <br />
                        Moonstone City, Stardust State 12345
                    </p>
                </div>
                <div class="col-md-6 subscribe-section">
                    <form class="d-flex">
                        <input placeholder="Email" type="email" />
                        <button type="submit">
                            Subscribe to news
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>
                    © 2023 Positivus. All Rights Reserved.
                    <a href="#">
                        Privacy Policy
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>