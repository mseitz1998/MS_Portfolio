<style>

/*Formatting for the nav holding everything*/
.moduleLinksNav {
  width : 300px; 
  margin: 10px auto; 
  margin-top: 0px;
  margin-bottom: 0px;
}

.menuOverview {
  color: goldenrod;
  cursor : pointer;
  display: block;
}
.menuOverview:hover{
  transition: 0.25s;
  transform: scale(1.2); /* This zooms in */
  color: lightgoldenrodyellow;
  cursor: pointer;
}

/*Formatting for the slide out boxes and their contents*/
.slide {
  clear:both;
  width:100%;
  height:0px;
  overflow: hidden;
  text-align: center;
  transition: height .3s ease;
}
.slide a, li {
  padding : 10px;
  text-decoration: none;
  color: goldenrod;
  transition: 0.25s;
  text-align: center;
  font-weight: bold;
}
.slide a:hover, li:hover{
  transition: 0.25s;
  transform: scale(1.2); /* This zooms in */
  color: lightgoldenrodyellow;
  cursor: pointer;
}

#touch {position: absolute; opacity: 0; height: 0px;}   

/*Slide out menu formatting when menu is open*/ 
#touch:checked + .slide {
	height: 400px;
} 

</style>

<nav class=moduleLinksNav>

  <label for="touch">
  	<span class="menuOverview"> 
  		<h2>Module Menu ▼ </h2> 
  	</span>
  </label>

  <input type="checkbox" id="touch"> 

  <ul class="slide">
    <li><a href="index.php">Overview</a></li>
    <li><a href="#">Module 1 - Vectors </a></li>
    <li><a href="#">Module 2 - Matrices</a></li>
    <li><a href="#">Module 3 - </a></li>
    <li><a href="#">Module 4 - </a></li>
    <li><a href="#">Module 5 - </a></li>
    <li><a href="#">Module 6 - </a></li>
    <li><a href="#">Module 7 - </a></li>
  </ul>

</nav> 