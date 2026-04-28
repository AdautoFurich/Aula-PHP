<?php
    session_start();
    include './config/db.php';

    if(!isset($_SESSION['user'])){
        header('Location: ./login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./asserts/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asserts/css/style.css">
</head>
<body>

    <header class="navbar bg-while border-bottom px-3">
        <button id="toggleSidebar" class="btn btn-outline-secondary">
            <i class="bi bi-list"></i>
        </button>
        <span class="nav-brand ms-2">UMFG</span>
    </header>

    <div class="layout">
        <aside id="sidebar" class="sidebar">
            <a class="menu-item active">
                <i class="bi bi-speedometer"></i>
                <span>Dashboard</span>
            </a>
            <a class="menu-item">
                <i class="bi bi-people"></i>
                <span>Pessoa</span>
            </a>
        </aside>
        <main class="container" style="position: relative;">