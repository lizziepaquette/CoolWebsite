<div class="menu3">
    <a href="#1">CSS</a>
    <a href="#2" class="current">CSS Menus</a>
    <a href="#3">Menu</a>
    <a href="#4">Single Level</a>
    <a href="#5">CSS Menu</a>
</div>
<div class="menu3sub"> </div>

div.menu3
{
    /*width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
    text-align:center;
    font-size:0;
    height: 25px;    
    *position:relative;*top:1px;/*Hacks for IE6 & IE7 */    
}

div.menu3 a
{
    display: inline-block;
    padding: 0 20px;
    margin-right:1px; /* It specifies the distance between each tab */
    background:#F7F7F7;
    color:Black;
    text-decoration:none;
    font: normal 12px Arial;
    line-height: 24px;
    border:1px solid #CAD0DB;
    border-bottom:0;
    color:#666;
    vertical-align:top;/*ChangeSet#2*/
    text-decoration:none;
}

div.menu3 a:hover, div.menu3 a.current
{
    background:#E9ECF0;
    line-height: 25px;
    color:#000;
}

div.menu3sub
{
    height:6px;
    border:1px solid #CAD0DB;
    background:#E9ECF0;
}