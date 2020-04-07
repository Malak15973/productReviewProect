<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../images/visitor.png" type="image/png" rel="shortcut icon">
    </head>
    <body>
        <div class="quiz-window">
            <div class="quiz-window-header">
                <div class="quiz-window-title" style="color: #00386c; font-size: 30px; padding-top: 7px; font-style: oblique;"><b>All Users</b></div>
                <a  href="../index.html"><button class="quiz-window-close">&times;</button></a>
            </div>
            
        <div class="quiz-window-body">
            <div class="gui-window-awards">
                <table class="guiz-awards-row guiz-awards-header" id="table" style="width:100%">
                    <tr>
                      <th class="quiz-window-title2">ID</th>
                      <th class="quiz-window-title2">Username</th>
                      <th class="quiz-window-title2">E-mail</th>
                      <th class="quiz-window-title2">&nbsp;</th>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">20180144</td>
                      <td class="guiz-awards-title">Eriny Adel</td>
                      <td class="guiz-awards-track">renyadel7@gmail.com</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">20180422</td>
                      <td class="guiz-awards-title">Kirollos Hany</td>
                      <td class="guiz-awards-track">kirohany9999@gmail.com</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">20180111</td>
                      <td class="guiz-awards-title">Andrew Emad</td>
                      <td class="guiz-awards-track">andrew emad@gmail.com</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                      <tr>
                      <td class="guiz-awards-title">20180222</td>
                      <td class="guiz-awards-title">Fady Fayek</td>
                      <td class="guiz-awards-track">fadyfayk@gmail.com</td>
                      <td class="guiz-awards-track"><input type="checkbox"></td>
                    </tr>
                    <tr>
                      <td class="guiz-awards-title">20180144</td>
                      <td class="guiz-awards-title">Malak Emad</td>
                      <td class="guiz-awards-title">Malakeemad@gmail.com</td>
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
                table.rows[i].cells[3].onclick = function()
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
