<?php
//'localhost', 'root', '', 'scale_base'
//'localhost', 'kamilr_digitally', '!Digitally1', 'kamilr_digitally'
function sqlConnect() {
   $mysqli = new mysqli('localhost', 'kamilr_digitally', '!Digitally1', 'kamilr_digitally');
            if ($mysqli->connect_error) {
                die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
                if (mysqli_connect_error()) {
                    die('Connect Error (' . mysqli_connect_errno() . ') '
                            . mysqli_connect_error());
                }
            }
            return $mysqli;
}
