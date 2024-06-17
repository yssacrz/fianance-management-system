<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Management System</title>
    <style>
        body {
            background-color: rgb(5, 207, 133); 
            margin: 0;
            padding: 0;
            overflow-y: scroll; 
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(55, 136, 11, 0.511);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-left: 2cm;
        }

        .logo img {
            max-width: 80px;
            margin-right: 15px;
            margin-left: 5px;
            margin-top: 5px;
        }

        .logo-text {
            font-family: Algerian, sans-serif;
            font-size: 40px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        }

        nav {
            position: fixed;
            top: 20px;
            right: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-size: 30px;
        }

        nav ul li a:hover {
            color: #ff0000;
        }

        .content {
            margin-top: 140px; 
            min-height: calc(100vh - 200px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5); 
            background-image: url('dashback.jpeg'); 
            background-size: cover; 
            background-position: center; 
        }

        .content h1 {
            margin-top: 30px;
            color: rgb(255, 255, 255);
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-size: 80px;
            text-align: center;
            margin-bottom: 20px;
            font-style: oblique;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        }

        .glow-btn {
            background-color: #037749;
            border: none;
            color: rgb(255, 255, 255);
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin-top: 50px;
            cursor: pointer;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            border: #010101;
        }

        .glow-btn:hover {
            box-shadow: 0 8px 16px rgba(1, 235, 68, 0.981);
        }

        .glow-btn:active {
            background-color: #45a049;
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
            transform: translateY(2px);
        }

        .Quote {
            position: absolute;
            margin-top: 70px;
            font-style: ArialBlack;
            font-size: larger;
            color: #fefefe;
        }

        
        #about, #contact {
            padding: 0; 
            background-color: rgb(255, 255, 255);
            color: black;
            width: 95%; 
            margin: 0 auto; 
            height: 100vh; 
            text-align: justify; 
            border-radius: 10px; 
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5); 
            margin-top: 50px; 
            margin-bottom: 10px; 
            font-size: 38px;
        }

        #about {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        #about img {
            max-width: 50%;
            height: 100vh;
            order: 2; 
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        }

        #about p {
            width: 55%; 
            order: 1; 
            text-align: left;
        }

        #about h1 {
            order: 0; 
        }
   

.contact_us a {
  text-decoration-line: none;
  text-decoration-thickness: initial;
  text-decoration-style: initial;
  text-decoration-color: initial;
}

.contact_us .text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.contact_us input:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us textarea:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us .responsive-cell-block {
  min-height: 75px;
}



.contact_us .responsive-container-block.bigContainer {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
}

.contact_us .responsive-container-block.Container {
  max-width: 1320px;
  margin-top: 50px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
}

.contact_us .mainImg {
  width: 100%;
  object-fit: cover;
  height: 100%;
}

.contact_us .responsive-cell-block.wk-desk-7.wk-ipadp-8.wk-tab-12.wk-mobile-12 {
  background-color: #00b25993;
  padding-top: 30px;
  padding-right: 50px;
  padding-bottom: 30px;
  padding-left: 50px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

.contact_us .text-blk.heading {
  color: white;
  font-size: 35px;
  line-height: 48px;
  font-weight: 800;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
}

.contact_us #message {
  width: 100%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.contact_us .emailArea {
  width: 49%;
}

.contact_us .firstRow {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
  width: 100%;
}

.contact_us .fullNameArea {
  width: 49%;
}

.contact_us .cardHead {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  color: white;
}

.contact_us .submit {
  color: white;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 100%;
  text-align: center;
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;

  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: #00b2eb;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.contact_us .formTable {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.contact_us .messageArea {
  width: 100%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
}

.contact_us .fullName {
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.contact_us .email {
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

@media (max-width: 1024px) {
  .contact_us .firstRow {
    flex-direction: column;
  }

  .contact_us .fullNameArea {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 30px;
    margin-left: 0px;
  }

  .contact_us .emailArea {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .contact_us .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }

  .contact_us .responsive-container-block.Container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us {
    
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    background-color: rgb(255, 255, 255);
    color: black;
    text-align: center; 
    border-radius: 10px; 
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5); 
    font-size: 30px;
}
.contact-container {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 10px; 
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5); 
            margin-top: 50px; 
            margin-bottom: 50px; 
            font-size: 30px;
        }
}
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="PLSP-Logo-1.png" alt="Pamantasang Lungsod ng San Pablo Logo">
            <span class="logo-text">Pamantasang Lungsod<br> Ng San Pablo</span>
        </div>
        <nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="other_page.php">Services</a></li>
        <li><a href="#contact_us">Contact</a></li>
    </ul>
</nav>

    </header>

    <div class="content">
        <h1>Finance Management System</h1>
        <a href="other_page.php" class="glow-btn">REGISTER NOW!</a>
        <div class="Quote">
            <p>Ensure your Queue</p>
        </div>
    </div>

    <div id="about">
        <p><h4>As IT students from Pamantasan ng Lungsod ng San Pablo, we aimed to address the inconvenience of lengthy lines and wasted time at the school office. We developed a system to save students time, effort and the payment process of students at the office can be further organized. Streamline reservations and schedules, allowing students to easily schedule payment appointments. By leveraging technology, we improved process efficiency and accessibility, ultimately enhancing the academic experience for everyone.</h4></p>
        <img src="pslpabout.jpg" alt="About Image">
    </div>

    <div class="contact_us" id="contact_us">
    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container"></div>
        <div class="responsive-cell-block wk-desk-7 wk-ipadp-8 wk-tab-12 wk-mobile-12">
            <p class="text-blk heading">Contact Us</p>
            <form action="contact_process.php" method="POST">
                <div class="firstRow">
                    <div class="fullNameArea">
                        <p class="cardHead">Full Name</p>
                        <input class="fullName" id="fullName" name="fullName" type="text" autocomplete="off" required>
                    </div>
                    <div class="emailArea">
                        <p class="cardHead">Email Address</p>
                        <input class="email" id="email" name="email" type="email" autocomplete="off" required>
                    </div>
                </div>
                <div class="messageArea">
                    <p class="cardHead">Message</p>
                    <textarea class="message" id="message" name="message" rows="10" autocomplete="off" required></textarea>
                </div>
                <button type="submit" class="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
