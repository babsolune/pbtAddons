<?php require_once('../documentation_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul clas="level-0">
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Builder.Form.php">
							Form						</a>

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
					<li><a href="class-HTMLForm.php" class="cssmenu-title">HTMLForm</a></li>
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
					<li>
<span>Class</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section>
	<header>
		<h1>File HTMLForm.class.php</h1>
	</header>
	<article>
		<header><h2>File HTMLForm.class.php</h2></header>
		<div class="content">
            <pre class="numbers"><code><span class="l"><a href="#1">  1: </a></span><span class="l"><a href="#2">  2: </a></span><span class="l"><a href="#3">  3: </a></span></span><span class="l"><a href="#4">  4: </a></span></span><span class="l"><a href="#5">  5: </a></span></span><span class="l"><a href="#6">  6: </a></span></span><span class="l"><a href="#7">  7: </a></span></span><span class="l"><a href="#8">  8: </a></span></span><span class="l"><a href="#9">  9: </a></span></span><span class="l"><a href="#10"> 10: </a></span></span><span class="l"><a href="#11"> 11: </a></span></span><span class="l"><a href="#12"> 12: </a></span><span class="l"><a href="#13"> 13: </a></span><span class="l"><a href="#14"> 14: </a></span></span><span class="l"><a href="#15"> 15: </a></span></span><span class="l"><a href="#16"> 16: </a></span></span><span class="l"><a href="#17"> 17: </a></span></span><span class="l"><a href="#18"> 18: </a></span></span><span class="l"><a href="#19"> 19: </a></span></span><span class="l"><a href="#20"> 20: </a></span><span class="l"><a href="#21"> 21: </a></span><span class="l"><a href="#22"> 22: </a></span><span class="l"><a href="#23"> 23: </a></span><span class="l"><a href="#24"> 24: </a></span><span class="l"><a href="#25"> 25: </a></span><span class="l"><a href="#26"> 26: </a></span><span class="l"><a href="#27"> 27: </a></span><span class="l"><a href="#28"> 28: </a></span><span class="l"><a href="#29"> 29: </a></span><span class="l"><a href="#30"> 30: </a></span><span class="l"><a href="#31"> 31: </a></span><span class="l"><a href="#32"> 32: </a></span></span><span class="l"><a href="#33"> 33: </a></span></span><span class="l"><a href="#34"> 34: </a></span><span class="l"><a href="#35"> 35: </a></span><span class="l"><a href="#36"> 36: </a></span></span><span class="l"><a href="#37"> 37: </a></span></span><span class="l"><a href="#38"> 38: </a></span><span class="l"><a href="#39"> 39: </a></span><span class="l"><a href="#40"> 40: </a></span></span><span class="l"><a href="#41"> 41: </a></span></span><span class="l"><a href="#42"> 42: </a></span><span class="l"><a href="#43"> 43: </a></span><span class="l"><a href="#44"> 44: </a></span></span><span class="l"><a href="#45"> 45: </a></span></span><span class="l"><a href="#46"> 46: </a></span><span class="l"><a href="#47"> 47: </a></span><span class="l"><a href="#48"> 48: </a></span></span><span class="l"><a href="#49"> 49: </a></span></span><span class="l"><a href="#50"> 50: </a></span><span class="l"><a href="#51"> 51: </a></span><span class="l"><a href="#52"> 52: </a></span></span><span class="l"><a href="#53"> 53: </a></span></span><span class="l"><a href="#54"> 54: </a></span><span class="l"><a href="#55"> 55: </a></span><span class="l"><a href="#56"> 56: </a></span></span><span class="l"><a href="#57"> 57: </a></span></span><span class="l"><a href="#58"> 58: </a></span><span class="l"><a href="#59"> 59: </a></span><span class="l"><a href="#60"> 60: </a></span></span><span class="l"><a href="#61"> 61: </a></span></span><span class="l"><a href="#62"> 62: </a></span><span class="l"><a href="#63"> 63: </a></span><span class="l"><a href="#64"> 64: </a></span></span><span class="l"><a href="#65"> 65: </a></span></span><span class="l"><a href="#66"> 66: </a></span><span class="l"><a href="#67"> 67: </a></span><span class="l"><a href="#68"> 68: </a></span></span><span class="l"><a href="#69"> 69: </a></span></span><span class="l"><a href="#70"> 70: </a></span><span class="l"><a href="#71"> 71: </a></span><span class="l"><a href="#72"> 72: </a></span><span class="l"><a href="#73"> 73: </a></span><span class="l"><a href="#74"> 74: </a></span><span class="l"><a href="#75"> 75: </a></span></span><span class="l"><a href="#76"> 76: </a></span></span><span class="l"><a href="#77"> 77: </a></span></span><span class="l"><a href="#78"> 78: </a></span></span><span class="l"><a href="#79"> 79: </a></span></span><span class="l"><a href="#80"> 80: </a></span><span class="l"><a href="#81"> 81: </a></span><span class="l"><a href="#82"> 82: </a></span><span class="l"><a href="#83"> 83: </a></span><span class="l"><a href="#84"> 84: </a></span><span class="l"><a href="#85"> 85: </a></span><span class="l"><a href="#86"> 86: </a></span><span class="l"><a href="#87"> 87: </a></span><span class="l"><a href="#88"> 88: </a></span><span class="l"><a href="#89"> 89: </a></span><span class="l"><a href="#90"> 90: </a></span><span class="l"><a href="#91"> 91: </a></span><span class="l"><a href="#92"> 92: </a></span><span class="l"><a href="#93"> 93: </a></span><span class="l"><a href="#94"> 94: </a></span><span class="l"><a href="#95"> 95: </a></span><span class="l"><a href="#96"> 96: </a></span><span class="l"><a href="#97"> 97: </a></span><span class="l"><a href="#98"> 98: </a></span><span class="l"><a href="#99"> 99: </a></span><span class="l"><a href="#100">100: </a></span><span class="l"><a href="#101">101: </a></span><span class="l"><a href="#102">102: </a></span><span class="l"><a href="#103">103: </a></span><span class="l"><a href="#104">104: </a></span><span class="l"><a href="#105">105: </a></span><span class="l"><a href="#106">106: </a></span><span class="l"><a href="#107">107: </a></span><span class="l"><a href="#108">108: </a></span><span class="l"><a href="#109">109: </a></span></span><span class="l"><a href="#110">110: </a></span></span><span class="l"><a href="#111">111: </a></span></span><span class="l"><a href="#112">112: </a></span><span class="l"><a href="#113">113: </a></span><span class="l"><a href="#114">114: </a></span><span class="l"><a href="#115">115: </a></span><span class="l"><a href="#116">116: </a></span><span class="l"><a href="#117">117: </a></span><span class="l"><a href="#118">118: </a></span><span class="l"><a href="#119">119: </a></span></span><span class="l"><a href="#120">120: </a></span></span><span class="l"><a href="#121">121: </a></span></span><span class="l"><a href="#122">122: </a></span><span class="l"><a href="#123">123: </a></span><span class="l"><a href="#124">124: </a></span><span class="l"><a href="#125">125: </a></span><span class="l"><a href="#126">126: </a></span><span class="l"><a href="#127">127: </a></span><span class="l"><a href="#128">128: </a></span></span><span class="l"><a href="#129">129: </a></span></span><span class="l"><a href="#130">130: </a></span></span><span class="l"><a href="#131">131: </a></span><span class="l"><a href="#132">132: </a></span><span class="l"><a href="#133">133: </a></span><span class="l"><a href="#134">134: </a></span><span class="l"><a href="#135">135: </a></span><span class="l"><a href="#136">136: </a></span><span class="l"><a href="#137">137: </a></span><span class="l"><a href="#138">138: </a></span></span><span class="l"><a href="#139">139: </a></span></span><span class="l"><a href="#140">140: </a></span></span><span class="l"><a href="#141">141: </a></span></span><span class="l"><a href="#142">142: </a></span></span><span class="l"><a href="#143">143: </a></span><span class="l"><a href="#144">144: </a></span><span class="l"><a href="#145">145: </a></span><span class="l"><a href="#146">146: </a></span><span class="l"><a href="#147">147: </a></span><span class="l"><a href="#148">148: </a></span><span class="l"><a href="#149">149: </a></span><span class="l"><a href="#150">150: </a></span><span class="l"><a href="#151">151: </a></span><span class="l"><a href="#152">152: </a></span><span class="l"><a href="#153">153: </a></span><span class="l"><a href="#154">154: </a></span><span class="l"><a href="#155">155: </a></span><span class="l"><a href="#156">156: </a></span><span class="l"><a href="#157">157: </a></span><span class="l"><a href="#158">158: </a></span><span class="l"><a href="#159">159: </a></span><span class="l"><a href="#160">160: </a></span><span class="l"><a href="#161">161: </a></span><span class="l"><a href="#162">162: </a></span><span class="l"><a href="#163">163: </a></span></span><span class="l"><a href="#164">164: </a></span></span><span class="l"><a href="#165">165: </a></span></span><span class="l"><a href="#166">166: </a></span></span><span class="l"><a href="#167">167: </a></span><span class="l"><a href="#168">168: </a></span><span class="l"><a href="#169">169: </a></span><span class="l"><a href="#170">170: </a></span><span class="l"><a href="#171">171: </a></span><span class="l"><a href="#172">172: </a></span><span class="l"><a href="#173">173: </a></span><span class="l"><a href="#174">174: </a></span><span class="l"><a href="#175">175: </a></span><span class="l"><a href="#176">176: </a></span><span class="l"><a href="#177">177: </a></span><span class="l"><a href="#178">178: </a></span></span><span class="l"><a href="#179">179: </a></span></span><span class="l"><a href="#180">180: </a></span></span><span class="l"><a href="#181">181: </a></span></span><span class="l"><a href="#182">182: </a></span><span class="l"><a href="#183">183: </a></span><span class="l"><a href="#184">184: </a></span><span class="l"><a href="#185">185: </a></span><span class="l"><a href="#186">186: </a></span><span class="l"><a href="#187">187: </a></span><span class="l"><a href="#188">188: </a></span><span class="l"><a href="#189">189: </a></span><span class="l"><a href="#190">190: </a></span><span class="l"><a href="#191">191: </a></span><span class="l"><a href="#192">192: </a></span><span class="l"><a href="#193">193: </a></span><span class="l"><a href="#194">194: </a></span><span class="l"><a href="#195">195: </a></span><span class="l"><a href="#196">196: </a></span><span class="l"><a href="#197">197: </a></span><span class="l"><a href="#198">198: </a></span><span class="l"><a href="#199">199: </a></span><span class="l"><a href="#200">200: </a></span><span class="l"><a href="#201">201: </a></span><span class="l"><a href="#202">202: </a></span><span class="l"><a href="#203">203: </a></span><span class="l"><a href="#204">204: </a></span><span class="l"><a href="#205">205: </a></span><span class="l"><a href="#206">206: </a></span><span class="l"><a href="#207">207: </a></span><span class="l"><a href="#208">208: </a></span><span class="l"><a href="#209">209: </a></span><span class="l"><a href="#210">210: </a></span><span class="l"><a href="#211">211: </a></span><span class="l"><a href="#212">212: </a></span><span class="l"><a href="#213">213: </a></span><span class="l"><a href="#214">214: </a></span><span class="l"><a href="#215">215: </a></span><span class="l"><a href="#216">216: </a></span><span class="l"><a href="#217">217: </a></span><span class="l"><a href="#218">218: </a></span></span><span class="l"><a href="#219">219: </a></span></span><span class="l"><a href="#220">220: </a></span></span><span class="l"><a href="#221">221: </a></span><span class="l"><a href="#222">222: </a></span><span class="l"><a href="#223">223: </a></span><span class="l"><a href="#224">224: </a></span><span class="l"><a href="#225">225: </a></span><span class="l"><a href="#226">226: </a></span><span class="l"><a href="#227">227: </a></span><span class="l"><a href="#228">228: </a></span><span class="l"><a href="#229">229: </a></span><span class="l"><a href="#230">230: </a></span><span class="l"><a href="#231">231: </a></span><span class="l"><a href="#232">232: </a></span><span class="l"><a href="#233">233: </a></span><span class="l"><a href="#234">234: </a></span><span class="l"><a href="#235">235: </a></span><span class="l"><a href="#236">236: </a></span><span class="l"><a href="#237">237: </a></span><span class="l"><a href="#238">238: </a></span><span class="l"><a href="#239">239: </a></span><span class="l"><a href="#240">240: </a></span><span class="l"><a href="#241">241: </a></span><span class="l"><a href="#242">242: </a></span><span class="l"><a href="#243">243: </a></span><span class="l"><a href="#244">244: </a></span><span class="l"><a href="#245">245: </a></span><span class="l"><a href="#246">246: </a></span><span class="l"><a href="#247">247: </a></span><span class="l"><a href="#248">248: </a></span><span class="l"><a href="#249">249: </a></span><span class="l"><a href="#250">250: </a></span><span class="l"><a href="#251">251: </a></span><span class="l"><a href="#252">252: </a></span><span class="l"><a href="#253">253: </a></span><span class="l"><a href="#254">254: </a></span><span class="l"><a href="#255">255: </a></span><span class="l"><a href="#256">256: </a></span><span class="l"><a href="#257">257: </a></span><span class="l"><a href="#258">258: </a></span><span class="l"><a href="#259">259: </a></span><span class="l"><a href="#260">260: </a></span><span class="l"><a href="#261">261: </a></span><span class="l"><a href="#262">262: </a></span><span class="l"><a href="#263">263: </a></span><span class="l"><a href="#264">264: </a></span><span class="l"><a href="#265">265: </a></span><span class="l"><a href="#266">266: </a></span><span class="l"><a href="#267">267: </a></span><span class="l"><a href="#268">268: </a></span><span class="l"><a href="#269">269: </a></span><span class="l"><a href="#270">270: </a></span><span class="l"><a href="#271">271: </a></span><span class="l"><a href="#272">272: </a></span><span class="l"><a href="#273">273: </a></span><span class="l"><a href="#274">274: </a></span><span class="l"><a href="#275">275: </a></span><span class="l"><a href="#276">276: </a></span><span class="l"><a href="#277">277: </a></span><span class="l"><a href="#278">278: </a></span><span class="l"><a href="#279">279: </a></span><span class="l"><a href="#280">280: </a></span><span class="l"><a href="#281">281: </a></span><span class="l"><a href="#282">282: </a></span><span class="l"><a href="#283">283: </a></span><span class="l"><a href="#284">284: </a></span><span class="l"><a href="#285">285: </a></span><span class="l"><a href="#286">286: </a></span><span class="l"><a href="#287">287: </a></span><span class="l"><a href="#288">288: </a></span></span><span class="l"><a href="#289">289: </a></span></span><span class="l"><a href="#290">290: </a></span><span class="l"><a href="#291">291: </a></span><span class="l"><a href="#292">292: </a></span><span class="l"><a href="#293">293: </a></span><span class="l"><a href="#294">294: </a></span><span class="l"><a href="#295">295: </a></span><span class="l"><a href="#296">296: </a></span><span class="l"><a href="#297">297: </a></span><span class="l"><a href="#298">298: </a></span><span class="l"><a href="#299">299: </a></span><span class="l"><a href="#300">300: </a></span><span class="l"><a href="#301">301: </a></span><span class="l"><a href="#302">302: </a></span><span class="l"><a href="#303">303: </a></span><span class="l"><a href="#304">304: </a></span><span class="l"><a href="#305">305: </a></span><span class="l"><a href="#306">306: </a></span><span class="l"><a href="#307">307: </a></span><span class="l"><a href="#308">308: </a></span><span class="l"><a href="#309">309: </a></span><span class="l"><a href="#310">310: </a></span><span class="l"><a href="#311">311: </a></span><span class="l"><a href="#312">312: </a></span><span class="l"><a href="#313">313: </a></span><span class="l"><a href="#314">314: </a></span><span class="l"><a href="#315">315: </a></span><span class="l"><a href="#316">316: </a></span><span class="l"><a href="#317">317: </a></span><span class="l"><a href="#318">318: </a></span></span><span class="l"><a href="#319">319: </a></span></span><span class="l"><a href="#320">320: </a></span></span><span class="l"><a href="#321">321: </a></span></span><span class="l"><a href="#322">322: </a></span><span class="l"><a href="#323">323: </a></span><span class="l"><a href="#324">324: </a></span><span class="l"><a href="#325">325: </a></span><span class="l"><a href="#326">326: </a></span><span class="l"><a href="#327">327: </a></span><span class="l"><a href="#328">328: </a></span><span class="l"><a href="#329">329: </a></span><span class="l"><a href="#330">330: </a></span><span class="l"><a href="#331">331: </a></span><span class="l"><a href="#332">332: </a></span><span class="l"><a href="#333">333: </a></span><span class="l"><a href="#334">334: </a></span><span class="l"><a href="#335">335: </a></span><span class="l"><a href="#336">336: </a></span><span class="l"><a href="#337">337: </a></span><span class="l"><a href="#338">338: </a></span><span class="l"><a href="#339">339: </a></span><span class="l"><a href="#340">340: </a></span><span class="l"><a href="#341">341: </a></span><span class="l"><a href="#342">342: </a></span><span class="l"><a href="#343">343: </a></span><span class="l"><a href="#344">344: </a></span></span><span class="l"><a href="#345">345: </a></span></span><span class="l"><a href="#346">346: </a></span></span><span class="l"><a href="#347">347: </a></span><span class="l"><a href="#348">348: </a></span><span class="l"><a href="#349">349: </a></span><span class="l"><a href="#350">350: </a></span><span class="l"><a href="#351">351: </a></span><span class="l"><a href="#352">352: </a></span><span class="l"><a href="#353">353: </a></span><span class="l"><a href="#354">354: </a></span><span class="l"><a href="#355">355: </a></span><span class="l"><a href="#356">356: </a></span><span class="l"><a href="#357">357: </a></span><span class="l"><a href="#358">358: </a></span></span><span class="l"><a href="#359">359: </a></span></span><span class="l"><a href="#360">360: </a></span></span><span class="l"><a href="#361">361: </a></span><span class="l"><a href="#362">362: </a></span><span class="l"><a href="#363">363: </a></span><span class="l"><a href="#364">364: </a></span><span class="l"><a href="#365">365: </a></span><span class="l"><a href="#366">366: </a></span><span class="l"><a href="#367">367: </a></span><span class="l"><a href="#368">368: </a></span><span class="l"><a href="#369">369: </a></span><span class="l"><a href="#370">370: </a></span><span class="l"><a href="#371">371: </a></span><span class="l"><a href="#372">372: </a></span><span class="l"><a href="#373">373: </a></span><span class="l"><a href="#374">374: </a></span></span><span class="l"><a href="#375">375: </a></span></span><span class="l"><a href="#376">376: </a></span></span><span class="l"><a href="#377">377: </a></span></span><span class="l"><a href="#378">378: </a></span><span class="l"><a href="#379">379: </a></span><span class="l"><a href="#380">380: </a></span><span class="l"><a href="#381">381: </a></span><span class="l"><a href="#382">382: </a></span><span class="l"><a href="#383">383: </a></span><span class="l"><a href="#384">384: </a></span></span><span class="l"><a href="#385">385: </a></span></span><span class="l"><a href="#386">386: </a></span></span><span class="l"><a href="#387">387: </a></span><span class="l"><a href="#388">388: </a></span><span class="l"><a href="#389">389: </a></span><span class="l"><a href="#390">390: </a></span><span class="l"><a href="#391">391: </a></span><span class="l"><a href="#392">392: </a></span><span class="l"><a href="#393">393: </a></span><span class="l"><a href="#394">394: </a></span><span class="l"><a href="#395">395: </a></span><span class="l"><a href="#396">396: </a></span><span class="l"><a href="#397">397: </a></span><span class="l"><a href="#398">398: </a></span><span class="l"><a href="#399">399: </a></span><span class="l"><a href="#400">400: </a></span></span><span class="l"><a href="#401">401: </a></span></span><span class="l"><a href="#402">402: </a></span></span><span class="l"><a href="#403">403: </a></span></span><span class="l"><a href="#404">404: </a></span><span class="l"><a href="#405">405: </a></span><span class="l"><a href="#406">406: </a></span><span class="l"><a href="#407">407: </a></span><span class="l"><a href="#408">408: </a></span><span class="l"><a href="#409">409: </a></span><span class="l"><a href="#410">410: </a></span><span class="l"><a href="#411">411: </a></span><span class="l"><a href="#412">412: </a></span><span class="l"><a href="#413">413: </a></span><span class="l"><a href="#414">414: </a></span><span class="l"><a href="#415">415: </a></span><span class="l"><a href="#416">416: </a></span><span class="l"><a href="#417">417: </a></span><span class="l"><a href="#418">418: </a></span><span class="l"><a href="#419">419: </a></span><span class="l"><a href="#420">420: </a></span><span class="l"><a href="#421">421: </a></span><span class="l"><a href="#422">422: </a></span><span class="l"><a href="#423">423: </a></span><span class="l"><a href="#424">424: </a></span><span class="l"><a href="#425">425: </a></span><span class="l"><a href="#426">426: </a></span><span class="l"><a href="#427">427: </a></span><span class="l"><a href="#428">428: </a></span><span class="l"><a href="#429">429: </a></span><span class="l"><a href="#430">430: </a></span><span class="l"><a href="#431">431: </a></span><span class="l"><a href="#432">432: </a></span><span class="l"><a href="#433">433: </a></span><span class="l"><a href="#434">434: </a></span><span class="l"><a href="#435">435: </a></span><span class="l"><a href="#436">436: </a></span><span class="l"><a href="#437">437: </a></span><span class="l"><a href="#438">438: </a></span><span class="l"><a href="#439">439: </a></span><span class="l"><a href="#440">440: </a></span><span class="l"><a href="#441">441: </a></span><span class="l"><a href="#442">442: </a></span><span class="l"><a href="#443">443: </a></span><span class="l"><a href="#444">444: </a></span><span class="l"><a href="#445">445: </a></span><span class="l"><a href="#446">446: </a></span><span class="l"><a href="#447">447: </a></span><span class="l"><a href="#448">448: </a></span><span class="l"><a href="#449">449: </a></span><span class="l"><a href="#450">450: </a></span><span class="l"><a href="#451">451: </a></span><span class="l"><a href="#452">452: </a></span><span class="l"><a href="#453">453: </a></span><span class="l"><a href="#454">454: </a></span><span class="l"><a href="#455">455: </a></span></code></pre>
            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l">
</span><span id="3" class="l"><span class="php-comment">/**
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Builder
</span></span><span id="5" class="l"><span class="php-comment"> * @subpackage  Form
</span></span><span id="6" class="l"><span class="php-comment"> * @category    Framework PHP
</span></span><span id="7" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="8" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="9" class="l"><span class="php-comment"> * @author      Regis VIARRE &lt;crowkait@phpboost.com&gt;
</span></span><span id="10" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2018 11 28
</span></span><span id="11" class="l"><span class="php-comment"> * @since       PHPBoost 3.0 - 2009 04 28
</span></span><span id="12" class="l"><span class="php-comment">*/</span>
</span><span id="13" class="l">
</span><span id="14" class="l"><span class="php-comment">/**
</span></span><span id="15" class="l"><span class="php-comment"> * This class enables you to handle all the operations regarding forms. Indeed, you build a
</span></span><span id="16" class="l"><span class="php-comment"> * form using object components (fieldsets, fields, buttons) and it's able to display, to retrieve
</span></span><span id="17" class="l"><span class="php-comment"> * the posted values and also validate the entered data from constraints you define. The validation
</span></span><span id="18" class="l"><span class="php-comment"> * is done in PHP when the form is received, but also in live thanks to Javascript (each field is
</span></span><span id="19" class="l"><span class="php-comment"> * validated when it looses the focus and the whole form is validated when the user submits it).
</span></span><span id="20" class="l"><span class="php-comment"> */</span>
</span><span id="21" class="l">
</span><span id="22" class="l"><span class="php-keyword1">class</span> HTMLForm <span class="php-keyword1">implements</span> HTMLElement
</span><span id="23" class="l">{
</span><span id="24" class="l">    <span class="php-keyword1">const</span> HTTP_METHOD_POST = <span class="php-quote">'post'</span>;
</span><span id="25" class="l">    <span class="php-keyword1">const</span> HTTP_METHOD_GET = <span class="php-quote">'get'</span>;
</span><span id="26" class="l">
</span><span id="27" class="l">    <span class="php-keyword1">const</span> SMALL_CSS_CLASS = <span class="php-quote">'fieldset-mini'</span>;
</span><span id="28" class="l">    <span class="php-keyword1">const</span> NORMAL_CSS_CLASS = <span class="php-quote">'fieldset-content'</span>;
</span><span id="29" class="l">
</span><span id="30" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">static</span> <span class="php-var">$instance_id</span> = <span class="php-num">0</span>;
</span><span id="31" class="l">
</span><span id="32" class="l">    <span class="php-comment">/**
</span></span><span id="33" class="l"><span class="php-comment">     * @var FormConstraint[]
</span></span><span id="34" class="l"><span class="php-comment">     */</span>
</span><span id="35" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$constraints</span> = <span class="php-keyword1">array</span>();
</span><span id="36" class="l">    <span class="php-comment">/**
</span></span><span id="37" class="l"><span class="php-comment">     * @var FormFieldset[]
</span></span><span id="38" class="l"><span class="php-comment">     */</span>
</span><span id="39" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$fieldsets</span> = <span class="php-keyword1">array</span>();
</span><span id="40" class="l">    <span class="php-comment">/**
</span></span><span id="41" class="l"><span class="php-comment">     * @var FormButton[]
</span></span><span id="42" class="l"><span class="php-comment">     */</span>
</span><span id="43" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$buttons</span> = <span class="php-keyword1">array</span>();
</span><span id="44" class="l">    <span class="php-comment">/**
</span></span><span id="45" class="l"><span class="php-comment">     * @var string
</span></span><span id="46" class="l"><span class="php-comment">     */</span>
</span><span id="47" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$html_id</span> = <span class="php-quote">''</span>;
</span><span id="48" class="l">    <span class="php-comment">/**
</span></span><span id="49" class="l"><span class="php-comment">     * @var string
</span></span><span id="50" class="l"><span class="php-comment">     */</span>
</span><span id="51" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$target</span> = <span class="php-quote">''</span>;
</span><span id="52" class="l">    <span class="php-comment">/**
</span></span><span id="53" class="l"><span class="php-comment">     * @var string
</span></span><span id="54" class="l"><span class="php-comment">     */</span>
</span><span id="55" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$method</span> = self::HTTP_METHOD_POST;
</span><span id="56" class="l">    <span class="php-comment">/**
</span></span><span id="57" class="l"><span class="php-comment">     * @var string
</span></span><span id="58" class="l"><span class="php-comment">     */</span>
</span><span id="59" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$css_class</span> = self::NORMAL_CSS_CLASS;
</span><span id="60" class="l">    <span class="php-comment">/**
</span></span><span id="61" class="l"><span class="php-comment">     * @var boolean
</span></span><span id="62" class="l"><span class="php-comment">     */</span>
</span><span id="63" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">static</span> <span class="php-var">$js_already_included</span> = <span class="php-keyword1">false</span>;
</span><span id="64" class="l">    <span class="php-comment">/**
</span></span><span id="65" class="l"><span class="php-comment">     * @var string[]
</span></span><span id="66" class="l"><span class="php-comment">     */</span>
</span><span id="67" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$validation_error_messages</span> = <span class="php-keyword1">array</span>();
</span><span id="68" class="l">    <span class="php-comment">/**
</span></span><span id="69" class="l"><span class="php-comment">     * @var Template
</span></span><span id="70" class="l"><span class="php-comment">     */</span>
</span><span id="71" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$template</span> = <span class="php-keyword1">null</span>;
</span><span id="72" class="l">
</span><span id="73" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$enable_captcha_protection</span>;
</span><span id="74" class="l">
</span><span id="75" class="l">    <span class="php-comment">/**
</span></span><span id="76" class="l"><span class="php-comment">     * @desc Constructs a HTMLForm object
</span></span><span id="77" class="l"><span class="php-comment">     * @param string $html_id The HTML name of the form
</span></span><span id="78" class="l"><span class="php-comment">     * @param string $target The url where the form sends data
</span></span><span id="79" class="l"><span class="php-comment">     * @param bool $enable_captcha_protection True if the CAPTCHA is enabled
</span></span><span id="80" class="l"><span class="php-comment">     */</span>
</span><span id="81" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> __construct(<span class="php-var">$html_id</span>, <span class="php-var">$target</span> = <span class="php-quote">''</span>, <span class="php-var">$enable_captcha_protection</span> = <span class="php-keyword1">true</span>)
</span><span id="82" class="l">    {
</span><span id="83" class="l">        <span class="php-var">$this</span>-&gt;enable_captcha_protection = <span class="php-var">$enable_captcha_protection</span>;
</span><span id="84" class="l">        <span class="php-var">$this</span>-&gt;set_html_id(<span class="php-var">$html_id</span>);
</span><span id="85" class="l">        <span class="php-var">$this</span>-&gt;set_target(<span class="php-var">$target</span>);
</span><span id="86" class="l">
</span><span id="87" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$this</span>-&gt;enable_captcha_protection)
</span><span id="88" class="l">            <span class="php-var">$this</span>-&gt;add_catpcha_protection(); <span class="php-comment">//Add captcha protection for visitor</span>
</span><span id="89" class="l">
</span><span id="90" class="l">        self::<span class="php-var">$instance_id</span>++;
</span><span id="91" class="l">    }
</span><span id="92" class="l">
</span><span id="93" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> add_catpcha_protection()
</span><span id="94" class="l">    {
</span><span id="95" class="l">        <span class="php-var">$captcha_protection_fieldset</span> = <span class="php-keyword1">new</span> FormFieldsetHTML(<span class="php-quote">'captcha_fieldset'</span>);
</span><span id="96" class="l">        <span class="php-var">$captcha_protection_fieldset</span>-&gt;add_field(<span class="php-keyword1">new</span> FormFieldCaptcha());
</span><span id="97" class="l">        <span class="php-var">$this</span>-&gt;add_fieldset(<span class="php-var">$captcha_protection_fieldset</span>);
</span><span id="98" class="l">    }
</span><span id="99" class="l">
</span><span id="100" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> move_captcha_protection_in_last_position()
</span><span id="101" class="l">    {
</span><span id="102" class="l">        <span class="php-keyword1">try</span> {
</span><span id="103" class="l">            <span class="php-var">$this</span>-&gt;fieldsets[] = <span class="php-var">$this</span>-&gt;fieldsets[<span class="php-num">0</span>];
</span><span id="104" class="l">            <span class="php-keyword1">unset</span>(<span class="php-var">$this</span>-&gt;fieldsets[<span class="php-num">0</span>]);
</span><span id="105" class="l">        } <span class="php-keyword1">catch</span> (FormBuilderException <span class="php-var">$e</span>) {
</span><span id="106" class="l">        }
</span><span id="107" class="l">    }
</span><span id="108" class="l">
</span><span id="109" class="l">    <span class="php-comment">/**
</span></span><span id="110" class="l"><span class="php-comment">     * @desc Adds fieldset in the form
</span></span><span id="111" class="l"><span class="php-comment">     * @param FormFieldset The fieldset to add
</span></span><span id="112" class="l"><span class="php-comment">     */</span>
</span><span id="113" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> add_fieldset(FormFieldset <span class="php-var">$fieldset</span>)
</span><span id="114" class="l">    {
</span><span id="115" class="l">        <span class="php-var">$fieldset</span>-&gt;set_form_id(<span class="php-var">$this</span>-&gt;html_id);
</span><span id="116" class="l">        <span class="php-var">$this</span>-&gt;fieldsets[] = <span class="php-var">$fieldset</span>;
</span><span id="117" class="l">    }
</span><span id="118" class="l">
</span><span id="119" class="l">    <span class="php-comment">/**
</span></span><span id="120" class="l"><span class="php-comment">     * @desc Adds a constraint on the form. This kind of constraints are rules regarding several fields.
</span></span><span id="121" class="l"><span class="php-comment">     * @param FormConstraint $constraint The constraint to add
</span></span><span id="122" class="l"><span class="php-comment">     */</span>
</span><span id="123" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> add_constraint(FormConstraint <span class="php-var">$constraint</span>)
</span><span id="124" class="l">    {
</span><span id="125" class="l">        <span class="php-var">$this</span>-&gt;constraints[] = <span class="php-var">$constraint</span>;
</span><span id="126" class="l">    }
</span><span id="127" class="l">
</span><span id="128" class="l">    <span class="php-comment">/**
</span></span><span id="129" class="l"><span class="php-comment">     * @desc Adds a button to the form
</span></span><span id="130" class="l"><span class="php-comment">     * @param FormButton $button The button to add
</span></span><span id="131" class="l"><span class="php-comment">     */</span>
</span><span id="132" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> add_button(FormButton <span class="php-var">$button</span>)
</span><span id="133" class="l">    {
</span><span id="134" class="l">        <span class="php-var">$button</span>-&gt;set_form_id(<span class="php-var">$this</span>-&gt;html_id);
</span><span id="135" class="l">        <span class="php-var">$this</span>-&gt;buttons[] = <span class="php-var">$button</span>;
</span><span id="136" class="l">    }
</span><span id="137" class="l">
</span><span id="138" class="l">    <span class="php-comment">/**
</span></span><span id="139" class="l"><span class="php-comment">     * @desc Returns the value of a form field.
</span></span><span id="140" class="l"><span class="php-comment">     * @param string $field_id The HTML id of the field and string $default_value The default value
</span></span><span id="141" class="l"><span class="php-comment">     * @return mixed The value of the field (the type depends of the field)
</span></span><span id="142" class="l"><span class="php-comment">     * @throws FormBuilderException
</span></span><span id="143" class="l"><span class="php-comment">     */</span>
</span><span id="144" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> get_value(<span class="php-var">$field_id</span>, <span class="php-var">$default_value</span> = <span class="php-keyword1">null</span>)
</span><span id="145" class="l">    {
</span><span id="146" class="l">        <span class="php-keyword1">try</span> {
</span><span id="147" class="l">            <span class="php-var">$field</span> = <span class="php-var">$this</span>-&gt;get_field_by_id(<span class="php-var">$field_id</span>);
</span><span id="148" class="l">
</span><span id="149" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$field</span>-&gt;is_disabled() &amp;&amp; <span class="php-var">$default_value</span> !== <span class="php-keyword1">null</span>)
</span><span id="150" class="l">            {
</span><span id="151" class="l">                <span class="php-var">$field</span>-&gt;set_value(<span class="php-var">$default_value</span>);
</span><span id="152" class="l">            }
</span><span id="153" class="l">            <span class="php-keyword1">else</span> <span class="php-keyword1">if</span> (<span class="php-var">$field</span>-&gt;is_disabled() &amp;&amp; <span class="php-var">$default_value</span> == <span class="php-keyword1">null</span>)
</span><span id="154" class="l">            {
</span><span id="155" class="l">                <span class="php-keyword1">throw</span> <span class="php-keyword1">new</span> FormBuilderDisabledFieldException(<span class="php-var">$field</span>-&gt;get_id(), <span class="php-var">$field</span>-&gt;get_value());
</span><span id="156" class="l">            }
</span><span id="157" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$field</span>-&gt;get_value();
</span><span id="158" class="l">        } <span class="php-keyword1">catch</span> (FormBuilderException <span class="php-var">$e</span>) {
</span><span id="159" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$default_value</span>;
</span><span id="160" class="l">        }
</span><span id="161" class="l">    }
</span><span id="162" class="l">
</span><span id="163" class="l">    <span class="php-comment">/**
</span></span><span id="164" class="l"><span class="php-comment">     * @desc Returns true if field is disabled
</span></span><span id="165" class="l"><span class="php-comment">     * @param string $field_id The HTML id of the field and string $default_value The default value
</span></span><span id="166" class="l"><span class="php-comment">     * @return Boolean true if field is disabled
</span></span><span id="167" class="l"><span class="php-comment">     */</span>
</span><span id="168" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> field_is_disabled(<span class="php-var">$field_id</span>)
</span><span id="169" class="l">    {
</span><span id="170" class="l">        <span class="php-var">$field</span> = <span class="php-var">$this</span>-&gt;get_field_by_id(<span class="php-var">$field_id</span>);
</span><span id="171" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$field</span>-&gt;is_disabled())
</span><span id="172" class="l">        {
</span><span id="173" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword1">true</span>;
</span><span id="174" class="l">        }
</span><span id="175" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="176" class="l">    }
</span><span id="177" class="l">
</span><span id="178" class="l">    <span class="php-comment">/**
</span></span><span id="179" class="l"><span class="php-comment">     * @desc Returns true if the $field_id is in the form.
</span></span><span id="180" class="l"><span class="php-comment">     * @param string $field_id The HTML id of the field
</span></span><span id="181" class="l"><span class="php-comment">     * @return mixed true if the $field_id is in the form, false otherwise
</span></span><span id="182" class="l"><span class="php-comment">     */</span>
</span><span id="183" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> has_field(<span class="php-var">$field_id</span>) {
</span><span id="184" class="l">        <span class="php-keyword1">try</span> {
</span><span id="185" class="l">            <span class="php-var">$this</span>-&gt;field_is_disabled(<span class="php-var">$field_id</span>);
</span><span id="186" class="l">        } <span class="php-keyword1">catch</span> (FormBuilderException <span class="php-var">$ex</span>) {
</span><span id="187" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="188" class="l">        }
</span><span id="189" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">true</span>;
</span><span id="190" class="l">    }
</span><span id="191" class="l">
</span><span id="192" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> get_field_by_id(<span class="php-var">$field_id</span>)
</span><span id="193" class="l">    {
</span><span id="194" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="195" class="l">        {
</span><span id="196" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$fieldset</span>-&gt;has_field(<span class="php-var">$field_id</span>))
</span><span id="197" class="l">            {
</span><span id="198" class="l">                <span class="php-keyword1">return</span> <span class="php-var">$fieldset</span>-&gt;get_field(<span class="php-var">$field_id</span>);
</span><span id="199" class="l">            }
</span><span id="200" class="l">        }
</span><span id="201" class="l">        <span class="php-keyword1">throw</span> <span class="php-keyword1">new</span> FormBuilderException(<span class="php-quote">'The field &quot;'</span> . <span class="php-var">$field_id</span> .
</span><span id="202" class="l">            <span class="php-quote">'&quot; doesn\'t exists in the &quot;'</span> . <span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'&quot; form'</span>);
</span><span id="203" class="l">    }
</span><span id="204" class="l">
</span><span id="205" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> get_fieldset_by_id(<span class="php-var">$fieldset_id</span>)
</span><span id="206" class="l">    {
</span><span id="207" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="208" class="l">        {
</span><span id="209" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$fieldset</span>-&gt;get_id() == <span class="php-var">$fieldset_id</span>)
</span><span id="210" class="l">            {
</span><span id="211" class="l">                <span class="php-keyword1">return</span> <span class="php-var">$fieldset</span>;
</span><span id="212" class="l">            }
</span><span id="213" class="l">        }
</span><span id="214" class="l">        <span class="php-keyword1">throw</span> <span class="php-keyword1">new</span> FormBuilderException(<span class="php-quote">'The fieldset &quot;'</span> . <span class="php-var">$fieldset_id</span> .
</span><span id="215" class="l">            <span class="php-quote">'&quot; doesn\'t exists in the &quot;'</span> . <span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'&quot; form'</span>);
</span><span id="216" class="l">    }
</span><span id="217" class="l">
</span><span id="218" class="l">    <span class="php-comment">/**
</span></span><span id="219" class="l"><span class="php-comment">     * @desc Displays the form
</span></span><span id="220" class="l"><span class="php-comment">     * @return Template The template containing all the form elements which is ready to be displayed.
</span></span><span id="221" class="l"><span class="php-comment">     */</span>
</span><span id="222" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> display()
</span><span id="223" class="l">    {
</span><span id="224" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$this</span>-&gt;enable_captcha_protection)
</span><span id="225" class="l">            <span class="php-var">$this</span>-&gt;move_captcha_protection_in_last_position();
</span><span id="226" class="l">
</span><span id="227" class="l">        <span class="php-var">$template</span> = <span class="php-var">$this</span>-&gt;get_template_to_use();
</span><span id="228" class="l">
</span><span id="229" class="l">        <span class="php-var">$template</span>-&gt;put_all(<span class="php-keyword1">array</span>(
</span><span id="230" class="l">            <span class="php-quote">'C_JS_NOT_ALREADY_INCLUDED'</span> =&gt; !self::<span class="php-var">$js_already_included</span>,
</span><span id="231" class="l">            <span class="php-quote">'C_HAS_REQUIRED_FIELDS'</span> =&gt; (self::<span class="php-var">$instance_id</span> == <span class="php-num">1</span>) ? <span class="php-var">$this</span>-&gt;has_required_fields() : <span class="php-keyword1">false</span>,
</span><span id="232" class="l">            <span class="php-quote">'C_TARGET'</span> =&gt; !<span class="php-keyword1">empty</span>(<span class="php-var">$this</span>-&gt;target),
</span><span id="233" class="l">            <span class="php-quote">'FORMCLASS'</span> =&gt; <span class="php-var">$this</span>-&gt;css_class,
</span><span id="234" class="l">            <span class="php-quote">'TARGET'</span> =&gt; <span class="php-var">$this</span>-&gt;target,
</span><span id="235" class="l">            <span class="php-quote">'HTML_ID'</span> =&gt; <span class="php-var">$this</span>-&gt;html_id,
</span><span id="236" class="l">            <span class="php-quote">'L_REQUIRED_FIELDS'</span> =&gt; LangLoader::get_message(<span class="php-quote">'form.explain_required_fields'</span>, <span class="php-quote">'status-messages-common'</span>),
</span><span id="237" class="l">            <span class="php-quote">'C_VALIDATION_ERROR'</span> =&gt; <span class="php-keyword2">count</span>(<span class="php-var">$this</span>-&gt;validation_error_messages),
</span><span id="238" class="l">            <span class="php-quote">'TITLE_VALIDATION_ERROR_MESSAGE'</span> =&gt; LangLoader::get_message(<span class="php-quote">'form.validation_error'</span>, <span class="php-quote">'status-messages-common'</span>),
</span><span id="239" class="l">            <span class="php-quote">'METHOD'</span> =&gt; <span class="php-var">$this</span>-&gt;method
</span><span id="240" class="l">        ));
</span><span id="241" class="l">
</span><span id="242" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;validation_error_messages <span class="php-keyword1">as</span> <span class="php-var">$error_message</span>)
</span><span id="243" class="l">        {
</span><span id="244" class="l">            <span class="php-keyword1">if</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$error_message</span>))
</span><span id="245" class="l">            {
</span><span id="246" class="l">                <span class="php-var">$template</span>-&gt;assign_block_vars(<span class="php-quote">'validation_error_messages'</span>, <span class="php-keyword1">array</span>(
</span><span id="247" class="l">                    <span class="php-quote">'ERROR_MESSAGE'</span> =&gt; <span class="php-var">$error_message</span>
</span><span id="248" class="l">                ));
</span><span id="249" class="l">            }
</span><span id="250" class="l">        }
</span><span id="251" class="l">
</span><span id="252" class="l">        self::<span class="php-var">$js_already_included</span> = <span class="php-keyword1">true</span>;
</span><span id="253" class="l">
</span><span id="254" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="255" class="l">        {
</span><span id="256" class="l">            <span class="php-var">$template</span>-&gt;assign_block_vars(<span class="php-quote">'fieldsets'</span>, <span class="php-keyword1">array</span>(), <span class="php-keyword1">array</span>(
</span><span id="257" class="l">                <span class="php-quote">'FIELDSET'</span> =&gt; <span class="php-var">$fieldset</span>-&gt;display()
</span><span id="258" class="l">            ));
</span><span id="259" class="l">
</span><span id="260" class="l">            <span class="php-comment">//Onsubmit constraints</span>
</span><span id="261" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$fieldset</span>-&gt;get_onsubmit_validations() <span class="php-keyword1">as</span> <span class="php-var">$constraints</span>)
</span><span id="262" class="l">            {
</span><span id="263" class="l">                <span class="php-keyword1">foreach</span> (<span class="php-var">$constraints</span> <span class="php-keyword1">as</span> <span class="php-var">$constraint</span>)
</span><span id="264" class="l">                {
</span><span id="265" class="l">                    <span class="php-var">$template</span>-&gt;assign_block_vars(<span class="php-quote">'check_constraints'</span>, <span class="php-keyword1">array</span>(
</span><span id="266" class="l">                        <span class="php-quote">'ONSUBMIT_CONSTRAINTS'</span> =&gt; <span class="php-var">$constraint</span>
</span><span id="267" class="l">                    ));
</span><span id="268" class="l">                }
</span><span id="269" class="l">            }
</span><span id="270" class="l">        }
</span><span id="271" class="l">
</span><span id="272" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">count</span>(<span class="php-var">$this</span>-&gt;buttons) &gt; <span class="php-num">0</span>)
</span><span id="273" class="l">        {
</span><span id="274" class="l">            <span class="php-var">$buttons_fieldset</span> = <span class="php-keyword1">new</span> FormFieldsetSubmit(<span class="php-quote">'fbuttons'</span>);
</span><span id="275" class="l">            <span class="php-var">$buttons_fieldset</span>-&gt;set_form_id(<span class="php-var">$this</span>-&gt;html_id);
</span><span id="276" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;buttons <span class="php-keyword1">as</span> <span class="php-var">$button</span>)
</span><span id="277" class="l">            {
</span><span id="278" class="l">                <span class="php-var">$buttons_fieldset</span>-&gt;add_element(<span class="php-var">$button</span>);
</span><span id="279" class="l">            }
</span><span id="280" class="l">            <span class="php-var">$template</span>-&gt;assign_block_vars(<span class="php-quote">'fieldsets'</span>, <span class="php-keyword1">array</span>(), <span class="php-keyword1">array</span>(
</span><span id="281" class="l">                <span class="php-quote">'FIELDSET'</span> =&gt; <span class="php-var">$buttons_fieldset</span>-&gt;display()
</span><span id="282" class="l">            ));
</span><span id="283" class="l">        }
</span><span id="284" class="l">
</span><span id="285" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$template</span>;
</span><span id="286" class="l">    }
</span><span id="287" class="l">
</span><span id="288" class="l">    <span class="php-comment">/**
</span></span><span id="289" class="l"><span class="php-comment">     * @return Template
</span></span><span id="290" class="l"><span class="php-comment">     */</span>
</span><span id="291" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> get_template_to_use()
</span><span id="292" class="l">    {
</span><span id="293" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$this</span>-&gt;template !== <span class="php-keyword1">null</span>)
</span><span id="294" class="l">        {
</span><span id="295" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$this</span>-&gt;template;
</span><span id="296" class="l">        }
</span><span id="297" class="l">        <span class="php-keyword1">else</span>
</span><span id="298" class="l">        {
</span><span id="299" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword1">new</span> FileTemplate(<span class="php-quote">'framework/builder/form/Form.tpl'</span>);
</span><span id="300" class="l">        }
</span><span id="301" class="l">    }
</span><span id="302" class="l">
</span><span id="303" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> has_required_fields()
</span><span id="304" class="l">    {
</span><span id="305" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="306" class="l">        {
</span><span id="307" class="l">            <span class="php-keyword1">foreach</span>(<span class="php-var">$fieldset</span>-&gt;get_fields() <span class="php-keyword1">as</span> <span class="php-var">$field</span>)
</span><span id="308" class="l">            {
</span><span id="309" class="l">                <span class="php-keyword1">if</span> (<span class="php-var">$field</span>-&gt;is_required())
</span><span id="310" class="l">                {
</span><span id="311" class="l">                    <span class="php-keyword1">return</span> <span class="php-keyword1">true</span>;
</span><span id="312" class="l">                }
</span><span id="313" class="l">            }
</span><span id="314" class="l">        }
</span><span id="315" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="316" class="l">    }
</span><span id="317" class="l">
</span><span id="318" class="l">    <span class="php-comment">/**
</span></span><span id="319" class="l"><span class="php-comment">     * @desc Validates the form from all its constraints. If the constraints are satisfied, the
</span></span><span id="320" class="l"><span class="php-comment">     * validation errors will be displayed at the top of the form.
</span></span><span id="321" class="l"><span class="php-comment">     * @return boolean true if the form is valid, false otherwise
</span></span><span id="322" class="l"><span class="php-comment">     */</span>
</span><span id="323" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> validate()
</span><span id="324" class="l">    {
</span><span id="325" class="l">        <span class="php-var">$this</span>-&gt;handle_disabled_fields();
</span><span id="326" class="l">
</span><span id="327" class="l">        <span class="php-var">$validation_result</span> = <span class="php-keyword1">true</span>;
</span><span id="328" class="l">
</span><span id="329" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="330" class="l">        {
</span><span id="331" class="l">            <span class="php-keyword1">if</span> (!<span class="php-var">$fieldset</span>-&gt;validate())
</span><span id="332" class="l">            {
</span><span id="333" class="l">                <span class="php-var">$validation_error_message</span> = <span class="php-var">$fieldset</span>-&gt;get_validation_error_messages();
</span><span id="334" class="l">                <span class="php-keyword1">if</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$validation_error_message</span>))
</span><span id="335" class="l">                {
</span><span id="336" class="l">                    <span class="php-var">$this</span>-&gt;validation_error_messages = <span class="php-keyword2">array_merge</span>(<span class="php-var">$this</span>-&gt;validation_error_messages, (<span class="php-keyword1">array</span>)<span class="php-var">$validation_error_message</span>);
</span><span id="337" class="l">                }
</span><span id="338" class="l">                <span class="php-var">$validation_result</span> = <span class="php-keyword1">false</span>;
</span><span id="339" class="l">            }
</span><span id="340" class="l">        }
</span><span id="341" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$validation_result</span>;
</span><span id="342" class="l">    }
</span><span id="343" class="l">
</span><span id="344" class="l">    <span class="php-comment">/**
</span></span><span id="345" class="l"><span class="php-comment">     * @desc Sets the form's HTML id
</span></span><span id="346" class="l"><span class="php-comment">     * @param string $html_id the HTML id
</span></span><span id="347" class="l"><span class="php-comment">     */</span>
</span><span id="348" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_html_id(<span class="php-var">$html_id</span>)
</span><span id="349" class="l">    {
</span><span id="350" class="l">        <span class="php-var">$this</span>-&gt;html_id = <span class="php-var">$html_id</span>;
</span><span id="351" class="l">    }
</span><span id="352" class="l">
</span><span id="353" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> get_html_id()
</span><span id="354" class="l">    {
</span><span id="355" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$this</span>-&gt;html_id;
</span><span id="356" class="l">    }
</span><span id="357" class="l">
</span><span id="358" class="l">    <span class="php-comment">/**
</span></span><span id="359" class="l"><span class="php-comment">     * @desc Sets the form's target
</span></span><span id="360" class="l"><span class="php-comment">     * @param string $target The URL at which the form will be submited
</span></span><span id="361" class="l"><span class="php-comment">     */</span>
</span><span id="362" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_target(<span class="php-var">$target</span>)
</span><span id="363" class="l">    {
</span><span id="364" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$target</span> <span class="php-keyword1">instanceof</span> Url)
</span><span id="365" class="l">        {
</span><span id="366" class="l">            <span class="php-var">$this</span>-&gt;target = <span class="php-var">$target</span>-&gt;rel();
</span><span id="367" class="l">        }
</span><span id="368" class="l">        <span class="php-keyword1">else</span>
</span><span id="369" class="l">        {
</span><span id="370" class="l">            <span class="php-var">$this</span>-&gt;target = <span class="php-var">$target</span>;
</span><span id="371" class="l">        }
</span><span id="372" class="l">    }
</span><span id="373" class="l">
</span><span id="374" class="l">    <span class="php-comment">/**
</span></span><span id="375" class="l"><span class="php-comment">     * @desc Sets the form's CSS class
</span></span><span id="376" class="l"><span class="php-comment">     * @param string $css_class The CSS class (see the HTMLForm::SMALL_CSS_CLASS and
</span></span><span id="377" class="l"><span class="php-comment">     * HTMLForm::NORMAL_CSS_CLASS constants)
</span></span><span id="378" class="l"><span class="php-comment">     */</span>
</span><span id="379" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_css_class(<span class="php-var">$css_class</span>)
</span><span id="380" class="l">    {
</span><span id="381" class="l">        <span class="php-var">$this</span>-&gt;css_class = <span class="php-var">$css_class</span>;
</span><span id="382" class="l">    }
</span><span id="383" class="l">
</span><span id="384" class="l">    <span class="php-comment">/**
</span></span><span id="385" class="l"><span class="php-comment">     * @desc Sets the HTTP method with which the form will be submited
</span></span><span id="386" class="l"><span class="php-comment">     * @param string $method The method name (HTMLForm::HTTP_METHOD_POST or HTMLForm::HTTP_METHOD_POST).
</span></span><span id="387" class="l"><span class="php-comment">     */</span>
</span><span id="388" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_method(<span class="php-var">$method</span>)
</span><span id="389" class="l">    {
</span><span id="390" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$method</span> == self::HTTP_METHOD_POST)
</span><span id="391" class="l">        {
</span><span id="392" class="l">            <span class="php-var">$this</span>-&gt;method = self::HTTP_METHOD_POST;
</span><span id="393" class="l">        }
</span><span id="394" class="l">        <span class="php-keyword1">else</span>
</span><span id="395" class="l">        {
</span><span id="396" class="l">            <span class="php-var">$this</span>-&gt;method = self::HTTP_METHOD_GET;
</span><span id="397" class="l">        }
</span><span id="398" class="l">    }
</span><span id="399" class="l">
</span><span id="400" class="l">    <span class="php-comment">/**
</span></span><span id="401" class="l"><span class="php-comment">     * @desc Sets the template to use to display the form. If this method is not called,
</span></span><span id="402" class="l"><span class="php-comment">     * a default template will be used (&lt;code&gt;/template/default/framework/builder/form/Form.tpl&lt;/code&gt;).
</span></span><span id="403" class="l"><span class="php-comment">     * @param Template $template The template to use
</span></span><span id="404" class="l"><span class="php-comment">     */</span>
</span><span id="405" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_template(Template <span class="php-var">$template</span>)
</span><span id="406" class="l">    {
</span><span id="407" class="l">        <span class="php-var">$this</span>-&gt;template = <span class="php-var">$template</span>;
</span><span id="408" class="l">    }
</span><span id="409" class="l">
</span><span id="410" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> handle_disabled_fields()
</span><span id="411" class="l">    {
</span><span id="412" class="l">        <span class="php-var">$this</span>-&gt;enable_all_fields();
</span><span id="413" class="l">        <span class="php-var">$request</span> = AppContext::get_request();
</span><span id="414" class="l">
</span><span id="415" class="l">        <span class="php-var">$disabled_fieldsets_str</span> = <span class="php-var">$request</span>-&gt;get_string(<span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'_disabled_fieldsets'</span>, <span class="php-quote">''</span>);
</span><span id="416" class="l">        <span class="php-var">$disabled_fieldsets_str</span> = <span class="php-keyword2">trim</span>(<span class="php-var">$disabled_fieldsets_str</span>, <span class="php-quote">'|'</span>);
</span><span id="417" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$disabled_fieldsets_str</span> != <span class="php-quote">''</span>)
</span><span id="418" class="l">        {
</span><span id="419" class="l">            <span class="php-var">$disabled_fieldsets</span> = <span class="php-keyword2">explode</span>(<span class="php-quote">'|'</span>, <span class="php-var">$disabled_fieldsets_str</span>);
</span><span id="420" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$disabled_fieldsets</span> <span class="php-keyword1">as</span> <span class="php-var">$fieldset_id</span>)
</span><span id="421" class="l">            {
</span><span id="422" class="l">                <span class="php-keyword1">try</span> {
</span><span id="423" class="l">                    <span class="php-var">$fieldset</span> = <span class="php-var">$this</span>-&gt;get_fieldset_by_id(<span class="php-keyword2">str_replace</span>(<span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'_'</span>, <span class="php-quote">''</span>, <span class="php-var">$fieldset_id</span>));
</span><span id="424" class="l">                    <span class="php-var">$fieldset</span>-&gt;disable();
</span><span id="425" class="l">                } <span class="php-keyword1">catch</span> (FormBuilderException <span class="php-var">$e</span>) {
</span><span id="426" class="l">                }
</span><span id="427" class="l">            }
</span><span id="428" class="l">        }
</span><span id="429" class="l">
</span><span id="430" class="l">        <span class="php-var">$disabled_fields_str</span> = <span class="php-var">$request</span>-&gt;get_string(<span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'_disabled_fields'</span>);
</span><span id="431" class="l">        <span class="php-var">$disabled_fields_str</span> = <span class="php-keyword2">trim</span>(<span class="php-var">$disabled_fields_str</span>, <span class="php-quote">'|'</span>);
</span><span id="432" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$disabled_fields_str</span> != <span class="php-quote">''</span>)
</span><span id="433" class="l">        {
</span><span id="434" class="l">            <span class="php-var">$disabled_fields</span> = <span class="php-keyword2">explode</span>(<span class="php-quote">'|'</span>, <span class="php-var">$disabled_fields_str</span>);
</span><span id="435" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$disabled_fields</span> <span class="php-keyword1">as</span> <span class="php-var">$field_id</span>)
</span><span id="436" class="l">            {
</span><span id="437" class="l">                <span class="php-keyword1">try</span> {
</span><span id="438" class="l">                    <span class="php-var">$field</span> = <span class="php-var">$this</span>-&gt;get_field_by_id(<span class="php-keyword2">str_replace</span>(<span class="php-var">$this</span>-&gt;html_id . <span class="php-quote">'_'</span>, <span class="php-quote">''</span>, <span class="php-var">$field_id</span>));
</span><span id="439" class="l">                    <span class="php-var">$field</span>-&gt;disable();
</span><span id="440" class="l">                } <span class="php-keyword1">catch</span> (FormBuilderException <span class="php-var">$e</span>) {
</span><span id="441" class="l">                }
</span><span id="442" class="l">            }
</span><span id="443" class="l">        }
</span><span id="444" class="l">    }
</span><span id="445" class="l">
</span><span id="446" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> enable_all_fields()
</span><span id="447" class="l">    {
</span><span id="448" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;fieldsets <span class="php-keyword1">as</span> <span class="php-var">$fieldset</span>)
</span><span id="449" class="l">        {
</span><span id="450" class="l">            <span class="php-var">$fieldset</span>-&gt;enable();
</span><span id="451" class="l">        }
</span><span id="452" class="l">    }
</span><span id="453" class="l">}
</span><span id="454" class="l"><span class="xlang">?&gt;</span>
</span><span id="455" class="l"></span></code></pre>
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
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>