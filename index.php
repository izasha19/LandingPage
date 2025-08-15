<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            background: linear-gradient(to right, #2c3e50, #ecf0f1);
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            padding: 0 0 10vh 10vw;
            overflow: hidden;
        }

        .landing-text {
            color: #3498db;
            font-size: clamp(3rem, 8vw, 8rem);
            font-weight: 900;
            line-height: 0.9;
            text-shadow: 
                3px 3px 0px rgba(0,0,0,0.3),
                6px 6px 0px rgba(0,0,0,0.2);
            transform: skew(-5deg);
            letter-spacing: -0.02em;
            animation: fadeInUp 1.5s ease-out;
        }

        .landing-text span {
            display: block;
            margin-bottom: -0.1em;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px) skew(-5deg);
            }
            to {
                opacity: 1;
                transform: translateY(0) skew(-5deg);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            body {
                padding: 0 0 15vh 8vw;
            }
            
            .landing-text {
                font-size: clamp(2.5rem, 12vw, 6rem);
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 0 0 20vh 5vw;
            }
            
            .landing-text {
                font-size: clamp(2rem, 15vw, 4rem);
            }
        }
    </style>
</head>
<body>
    <div class="landing-text">
        <span>MY</span>
        <span>LANDING</span>
        <span>PAGE</span>
    </div>
</body>
</html>