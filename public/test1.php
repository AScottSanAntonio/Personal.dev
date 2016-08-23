<?php  

//include auth.php;

//List of arrays

$nouns = ['Druid','Rogue','Barbarian','Cleric','Ranger','Shaman','Wizard','Gunslinger','Necromancer','Summoner'];

$adjectives = ['Lawful Good','Lawful Neutral','Lawful Evil','True Good','True Neutral','True Evil','Chaotic Good','Chaotic Neutral','Chaotic Evil','Chaotic Stupid'];

$origin = ['Dwarf','Elf','Gnome','Human','Half-Orc','Catfolk','Drow','Changeling','Grippli','Aasimar'];

$backstory = ['Lived in a crime ridden town, eventually leading to "sword for hire" kind of work to protect themself as well as earn a living.','Earned a life on the high seas as a pirate in a foreign land.','Feral, hunted and gathered most of their life, until finding magic for the first time.','A ravaging horde of barbarians ransacked their home, forcing them to flee.','Killed a town guard at a young age, and has been paying for that debt ever since.','Lord of a small feif, over sees their home and lands with a few men and family.','Rebellion member, seeks to overthrow the monarchy because of encroaching armies.','On a mission from their secret order to find a powerful lost artifact.','Oringinally free, now has been enslaved and purchased as a gladiator for the various fighting pits around the nation.','Fell into a coma at a young age, eventually coming out of the coma with renewed purpose of unknown origin.','Woods-dwelling family slaughtered by gnolls, turning them on a path of vengance.','Previous advisor of the King, exiled from the land for crimes against the crown.','Worked on a mercantile vessel for most of their childhood, eventually becoming a prominent trade merchant.','Village taken over by corrupt spell casters and necromancers, cursed with unnending nightmares.','Scribe at the Royal Mage Academy.','Traveling sellsword looking for long lost partner.','Had a portion of their soul taken and held by a warlock.'];

$statpoints = ['18','17','16','15','14','13','12','11','10'];

//Randomly generated starting gold value//

$gold = rand(20,2000);

	 //Random value seletor for each array//

	$races = array_rand($origin, 1);
	$story = array_rand($backstory, 1); 
	$characters = array_rand($nouns, 1);
	$stat1 = array_rand($statpoints, 1);
	$stat2 = array_rand($statpoints, 1);
	$stat3 = array_rand($statpoints, 1);
	$stat4 = array_rand($statpoints, 1);
	$stat5 = array_rand($statpoints, 1);
	$stat6 = array_rand($statpoints, 1);
	$alignments = array_rand($adjectives, 1); 
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel= "stylesheet" href = "css/dnd.css">
		<title>DnD Character Generator</title>
	</head>
	<body>
		<!--Top of Page Buttons-->
		<a id = "mainpage" class = "btn btn-default" href="index.html">Main Page</a>
		<button id = "create">Save Character</button>
		<button id = "logout">Logout</button>
		<button id = "login">Login</button>
		<button id = "btnGen" onClick = "refreshPage()">Roll the dice</button>


		<h1>DnD Character Creation</h1>
		<h4 id = "charinfo">Character Information</h4>
		<div id = "welcome">
			<h3 id = "welcomemessage">Welcome to the lands of Mordus!</h3>
				<!--Campaign Rules / How the site works-->
			<p id = "rules">
				To the left is the basic information regarding your new character, including the following: <br>
			<br>
				-Alignment: Based on the 3X3 Alignment chart <br>
			<br>
				-Race: Selected from ten random races <br>
			<br>
				-Class: Selected from ten random classes <br>
			<br>
				-Backstory: Selected from more than twenty backstories <br>
			<br>
				-Stats: Stats allocated at random from values ranging from ten to eighteen <br>
			<br>
				All of these are randomized, if you have an issue with a part of the character and want to edit a few of the given values but keep the rest please speak to the DM before transferring to a paper copy.
			</p>

		<img id = "derp" src = "css/img/dndupdate.jpeg"></img>
	</div>
	<!--Character Info Box / LeftBound-->
	<div id = "border">
	<!--Progress Bar-->
		<div id = "progress">
			<div id = "tenPercent">
				<h5>10% complete</h5>
				<div id = "circle">
					<div id = "progressline">
					</div>
				</div>
			</div>
		</div>
		<!--PHP values echo'd on page-->
		<div id = "background">
			<div id = "display">
				<p id = "align">You are a <?= $adjectives[$alignments]; ?> <?= $origin[$races]; ?> <?= $nouns[$characters]; ?>
				</p>
				<h2 id = "backstory">Backstory</h2>
				<p id = "story">
					<?= $backstory[$story]; ?>
				</p>
			</div>
		</div>
	</div>
		<!--Stat Bars-->
		<div id = "display2">
		<ul id = "statpage">
			<li>STR - ( <?= $statpoints[$stat1]; ?> ) </li>
			<div id = "space"></div>
			<li>DEX - ( <?= $statpoints[$stat2]; ?> ) </li>
			<div id = "space"></div>
			<li>CON - ( <?= $statpoints[$stat3]; ?> ) </li>
			<div id = "space"></div>
			<li>INT - ( <?= $statpoints[$stat4]; ?> ) </li>
			<div id = "space"></div>
			<li>WIS - ( <?= $statpoints[$stat5]; ?> ) </li>
			<div id = "space"></div>
			<li>CHA - ( <?= $statpoints[$stat6]; ?> ) </li>
			<div id = "space"></div>
		</ul>
		<ul id = "miscinfo">
			<li>Gold</li>
		</ul>
		<p id = "goldamount">
			<?= $gold; ?>
		</p>
		</div>

		<script>
		//JS window refresh
			function refreshPage(){
    		window.location.reload();
			} 
		</script>
	</body>
</html>