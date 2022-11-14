<?php include 'nav.php' ?><div class="">
<div class="">
  <div class="w3-display-container mySlides ">
    <img class="" src="images/agri-3.jpg" style="width:100%;position: bottom">
    <div class="w3-display-middle w3-large w3-container w3-text-white">
     <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">Agricultural Economics</b>
     </h1></span>
    </div>
  </div>
   <div class="w3-display-container mySlides w3-animate-fading">
    <img class="" src="images/aau1.jpg" style="width:100%">
    <div class="w3-display-middle w3-large w3-container w3-text-white">
     <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">Agricultural Economics</b></h1></span>
    </div>
  </div>
    <div class="w3-display-container mySlides w3-animate-fading">
    <img class="" src="images/index2.jpg" style="width:100%">
    <div class="w3-display-middle w3-large w3-container w3-text-white">
     <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">Agricultural Economics</b></h1></span>
    </div>
</div>
</div>
<div class="w3-bar" style="color:white; background-color:#62A8C8; padding-left:10px; font-family:roboto">
<button class="w3-btn" style="background-color:#62A8C8; color:white"><a href="economics.php"  style="text-decoration:none">FACULTY MEMBER</a></button>
  <button class="w3-btn" style="background-color:#62A8C8; color:white"><a href="stuff.php"  style="text-decoration:none">STUFF</a></button>
  <button class="w3-btn" style="background-color:#62A8C8; color:white"><a href="depstu.php"  style="text-decoration:none">STUDENTS</a></button>
</div>
<div class="w3-container " style="margin-top: 5%;">
  <div class="w3-row-padding">
  <div class="w3-half">
  <h1 style="border-bottom: 4px solid green"><b> Deparment Of Agricultural Economics </b></h1></div>
  <br><br><br><br><br><br><br>
        
  
         <p  style="text-indent: 40px;  margin-left: 5%; margin-right: 5%"> The Department of Agricultural Economics and Farm Management came into existence as one of the constituent departments of the erstwhile Assam Agricultural College established in 1948. Initially, the department had supported the under graduate degree programme in agriculture with very few faculty members. However, it expanded rapidly after the introduction of faculty development programme under IDA Education Project in 1973. First batch of M.Sc (Agri) students in Agril. Economics and Farm Management passed out in 1974 and the department started Ph.D. programme from 1984-85 academic session. Subsequently, the department introduced postgraduate courses in MBA (Agri-Business) from 2002-03 academic session on self sustained basis and in the mean time, fourteen batches of students completed post graduate education in Agri-Business Management. Till today as many as 170 students obtained M.Sc.(Agri), 28 students obtained MBA (Agri-Business) and 21 students obtained Ph.D. in Agril. Economics and Farm Management. The alumni of the department are presently serving in different capacities and calibre in various institutions, organizations, government and non government bodies such as Central and State Universities, State Dept. of Agriculture, Banks, Corporate Bodies. Civil Service, ICAR organizations etc. including the overseas establishments.

<br><br><br>PRESENT ACTIVITIES OF THE DEPARTMENT<br><br>

The department is actively engaged in number of activities such as given under:
Teaching under graduate, post graduate and Ph.D. courses, conducting post graduate research, faculty research and project research on important problems in the area of Farm Management, Production Economics, Agril. Marketing, Agril. Finance and Agri-Business Management etc. Training individuals/ farm families on various aspects of extension education programmes and activities of the university, coordinating academic, administrative, institutional and functional activities of the university. 

COURSES OFFERED BY THE DEPARTMENT

The department offers courses for both under graduate and post graduate students in the Faculty of Agriculture within the definite academic year. Under graduate students are to attend Experiential Learning and Rural Agricultural Work Experience Programme (RAWEP) with sufficient exposure in the area of Agril. Economics and Agri Business Management. Post graduate students may undertake research work in any area of their choices conform to the various branches of Agril. Economics and Agri Business Management. MBA (Agri-Business) courses are open to students having degree in Agriculture, Veterinary Science, Home Science, Agril. Engineering etc.

The trimester system was in practice in the University till 1970-78 academic session and subsequently the University had switched over to semester system. The courses had to be thoroughly revised to match with the growing demands of agricultural education and agricultural development. From 1977-78 onwards, the under graduate and post graduate courses had been modified as per Deans’ Committee recommendation. The latest revision of courses had been effective from 2017-18 academic session as per 5th Deans’ Committee recommendation. 

RESEARCH ACTIVITIES OF THE DEPARTMENT

The department has completed 124 M.Sc.(Agri), 14 Ph.D. and 18 MBA (Agri-Business) PG research projects. The faculty members of the department completed 26 research projects funded by ICAR., World Bank, NABARD, IRRI and State Government etc. One NABARD Chair Professor Scheme was continued in the department for five years.

THRUST AREAS OF THE DEPARTMENT

Major thrust areas of research have been on issues pertaining to Farm Management and Production Economics, Agricultural Marketing and Price Analysis; and Agricultural Finance and Agri Business Management. In addition, certain new thrust areas of research in Farm Management, Resource Economics, Agricultural Marketing, Agricultural Finance, Impact Assessment, Rural Development, Food securities and Gender issues have been identified for broad based research and developmental activities of the department. </p>
         <a href="economics.php" class="w3-button w3-hover-white w3-hover-text-orange"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Faculty</a>

    </div>
    
  

  </div>

<br>

</div><script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); 
}
</script>
<?php include 'footer.php'; ?>

 

</body>


</html>