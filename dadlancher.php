<?php

$wgstatus = 0;
$asciilogo = 'asciilogo.txt';
$logo = file_get_contents($asciilogo);

exec("mode con: cols=100 lines=45");
pclose(popen('cls','w'));
echo "\033[32m";
echo $logo;
echo "\n";

//testwireguardup
function wireguardtest() {
	$host="10.0.0.102";
	exec("ping -n 1 " . $host, $output, $result);
	if ($result == 0) {
		echo "Wireguard is up\n";
		sleep(3);
	}else{
		echo "\033[31m";
		echo "Wireguard is down\n";
		echo "\033[32m";
		sleep(3);
		}
	}

echo wireguardtest();
echo "\n\n";

//main menu
function mainmenu() {
	pclose(popen('cls','w'));
	$asciilogo = 'asciilogo.txt';
	$logo = file_get_contents($asciilogo);
	echo $logo;
	echo "\n";
	echo "Type number of your choice below:\n";
	
	echo "  1. Test WireGuard\n";
	echo "  2. Games\n";
	echo "  3. Discord\n";
	echo "  4. Exit\n";

$input = fopen ("php://stdin","r");
$mmchoice = fgets($input);

if ( $mmchoice == 1) {
    echo "Testing WireGuard...";
	echo wireguardtest();
	echo mainmenu();
    }
elseif ( $mmchoice == 2) {
    echo "Games List";
		echo gamesmenu();
    }
elseif ( $mmchoice == 3) {
    echo "Loading disord...\n";
		echo mainmenu();
    }
elseif ( $mmchoice == 4) {
    echo "Exiting...";
	echo "\033[39m\n";
    }
}

//Games Menu
function gamesmenu() {
	pclose(popen('cls','w'));
	$asciilogo = 'asciilogo.txt';
	$logo = file_get_contents($asciilogo);
	echo $logo;
	echo "\n";
	echo "Type number of your choice below:\n";

	echo "  1. Battlefield 1942\n";
	echo "  2. Battlefield 2\n";
	echo "  3. UT2004\n";
	echo "  4. Quake 3\n";
	echo "  5. Quake 2\n";
	echo "  6. Warcraft 3\n";
	echo "  7. Warcraft 3 (Host with LANCRAFT)\n";
	echo "  8. C&C Renegades\n";
	echo "  9. Main Menu\n";

$input = fopen ("php://stdin","r");
$gmchoice = fgets($input);

	include 'gamelocations.php.inc';

if ( $gmchoice == 1) {
    echo "Battlefield 1942 loading...\n";
	exec($bf1942);
	echo gamesmenu();
    }
elseif ( $gmchoice == 2) {
    echo "Battlefield 2 loading...\n";
	exec($bf2);
	echo gamesmenu();
    }
elseif ( $gmchoice == 3) {
    echo "UT2004 loading...\n";
	exec($ut2004);
	echo gamesmenu();
    }
elseif ( $gmchoice == 4) {
    echo "Quake 3 loading...\n";
	exec($quake3);
	echo gamesmenu();
    }
elseif ( $gmchoice == 5) {
    echo "Quake 2 loading...\n";
	exec($quake2);
	echo gamesmenu();
    }
elseif ( $gmchoice == 6) {
    echo "Warcraft 3 loading...\n";
	exec($wc3);
	echo gamesmenu();
    }
elseif ( $gmchoice == 7) {
    echo "Warcraft 3 - LANCRAFT loading...\n";
	exec($wc3lc);
	echo gamesmenu();
    }
elseif ( $gmchoice == 8) {
    echo "C&C Renegades loading...\n";
	exec($cncrenegade);
	echo gamesmenu();
    }
elseif ( $gmchoice == 9) {
    echo "Main menu loading...\n";
	echo mainmenu();
    }
}

//games to add
//TF2, CS, C&C games, soldat, Wolfenstein ET, quake


//Load discord
function loaddiscord() {
	
}

echo mainmenu();


?>