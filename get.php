<?php

$version = $_GET["version"];
$language = $_GET["language"];
$server = $_GET["server"];
$ip = $_GET["ip"];
$fullscreen = $_GET["fullscreen"] == "on" ? "true" : "false";

$content = <<<END
@echo off

echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo.
echo =+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=
echo Portable Prism Minecraft Launcher
echo =+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=
if not exist "%CD%\\Minecraft" mkdir "%CD%\\Minecraft"
if not exist "%CD%\\Minecraft\\temp" mkdir "%CD%\\Minecraft\\temp"
if not exist "%CD%\\Minecraft\\prismlauncher.exe" goto download
 
:launch
echo Prism Minecraft launcher found!
echo Launching...
start "PrismLauncher" "%CD%\\Minecraft\\prismlauncher.exe" --launch $version
goto end
 
:download
echo Prism Minecraft launcher not found!
echo Downloading...
powershell "Import-Module BitsTransfer; Start-BitsTransfer 'https://github.com/PrismLauncher/PrismLauncher/releases/download/8.2/PrismLauncher-Windows-MSVC-Portable-8.2.zip' '%CD%\\Minecraft\\temp\\prism.zip'"
powershell "Import-Module BitsTransfer; Start-BitsTransfer 'https://download.oracle.com/java/17/archive/jdk-17.0.10_windows-x64_bin.zip' '%CD%\\Minecraft\\temp\\java.zip'"
echo Extracting...
powershell "Expand-Archive '%CD%\\Minecraft\\temp\\prism.zip' -DestinationPath '%CD%\\Minecraft' -Force"
powershell "Expand-Archive '%CD%\\Minecraft\\temp\\java.zip' -DestinationPath '%CD%\\Minecraft' -Force"
echo Setting up...
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/account.php' -OutFile '%CD%\\Minecraft\\accounts.json'"
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/prismlauncher.php' -OutFile '%CD%\\Minecraft\\prismlauncher.cfg'"
echo LastHostname=%ComputerName%>>'%CD%\\Minecraft\\prismlauncher.cfg'"
mkdir "%CD%\\Minecraft\\instances\\$version\\.minecraft"
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/instance.php?version=$version' -OutFile '%CD%\\Minecraft\\instances\\$version\\instance.cfg'"
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/mmc-pack.php?version=$version' -OutFile '%CD%\\Minecraft\\instances\\$version\\mmc-pack.json'"
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/servers.php?server=$server&ip=$ip' -OutFile '%CD%\\Minecraft\\instances\\$version\\.minecraft\\servers.dat'"
powershell "Invoke-webrequest -URI 'https://projects.xrosecky.cz/launchmc/options.php?language=$language&fullscreen=$fullscreen' -OutFile '%CD%\\Minecraft\\instances\\$version\\.minecraft\\options.txt'"
goto launch
 
:end
END;

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"minecraft.bat\"");

echo $content;
