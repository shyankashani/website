<!DOCTYPE html>
<?php include 'header.php'; ?>
<?php include 'scripts.php'; ?>
	<main>
		<section>
			<div class="slider" id='dynamic'>
				<ul>
					<li><img src="img/streaks/8.png"></li>
					<li><img src="img/streaks/place_in_profile.gif"></li>
					<li><img src="img/streaks/landscape_to_portrait.gif"></li>
					<li><img src="img/streaks/streaks_scrolling.gif"></li>
					<li><img src="img/streaks/more_detail.gif"></li>
				</ul>
			</div>
			<?php include 'slider_nav.php'; ?>	
		</section>
		<section>
			<div class="name">
				Khan Academy Streak Widget
			</div>
			<div class='dynamic'>
				<div class="show">
					<h2>
						Summary
					</h2>
					<p>
						At Khan Academy, I led the design adaptation of a <a href='https://github.com/blog/2173-more-contributions-on-your-profile' target='_blank'>GitHub-style</a> "contributions" widget to user profiles. The feature &mdash; called the <em>Khan Academy Streak</em> &mdash; both helps users keep track of their activity, and incentivizes them to come back to the site on a more regular basis.
					</p>
					<p>
						Gray blocks represent days without activity, orange blocks represent days with activity, and the hollow block represents today. These slides show animations of the UI and UX characteristics of the widget.
					</p>
					<p>
						The Khan Academy Streak is currently being implemented on every user profile. On the next slide, you can see how the widget was integrated into the profile page.
					</p>
					<h2>
						Collaborators
					</h2>
					<p>
						Tom Pryor (Product Manager); Desmond Brand (Software Engineer); Shane Keller (Software Engineering Intern); Tabitha Wong (Advisor).
					</p>
				</div>
				<div>
					<h2>
						Size and Fit
					</h2>
					<p>
						Here you can see an example of how the Streak widget fits on the user profile page. 
					</p>
					<p>
						Khan Academy's widgets are limited to occupying half the width of the profile, so the Streak's <em>Activity Blocks</em> had to be made to fit.
					</p>
				</div>
				<div>
					<h2>
						Making the Flip
					</h2>
					<p>
						Unlike on GitHub's contributions feature, where the weeks are vertical and the months horizontal, we flipped the <em>Activity Blocks</em> and tucked them into the widget. 
					</p>
				</div>
				<div>
					<h2>
						Scrolling
					</h2>
					<p>
						Users can scroll within the widget to view their past activity. Every row corresponds to a week, and ever four rows correspond to a month &mdash; like one long, continuous calendar. The months are marked off by labels running vertically along the left side of the <em>Activity Blocks</em>.
					</p>
				</div>
				<div>
					<h2>
						Click for Details
					</h2>
					<p>
						By clicking on a block, users can view the date of that block, as well as other details about their activity that day.
					</p>
					<p>
						On the right-side panel of the widget, users can keep track of whether they've contributed to their Streak today, how long their current Streak has been, and how long their longest Streak was.
					</p>
				</div>
			</div>
		</section>
	</main>
</body>