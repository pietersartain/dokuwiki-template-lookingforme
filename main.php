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

// multitemplate capable
if (isset($DOKU_TPL)==FALSE) $DOKU_TPL = DOKU_TPL; 
if (isset($DOKU_TPLINC)==FALSE) $DOKU_TPLINC = DOKU_TPLINC;
if (isset($CONF_TPL)==FALSE) $CONF_TPL = 'lookingforme'; 

function getRootNS($id){
	$pos = strpos((string)$id,':');
	if($pos!==false){
		return substr((string)$id,0,$pos);
	}
	return false;
}


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

  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $DOKU_TPL ?>defaults.css" />

  <?php tpl_metaheaders() ?>
  <?php /**/ ?>
  <script type="text/javascript" charset="utf-8" src="<?php echo $DOKU_TPL?>jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" charset="utf-8" src="<?php echo $DOKU_TPL?>enhance.js" ></script>
  <?php /**/ ?>

<?php /*
	if (tpl_getConf('lookingforme')) {
		echo '<link rel="stylesheet" media="screen" type="text/css" href='.$DOKU_TPL.'blog.css" />';
	}
	*/
?>

  <link rel="shortcut icon" href="<?php echo $DOKU_TPL?>images/favicon.ico" />

</head>

<body>

<div id="info">
<?php html_msgarea()?>
</div>

<div class="dokuwiki">

<nav>
	<span class="breadcrumbs"><?php tpl_youarehere(' &raquo; ') ?></span>

	<ul id="categories">
		<li>[<?php tpl_pagelink(':blog') ?></li>
		<li>[<?php tpl_pagelink(':music') ?>]</li>
		<li>[<?php tpl_pagelink(':rl','real life') ?>]</li>
		<li>[<?php tpl_pagelink(':computing') ?>]<li>
		<li>[<?php tpl_pagelink(':about') ?>]</li>
	</ul>

	<ul id="icons">
		<?php /**
<!--	<li id="email-icon"><a href="email"><span>email</span></a></li>		-->
		*/ ?>
		<li id="twitter-icon"><a href="http://twitter.com/PieteSartain" rel='me'><span>twitter</span></a></li>
		<li id='goodreads-icon'><a href="http://www.goodreads.com/piete" rel='me'><span>goodreads</span></a></li>
		<li id='lastfm-icon'><a href="http://www.last.fm/user/lastfm_piete" rel='me'><span>lastfm</span></a></li>
		<li id='spotify-icon'><a href="http://open.spotify.com/user/spotify_piete" rel='me'><span>spotify</span></a></li>
		<li id='git-icon'><a href="http://github.com/piete" rel='me'><span>git</span></a></li>
		<li id='linkedin-icon'><a href="http://uk.linkedin.com/in/pesartain" rel='me'><span>linkedin</span></a></li>
		<li id='profile-icon'><a href="http://www.google.com/profiles/pesartain" rel='me'><span>google profile</span></a></li>
	</ul>	
</nav>

<header>
	<hgroup>
		
		<?php
		/*
		print_r(getID());
		print("<br />");
		print_r(noNSorNS(getID()));
		print("<br />");
		print_r(getNS(getID()));
		print("<br />");
		print_r(curNS(getID()));
		print("<br />");
		print_r(getRootNS(getID()));
		print("<br />");
		*/
		
		//if (tpl_getConf('lookingforme')) {
		if ( (getRootNS(getID()) == 'blog') || (noNSorNS(getID()) == 'blog' ) ) {
			echo '<h1 class="blog">Looking For Me?</h1>';
			echo "<h2>a blog where I make promises, tell stories and share experiences.</h2>";
		} else {
			echo '<h1 class="articles">pesartain.com</h1>';
			echo "<h2>where I remind myself what I've accomplished.</h2>";
		}
		?>
	</hgroup>
</header>

  <?php flush()?>

<article id="content">
  <div class="page">
	<!-- wikipage start -->
	<?php tpl_content()?>
	<!-- wikipage stop -->
  </div>
</article>

<section id="info">
	
	<nav id="search">
		<p>Looking for something else?</p>
		<?php tpl_searchform() ?>
	</nav>
	
	<nav id="contact">
		<ul>
			<li id='email-me'>pe<del>anti</del>sartai<del>@mail</del>n@goog<del>harvesting</del>lema<del>obfuscation</del>il.com</li>
			<li id='twitter-me'>
				<a href="http://twitter.com/PieteSartain" rel='me'>the twitter</a></li>
			<li id='blog-rss'>
				<a href="feed://pesartain.com/feed.php?ns=blog&num=10&linkto=current&content=html">blog rss</a></li>
			<li id='site-rss'>
				<a href="feed://pesartain.com/feed.php?num=10&linkto=current&content=html">site change rss</a></li>
		</ul>
	</nav>
	
	<section id="bio">
		<p>Who am I? I answer to Piete or Pieter and I try to be more than just my job title.</p>
		<p>Browse my <?php tpl_pagelink(':blog') ?>, read <?php tpl_pagelink(':about','about me') ?>, or listen to my <?php tpl_pagelink(':music') ?>.</p>
	</section>
	
	<nav id="tags">
		<?php tpl_include_page("sidebar") ?>
	</nav>

<?php /*
<?php if (tpl_getConf('lookingforme')) { ?>
	<nav id="calendar">
		<?php tpl_include_page("calendar_sidebar") ?>
	</nav>
<?php } ?>
*/ ?>

</section>

  <?php flush()?>

<footer>

	<div id="music">
	<h1>Music</h1>
	<ul>
		<li><a href="http://projectchorus.pesartain.com">projectchorus</a></li>

		<?php
		/*
		<li><a href="">Emily's Mistake</a></li>
		*/
		?>

		<li><?php tpl_pagelink(':music','Hall of Fame') ?></li>
	</ul>
	</div>
	
	<div id="rl">
	<h1>Real Life</h1>
	<ul>
		<li><?php tpl_pagelink(':wedding','Wedding') ?>
		<li><?php tpl_pagelink(':diy','DIY') ?></li>
		<li><?php tpl_pagelink(':gaming','Gaming') ?></li>
		<?php 
		/*
		<li><?php tpl_pagelink(':travelling','Travelling') ?></li>
		<li><?php tpl_pagelink(':finance','Travelling') ?></li>
		<li><?php tpl_pagelink(':organisation','Organisation') ?></li>
		<li><?php tpl_pagelink(':museum','Museum') ?></li>
		*/ 
		?>
	</ul>
	</div>
	
	<div id="comp">
	<h1>Computing</h1>
	<ul>
		<li><?php tpl_pagelink(':computing','Articles') ?></li>
		<li><?php tpl_pagelink(':websites','Web design') ?></li>
		
		<?php
		/*
		<li><?php tpl_pagelink(':gaming','Gaming') ?></li>
		<li><?php tpl_pagelink(':code','Source code') ?></li>
		<li><?php tpl_pagelink(':archive','Archive') ?></li>
		*/
		?>
		
	</ul>
	</div>
	
	<div id="about">
	<h1>About</h1>
	<ul>
		<li><?php tpl_pagelink(':about','About me') ?></li>
		<li><?php tpl_actionlink('index','','','Site map'); ?></li>
		<li><?php tpl_pagelink(':disclaimer','Disclaimer') ?></li>
	</ul>

	<aside>
		pesartain.com is the personal site of Pieter E Sartain. All content is Copyright 2002 - 2010.
	</aside>

	</div>

</footer>

<ul>
	<li><?php tpl_actionlink('edit','','','<img src="'.$DOKU_TPL.'images/icons/icon_edit.png" title="Edit" alt="Edit" />'); ?></li>
	<li><?php tpl_actionlink('history','','','<img src="'.$DOKU_TPL.'images/icons/icon_revisions.png" title="Old revisions" alt="Old revisions" />'); ?></li>
	<li><?php tpl_actionlink('admin','','','<img src="'.$DOKU_TPL.'images/icons/icon_admin.png" title="Admin" alt="Admin" />'); ?></li>
	<li><?php tpl_actionlink('profile','','','<img src="'.$DOKU_TPL.'images/icons/icon_profile.png" title="Profile" alt="Profile" />'); ?></li>
	<li><?php tpl_actionlink('login','','','<img src="'.$DOKU_TPL.'images/icons/icon_login.png" title="Log In" alt="Log In" />'); ?></li>
<ul>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>

</div>

</body>
</html>
