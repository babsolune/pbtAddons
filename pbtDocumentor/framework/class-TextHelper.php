<?php require_once('../api_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul class="level-0">
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder						</a>

							</li>
					<li>
						<a class="cssmenu-title" href="package-Content.php">
							Content<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-Content.Category.php">
							Category<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-Content.Category.controllers.php">
							controllers						</a>

							</li>
								</ul></li></ul></li>
					<li>
						<a class="cssmenu-title" href="package-Helper.php">
							Helper						</a>

							</li>
					<li>
						<a class="cssmenu-title" href="package-PHPBoost.php">
							PHPBoost<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-PHPBoost.Langs.php">
							Langs						</a>

							</li>
								</ul></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>
			</div>


			<div id="elements">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Classes</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-classes" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li class="active"><a href="class-TextHelper.php" class="cssmenu-title">TextHelper</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>





				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Functions</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-functions" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li><a href="function-find_require_dir.php" class="cssmenu-title deprecated">find_require_dir</a></li>
					<li><a href="function-load_ini_file.php" class="cssmenu-title deprecated">load_ini_file</a></li>
					<li><a href="function-load_module_lang.php" class="cssmenu-title deprecated">load_module_lang</a></li>
					<li><a href="function-retrieve.php" class="cssmenu-title deprecated">retrieve</a></li>
					<li><a href="function-url.php" class="cssmenu-title deprecated">url</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>
			</div>
		</div>
		<div id="inside-main" class="main-with-left">
			<nav id="inside-breadcrumb">
				<ol>
					<li>
						<a href="index.php"><span>PHPBoost A.P.I.</span></a>
					</li>
					<li>
<span>Package</span>					</li>
					<li class="active">
<span>Class</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section id="content" class="class">
	<header>
		<h1>Class</h1>
	</header>
	<article>
		<header><h2>TextHelper</h2></header>
		<div class="content">

			<div class="options infos">
				
				
				
				<span class="infos-options"><b>Package:</b> <a href="package-Helper.php">Helper</a></span>

						<span class="infos-options">
							<b>Category:</b>
							Framework
						</span>
						<span class="infos-options">
							<b>Copyright:</b>
							&copy; 2005-2019 PHPBoost
						</span>
						<span class="infos-options">
							<b>License:</b>
							<a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU/GPL-3.0</a>
						</span>
						<span class="infos-options">
							<b>Author:</b>
							Regis VIARRE <a href="&#109;&#x61;&#x69;&#108;&#116;&#x6f;&#x3a;&#99;&#114;&#x6f;w&#107;&#x61;&#x69;&#116;&#64;&#x70;h&#112;&#x62;&#x6f;&#111;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;">&#99;&#114;&#x6f;w&#107;&#x61;&#x69;&#116;&#64;&#x70;h&#112;&#x62;&#x6f;&#111;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;</a>
						</span>
						<span class="infos-options">
							<b>Version:</b>
							PHPBoost 5.2 - last update: 2018 11 09
						</span>
						<span class="infos-options">
							<b>Since:</b>
							PHPBoost 3.0 - 2010 01 24
						</span>
						<span class="infos-options">
							<b>Contributor:</b>
							Julien BRISWALTER <a href="&#x6d;&#x61;&#x69;&#108;&#116;&#111;:&#x6a;&#x31;&#x2e;&#115;&#101;&#116;h&#x40;&#x70;&#x68;&#112;&#98;&#111;o&#x73;&#x74;&#x2e;&#99;&#111;&#109;">&#x6a;&#x31;&#x2e;&#115;&#101;&#116;h&#x40;&#x70;&#x68;&#112;&#98;&#111;o&#x73;&#x74;&#x2e;&#99;&#111;&#109;</a>
						</span>
						<span class="infos-options">
							<b>Contributor:</b>
							Arnaud GENET <a href="&#109;a&#x69;l&#x74;&#111;&#x3a;&#101;&#x6c;&#101;&#x6e;&#119;&#x69;&#105;&#x40;&#112;&#x68;&#112;&#x62;&#111;&#x6f;&#115;&#x74;&#46;&#x63;&#111;m">&#101;&#x6c;&#101;&#x6e;&#119;&#x69;&#105;&#x40;&#112;&#x68;&#112;&#x62;&#111;&#x6f;&#115;&#x74;&#46;&#x63;&#111;m</a>
						</span>
						<span class="infos-options">
							<b>Contributor:</b>
							mipel <a href="&#x6d;&#97;i&#x6c;&#116;o&#x3a;&#109;&#105;&#x70;&#101;&#108;&#x40;&#112;&#104;&#x70;&#x62;&#111;&#x6f;&#x73;&#116;&#x2e;&#x63;&#111;&#x6d;">&#109;&#105;&#x70;&#101;&#108;&#x40;&#112;&#104;&#x70;&#x62;&#111;&#x6f;&#x73;&#116;&#x2e;&#x63;&#111;&#x6d;</a>
						</span>
					<span class="infos-options"><b>Located at:</b> <a href="source-class-TextHelper.php#3-350" title="Go to source code">TextHelper.class.php</a></span>
			</div>

			<div class="description">
				<p>Text helper</p>
			</div>








		</div>

		<div class="content">


			<div class="responsive-table">
				<table class="summary methods" id="methods">
					<caption>Methods summary</caption>
			<tr data-order="strprotect" id="_strprotect">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strprotect">#</a>
						<code>
<a href="source-class-TextHelper.php#23-57" title="Go to source code">strprotect</a>( <span>string <var>$var</var></span>, <span>boolean <var>$html_protect</var> = self::HTML_PROTECT</span>, <span>integer <var>$addslashes</var> = self::ADDSLASHES_FORCE</span> )
						</code>

							<div class="description short">
								<p>Protects an input variable. Never trust user input!</p>
							</div>

						<div class="description detailed hidden">
							<p>Protects an input variable. Never trust user input!</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$var</var></dt>
									<dd>Variable to protect.</dd>
									<dt><var>$html_protect</var></dt>
									<dd><p>HTML_PROTECT if you don't accept the HTML code (it will be transformed
by the corresponding HTML entities and won't be considerer by the web browsers).</p></dd>
									<dt><var>$addslashes</var></dt>
									<dd>If you want to escape the quotes in the string, use ADDSLASHES_FORCE, if you don't want, use the ADDSLASHES_NONE constant.</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The protected string.
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="wordwrap_html" id="_wordwrap_html">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_wordwrap_html">#</a>
						<code>
<a href="source-class-TextHelper.php#59-72" title="Go to source code">wordwrap_html</a>( <span>string <var>$str</var></span>, <span>integer <var>$lenght</var></span>, <span>string <var>$cut_char</var> = <span class="php-quote">'&lt;br /&gt;'</span></span>, <span>boolean <var>$cut</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								<p>Inserts a carriage return every $lenght characters. It's equivalent to wordwrap PHP function but it can deal with the HTML entities.
An entity is coded on several characters and the wordwrap function counts several characters for an entity whereas it represents only one character.</p>
							</div>

						<div class="description detailed hidden">
							<p>Inserts a carriage return every $lenght characters. It's equivalent to wordwrap PHP function but it can deal with the HTML entities.
An entity is coded on several characters and the wordwrap function counts several characters for an entity whereas it represents only one character.</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$str</var></dt>
									<dd>The string to wrap.</dd>
									<dt><var>$lenght</var></dt>
									<dd>The number of characters you want in a line.</dd>
									<dt><var>$cut_char</var></dt>
									<dd>The character to insert every $lenght characters. The default value is '<br />', the HTML carriage return tag.</dd>
									<dt><var>$cut</var></dt>
									<dd>True if you accept that a word would be broken apart, false if you want to cut only on a blank character.</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The wrapped HTML string.
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="substr_html" id="_substr_html">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_substr_html">#</a>
						<code>
<a href="source-class-TextHelper.php#74-90" title="Go to source code">substr_html</a>( <span>string <var>$str</var></span>, <span>integer <var>$start</var></span>, <span>integer <var>$end</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								<p>Cuts a string containing some HTML code which contains some HTML entities. The substr PHP function considers a HTML entity as several characters.
This function allows you to consider them as only one character.</p>
							</div>

						<div class="description detailed hidden">
							<p>Cuts a string containing some HTML code which contains some HTML entities. The substr PHP function considers a HTML entity as several characters.
This function allows you to consider them as only one character.</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$str</var></dt>
									<dd>The string you want to cut.</dd>
									<dt><var>$start</var></dt>
									<dd><p>If start  is non-negative, the returned string will start at the start 'th position in string , counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
If start is negative, the returned string will start at the start 'th character from the end of string .
If string is less than or equal to start characters long, FALSE will be returned.</p></dd>
									<dt><var>$end</var></dt>
									<dd>If length is given and is positive, the string returned will contain at most length  characters beginning from start  (depending on the length of string ).</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The sub string.
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="cut_string" id="_cut_string">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_cut_string">#</a>
						<code>
<a href="source-class-TextHelper.php#92-105" title="Go to source code">cut_string</a>( <span>string <var>$string</var></span>, <span>integer <var>$length</var></span> )
						</code>

							<div class="description short">
								<p>Cut string to the desired length, ending with the last full word.</p>
							</div>

						<div class="description detailed hidden">
							<p>Cut string to the desired length, ending with the last full word.</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$string</var></dt>
									<dd>A PHP string to convert to cut</dd>
									<dt><var>$length</var></dt>
									<dd>The desired length</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The substring
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="to_js_string" id="_to_js_string">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_to_js_string">#</a>
						<code>
<a href="source-class-TextHelper.php#107-117" title="Go to source code">to_js_string</a>( <span>string <var>$string</var></span>, <span>string <var>$add_quotes</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								<p>Exports a variable to be used in a javascript script.</p>
							</div>

						<div class="description detailed hidden">
							<p>Exports a variable to be used in a javascript script.</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$string</var></dt>
									<dd>A PHP string to convert to a JS one</dd>
									<dt><var>$add_quotes</var></dt>
									<dd>If true, returned string will be bounded by single quotes</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The js equivalent string
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="to_json_string" id="_to_json_string">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_to_json_string">#</a>
						<code>
<a href="source-class-TextHelper.php#119-129" title="Go to source code">to_json_string</a>( <span>string <var>$string</var></span>, <span>string <var>$add_quotes</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								<p>Exports a variable to be used in a json javascript script.</p>
							</div>

						<div class="description detailed hidden">
							<p>Exports a variable to be used in a json javascript script.</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$string</var></dt>
									<dd>A PHP string to convert to a json one</dd>
									<dt><var>$add_quotes</var></dt>
									<dd>If true, returned string will be bounded by double quotes</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>The json equivalent string
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="htmlspecialchars" id="_htmlspecialchars">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_htmlspecialchars">#</a>
						<code>
<a href="source-class-TextHelper.php#131-137" title="Go to source code">htmlspecialchars</a>( <span> <var>$string</var></span>, <span> <var>$flags</var> = <span class="php-keyword1">null</span></span>, <span> <var>$encoding</var> = <span class="php-quote">'UTF-8'</span></span>, <span> <var>$double_encode</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="htmlspecialchars_decode" id="_htmlspecialchars_decode">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_htmlspecialchars_decode">#</a>
						<code>
<a href="source-class-TextHelper.php#139-145" title="Go to source code">htmlspecialchars_decode</a>( <span> <var>$string</var></span>, <span> <var>$flags</var> = <span class="php-keyword1">null</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="html_entity_decode" id="_html_entity_decode">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_html_entity_decode">#</a>
						<code>
<a href="source-class-TextHelper.php#147-153" title="Go to source code">html_entity_decode</a>( <span> <var>$string</var></span>, <span> <var>$flags</var> = <span class="php-keyword1">null</span></span>, <span> <var>$encoding</var> = <span class="php-quote">'UTF-8'</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strtolower" id="_strtolower">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strtolower">#</a>
						<code>
<a href="source-class-TextHelper.php#155-158" title="Go to source code">strtolower</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strtoupper" id="_strtoupper">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strtoupper">#</a>
						<code>
<a href="source-class-TextHelper.php#160-163" title="Go to source code">strtoupper</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="lcfirst" id="_lcfirst">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_lcfirst">#</a>
						<code>
<a href="source-class-TextHelper.php#165-169" title="Go to source code">lcfirst</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="ucfirst" id="_ucfirst">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_ucfirst">#</a>
						<code>
<a href="source-class-TextHelper.php#171-175" title="Go to source code">ucfirst</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strlen" id="_strlen">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strlen">#</a>
						<code>
<a href="source-class-TextHelper.php#177-180" title="Go to source code">strlen</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strpos" id="_strpos">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strpos">#</a>
						<code>
<a href="source-class-TextHelper.php#182-192" title="Go to source code">strpos</a>( <span> <var>$string</var></span>, <span> <var>$substring</var></span>, <span> <var>$offset</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="stripos" id="_stripos">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_stripos">#</a>
						<code>
<a href="source-class-TextHelper.php#194-204" title="Go to source code">stripos</a>( <span> <var>$string</var></span>, <span> <var>$substring</var></span>, <span> <var>$offset</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="substr" id="_substr">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_substr">#</a>
						<code>
<a href="source-class-TextHelper.php#206-212" title="Go to source code">substr</a>( <span> <var>$string</var></span>, <span> <var>$start</var></span>, <span> <var>$length</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="mb_substr" id="_mb_substr">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_mb_substr">#</a>
						<code>
<a href="source-class-TextHelper.php#214-220" title="Go to source code">mb_substr</a>( <span> <var>$string</var></span>, <span> <var>$start</var></span>, <span> <var>$length</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strrchr" id="_strrchr">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strrchr">#</a>
						<code>
<a href="source-class-TextHelper.php#222-225" title="Go to source code">strrchr</a>( <span> <var>$string</var></span>, <span> <var>$needle</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strripos" id="_strripos">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strripos">#</a>
						<code>
<a href="source-class-TextHelper.php#227-233" title="Go to source code">strripos</a>( <span> <var>$string</var></span>, <span> <var>$needle</var></span>, <span> <var>$offset</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strrpos" id="_strrpos">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strrpos">#</a>
						<code>
<a href="source-class-TextHelper.php#235-241" title="Go to source code">strrpos</a>( <span> <var>$string</var></span>, <span> <var>$needle</var></span>, <span> <var>$offset</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="strstr" id="_strstr">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_strstr">#</a>
						<code>
<a href="source-class-TextHelper.php#243-249" title="Go to source code">strstr</a>( <span> <var>$string</var></span>, <span> <var>$needle</var></span>, <span> <var>$before_needle</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="substr_count" id="_substr_count">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_substr_count">#</a>
						<code>
<a href="source-class-TextHelper.php#251-257" title="Go to source code">substr_count</a>( <span> <var>$string</var></span>, <span> <var>$needle</var></span>, <span> <var>$encoding</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="convert_case" id="_convert_case">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_convert_case">#</a>
						<code>
<a href="source-class-TextHelper.php#259-265" title="Go to source code">convert_case</a>( <span> <var>$string</var></span>, <span> <var>$mode</var></span>, <span> <var>$encoding</var> = <span class="php-quote">''</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="serialize" id="_serialize">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_serialize">#</a>
						<code>
<a href="source-class-TextHelper.php#267-270" title="Go to source code">serialize</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="serialize_base64" id="_serialize_base64">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_serialize_base64">#</a>
						<code>
<a href="source-class-TextHelper.php#272-275" title="Go to source code">serialize_base64</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="unserialize" id="_unserialize">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_unserialize">#</a>
						<code>
<a href="source-class-TextHelper.php#277-280" title="Go to source code">unserialize</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="mb_unserialize" id="_mb_unserialize">

				<td class="attributes">
					<code>
						 public static

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_mb_unserialize">#</a>
						<code>
<a href="source-class-TextHelper.php#282-289" title="Go to source code">mb_unserialize</a>( <span> <var>$string</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="check_nbr_links" id="_check_nbr_links">

				<td class="attributes">
					<code>
						 public static

						boolean
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_check_nbr_links">#</a>
						<code>
<a href="source-class-TextHelper.php#297-318" title="Go to source code">check_nbr_links</a>( <span>string <var>$contents</var></span>, <span>integer <var>$max_nbr</var></span>, <span>boolean <var>$has_html_links</var> = <span class="php-keyword1">false</span></span> )
						</code>

							<div class="description short">
								<p>Checks if a string contains less than a defined number of links (used to prevent SPAM).</p>
							</div>

						<div class="description detailed hidden">
							<p>Checks if a string contains less than a defined number of links (used to prevent SPAM).</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$contents</var></dt>
									<dd>String in which you want to count the number of links</dd>
									<dt><var>$max_nbr</var></dt>
									<dd>Maximum number of links accepted.</dd>
									<dt><var>$has_html_links</var></dt>
									<dd>true if the content is in HTML</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									boolean<br>true if there are no too much links, false otherwise.
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="utf8_wordwrap" id="_utf8_wordwrap">

				<td class="attributes">
					<code>
						 public static

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_utf8_wordwrap">#</a>
						<code>
<a href="source-class-TextHelper.php#320-349" title="Go to source code">utf8_wordwrap</a>( <span>string <var>$string</var></span>, <span>integer <var>$width</var> = <span class="php-num">75</span></span>, <span>string <var>$break</var> = <span class="php-quote">&quot;\n&quot;</span></span>, <span>string <var>$cut</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								<p>Wraps a UTF-8 string to a given number of characters</p>
							</div>

						<div class="description detailed hidden">
							<p>Wraps a UTF-8 string to a given number of characters</p>


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$string</var></dt>
									<dd>the input string</dd>
									<dt><var>$width</var></dt>
									<dd>the column width</dd>
									<dt><var>$break</var></dt>
									<dd>the line is broken using the optional break parameter</dd>
									<dt><var>$cut</var></dt>
									<dd>not used for the moment</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									string<br>the given string wrapped at the specified column
								</div>




						</div>
					</div>
				</td>
			</tr>
				</table>
			</div>

			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>


			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>



			<div class="responsive-table">
				<table class="summary constants" id="constants">
					<caption>Constants summary</caption>
					<tr data-order="HTML_NO_PROTECT" id="HTML_NO_PROTECT">

						<td class="attributes"><code>boolean</code></td>
						<td class="name">
							<code>
								<a href="source-class-TextHelper.php#18" title="Go to source code"><b>HTML_NO_PROTECT</b></a>
							</code>

							<div class="description short">
								
							</div>

							<div class="description detailed hidden">
								

							</div>
						</td>
						<td class="value">
							<div>
								<a href="#HTML_NO_PROTECT" class="anchor">#</a>
								<code><span class="php-keyword1">false</span></code>
							</div>
						</td>
					</tr>
					<tr data-order="HTML_PROTECT" id="HTML_PROTECT">

						<td class="attributes"><code>boolean</code></td>
						<td class="name">
							<code>
								<a href="source-class-TextHelper.php#19" title="Go to source code"><b>HTML_PROTECT</b></a>
							</code>

							<div class="description short">
								
							</div>

							<div class="description detailed hidden">
								

							</div>
						</td>
						<td class="value">
							<div>
								<a href="#HTML_PROTECT" class="anchor">#</a>
								<code><span class="php-keyword1">true</span></code>
							</div>
						</td>
					</tr>
					<tr data-order="ADDSLASHES_FORCE" id="ADDSLASHES_FORCE">

						<td class="attributes"><code>integer</code></td>
						<td class="name">
							<code>
								<a href="source-class-TextHelper.php#20" title="Go to source code"><b>ADDSLASHES_FORCE</b></a>
							</code>

							<div class="description short">
								
							</div>

							<div class="description detailed hidden">
								

							</div>
						</td>
						<td class="value">
							<div>
								<a href="#ADDSLASHES_FORCE" class="anchor">#</a>
								<code><span class="php-num">1</span></code>
							</div>
						</td>
					</tr>
					<tr data-order="ADDSLASHES_NONE" id="ADDSLASHES_NONE">

						<td class="attributes"><code>integer</code></td>
						<td class="name">
							<code>
								<a href="source-class-TextHelper.php#21" title="Go to source code"><b>ADDSLASHES_NONE</b></a>
							</code>

							<div class="description short">
								
							</div>

							<div class="description detailed hidden">
								

							</div>
						</td>
						<td class="value">
							<div>
								<a href="#ADDSLASHES_NONE" class="anchor">#</a>
								<code><span class="php-num">2</span></code>
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="responsive-table">
			</div>




			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>


			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>

		</div>
	</article>
	<footer></footer>
</section>

				<div id="apigen-footer">
					 API documentation generated by <a href="http://apigen.org">ApiGen</a>
				</div>
			</div>
		</div>
	</div>

	<script>jQuery("#cssmenu-package").menumaker({ title: "Packages navigation", format: "multitoggle", breakpoint: 768 }); </script>
	<script>jQuery("#cssmenu-classes").menumaker({ title: "Classes navigation", format: "multitoggle", breakpoint: 768 }); </script>
	<script>jQuery("#cssmenu-functions").menumaker({ title: "Functions navigation", format: "multitoggle", breakpoint: 768 }); </script>
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>