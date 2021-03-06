<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Creative Add/Remove Effects for List Item with CSS3 Animations</title>
  
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/styles-1.css" />
  
</head>

<body>

<header class="page-header">
  <a href="http://sarasoueidan.com/blog/creative-list-effects/" class="tutorial-link">Read Tutorial</a>
  <nav class="demo-nav">
    <ul>
      <li><a href="index.html" class="active">Demo 1</a></li>
      <li><a href="index-2.html">Demo 2</a></li>
      <li><a href="index-3.html">Demo 3</a></li>
      <li><a href="index-4.html">Demo 4</a></li>
      <li><a href="index-5.html">Demo 5</a></li>
      <li><a href="index-6.html">Demo 6</a></li>
    </ul>
  </nav>
</header>

<div class="demo-wrapper">
  <header>
      <h1>Creative Add/Remove Effects for List Items</h1>
  </header>
  <div class="notification undo-button">Item Deleted. Undo?</div>
  <div class="notification save-notification">Item Saved</div>
  <div class="reminder-container">
    <form id="input-form">
      <input type="text" id="text" placeholder="Remind me to.."/>
      <input type="submit" value="Add" />
    </form>
    <ul class="reminders">

    </ul>
    <footer>
      <span class="count"></span>
      <button class="clear-all">Delete All</button>
    </footer>
  </div>
  
    
</div><!--end demo-wrapper-->

  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/modernizr-1.5.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>