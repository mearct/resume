<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li {{ request()->route()->getName() === 'dashboard/abouts' ? ' class=active' : ''}}>
            <a href="{{ url('dashboard/abouts') }}"><i class="la la-user"></i> <span>Abouts</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/skills' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/skills') }}"><i class="la la-edit"></i> <span>Skills</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/services' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/services') }}"><i class="la la-suitcase"></i> <span>Services</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/experiences' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/experiences') }}"><i class="la la-sitemap"></i> <span>Experience</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/educations' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/educations') }}"><i class="la la-graduation-cap"></i> <span>Education</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/portfolios' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/portfolios') }}"><i class="la la-folder"></i> <span>Portfolio</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/portfolio-types' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/portfolio-types') }}"><i class="la la-plus-square"></i> <span>Portfolio Types</span></a>
            </li>
            <li {{ request()->route()->getName() === 'dashboard/services-types' ? ' class=active' : ''}}>
                <a href="{{ url('dashboard/services-types') }}"><i class="la la-plus-square"></i> <span>Service Types</span></a>
            </li>
        </ul>
    </div>
</div>
