<!DOCTYPE HTML>
<html>
	<head>
		<title>AICTE - Indian Traditional System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="./assets/ckeditor/ckeditor.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="src/main.css" />
	</head>
	<body class="is-preload">
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<center>
								<a href="#" class="image avatar"><img style="width: 30%;" src="https://upload.wikimedia.org/wikipedia/en/e/eb/All_India_Council_for_Technical_Education_logo.png" alt="" /></a>
							
							<h2 style="color: black;">Research in Indian Traditional Knowledge System</h2>
							</center>

						</header>
						
						<?php include './messages.php' ?>
						<span style="color: black; font-size: 20px;">
							In order to promote interdisciplinary research on all aspects of Indian Knowledge Systems, preserve, and disseminate Indian Knowledge Systems for  further research and societal applications, MHRD desires to create a database of individuals and organizations who have contributed by way of Research, Teaching, Publication and Preservation of ancient and contemporary rich Indian Knowledge Systems ranging from art, music, dance, drama, mathematics, astronomy, science, technology, life sciences, environment and natural sciences, health care, yoga, law, jurisprudence, economics, social sciences, psychology, philosophy, management, linguistics, oral traditions of India, knowledge hidden in Sanskrit, Prakrit, Tamil, Pali etc and scrutinize the information, verify, put in context through interdisciplinary scientific investigation; create a portal for archival and dissemination of this rich knowledge.
							We appeal to you to share your interests on this portal for further processing and meet the above objectives.
						</span>
					</section>

				<!-- Two -->
					<section id="two">
						<h2 style="color: black;">Your Details</h2>
								<form action="./src/main.php" method="POST" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Full Name" /></div>
										<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="col-12 col-12-xsmall"><input type="text" name="phone" id="name" placeholder="Phone No." /></div>

										


										<small style="margin-right: 15%;">Working As</small>
										<div class="col-4 col-12-small">
											<input type="radio" id="demo-priority-normal" value="Individual" name="worked_as" >
											<label style="color: black;" for="demo-priority-normal">Individual</label>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="demo-priority-high" value="Organization" name="worked_as" checked>
											<label style="color: black;" for="demo-priority-high">Organization</label>
										</div>

										


										<div class="col-12 col-12-xsmall">
											<input id="workLocation" value="" type="text" name="work_location" placeholder="Work Location/Institute" />
										</div>

									</div>
					</section>

				<!-- Three -->
					<section id="three">
						<h2 style="color: black;">Past Research/Work/Project</h2>
									<div class="row gtr-uniform gtr-50">

										<div class="col-6 col-12-xsmall">
											<select name="past_research_field_interest" id="past_research_field_interest">
												<option value="">- Select Your Field of Interest -</option>
												<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
												<option value="Health, Wellness">Health, Wellness</option>
												<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
												<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
												<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
												<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
											</select>
										</div>


										<div class="col-6 col-12-xsmall">
											<select name="past_research_field_interest_sub" id="past_research_field_interest_sub">
												
											</select>
										</div>


										<div class="col-12 col-12-xsmall"><input type="text" name="past_publication_title" id="past_title" placeholder="Title" /></div>
										<small>Description</small>
										<div class="col-12"><textarea name="past_description" id="past_description" placeholder="Description" rows="4"></textarea></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="past_publication_url" id="name" placeholder="Research Reference / Book / Publication URL" /></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="past_video_url" id="name" placeholder="Youtube/Video URL" /></div>


										<small>Expert References 1</small>
										<div class="col-12"><input type="text" name="past_expert_name" id="name" placeholder="Full Name" /></div>
										<div class="col-4 col-12-xsmall"><input type="email" name="past_expert_email" id="email" placeholder="Email" /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="past_expert_phone" id="name" placeholder="Phone No." /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="past_expert_role" id="name" placeholder="Role/Designation" /></div>


										<div class="col-12">Expert References 2</div>
										<div class="col-12"><input type="text" name="past_expert2_name" id="name" placeholder="Full Name" /></div>
										<div class="col-4 col-12-xsmall"><input type="email" name="past_expert2_email" id="email" placeholder="Email" /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="past_expert2_phone" id="name" placeholder="Phone No." /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="past_expert2_role" id="name" placeholder="Role/Designation" /></div>

										<!-- <div class="col-12"><textarea name="description" id="description" placeholder="Description" rows="4"></textarea></div> -->
									</div>
					</section>

					<section id="three">
						<h2 style="color: black;">Present Research/Work/Project</h2>
									<div class="row gtr-uniform gtr-50">

										<div class="col-6 col-12-xsmall">
											<select name="present_research_field_interest" id="present_research_field_interest">
												<option value="">- Select Your Field of Interest -</option>
												<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
												<option value="Health, Wellness">Health, Wellness</option>
												<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
												<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
												<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
												<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
											</select>
										</div>


										<div class="col-6 col-12-xsmall">
											<select name="present_research_field_interest_sub" id="present_research_field_interest_sub">
												
											</select>
										</div>

										<div class="col-12 col-12-xsmall"><input type="text" name="present_publication_title" id="name" placeholder="Title" /></div>
										<small>Description</small>
										<div class="col-12"><textarea name="present_description" id="present_description" placeholder="Description" rows="4"></textarea></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="present_publication_url" id="name" placeholder="Research Reference / Book / Publication URL" /></div>
										<div class="col-6 col-12-xsmall"><input type="text" name="present_video_url" id="name" placeholder="Youtube/Video URL" /></div>


										<small>Expert References 1</small>
										<div class="col-12"><input type="text" name="present_expert_name" id="name" placeholder="Full Name" /></div>
										<div class="col-4 col-12-xsmall"><input type="email" name="present_expert_email" id="email" placeholder="Email" /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="present_expert_phone" id="name" placeholder="Phone No." /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="present_expert_role" id="name" placeholder="Role/Designation" /></div>


										<div class="col-12">Expert References 2</div>
										<div class="col-12"><input type="text" name="present_expert2_name" id="name" placeholder="Full Name" /></div>
										<div class="col-4 col-12-xsmall"><input type="email" name="present_expert2_email" id="email" placeholder="Email" /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="present_expert2_phone" id="name" placeholder="Phone No." /></div>
										<div class="col-4 col-12-xsmall"><input type="text" name="present_expert2_role" id="name" placeholder="Role/Designation" /></div>

										<!-- <div class="col-12"><textarea name="description" id="description" placeholder="Description" rows="4"></textarea></div> -->
									</div>
					</section>

					<section id="three">
						<h2 style="color: black;">Intrested field of Future research</h2>
									<div class="row gtr-uniform gtr-50">


										<div class="col-6 col-12-xsmall">
											<select name="future_research_field_interest" id="future_research_field_interest">
												<option value="">- Select Your Field of Interest -</option>
												<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
												<option value="Health, Wellness">Health, Wellness</option>
												<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
												<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
												<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
												<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
											</select>
										</div>


										<div class="col-6 col-12-xsmall">
											<select name="future_research_field_interest_sub" id="future_research_field_interest_sub">
												
											</select>
										</div>

										<div class="col-12 col-12-xsmall">
										<h2 style="color: black;">How You Want to Contribute to IKS activities</h2>
											<select name="future_anyOther" id="future_anyOther">
												<option selected disabled>- Any other tasks of IKS division -</option>
												<option value="Identify Scholars & Institutions in IKS & collect information">Identify Scholars & Institutions in IKS & collect information</option>
												<option value="Investigate the cliams and certify authenticity">Investigate the cliams and certify authenticity</option>
												<option value="Work for IKS Wiki">Work for IKS Wiki</option>
												<option value="Carry out research in IKS">Carry out research in IKS</option>
												<option value="Be a referrer for evaluating proposls">Be a referrer for evaluating proposls</option>
												<option value="Help in writing Interactive books for School Education">Help in writing Interactive books for School Education</option>
												<option value="Help in writing books for Higher Education">Help in writing books for Higher Education</option>
												<option value="Help in creating awareness about IKS & dissemination">Help in creating awareness about IKS & dissemination</option>
											</select>
										</div>

										<small>Description</small>
										<div class="col-12"><textarea name="description_future" id="description_future" placeholder="Description" rows="4"></textarea></div>

										<!-- <div class="col-12"><textarea name="description" id="description" placeholder="Description" rows="4"></textarea></div> -->
									</div>
					</section>
					<br>
					<?php include './messages.php' ?>
					<div class="col-12" style="margin-top: 2%;">
						<ul class="actions">
							<li><input type="submit" name="btnSubmit2" value="Submit" class="primary" /></li>
							<li><input type="reset" value="Reset" /></li>
						</ul>
					</div>
				</form>

				<!-- Four -->
<!-- 				
					<section id="four">
						<h2>Elements</h2>

						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="col-6 col-12-xsmall">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
								</div>
								<div class="col-6 col-12-xsmall">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button primary">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button primary small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button primary">Primary</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button large">Large</a></li>
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button primary fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button primary fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
								<li><a href="#" class="button icon solid fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button primary disabled">Primary</span></li>
								<li><span class="button disabled">Default</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="col-12">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High Priority</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy of this message</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">I am a human and not a robot</label>
									</div>
									<div class="col-12">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row gtr-50 gtr-uniform">
									<div class="col-12"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</section>
				 -->

			</div>

		<!-- Footer -->
			<!-- <footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer> -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="src/main.js"></script>
			
			<script>
				CKEDITOR.replace('present_description');
				CKEDITOR.replace('past_description');
				CKEDITOR.replace('description_future');
			</script>

	</body>
</html>