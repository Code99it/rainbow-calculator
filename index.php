<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A calculator that displays whole numbers instead of using scientific notation.">
    <meta name="author" content="Christian Wilhelm">

    <title>Rainbow Calculator</title>

    <link rel="stylesheet" href="assets/css/styles.css"> 
    <link rel="icon" href="./favicon.ico">

</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="./index.php">Calculator</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="calculator-container">
                <div class="infobar">
                    <div class="angle-info">DEG</div> 
                    <div class="memory-info">M</div> 
                </div>
                <div id="displaybar" class="display" style="grid-column: span 4;">0</div>
                <div class="rainbow-line" style="grid-column: span 4;"></div>

                <button onclick="keypress(this)" class="item clear">AC</button>
                <button onclick="keypress(this)" class="item clear">C</button>
                <button onclick="keypress(this)" class="item memory">M+</button>
                <button onclick="keypress(this)" class="item memory">MR</button>

                <button onclick="keypress(this)" class="item number">7</button>
                <button onclick="keypress(this)" class="item number">8</button>
                <button onclick="keypress(this)" class="item number">9</button>
                <button onclick="keypress(this)" class="item operator">:</button>

                <button onclick="keypress(this)" class="item number">4</button>
                <button onclick="keypress(this)" class="item number">5</button>
                <button onclick="keypress(this)" class="item number">6</button>
                <button onclick="keypress(this)" class="item operator">x</button>

                <button onclick="keypress(this)" class="item number">1</button>
                <button onclick="keypress(this)" class="item number">2</button>
                <button onclick="keypress(this)" class="item number">3</button>
                <button onclick="keypress(this)" class="item operator">-</button>

                <button onclick="keypress(this)" class="item number">0</button>
                <button onclick="keypress(this)" class="item number">.</button>
                <button onclick="keypress(this)" class="item equals">=</button>
                <button onclick="keypress(this)" class="item operator">+</button>
           </div>
        </section>
        <section>
            <div>
                <div id="devbox"></div>
            </div>
        </section>
    </main>

    <footer>
        <p></p>
    </footer>

    <script type="text/javascript">

        const devbox = document.getElementById('devbox');
        const displaybar = document.getElementById('displaybar');
        const digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        let readytext = "READY.";
        devbox.innerHTML = readytext + "<br>";
        console.log(readytext)

        function keypress(button) {

            let key = button.textContent;
            let devmessage = key + ' pressed';

            // devbox
            devbox.innerHTML += devmessage + '<br>';
            console.log(devmessage);
            devbox.scrollTop = devbox.scrollHeight;

            // clear display for next input when 0 is displayed
            if (displaybar.innerHTML == '0') displaybar.innerHTML = '';

            // keys 0 - 9 pressed
            if (digits.includes(key)) {
                displaybar.innerHTML += key;
            }

            // key AC pressed
            if (key == 'AC') {
                displaybar.innerHTML = '0';
            }

        }

    </script>

</body>
</html>
