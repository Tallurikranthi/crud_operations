<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Your Profile</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: wheat;
        color: #fff;
        text-align: center;
        padding: 20px;
        border-radius: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-content {
        flex: 1;
    }

    .home-button {
        margin-right: 20px;
    }

    .home-button a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .profile {
        display: flex;
        justify-content: space-between;
        margin: 20px;
    }

    h2 {
        color: blue;
    }

    .profile-info {
        flex: 1;
        padding: 20px;
    }

    .profile-img {
        flex: 1;
        padding: 20px;
    }

    .profile-img img {
        height: 350px;
        border-radius: 10px;
    }

    .skills {
        background-color: #f4f4f4;
        padding: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    </style>
</head>

<body>

    <header>
        <div class="header-content">
            <h1>Durgarao kumili</h1>
            <p>Web Developer</p>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Exit</a></li>
        </ul>
        </div>
    </header>

    <section class="profile">
        <div class="profile-info">
            <h2>About Me</h2>
            <p>A hardworking individual with excellent communication and interpersonal skills, able to work well
                independently and within a team. Proven ability to foster and maintain successful relationships
                with customers, peers, and colleagues. Possess strong problem-solving and troubleshooting skills.
                Experienced in working under pressure in challenging and fast-paced environments. Eager to
                contribute to the success of the organization.
            </p>
        </div>

        <div class="profile-img">
            <img src="durga.jpg" alt="Profile Picture">
        </div>
    </section>

    <section class="skills">
        <h2>Skills</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>React</li>
            <li>php</li>
            <li>SQL</li>
        </ul>
    </section>

    <footer>
        <p>Contact: durgaraokumi0103@gmail.com</p>
    </footer>

</body>

</html>