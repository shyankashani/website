<!DOCTYPE html>
<?php include 'header.php'; ?>
<?php include 'scripts.php'; ?>
	<main>
		<section>
			<div class="slider" id='dynamic'>
				<ul>
					<li><img src="img/tutorial/0.png"></li>
					<li><img src="img/tutorial/5.png"></li>
					<li><img src="img/tutorial/6.png"></li>
					<li><img src="img/tutorial/2.png"></li>
					<li><img src="img/tutorial/4.png"></li>
					<li><img src="img/tutorial/3.png"></li>
				</ul>
			</div>
			<?php include 'slider_nav.php'; ?>	
		</section>
		<section>
			<div class='name'>
				Khan Academy Tutorial Pages
			</div>
			<div class='dynamic'>
				<div class='show'>
					<h2>
						Summary
					</h2>
					<p>
						The Tutorial is a level in Khan Academy's learning hierarchy &mdash; just beneath Topic &mdash; consisting of an ordered list of videos and practice problems (which are together referred to as Nodes). When I started at Khan Academy, each Tutorial in our library had its own name, description, and teaching objective &mdash; but, curiously, not its own dedicated page. Working with the Growth team, I conceptualized and designed dedicated pages for Tutorials.
					</p>
					<h2>
						Collaborators
					</h2>
					<p>
						Tom Pryor (Product Manager); Desmond Brand (Software Engineer); Shane Keller (Software Engineering Intern).
					</p>									
				</div>
				<div>
				<h2>
					Background: Learning Hierarchy
				</h2>
				<p>
					This chart shows where the Tutorial fits in with the rest of Khan Academy's learning hierarchy.
				</p>
				<p>
					One of the unique qualities of Khan Academy is that it can be approached either free-associatively (users stringing together videos and practice problems themselves) or as structured pedagogy (users following the learning hierarchy).
				</p>
				<p>
					The Tutorial is a fundamental part of this hierarchy. As a concise, curated list of videos and practice problems, it teaches users about a specific aspect of a Topic, or it shows users how to do something. Without its own interface, though, a Tutorial's cohesion and distinctiveness is lost in the leap from Topic to Node. As such, we wanted to provide each Tutorial with its own detailed, dedicated page.
				</p>
				</div>
				<div>
				<h2>
					Additional Objectives
				</h2>
				<p>
					We also wanted to offer Tutorials as new pathways into Khan Academy. The majority of web traffic into the site is through search engine. By creating a burst of new potential landing-pages out of Tutorials, we hoped to match search queries that were often too precise to be captured by Topic pages, or too vague to be captured by Node pages.
				</p>
				<p>
					We also conjectured that Topic pages &mdash; with their presentation of significant amounts of content &mdash; were overwhelming some folks who were landing on them, leading to bounces. On the other hand, we also conjectured that Node pages &mdash; which dive straight into the playing of a video or the performance of a practice problem set &mdash; were bouncing folks who were looking for more context. We aimed to create a middle ground between the Topic landing-page and Node landing-page user experiences.			
				</p>
				</div>
				<div>
					<h2>
						Desktop
					</h2>
					<p>
						This is an example of a Tutorial viewed on a desktop. The Tutorial's sequence is presented in a scrolling vertical list on the right. Each node in the sequence includes a thumbnail image, an overlaying symbol denoting what kind of node it is, the name of the node, its duration, and a description. 
					</p>
					<p>
						On the left, in a frozen pane, is the name of the Tutorial, capped by breadcrumbs showing its place in the learning hierarchy. These breadcrumbs also serve as links to their respective Topic/Subject/Domain pages.
					</p>
					<p>
						Beneath the name of the Tutorial is a key indicating what's inside (this one has 7 videos and teaches 3 skills), as well as a qualitative description of the Tutorial as a whole.
					</p>
					<p>
						The entire page is themed in the accent color of the subject, which, in this case, is the reddish-purple used for Health and Medicine throughout the Khan Academy website.
					</p>
				</div>
				<div>
					<h2>
						Tablet
					</h2>
					<p>
						The tablet view is similar, but optimized for the smaller display size. As you can see, this is a Math Tutorial, so the accent color used here is Math's tealish blue.	
					</p>
				</div>
				<div>
					<h2>
						Mobile
					</h2>
					<p>
						Finally, here are some stills of the Tutorial page viewed on a mobile device. The default Khan Academy banner is swapped for its mobile version. The  information panel is stacked on top of the Tutorial's sequence on the mobile version, to introduce users to the tutorial. To save space, each node in the sequence loses its description, and the thumbnails are dropped underneath the node titles and durations for better sizing and reading.
					</p>
				</div>
			</div>
		</section>
	</main>
</body>