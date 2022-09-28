<!DOCTYPE html>
<html>
<head>
<style>
.header ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  display:flex;
  justify-content:center;
  margin-bottom:100px;
}

.header li {
  float: left;
}

.header li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.header li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<div class="header">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="insert.php">Insert</a></li>
  <li><a href="delete.php">Delete</a></li>
  <li><a href="update.php">Update</a></li>
</ul>
</div>
</body>
</html>



