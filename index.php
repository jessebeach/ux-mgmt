<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<title>Experience management and the URL renaissance | @jessebeach</title>
		<?php
			include('includes/head.tpl.php');
		?>
	</head>
	<body>
    <header class="doc">
			<h1>Client-side content and the URL renaissance</h1>
    </header>
    
    <section class="doc">
			<ol class="outline">
				<li>A little about me really quickly.
					<ol>
						<li><a href="/slides/map-nj.php">I grew up in Whitehouse Station, NJ.</a></li>
						<li>I studied linguistics before getting involved with web development. I wrote a grammar of Western Abanaki.</li>
						<li>If I could spend the rest of my working days using one language, it would be JavaScript.</li>
					</ol>
				</li>
				<li>
					<p>tl;dr</p>
					<p>Deliver primary content immediately. Fill in secondary content asynchronously.</p>
				</li>
				<li>What is today's predominant end-user web experience?
					<ol>
						<li>Server-side request and response, what Alex MacCaw (@maccman) calls the <b>click and wait</b> approach</li>
						<li>Under this model, the components of a page - the article, sidebars, headers, navigation, footers, comments, recent content blocks, image gallery rotators -- are assembled into an HTML document and sent back to the requesting client.</li>
						<li>Why do we build pages this way?
							<ol>
								<li>It's what we know. Server-side languages like PHP are powerful and they sit right now to data sources like the DB.</li>
								<li>Clients (e.g. web browsers) were until recently too weak to render data into UI in a performant way.</li>
								<li>Building UI in the client is still a messy wild-west of emerging techniques, although they're shaping up fast.</li>
							</ol>
						</li>
						<li>What's the problem with this approach? It's worked so far.
							<ol>
								<li>For dense pages, the processing, delivery and rendering time add up and result in a slow page load experience.</li>
								<li>When content on the page is individualized, the page is no longer generic and must be cached indiviually. Cacheing becomes less effective for user-data-driven pages.</li>
							</ol>
						</li>
						<li>Why question this approach now?
							<ol>
								<li>Just as the amount of data on modern web pages increases, so too does the diversity of the devices through which we access this data.</li>
								<li>In other words, we as developers are being asked to deliver more stuff in less time to any random interface.</li>
								<li>How do we provide a tailored experience to authenticated users while still optimizing for performance across arbitrary devices?</li>
								</li>
							</ol>
						</li>
					</ol>
				</li>
				<li>
				<li>Let's start with the composition of a page.
					<ol>
						<li>Fundamentally we have primary content
							<ol>
								<li>
									<p>The content item.</p>
									<p>With derivatives: article, photo, video, image, audio</p>
								</li>
								<li>[example of a content page.]</li>
								<li>
									<p>The content list.</p>
									<p>With derivatives: a list of articles, a gallery of images, a playlist of videos or audio in hetero- or homogeneous sets.</p>
								</li>
								<li>[Example of a content list page.]</li>
								<li>
									<p>Navigation</p>
									<p>A necessity for crawlers and humans alike.</p>
								</li>
							</ol>
						</li>
					</ol>
				</li>
				<li>It should be noted that primary content and the URL are fundamentally linked.</li>
				<li>Primary content is described by its URL.</li>
				<li>As a user, when I click on a link, I expect to find something of substance on the other end. Whatever else the page contains is of secondary concern.</li>
				<li>As we decompose a page, we do so with the intent to essentialize down to the core content - that which warrants a URL.
					<ol>
						<li>
							<p>As Tim Berners-Lee described them in a 1994 draft of the "Uniform Resource Locator" description, URLs are</p>
							<blockquote>physical addresses of objects which are retrievable using protocols already deployed on the net</blockquote>
						</li>
					</ol>
				</li>
				<li>So that which is not primary content should be considered an enhancement to the experience.</li>
				<li>A user's or a machine's consumption of a page would not be diminished if this content were not present.</li>
				<li>You may know this concept already as <strong>Progressive Enhancement</strong>, here applied to content instead of presentation.</li>
					<ol>
						<li>
							<p>Secondary content might include</p>
							<ul>
								<li>Promoted items lists.</li>
								<li>Recent item lists.</li>
								<li>Comments</li>
								<li>Related item lists.</li>
								<li>Item lists by similar tag, category, etc.</li>
								<li>Embellishments of a content item such as author information.</li>
								<li>And certainly much more.</li>
							</ul>
						</li>
					</ol>
				</li>
				<li>Primary content must be delivered by the server wrapped in semantic HTML.
					<ol>
						<li>Search crawlers read the raw DOM response, although more and more they analyze <a href="http://insidesearch.blogspot.com/2012/01/page-layout-algorithm-improvement.html">the rendered page</a></li>
						<li>So SEO relies on a semanticly rich response from the server.</li>
						<li>I would argue that the best SEO strategy is a unique content item per URL with almost no secondary content in the initial request response.</li>
					</ol>
				</li>
				<li>But what a boring place the web would be if web pages were simply articles and lists.</li>
				<li>Secondary content adds context and opportunities to dive deeper (we hope).</li>
				<li>So how do we get content to the requested page after the initial request?
				<li>Client-side content requests</li>
				<li>You already know what this is. An AJAX or AHAH request for content.</li>
				<li>Deliver secondary content as rendered HTML and just drop it in place.
					<ol>
						<li>The server code is still responsible for rendering output, but this done asynchronously.</li>
						<li>We can utilize this approach with Drupal today, albeit with some inefficiency.</li>
					</ol>
				</li>
				<li>Deliver content as data (JSON, XML) and render the data to HTML in the client.</li>
				<li>
					<p>What tools exist to do this?</p>
					<ul>
						<li><a href="https://github.com/jquery/jquery-tmpl">jquery-tmpl</a></li>
						<li><a href="http://github.com/BorisMoore/jsrender">JsRender</a></li>
						<li><a href="http://github.com/BorisMoore/jsviews">JsViews</a> (requires JsRender)</li>
						<li><a href="http://code.google.com/p/kite/">KiTE</a></li>
						<li><a href="https://github.com/janl/mustache.js">mustache.js </a></li>
						<li><a href="http://twigkit.github.com/tempo/">Tempo</a></li>
						<li><a href="https://github.com/wycats/handlebars.js/">Handlebars</a> </li>
						<li><a href="http://akdubya.github.com/dustjs/">Dust.js </a></li>
						<li><a href="http://icanhazjs.com/">ICanHaz.js </a></li>
						<li><a href="http://beebole.com/pure/">PURE </a></li>
						<li><a href="http://code.google.com/closure/templates/">Closure Templates</a></li>
						<li><a href="http://viewjs.com/">jQuery View </a></li>
						<li><a href="https://github.com/trix/nano">Nano</a> </li>
						<li><a href="http://aefxx.com/jquery-plugins/jqote2/">jQote2</a></li>
						<li><a href="http://documentcloud.github.com/underscore/#template">Underscore.js template</a></li>
						<li><a href="http://olado.github.com/doT/">doT.js</a></li>
						<li><a href="http://github.com/premasagar/tim">Tim</a></li>
						<li><a href="https://github.com/tchype/liquid.js">Liquid.js</a>&nbsp;</li>
					</ul>
				</li>
				<li>None of them are great yet.</li>
				<li>Most require some knowledge of dependencies like node and package management.</li>
				<li>Although I'm extremely interested in the potential for robust js templating libraries, they're still not ready for large scale production sites.</li>
				
				<li>The advantages of breaking a page into primary and secondary content requests.</li>
				
				<li>In terms of performance, the absolute ideal is the anonymous user and a fully cached page.</li>
				<li>As we personalize the page, less and less of the page is cacheable. Performance suffers.</li>
				
				<li>Tailored experience
					<ol>
						<li>Authenticated users have preferences, they have history</li>
						<li>The content we present to them should be relevant. Suggested articles should be based on articles they've read. Their weather widget should be tuned to their location, etc</li>
					</ol>
				</li>
				<li>Optimizing performance
					<ol>
						<li>When the server returns a smaller payload to the initial request, the perceived load time of that page is less.</li>
						<li>
							<ol>
								<li><a href="https://www.facebook.com/note.php?note_id=389414033919">Facebook BigPipe</a></li>
							</ol>
						</li>
						<li>ESI includes (?)</li>
						<li>Delayed content loading managed by the client
							<ol>
								<li>What can we do now with the Drupal AJAX API to speed up page loads.</li>
							</ol>
						</li>
					</ol> 
				</li>
				<li>This is Drupal Camp! You haven't even mentioned Drupal yet!
			    <ol>
			    	<li>That's because Drupal isn't currently optimized to handle multiple small requests for data.</li>
			    </ol>
				</li>
				<li>Drupal Bootstrap
			    <ol>
			    	<li>Airplane analogy.</li>
			    </ol>
				</li>
				<li>D8 WSCCI efforts (crell - Larry Garfield)
			    <ol>
			    	<li>Context manipulation per request.</li>
			    </ol>
				</li>
				<li>How enhanced pages work in mobile/desktop scenarios</li>

				<li>Accessibility concerns
			    <ol>
			    	<li>98.4% of screen reader users have javascript enabled</li>
			    	<li>http://webaim.org/projects/screenreadersurvey3/</li>
			    </ol>
				</li>
				<li>What we need to do is bring the disparate pieces of the stack together: server side, client side, mobile/desktop presentation, experience management
			    <ol>
			    	<li>We are simultaneously trying to improve actual page performance as well as perceived page performance.</li>
			    	<li>Drupal will need to adapt to become a content delivery platform rather than a page delivery platform.</li>
			    </ol>
				</li>
			</ol>
		</section>
		
		<footer class="doc"><small>&copy; 2011 Jesse Beach. Acquia, Inc.</small></footer>
	</body>
</html>