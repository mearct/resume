<!-- Logo -->
<div class="logo d-flex justify-content-center align-items-center">
	<a href="index-horizontal-about.html"><img src="img/core-img/logo2.png" alt=""></a>
	<!-- Navbar Toggle -->
	<div class="nav-toggle">
		<i class="fa fa-bars"></i>
	</div>
</div>

<!-- Menu -->
<ul class="vcard-nav">
	<li {{ request()->route()->getName() === 'abouts' ? ' class=active' : ''}}>
		<a href="{{ url('abouts') }}">About</a>
	</li>
	<li {{ request()->route()->getName() === 'skills' ? ' class=active' : ''}}>
		<a href="{{ url('skills') }}">Skills</a>
	</li>
	<li {{ request()->route()->getName() === 'services' ? ' class=active' : ''}}>
		<a href="{{ url('services') }}">Services</a>
	</li>
	<li {{ request()->route()->getName() === 'experiences' ? ' class=active' : ''}}>
		<a href="{{ url('experiences') }}">Experience</a>
	</li>
	<li {{ request()->route()->getName() === 'educations' ? ' class=active' : ''}}>
		<a href="{{ url('educations') }}">Education</a>
	</li>
	<li {{ request()->route()->getName() === 'portfolios' ? ' class=active' : ''}}>
		<a href="{{ url('portfolios') }}">Portfolio</a>
	</li>
	<li {{ request()->route()->getName() === 'dashboard/abouts' ? ' class=active' : ''}}>
		<a href="{{ url('') }}">Testimonials</a>
	</li>
	<li {{ request()->route()->getName() === 'dashboard/abouts' ? ' class=active' : ''}}>
		<a href="{{ url('') }}">Contact</a>
	</li>
</ul>
