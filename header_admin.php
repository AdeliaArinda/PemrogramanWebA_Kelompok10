<?php

require 'db_connect.php';
require 'function.libs.php';
session_start();

?>

<html>
    <head>
        <title>Admin Materi</title>
        <style>
            .content{
                padding: 20px;
                background-color: white;
                height: 100%;
                margin-left: 300px;
            }
            /* .header{
                background-color: brown;
            }
            .logo img{
                padding: 5px 20px;
            } */
            .panel{
                width: 300px;
                background-color: #849B5C;
                height: 100%;
                float: left;
            }
            .panel ul{
                list-style: none;
                width: 219px;
            }
            .panel ul li{
                padding: 30px 0;
                border-bottom-style: dotted;
                color: white;
            }
            .panel ul li a{
                text-decoration: none;
                color: white;
                font-size: 18px;
            }
            .panel ul li a:hover{
                color:#af4c4c;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <!-- <div class="header">
                <div class="logo">
                    <a href="index.php"><img src="../assets/images/feed.png" width="100px"></a>
                </div>
            </div> -->
            <div class="panel">
                <ul>
                <br><br><br><br><br>
                    <li><a href="list_materi.php">List Materi</a></li>
                    <li><a href="list_kategori.php">List Kategori</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="content">