<!DOCTYPE html>
<html>
<head>
    <title>G3 Feedbacks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        main {
            display: flex;
            justify-content: flex-start;
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        #chart {
          position: relative;
          top: 15%;
          left: 17.5%;
          width: 65%;
          height: 100%;
          background-color: white;
          border: 1px solid #ddd;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 15px;
          text-align: center;
          cursor: pointer;
          z-index: -1;
        }


    </style>
</head>
<body>

    <header>
        <h1>Group 3</h1>
    </header>

    <main>

        <div class="agendas" id="chart">
          <h3>Nickname: <?php echo $_POST["nickname"]; ?></h3>
          <p>Feedback: <?php echo $_POST["feedback"]; ?></p>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Group 3. All rights reserved.</p>
    </footer>


</body>
</html>
