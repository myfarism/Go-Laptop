<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .contact-header {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    .contact-header h1 {
        background-color: #B9FF66;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 0;
        font-size: 24px;
    }

    .contact-header p {
        margin: 0 0 0 20px;
        font-size: 16px;
    }

    .contact-form {
        background-color: #f1f1f1;
        padding: 40px;
        border-radius: 10px;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact-form .form-check {
        margin-bottom: 20px;
    }

    .contact-form .form-check-label {
        margin-left: 10px;
    }

    .contact-form .form-control {
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .contact-form .btn {
        background-color: #212529;
        color: #fff;
        border-radius: 5px;
        padding: 10px 20px;
    }

    .form-container,
    .image-container {
        width: 48%;
    }
    .image-container{
        display: flex;
        justify-content: flex-end;
        margin-right: -25%;
    }

    .decorative-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
</head>

<body>
    <div class="container">
        <div class="contact-header">
            <h1>
                Contact Us
            </h1>
            <p>
                Connect with Us: Let's Discuss Your Digital Marketing Needs
            </p>
        </div>
        <div class="contact-form">
            <div class="form-container">
                <div class="form-check form-check-inline">
                    <input checked="" class="form-check-input" id="sayHi" name="contactType" type="radio"
                        value="sayHi" />
                    <label class="form-check-label" for="sayHi">
                        Say Hi
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="getQuote" name="contactType" type="radio" value="getQuote" />
                    <label class="form-check-label" for="getQuote">
                        Get a Quote
                    </label>
                </div>
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="name">
                            Name
                        </label>
                        <input class="form-control" id="name" placeholder="Name" type="text" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">
                            Email*
                        </label>
                        <input class="form-control" id="email" placeholder="Email" type="email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">
                            Message*
                        </label>
                        <textarea class="form-control" id="message" placeholder="Message" rows="4"></textarea>
                    </div>
                    <button class="btn" type="submit">
                        Send Message
                    </button>
                </form>
            </div>
            <div class="image-container">
                <img alt="Decorative star shapes" class="decorative-image"
                    src="foto\cantact.png" />
            </div>
        </div>
    </div>
</body>