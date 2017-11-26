<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Mozilla Phonebook</title>
    <?php echo link_stylesheet("css/font-awesome.min.css"); ?>
    <?php echo link_stylesheet("css/style.css"); ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php echo link_javascript("js/jquery-min.js"); ?>
    <link title="Mozilla Phonebook" rel="search" type="application/opensearchdescription+xml" href="opensearch.xml">
  </head>

<body data-page="<?php echo page ?>">

<div id="header">
  <form action="search.php" method="get" id="phonebook-search">
    <h1><a href=".">Phonebook</a></h1>
    <div id="search-region">
      <input type="hidden" name="format" value="html">
      <div id="text-wrapper">
        <input type="hidden" name="mode" id="mode" value="search">
        <input type="text" name="query" class="with-clear-button" id="text" size="18" autofocus="true">
        <div id="clear-button" title="Clear"></div>
      </div><button type="submit" id="search">Search</button>
    </div>
    <div id="throbber"></div>
    <ul id="menu">
      <li><a class="card persist" href=".">Cards</a></li>
      <li><a class="wall persist" href="faces.php">Faces</a></li>
      <li><a class="tree persist" href="tree.php">Org Chart</a></li>
      <?php if (count($locations_dropdown) > 0): ?>
      <li class="location">
        <select name="locations" id="locations">
          <option value="">Locations:</option>
          <?php foreach ($locations_dropdown as $l): ?>
          <option value="<?php echo escape($l); ?>"><?php echo escape($l); ?></option>
          <?php endforeach; ?>
        </select>
      <?php endif; ?>
      <li class="edit"><a class="edit" href="edit.php" id="edit-entry">Edit My Entry</a></li>
    </ul>
  </form>
</div>

<div class="no-results-template">
  <img src="img/ohnoes.jpg">
  <h2>OH NOES! No ones were foundz.</h2>
</div>

<div class="error-result-template">
  <h2>An error occurred while trying to access Phonebook.<br>Please <a class="reload-page">reload the page</a> to resubmit your search.</h2>
</div>

<div id="preload">
    <br>
    <img src="img/vcard.png">
    <img src="img/vcard_body.png">
    <img src="img/vcard_body_bg.png">
    <img src="img/vcard_footer.png">
    <img src="img/vcard_footer_bg.png">
    <img src="img/vcard_footer_edge.png">
    <img src="img/vcard_footer_middle.png">
    <img src="img/vcard_header.png">
    <img src="img/vcard_header_bg.png">
</div>
