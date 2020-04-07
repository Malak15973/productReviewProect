<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../pictures/feedback.png" type="image/png" rel="shortcut icon">
    </head>
    <body>
        <div class="quiz-window">
            <div class="quiz-window-header">
                <div class="quiz-window-title" style="color: #00386c; font-size: 30px; padding-top: 7px; font-style: oblique;"><b>All Feedbacks</b></div>
                <a  href="../index.php"><button class="quiz-window-close">&times;</button></a>
            </div>
            
        <div class="quiz-window-body">
            <div class="gui-window-awards">
                <table class="guiz-awards-row guiz-awards-header" id="table" style="width:100%">
                    <tr>
                      <th class="quiz-window-title2">User</th>
                      <th class="quiz-window-title2">Feedback</th>
                      <th class="quiz-window-title2">&nbsp;</th>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">USER1</td>
                      <td class="guiz-awards-track">Please,we all need all products not tech only</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">USER2</td>
                      <td class="guiz-awards-track">Fine</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                      <tr>
                      <td class="guiz-awards-title">USER3</td>
                      <td class="guiz-awards-track">This website is so bad</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
 
                    <tr>
                      <td class="guiz-awards-title">USER1</td>
                      <td class="guiz-awards-track">Please,we all need all products not tech only</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">USER2</td>
                      <td class="guiz-awards-track">Fine</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                      <tr>
                      <td class="guiz-awards-title">USER3</td>
                      <td class="guiz-awards-track">This website is so bad</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="guiz-awards-title">USER1</td>
                      <td class="guiz-awards-track">Please,we all need all products not tech only</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">USER2</td>
                      <td class="guiz-awards-track">Fine</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                      <tr>
                      <td class="guiz-awards-title">USER3</td>
                      <td class="guiz-awards-track">This website is so bad</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        <script>
            var table = document.getElementById('table'),rIndex;
            for(var i=1; i<table.rows.length; i++)
            {
                table.rows[i].cells[2].onclick = function()
                {
                    var c = confirm("Do you want to delete this row ?");
                    if(c)
                    {
                        rIndex = this.parentElement.rowIndex;
                        table.deleteRow(rIndex);
                    }
                };
            }
            /*Take it and search in database and remove*/
        </script>
    </body>
</html>
