<html>
<form method="POST" action="">
	<input type="text" placeholder="Search Songs" name="txtsearch">
	<input type="submit" name="Search"> 
</form>
</html>
<?php
  session_start();
	@$str=$_POST['txtsearch'];
   @$conn=@mysqli_connect("localhost","root","","db_project");
   @$ins="SELECT * FROM tb_songs S,tb_artist A,tb_language L where S.artist_id=A.artist_id AND S.lang_id=L.lang_id AND S.song_name='$str'";
   @$result=@mysqli_query($conn,$ins);
   while($value=@mysqli_fetch_array($result))
   {
?>
<html>
	<table>
		<tr>
			<td><?php echo $value['song_name'];?></td>
			<td><?php echo $value['artist_name'];?></td>
			<td><?php echo $value['lang_name'];?></td>
		</tr>
	</table>
<?php } ?>
</html>





<?php
  session_start();
   @$conn=@mysqli_connect("localhost","root","","db_project");
   @$ins="SELECT * FROM tb_songs S,tb_artist A,tb_language L where S.artist_id=A.artist_id AND S.lang_id=L.lang_id";
   @$result=@mysqli_query($conn,$ins);
   while($value=@mysqli_fetch_array($result))
   {
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Player</title>
    <!-- Google Font -->
    <script>
    let products = {
  data: [
    {
      image: "images/songs.png",
      SongName: <?php echo $value['song_name'];?>,
      singer: <?php echo $value['artist_name'];?>,
      langauge: <?php echo $value['lang_name'];?>,
    }
  ]
    }

    /*
    {
      image: "img/Yenammi1.jpeg",
      
      SongName: "Yenammi Yenammi",
      singer: "Vijay_Prakash",
      langauge: "Kannada",
    },
    {
      image: "img/Singara1.jpeg",
      SongName: "Singara Siriye",
      singer: "Vijay_Prakash",
      langauge: "Kannada",
    },
    {
      image: "img/belageddu1.jpeg",
      SongName: "Belageddu yara mukhava",
      singer: "Vijay_Prakash",
      langauge: "Kannada",
    },
    {
      image: "img/appailoveyou1.jpeg",
      SongName: "Appa I LOve You Pa",
      singer: "Anuradha_Bhat",
      langauge: "Kannada",
    },
    {
      image: "img/o baby.jpeg",
      SongName: "O Baby",
      singer: "Anuradha_Bhat",
      langauge: "Kannada",
    },
    {
      image: "img/neenu1.jpeg",
      SongName: "Neenu Iruvaga",
      singer: "Anuradha_Bhat",
      langauge: "Kannada",
    },
    {
      image: "img/srikrishna.jpeg",
      SongName: "Sri Krishna",
      singer: "Anuradha_Bhat",
      langauge: "Kannada",
    },
    {
      image: "img/belakini.jpg",
      SongName: "Belakina Kvithe",
      singer: "Sanjith_Hegde",
      langauge: "Kannada",
    },
    {
      image: "img/maleye.jpeg",
      SongName: "Maleye Maleye",
      singer: "Sanjith_Hegde",
      langauge: "Kannada",
    },
    {
      image: "img/kush.jpg",
      SongName: "Kush Kush",
      singer: "Sanjith_Hegde",
      langauge: "Kannada",
    },
    {
      image: "img/shaakuntle.jpeg",
      SongName: "Shaakuntle Sikkalu",
      singer: "Sanjith_Hegde",
      langauge: "Kannada",
    },
    {
      image: "img/kannil.jpeg",
      SongName: "Kannil Kannil",
      singer: "K.S_Harishankar",
      langauge: "Malayalam",
    },
    {
      image: "img/pavizha.jpg",
      SongName: "Pavizha Mazha",
      singer: "K.S_Harishankar",
      langauge: "Malayalam",
    },
    {
      image: "img/kamin.jpeg",
      SongName: "Kamini",
      singer: "K.S_Harishankar",
      langauge: "Malayalam",
    },
    {
      image: "img/payyaram.jpeg",
      SongName: "Payyaram",
      singer: "K.S_Harishankar",
      langauge: "Malayalam",
    },
    {
      image: "img/thiruvaavaniraav.jpeg",
      SongName: "Thiruvaavaniraava",
      singer: "Sithara_Krishnakumar",
      langauge: "Malayalam",
    },
    {
      image: "img/killi.jpeg",
      SongName: "Killi Penne",
      singer: "Sithara_Krishnakumar",
      langauge: "Malayalam",
    },
    {
      image: "img/heynila.jpeg",
      SongName: "Hey Nila Nila",
      singer: "Sithara_Krishnakumar",
      langauge: "Malayalam",
    },
    {
      image: "img/pularippo.jpeg",
      SongName: "Pularippo",
      singer: "Sithara_Krishnakumar",
      langauge: "Malayalam",
    },
    {
      image: "img/kudukku.jpeg",
      SongName: "Kudukku",
      singer: "Vineeth_Sreenivasan",
      langauge: "Malayalam",
    },
    {
      image: "img/kaathu.jpeg",
      SongName: "Kaathu Kathirippu",
      singer: "Vineeth_Sreenivasan",
      langauge: "Malayalam",
    },
    {
      image: "img/kattu.jpeg",
      SongName: "Kattu Mooliyo",
      singer: "Vineeth_Sreenivasan",
      langauge: "Malayalam",
    },
    {
      image: "img/onakka.jpeg",
      SongName: "Onakka Munthiri",
      singer: "Vineeth_Sreenivasan",
      langauge: "Malayalam",
    },
    {
      image: "img/tereliye.jpeg",
      SongName: "Tereliye",
      singer: "Shreya_goshal",
      langauge: "Hindi",
    },
    {
      image: "img/nagada.jpeg",
      SongName: "Nagada Sang",
      singer: "Shreya_goshal",
      langauge: "Hindi",
    },
    {
      image: "img/mastani.jpeg",
      SongName: "Deewani mastani",
      singer: "Shreya_goshal",
      langauge: "Hindi",
    },
    {
      image: "img/saatiya.jpeg",
      SongName: "Saathiya",
      singer: "Shreya_goshal",
      langauge: "Hindi",
    },
    {
      image: "img/ae dil he.jpeg",
      SongName: "Ae Dil Hai Mushkil",
      singer: "Arjith_Singh",
      langauge: "Hindi",
    },
    {
      image: "img/enna sona.jpeg",
      SongName: "Enna Sona",
      singer: "Arjith_Singh",
      langauge: "Hindi",
    },
    {
      image: "img/nashe se.jpeg",
      SongName: "Nashe si chadh Gayi",
      singer: "Arjith_Singh",
      langauge: "Hindi",
    },
    {
      image: "img/tum hi.jpeg",
      SongName: "Tum hi ho",
      singer: "Arjith_Singh",
      langauge: "Hindi",
    },
    {
      image: "img/main agar.jpeg",
      SongName: "Main agar",
      singer: "Sonu_Nigam",
      langauge: "Hindi",
    },
    {
      image: "img/kal na ho.jpeg",
      SongName: "Kal Ho Naa  Ho ",
      singer: "Sonu_Nigam",
      langauge: "Hindi",
    },
    {
      image: "img/main ho na.jpeg",
      SongName: "Tumse milke Dil ka",
      singer: "Sonu_Nigam",
      langauge: "Hindi",
    },
    {
      image: "img/saatiya.jpeg",
      SongName: "Saathiya",
      singer: "Sonu_Nigam",
      langauge: "Hindi",
    },
    {
      image: "img/hands-to.jpeg",
      SongName: "Hands to myself",
      singer: "Selena_Gomez",
      langauge: "English",
      
    },
    {
      image: "img/love you.jpeg",
      SongName: "Love you like a Love Song",
      singer: "Selena_Gomez",
      langauge: "English",
      
    },
    {
      image: "img/come and get.jpeg",
      SongName: "Come and get",
      singer: "Selena_Gomez",
      langauge: "English",
      
    },
    {
      image: "img/who says.jpeg",
      SongName: "who says",
      singer: "Selena_Gomez",
      langauge: "English",
      
    },
    {
      image: "img/no time.jpeg",
      SongName: "no time to die",
      singer: "Billie_Elish",
      langauge: "English",
      
    },
    {
      image: "img/lovely.jpeg",
      SongName: "Lovely",
      singer: "Billie_Elish",
      langauge: "English",
      
    },
    {
      image: "img/party over.jpeg",
      SongName: "After Party over",
      singer: "Billie_Elish",
      langauge: "English",
      
    },
    {
      image: "img/bad guy.jpeg",
      SongName: "Bad Guy",
      singer: "Billie_Elish",
      langauge: "English",
      
    },
    {
      image: "img/boyfrnf (1).jpeg",
      SongName: "Boyfriend",
      singer: "Justein_biber",
      langauge: "English",
      
    },
    {
      image: "img/boyfrnf (4).jpeg",
      SongName: "Stay",
      singer: "Justein_biber",
      langauge: "English",
      
    },
    {
      image: "img/stay.jpeg",
      SongName: "Peaches",
      singer: "Justein_biber",
      langauge: "English",
      
    },
    {
      image: "img/purpose.jpeg",
      SongName: "pupose",
      singer: "Justein_biber",
      langauge: "English",
      
    },
    
    
  ],
};*/

for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");

  //Card should have category and should stay hidden initially
  card.classList.add("card", i.singer, i.langauge, "hide");
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.SongName.toUpperCase();
  container.appendChild(name);
  //singer name
  let singername = document.createElement("h6");
  singername.classList.add("singer-name");
  singername.innerText = "Singer : " + i.singer.toUpperCase();
  container.appendChild(singername);

  // let langauge = document.createElement("h7");
  // langauge.classList.add("language");
  // langauge.innerText = "Language : " + i.langauge.toUpperCase();
  // container.appendChild(langauge);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((buttonn) => {
    //check if value equals innerText
    if (value.toUpperCase() == buttonn.innerText.toUpperCase()) {
      buttonn.classList.add("active");
    } else {
      buttonn.classList.remove("active");
    }
  });

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements

  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("all");
};
</script>
<?php } ?>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search Songs name here.."
        />
        <button id="search">Search</button>
      </div>
      <!--<div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">
          <img src="img/all.jpeg" id="i" />
          <p>All</p>
        </button>
        <button class="button-value" onclick="filterProduct('Vijay_Prakash')">
          <img src="img/vp.jpg" id="i" />
          <p>Vijay prakash</p>
        </button>
        <button class="button-value" onclick="filterProduct('Anuradha_Bhat')">
          <img src="img/AB.jpeg" id="i" />
          <p>Anuradha bhat</p>
        </button>
        <button class="button-value" onclick="filterProduct('Sanjith_Hegde')">
          <img src="img/SH.jpg" id="i" />
          <p>Sanjit hegde</p>
        </button>
        <button class="button-value" onclick="filterProduct('K.S_Harishankar')">
          <img src="img/ksh.jpeg" id="i" />
          <p>KS Harishankar</p>
        </button>
        <button
          class="button-value"
          onclick="filterProduct('Sithara_Krishnakumar')"
        >
          <img src="img/sk.jpg" id="i" />
          <p>Sithara krishnakumar</p>
        </button>
        <button
          class="button-value"
          onclick="filterProduct('Vineeth_Sreenivasan')"
        >
          <img src="img/ks.jpeg" id="i" />
          <p>vineeth Sreenivasan</p>
        </button>
        <button class="button-value" onclick="filterProduct('Arjith_Singh')">
          <img src="img/Arjith.jpg" id="i" />
          <p>Arjith Singh</p>
        </button>
        <button class="button-value" onclick="filterProduct('Sonu_Nigam')">
          <img src="img/sonu.jpg" id="i" />
          <p>Sonu Nigam</p>
        </button>
        <button class="button-value" onclick="filterProduct('Shreya_goshal')">
          <img src="img/shreya.jpg" id="i" />
          <p>Shreya Goshal</p>
        </button>
        <button class="button-value" onclick="filterProduct('Justein_biber')">
          <img src="img/Justin Bieber.jpg" id="i" />
          <p>Justein Bibeier</p>
        </button>
        <button class="button-value" onclick="filterProduct('Selena_Gomez')">
          <img src="img/selena.jpg" id="i" />
          <p>Selena Gomez</p>
        </button>
        <button class="button-value" onclick="filterProduct('Billie_Elish')">
          <img src="img/party over.jpeg" id="i" />
          <p>Billie Elish</p>
        </button>
        <br />
        <br />
        <h1>LANGUAGES</h1>
        <div id="buttons">
          <button
            class="button-value"
            style="border: 2px solid #6759ff"
            onclick="window.location.href='kannada/kannada.html';"
          >
            kannada
          </button>
          <button
            class="button-value"
            style="border: 2px solid #6759ff"
            onclick="window.location.href='malayalam/malayalam.html';"
          >
            malayalam
          </button>

          <button
            class="button-value"
            style="border: 2px solid #6759ff"
            onclick="window.location.href='Hindi/hindi.html';"
          >
            Hindi
          </button>

          <button
            class="button-value"
            style="border: 2px solid #6759ff"
            onclick="window.location.href='English/english.html';"
          >
            English
          </button>
        </div>
      </div>
      <div id="products"></div>
    </div>
    <script src="script.js"></script>-->
  </body>
</html>
