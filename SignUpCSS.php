<?php 
header('Content-type: text/css; charset:UTF-8');
?>
*{
	font-family: 'Baloo Chettan 2', cursive;
}
body{
	height:100vh;
}

mainbody{
position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.navbar div{
box-sizing: border-box;
float: left;
display: flex;
align-items: center;
justify-content: center;
margin-left: 15px;
}
.container{
	/*position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);*/
	float: right;
	position: relative;
	width: 100vh;
	display: flex;
	flex-direction: row;
}
li{
	display: inline-block;
	display: flex;
	justify-content: center;
	align-items: center;
	list-style-type: none;
}
#special{
	border:1px solid black;
}
li a,a{
	text-decoration: none;
	color: black;
	padding: 12px 24px;
	margin: 0px 5px;
	font-size:20px;
	text-transform: uppercase;
	text-align: center;
}
.cool-link::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background-color: #000;
	transition: width .3s ;
}
.cool-link:hover::after{
	width: 100%;
	transition: width .3s ;

}
.builtDiff{
	position: relative;
	left: 20px;
}
form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
label, input, button{
	margin-top:10px;
	font-size: 1.25em;
}
input{
	text-align: center;
}
input[type="file"]{
	border:1px solid black;
	text-align: center;
}
button{
	margin-top:20px;
	padding: 2px 20px;
	background-color: white;
	transition: 0.5s ease;
	width:258px;
}
button:hover{
	background-color: black;
	color: white;
}
.howl{
	display:flex;
	align-items:center;
	flex-direction:column;
	justify-items:center;
	position:absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
img{
	max-width:200px;
	max-height:200px;
}
span{
	font-size:1.25em
}