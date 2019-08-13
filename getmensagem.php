<?php

session_start();

echo $_SESSION['mensagem'];
session_destroy();
die();