<style type="text/css">
.nav-wrapper{
  width: 100%;
  background: #999;
}

.nav-menu{
  position:relative;
  display:inline-block;
}

.nav-menu li{
  display: inline;
  list-style-type: none;
}

.sub-menu{
  position: absolute;
  display: none;
  background: #ccc;
}

.nav-menu ul li:hover > ul {
  display: inline-block;
}

.nav-menu > ul > li:after{
  content:"\25BC";
  font-size: .5em;
  display: inline;
  position: relative;
}
</style>
<div class="nav-wrapper">
   <nav class="nav-menu">
   		<ul class="clearfix">
   			<li><a href="/"> Inicio </a></li>
   			<li>
   				<a href="/Colaboradores"> Colaboradores </a>
   				<ul class="sub-menu">
   					<li><a href="/jordan">Michael Jordan</a></li>
   					<li><a href="/hawking">Stephen Hawking</a></li>
   				</ul>
   			</li>
   			<li><a href="#!"> Contáctenos</a>
   				<ul class="sub-menu">
   					<li><a href="mailto:giancolbe@gmail.com">Reportar un error</a></li>
   					<li><a href="/soporte">Servicio de soporte</a></li>
   				</ul>
   			</li>
   		</ul>
   </nav>
</div>