<!DOCTYPE html>
<html>

<?php
echo <<<EOT
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>
EOT;
echo $_GET['AG_Name'] . " - " . $_GET['AG_Time'];
echo <<<EOT
    </title> 
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src='http://localhost/GUI_Template/d3/d3.min.js'></script>
    <script type="text/javascript" src="http://localhost/GUI_Template/d3/d3.v3.js"></script>    
    <style type="text/css">    
    
path.link {  
  fill: none;  
  stroke: #666;  
  stroke-width: 1.5px;  
}  
 marker#licensingq {  
  fill: red;  
}  
  
path.link.licensingq {  
  stroke: red;  
}   
 marker#licensing1 {  
  fill: purple;  
}  
  
path.link.licensing1 {  
  stroke: purple;  
}   

  marker#licensing2 {  
  fill: #CD6600;  
}  
  
path.link.licensing2 {  
  stroke: #CD6600;  
}   

  marker#licensing {  
  fill: #3A5FCD;  
}  
  
path.link.licensing {  
  stroke: #3A5FCD;  
}  
  
marker#suit {  
  fill: #43CD80;  
}  
  
path.link.suit {  
  stroke: #43CD80;  
}  

path.link.resolved {  
  stroke-dasharray: 1,3 3;  
}  
  
circle {  
  fill: #aaa;  
  stroke: #222;  
  stroke-width: 5px;   
}  
  
text {  
  font: 15px sans-serif;  
  pointer-events: none;  
}  
  
text.shadow {  
  stroke: #FFFFFF;  
  stroke-width: 3px;  
  stroke-opacity: 0.8;  
}  

</style>    
    
</head>
EOT;
?>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <?php  
            echo <<<EOT
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
EOT;
           echo $_GET['AG_Name'] . " - " . $_GET['AG_Time'];
           echo <<<EOT
                </a>
            </div>
EOT;
            ?>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php
                            echo'<a href="' .  'Overall.php?projectID=' . $_GET['projectID'] . '&projectName=' . $_GET['projectName'] . '"><i class="fa fa-dashboard fa-fw"></i>Overall</a>';
                            ?>
                        </li>
			 <li>
                            <?php
                            echo '<a href="tables.php?projectName=' . $_GET['projectName'] . '&' . 'projectID=' . $_GET['projectID'] . '"><i class="fa fa-bar-chart-o fa-fw"></i> Assest Configuration</a>';
                            ?>
                        </li>
			 <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Host Configuation</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Risk Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Charts</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
				<li>
                                    <a href="#">Catalgovies</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                            <!-- /.nav-second-level -->
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


                    <?php
                    echo '<script src="Project/project' . $_GET['projectID'] . '/AG/AG' . $_GET['AG_id'] . '/links.js" type="text/javascript"></script>' ;
                    ?>
                    <script type="text/javascript">  

  
var nodes = {};  
  
links.forEach(function(link) {  
  link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});  
  link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});  
});  
  
var w = 1800,  
    h = 800;  
  
var force = d3.layout.force()  
    .nodes(d3.values(nodes))  
    .links(links)  
    .size([w, h])  
    .linkDistance(120)  
    .charge(-900)  
    .on("tick", tick)  
    .start();  
  
var svg = d3.select("body").append("svg:svg")  
    .attr("width", w)  
    .attr("height", h);  
  
//(1)创建三种连线的标记  
//各自属性是什么意思？？  
svg.append("svg:defs").selectAll("marker")  
    .data(["suit", "licensing", "resolved","licensing1","licensing2"])  
  .enter().append("svg:marker")  
    .attr("id", String)  
    .attr("viewBox", "0 -5 10 10")  
    .attr("refX", 15)  
    .attr("refY", -1.5)  
    .attr("markerWidth", 6)  
    .attr("markerHeight", 6)  
    .attr("orient", "auto")  
  .append("svg:path")  
    .attr("d", "M0,-5L10,0L0,5");  
//(2)根据连线类型引用上面创建的标记  
var path = svg.append("svg:g").selectAll("path")  
    .data(force.links())  
  .enter().append("svg:path")  
    .attr("class", function(d) { return "link " + d.type; })  
    .attr("marker-end", function(d) { return "url(#" + d.type + ")"; });  
  
var circle = svg.append("svg:g").selectAll("circle")  
    .data(force.nodes())  
  .enter().append("svg:circle")  
    .attr("r", 6)  
    .call(force.drag);  
  
var text = svg.append("svg:g").selectAll("g")  
    .data(force.nodes())  
  .enter().append("svg:g");  
  
// A copy of the text with a thick white stroke for legibility.  
text.append("svg:text")  
    .attr("x", 8)  
    .attr("y", ".31em")  
    .attr("class", "shadow")  
    .text(function(d) { return d.name; });  
  
text.append("svg:text")  
    .attr("x", 8)  
    .attr("y", ".31em")  
    .text(function(d) { return d.name; });  
  
// 使用椭圆弧路径段双向编码。  
function tick() {  
//(3)打点path格式是：Msource.x,source.yArr00,1target.x,target.y  
  path.attr("d", function(d) {  
    var dx = d.target.x - d.source.x,//增量  
        dy = d.target.y - d.source.y,  
        dr = Math.sqrt(dx * dx + dy * dy);  
    return "M" + d.source.x + ","   
    + d.source.y + "A" + dr + ","   
    + dr + " 0 0,1 " + d.target.x + ","   
    + d.target.y;  
  });  
  
  circle.attr("transform", function(d) {  
    return "translate(" + d.x + "," + d.y + ")";  
  });  
  
  text.attr("transform", function(d) {  
    return "translate(" + d.x + "," + d.y + ")";  
  });  
}  
        </script>    


            <div class="row">
                <div class="col-lg12">
                    <h1 class="page-header">xxxxxxxxxxxxxxxx Attack Graph</h1>
                    
                   
                </div>
            </div>
                                             
 </div>
	<!-- /#wrapper -->
                           
                        
                    



    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
      <script src="js/demo/dashboard-demo.js"></script>
</body>

</html>
