<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><html>
<HEAD>
  <LINK REL="icon" HREF="images/mozilla-16.png" TYPE="image/png">
 <link rel="shortcut icon" href="favicon.ico">
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<LINK REL="icon" HREF="images/mozilla-16.png" TYPE="image/png">
<link rel="shortcut icon" href="favicon.ico">

<TITLE>ArthurX: Artist, Rocker, Painter.</TITLE>

</HEAD>
<?php
//  Include Top Banner   ************************************************

include("Top_Banner.inc");
?>




<div class="Navtor">
<SCRIPT LANGUAGE=JavaScript src=Include_Navtor_Short.js>
</SCRIPT>
</div>

<div class="Main" align=center style=" color:blue ; font-size : 20px ">
 <?php
 $User_Name = "arthurcm";
 $Password ="thescars";
 $Database_Name = "arthurcm";
mysql_connect("localhost", $User_Name, $Password) or die(mysql_error());
echo "Connected to MySQL<br>" ;

mysql_select_db($Database_Name) or die(mysql_error());
echo "Connected to Database <p>";




//   Create Guestbook table
mysql_query("CREATE TABLE guestbook(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(30),
email VARCHAR(30),
subject VARCHAR(70),
text    VARCHAR(1000),
date     TIMESTAMP)")
or die(mysql_error());

echo "Table guestbook Created!";

mysql_close();
?>

 <pre>
// Change TABLE
mysql_query("ALTER TABLE guestbook CHANGE subject subject VARCHAR(70) ")
or die(mysql_error());
echo "<p>Changed Table Guestbook subject VARCHAR(70)";

//   Create Guestbook table
mysql_query("CREATE TABLE guestbook(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(30),
email VARCHAR(30),
subject VARCHAR(30),
text    VARCHAR(1000),
date     TIMESTAMP)")
or die(mysql_error());

echo "Table guestbook Created!";

// Insert a row of information into the table "guestbook"
mysql_query("INSERT INTO guestbook
(name, email, subject, text, date) VALUES('Timmy Mellowman', 'arthur@thescars.com', 'First entry', 'Hi, blabla' ,'NOW' ) ")
or die(mysql_error());

echo "Data Inserted";

// Loop through a result.
$query = "SELECT * FROM guestbook";

$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){
    echo $row['name']. " - ". $row['email']. " - ". $row['subject']. " - ". $row['text']. " - ". $row['date'];
     echo "<br />";
}



// Create a MySQL table in the selected database
mysql_query("CREATE TABLE example(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(30),
age INT)")
or die(mysql_error());

echo "Table Created!";

// Insert a row of information into the table "example"
mysql_query("INSERT INTO example
(name, age) VALUES('Timmy Mellowman', '45' ) ")
or die(mysql_error());

mysql_query("INSERT INTO example
(name, age) VALUES('Xandy Smith', '75' ) ")
or die(mysql_error());

mysql_query("INSERT INTO example
(name, age) VALUES('Aobby Wallace', '7' ) ")
or die(mysql_error());

echo "Data Inserted!";


// Insert a row of information into the table "example"
mysql_query("INSERT INTO example
(name, age) VALUES('Timmy Mellowman', '45' ) ")
or die(mysql_error());

mysql_query("INSERT INTO example
(name, age) VALUES('Xandy Smith', '75' ) ")
or die(mysql_error());

mysql_query("INSERT INTO example
(name, age) VALUES('Aobby Wallace', '7' ) ")
or die(mysql_error());

echo "Data Inserted!";

// Loop through a result.
$query = "SELECT * FROM example";

$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){
    echo $row['name']. " - ". $row['age'];
     echo "<br />";
}
</pre>



<h1 style=" color:red ; font-size : 36px ; position:relatif ; top:20 : left:30">
<br>ArthurX in Barcelona, April 2006.</h1>

<h1 style=" color:blue ; font-size : 20px ; position:relatif ; top:20 : left:30">
<br> <a href=http://www.art-works.mysites.nl>Galeria Art-Works</a>,
<br>Calle de Paradis 3.
<br>In the gothic heart of Barcelona
<br>between Place de St Jaume,
<br>the cathedral Seu and
<br>the temple of Augustus.

<p>A sainter place hard to find.
<br>Above three levels of Roman cellars.
<br>In the shade of a five story alley.

<p>The Catalan President sleeping at it's back.
<br>Demonstrations around the corner,
<br>Crying for the release of innocent murderers.

<p>Is there a better place to create paintings?

</h1>

 <?
 //          Create   Block of Small Images                               ****************
foreach ($Barcelona_Names as $i => $Image_Name){

echo("<img src=\"Top_Banner/Barcelona/")  ;
echo("$Image_Name \"")  ;
echo(" height='140' border='0' >")  ;
if ($i%5 == 0){
echo ("<br> \n");
};
};
?>












<br><br><br>
<img src="Barcelona/Tony_Art_Talking_720_width.jpg" width="720" height="498" alt="" border="0">
<p>
Toni, the galery director, converses with the artist in the middlest
<br> of the act
of creating the painting.
<br>It's almost finished, but he wants some changes in the colorsetting.
<br>
The blue above the left eye is still lacking.
<br>
It's time for a mini break.
<p>
Knows the galerist with full conscienceness and beyond doubt,<br>
what kind of a beast of an artist he has invited?
<p>
Does he really like this kind of art?<br>
That were the questions tormenting the artist<br>
during the first two painitngs and days.
<br><br><br>

<img src="Barcelona/Art_Paints_pizzaGirl_Behind_Canvas_720.jpg"  alt="" border="0">
<p>
You only can paint tits,<br>
with a slightly opened mouth.
<br>And it's still dripping.
<p>
I'm just a serious schoolboy,<br>
lost in concentration.
<br><br><br>

<img src="Barcelona/Art_Paints_PizzaGirl_Looking_on_Canvas_720.jpg" alt="" border="0">





<img src="Barcelona/Church_La_Merce_Art+volist_720.jpg"  alt="" border="0">
   <br><br>
 We were walking into a church on early Saturday morning.<br>
 The local scoutsman had lured the small boys out to his wild powers.<br>
 Inside there was a small orchestra rehearsing.<br>
 With an unexpected freshness.
  <br><br><br>


<img src="Barcelona/Vilolist_Girl_in_Church_720.jpg" alt="" border="0">
  <br><br>
  And one of the violistes was above admiration.<br>
  Somehow she attracted all attention.
  <p>
  It's not often that you can have a photo
  <br> in which the perspective is so close to that of the painter.
  <br><br><br>
<img src="Barcelona/Arthur_painting_Violist_Black_Flash_720.jpg"  alt="" border="0">
<br><p>
It is hard thinking to find out, <br>
 which line not to paint.<br>
 Especially when the violist girl you're trying to paint, <br>
 has such a strong neck line.
 <P>
 The photo  above doesn't reveal the neckline,
 <br>but the the shape and the location of the tits
 <br>is remarkable close.
 <br>(Never would believe that anything I paint has so much to do with reality)
 <br><br><br>


<img src="Barcelona/Anna_In_BioShop_Avinyo_and_El_720.jpg"  alt="" border="0">
<br><br>
In front of the Hotel in the Calle d'Avinyo was a small ecoshop,<br>
where they happened to sell tuff, hard, dark bread,<br>
on which you can live for some days.
<p>
Nobody cares for bread,<br>
but without smiles we all would die here, right now, in a split second.<br>
And this is one of those life saving smiles.



<br><br><br>

<img src="Barcelona/Anna_Outside_Stone_Whole_Painting.jpg"  alt="" border="0">





<img src="Barcelona/El_Hldong_Pizza_Outside_Gallery_720.jpg"  alt="" border="0">

<br><br>
The president sleeps behind those bars.
<p>
Even not a golden cage.<br>
It's at the corner of the galeria.



<br><br><br>

<img src="Barcelona/Cathedral_Seu_Photo_720.jpg"    alt="" border="0">
<br><br>
Around the other corner of the galeria,<br>
slightly uphill to the temple of August<br>
only three colums left over ofter centuries of recycling,<br>
There is a view on the Cathedral.
<p>
So for tourists, who want a nice snapshot,<br>
this special painting,<br>
to commemorate this gothic fiesta:<br>
"Cathedral Seu de Calle de Paradis."



<br><br><br>

<img src="Barcelona/Painting_Cathedral_Seu_720.jpg"    alt="" border="0">


</div>











<div class="Main_2" align=center  style=" color:#01d7a6 ; font-size : 20px ">


<img src="Barcelona/Arthur_painting_Cat_NoFlash_720.jpg"  alt="" border="0">

<br><br>
The colors of HushHushWomanCat are almost finished,
<br> but it's clear that the reworking of the black lines
<br> adds a great deal to the end effect.

<br><br><br>

<img src="Barcelona/Vilolist_NudeMan_Cathedral_Seu_InGallery_noflash_720.jpg"    alt="" border="0">

<br><br>
The ArthurX factor is growing.
<br>There is no way of denying it.
<p>Starts looking like "ArthurX has been here!"

<br><br><br>


<img src="Barcelona/Lorry_Art_HushHush_720.jpg" w alt="" border="0">

<br><br>
I don't know what we were talking about.
<br>But it looks extremely polite.
<p>From both sides.

<br><br><br>






<img src="Barcelona/Tony_sitting_in_front_of_Gallery_720.jpg"  alt="" border="0">


<br><br>
The galery owner going over the daily job of spamming the world.
<br>"Yes, I'm alive and kicking."
<p>
Actually, this is one of the quiter parts of the day:<br>
Normally he is bussy scaring away tourists,<br>
In the midst of taking pictures.

<br><br><br>

<img src="Barcelona/Hush_Wman_Cat_Contrast20_extra_720.jpg"  alt="" border="0">

<br><br>
The painting is finished.<br>
It was quite a struggle.<br>
<p>
You start from a sketch,<br>
and you think this will do,<br>
but when you scale it up to the size of a real painting,<br>
you start feeling that you lack some lines<br>
that you need more detail.
<p>
For example the leg was one surface<br>
and the tits also had only the nipples<br>
and the lips were also one elongated curl.
<p>
Then you sit in front of the painting,<br>
on Toni's chair,<br>
doubting,<br>
where you can add another line,<br>
without making it all to tiny and detailed<br>
and which line will add the most to <br>
the feeling, story and expression of the painting?
<br><br><br>

<img src="Barcelona/Violist_NudeMan_Painting_720.jpg" alt="" border="0">

<br><br>
This paintings are in a different style.<br>
If I divide my paintings in two corse groups:<br>
I have the filled surfaces surrounded by black lines at one hand,<br>
And these above at the other hand.<br>
They are build up around a scelletton of black lines.
<p>
I never can escape the black.<br>
If I take out the black, it's no longer mine.
<p>
The black scelletton is later on grown,<br>
by adding colored lines,<br>
Like feathers.
<p>
These two paintings are in that style.

<br><br><br>

<img src="Barcelona/Sketch_Violist_720.jpg"    alt="" border="0">


<br><br>
As soon as I saw the violiste,<br>
realized I needed some inspiration for a new painting<br>
and had taken the breathe to sketch in the church,
<p>
It was finished.
<p>
A sketch is only to memorize the angles of lines.<br>
To try them out.
<p>
We left the church when they started singing anti racisme songs.<br>
White grandmothers with their colored not grandchildren.<br>
And viceversa.<br>
<p>
And there was a French Canadian from the hostel coming to the galery.
<br><br><br>

<img src="Barcelona/Violist_Painting_Finished_Outside_720.jpg"  alt="" border="0">

<img src="Barcelona/Violist_Ready_Outside_Hold_by_el_720.jpg"  alt="" border="0">




<img src="Barcelona/Anna_OnlyBlack_720.jpg"    alt="" border="0">
<br><br>
She looked downward to her papers,<br>
doing some ordering of new goods for in the shop,<br>
standing behind the counter.
<br><br><br>

<img src="Barcelona/Sketch_Anna_Avinyo_720.jpg"    alt="" border="0">

<img src="Barcelona/Art_harbor_720.jpg"  alt="" border="0">

<br><br>
Breakfast at the harbor<br>
Everyday<br>
The calling of the sea.
<br><br><br>


<img src="Barcelona/Art_Paints_pizzaGirl_behind_Canvas_2_720.jpg"  alt="" border="0">
</div>









<div class="Main_3" align=center  style=" color:#a874f6 ; font-size : 20px ">




<img src="Barcelona/Art_Paints_PizzaGirl_Front_Red_720.jpg"  alt="" border="0">


<br><br>
The first color<br>
on the first painting<br>
on the first day.
<p>
Elizabeth takes photo's and nothing has happened yet.
<br><br><br>

<img src="Barcelona/Art_Shows_Lorry_Leg_of_PizzaGirl_720.jpg"  alt="" border="0">



<br><br>
Here ArthurX explains about the leg to Lorena.<br>
The thigh, upper part of the leg, is cut in parts, while it could have been one part.<br>
It's an answer to Lorena's question about the round ball at the end of  the leg.<br>
She was hoping that it would become a moon.<br>
It was already half colored: blue and purple.<br>
Because she said, a woman and moonlight that has some meaning.
<p>
I could not dismiss that.
<p>
But the round ball should be all red.<br>
And the thigh all blue.<br>
<p>
Now I had cut it all to pieces,<br>
because only the red and blue would be to hard.
<p>
But still in my hearts of hearts<br>
I hope to one day make it again<br>
with the red ball and the blue thigh.
<br><br><br>


<img src="Barcelona/Crawling_BackWay_Future_720.jpg"  alt="" border="0">

<img src="Barcelona/El+Palm_720.jpg" alt="" border="0">
<br><br>
A photogenetic palm<br>
to suggest that it is here so nice and warm all year around.<br>
Fools from the North buy it.
<br><br><br>


<img src="Barcelona/Little_King_of_Sitges_Blue+Purple_720.jpg"  alt="" border="0">

<img src="Barcelona/PizzaGirl_Finished_720.jpg"  alt="" border="0">


<br><br>
The title of this painting is:<br>
PizzaGirl El Born<br>
<p>
Elizabeth always presses me to make a title.<br>
And OK I agree: better a title than a number.
<p>
It's supposed to be the girl of the photo below.<br>
Everyday at lunch time, we went out.<br>
Took a stroll in the direction of the Parc de la Ciutadella.<br>
And half way on El Born was a Pizza Bar.<br>
Packed till the rim with students for the deal of the day:<br>
Two slices and a drink for ?3.50
<p>
The girls run the show together.<br>
In an upbeat mood.
<p>
The last day the old boss showed up<br>
and all charm had dissappeared.
<p>
It suddenly looked like five Cinderella's,<br>
abused by a stepfather<br>
enslaved for ever in the pizza breeding furnaces of El Born.
<p>
I'm a poor boy, so I could not buy them free.<br>
But I know that many of the boys there, or the young employed<br>
after a beer or three<br>
will do the same.
<br><br><br>


<img src="Barcelona/PizzaGirl_Takes_Break_720.jpg"  alt="" border="0">

<br><br>
The last day I made this photo.<br>
The boy in front held his arm to shield the camera.<br>
So she doesn't know,<br>
about the photo or the painting.<br>
<p>
So if you see her, don't tell her,<br>
We were just silly tourists.<br>
Eating the same slices everyday.
<br><br><br>

<img src="Barcelona/Tony_Sarah_Art_tlaking_Cat_Flash_720.jpg"  alt="" border="0">

<br><br>
Here Toni again,<br>
But Look!<br>
You see his daughter<br>
Hiding behind his belly.
<br><br><br>


<img src="Barcelona/Anna_Black_Blue_Purple.jpg"    alt="" border="0">



<br><br>
This is the building up of the painting of Anna d'Avinyo.
<p>
The sketch shows a larger part of her body,<br>
But so what!<br>
Lorena wanted her all complete on the painting.
<p>
OK, I make this promise:<br>
Next time more AnnA's
<br><br><br>


<img src="Barcelona/Anna_Blauw_Zwart_720.jpg"    alt="" border="0">

<img src="Barcelona/Anna_No_Green_NoFlash_720.jpg"    alt="" border="0">


<img src="Barcelona/Galeria_Pizza_Girl_SpanishMan_720.jpg"    alt="" border="0">


<br><br>
What is this?
<p>
The famous Barceloneian mafioso "El Duce" is crossing the street.<br>
And he takes an interested look to "PizzaGirlElBorn".
<p>
This looks like good bussiness.
<p>
His bodyguards try to refrain him from this impulsive purchase.
<p>
Too little, too late.<br>
The painting was sold three hours after its creation.
<br><br><br>




<img src="Barcelona/Nude_Man_Complete_720.jpg"    alt="" border="0">












</center>





</div>
</HTML>
