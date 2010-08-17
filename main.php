<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>


  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  <?php tpl_metaheaders() ?>

  <script type="text/javascript" charset="utf-8" src="<?php echo DOKU_TPL?>jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" charset="utf-8" src="<?php echo DOKU_TPL?>enhance.js" ></script>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

</head>

<body>

<a href="http://www.spamhelp.org/harvesterkiller/">Anti-Spam Bot link.</a>

<div id="info">
<?php html_msgarea()?>
</div>

<div class="dokuwiki">

<nav>
	<span class="breadcrumbs"><?php tpl_youarehere(' &raquo; ') ?></span>

	<ul id="categories">
		<li>[<a href="doku.php?id=music">music</a>]</li>
		<li>[<a href="doku.php?id=rl">real life</a>]</li>
		<li>[<a href="doku.php?id=computing">computing</a>]</li>
		<li>[<a href="doku.php?id=about">about</a>]</li>
	</ul>

	<ul id="icons">
<!--	<li id="email-icon"><a href="email"><span>email</span></a></li>		-->
		<li id="twitter-icon"><a href="http://twitter.com/PieteSartain"><span>twitter</span></a></li>
		<li id='goodreads-icon'><a href="goodreads"><span>goodreads</span></a></li>
		<li id='lastfm-icon'><a href="lastfm"><span>lastfm</span></a></li>
		<li id='spotify-icon'><a href="spotify"><span>spotify</span></a></li>
		<li id='git-icon'><a href="git"><span>git</span></a></li>
		<li id='linkedin-icon'><a href="linkedin"><span>linkedin</span></a></li>
		<li id='profile-icon'><a href="profile"><span>google profile</span></a></li>
	</ul>	
</nav>

<header>
	<hgroup>
		<h1>pesartain.com</h1>
		<h2>where I remind myself what I've accomplished.</h2>
	</hgroup>
</header>

  <?php flush()?>

<article id="content">
	<!-- wikipage start -->
	<?php tpl_content()?>
	<!-- wikipage stop -->
</article>

<section id="info">
	
	<nav id="contact">
		<ul>
			<li id='email-me'>pe<del>anti</del>sartai<del>@wibble.</del>n@goog<del>.com</del>lelma<del>.com</del>il.com</li>
			<li id='twitter-me'>
				<a href="http://twitter.com/PieteSartain">the twitter</a></li>
			<li id='blog-rss'>
				<a href="feed://pesartain.com/feed.php?ns=blog&num=10&linkto=current&content=html">blog rss</a></li>
			<li id='site-rss'>
				<a href="feed://pesartain.com/feed.php?num=10&linkto=current&content=html">site change rss</a></li>
		</ul>
	</nav>
	
	<section id="bio">
		<p>Who am I? I answer to Piete or Pieter and I try to be more than just my job title.</p>
		<p>Browse my <a href="">blog</a>, read my <a href="">articles</a>, or listen to my <a href="">music</a>.</p>
	</section>
	
	<nav id="tags">
		<?php tpl_include_page("sidebar") ?>
	</nav>
	
</section>

  <?php flush()?>

<footer>

	<div id="music">
	<h1>Music</h1>
	<ul>
		<li><a href="http://projectchorus.pesartain.com">projectchorus</a></li>
		<li><a href="">Emily's Mistake</a></li>
		<li><a href="doku.php?id=music">Hall of Fame</a></li>
	</ul>
	</div>
	
	<div id="rl">
	<h1>Real Life</h1>
	<ul>
		<li><a href="doku.php?id=diy">DIY</a></li>
		<li><a href="doku.php?id=gaming">Gaming</a></li>
		<!--<li><a href="doku.php?id=travelling">Travelling</a></li>-->
		<!--<li><a href="">Finance</a></li>-->
		<!--<li><a href="doku.php?id=">Organisation</a></li>-->
		<!--<li><a href="doku.php?id=">Museum</a></li>-->
	</ul>
	</div>
	
	<div id="comp">
	<h1>Computing</h1>
	<ul>
		<li><a href="doku.php?id=">Articles</a></li>
		<li><a href="doku.php?id=">Web design</a></li>
		<li><a href="doku.php?id=">Gaming</a></li>
		<li><a href="doku.php?id=">Source code</a></li>
		<li><a href="doku.php?id=">Archive</a></li>
	</ul>
	</div>
	
	<div id="about">
	<h1>About</h1>
	<ul>
		<li>About me</li>
		<li>Site disclaimer</li>
	</ul>

	<aside>
		pesartain.com is the personal site of Pieter E Sartain. All content is Copyright 2002 - 2010.
	</aside>

	</div>

</footer>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>

</div>

</body>
</html>
