<?php

?>
<html>
    <head>

    </head>
    <body>

        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><h1 align='center'>Login</h1></h3>
            </div>
            <div class="panel-body">
                <form action='mylogin.net' method='POST' name ='frmdo' id='frmdo' target = '_self'>
                    <table class="table table-bordered" align='center'>
                    <tr><td>Usuario:</td></td><td><input type='text' name='user'   ></td></tr>
                    <tr><td>Password:</td><td><input type='password' name='password'  ></td></tr>
                    <tr><td colspan=2 align=center><input type='submit' value='Enviar' class="btn btn-default" ></td></tr>
                    </table>
                </form>
                <br/><center><div id='msg'></div></center></div>
        </div>




    </body>
</html>

