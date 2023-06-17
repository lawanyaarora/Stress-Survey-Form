<html>
<head>
    <title> Your Response </title>
    <style>
        body
        {
            background-color: #FF3CAC;
            background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
            margin-top: 40px;
        }
        table
        {
            width: 92%;
            margin-right: 4%;
            margin-left: 4%;
            border-radius: 10px;
            border-collapse: collapse;
            overflow: hidden;
        }
        .head
        {
            height: 60px;
            background: #36304a;
            font-size: 20px;
            font-family: sans-serif;
            color: white;
        }
        td, .head
        {
            padding: 20px;
            font-weight:bold;
        }
        td
        {
            background: #e1e1dd;
            text-transform: uppercase;
            font-family: helvetica;
            text-align: center;
        }
        caption
        {
            font-family: Verdana;
            font-size: 37px;
            padding: 15;
            color: white;
        }
        .buttons 
        {
            margin: 10%;
            position: relative;
            top: -150px;
            text-align: center;
        }
        .btn-hover 
        {
            width: 300px;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 20px;
            height: 55px;
            text-align:center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btn-hover:hover {
            background-position: 100% 0;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btn-hover:focus {
            outline: none;
        }
        .btn-hover.color {
            background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
            box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
        }
    </style>
</head>
<body>
    <table>
        <caption>Your Response</caption>
        <tr class="head">
            <th>Q No. 1</th>
            <th>Q No. 2</th>
            <th>Q No. 3</th>
            <th>Q No. 4</th>
            <th>Q No. 5</th>
            <th>Q No. 6</th>
            <th>Q No. 7</th>
            <th>Q No. 8</th>
            <th>Q No. 9</th>
            <th>Q No. 10</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "login_info");
            if($conn-> connect_error)
            {
                die("Connection failed:". $conn-> connect_error);
            }
            $sql= "SELECT ques1, ques2, ques2, ques3, ques4, ques5, ques6, ques7, ques8, ques9, ques10 from info ORDER BY ID DESC LIMIT 1";
            $result = $conn-> query($sql);
            if($result-> num_rows >0)
            {
                while($row = $result-> fetch_assoc())
                {
                    echo "<tr><td>". $row["ques1"] ."</td><td>". $row["ques2"] ."</td><td>".$row["ques3"] ."</td><td>".$row["ques4"] ."</td><td>".$row["ques5"] ."</td><td>".$row["ques6"] ."</td><td>".$row["ques7"] ."</td><td>".
                    $row["ques8"] ."</td><td>".$row["ques9"] ."</td><td>".$row["ques10"] ."</td></tr>";
                }
            echo"</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn-> close();
        ?>
    </table>
    <div class="buttons">
        <button class="btn-hover color" onclick="window.location.href='thankyou-1.html'">Click Here For Solutions</button>
    </div>    
</body>
</html>