<?php
session_start();

if ($_GET) {
  $_SESSION['id'] = null;
  session_destroy();
}
header('location:./');
