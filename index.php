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
			<h1>Experience management and the URL renaissance</h1>
    </header>
    
    <section class="doc">
			<ol class="outline">
				<li><a class="slide" href="slides/intro.php">Just as the amount of data on modern web pages increases, so too does the diversity of the devices through which we access this data. In other words, we as developers are being asked to deliver more stuff in less time to any random interface.</a></li>
				<li>a link to me</li>
				<li><a href="slides/map-nj.php">Map of where I live</a></li>
				<li>Where are we going?
					<ol>
						<li>How do we provide
							<ol>
								<li class="slide">a tailored experience to authenticated users</li>
								<li class="slide">while still optimizing for performance across arbitrary devices</li>
							</ol>
						</li>
					</ol>
				</li>
				<li class="slide">Tailored experience
					<ol>
						<li>Authenticated users have preferences, they have history</li>
						<li>The content we present to them should be relevant. Suggested articles should be based on articles they've read. Their weather widget should be tuned to their location, etc</li>
					</ol>
				</li>
				<li class="slide">Optimizing performance
					<ol>
						<li class="slide">One way to address the speed of content delivery is to simply send less stuff to the end user in the initial resource request. We can do this by breaking up page requests into smaller chunks and leaning on the client to manage the end user's experience, rather than the server.  Third-party services like comments from Facebook or Discus already allow us to do this today in certain circumstances.</li>
						<li class="slide">ESI includes (?)</li>
						<li class="slide">Delayed content loading managed by the client
							<ol>
								<li>What can we do now with the Drupal AJAX API to speed up page loads.</li>
							</ol>
						</li>
					</ol> 
				</li>
				<li>URL means something
					<ol>
						<li>A client-side assembly strategy also brings us back to the original intent of the URL as a pointer to a specific resource, not a page of disparate content. For mobile devices we can reduce the initially delivered payload while still providing end users with access to the full page experience through intentional interactions such as clicks and scrolls.</li>
					</ol>
				</li>
				<li>So that's all well and good. Where do we stand with Drupal?
			    <ol>
			    	<li>Drupal isn't currently optimized to handle multiple small requests for data.</li>
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
				<li>Progressive enhancement
					<ol>
						<li>This is not new.</li>
						<li>Content first is a better way to frame your approach to experience design</li>
					</ol>
				</li>
				<li>How enhanced pages work in mobile/desktop scenarios</li>
				<li>SEO concerns
			    <ol>
			    	<li>URLs point to content.</li>
						<li>Sitemaps are just as important as they've always been</li>
					</ol>
				</li>
				<li>Accessibility concerns
			    <ol>
			    	<li>98.4% of screen reader users have javascript enabled</li>
			    	<li>http://webaim.org/projects/screenreadersurvey3/</li>
			    </ol>
				</li>
				<li>What we need to do is bring the disparate pieces of the stack together: server side, client side, mobile/desktop presentation, experience management
			    <ol>
			    	<li>we are simultaneously trying to improve actual page performance as well as perceived page performance.</li>
			    	<li>Drupal will need to adapt to become a content delivery platform rather than a page delivery platform.</li>
			    </ol>
				</li>
			</ol>
		</section>
		
		<footer class="doc"><small>&copy; 2011 Jesse Beach. Acquia, Inc.</small></footer>
	</body>
</html>