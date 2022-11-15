<nav class="side-nav">


	<div class="side-nav__devider my-6"></div>
	<ul>
		<li>

			<a href="{{url('dashboard')}}" class="side-menu side-menu--active">
				<div class="side-menu__icon"> <i data-lucide="home"></i> </div>
				<div class="side-menu__title"> Dashboard
					<div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
				</div>
			</a>
		</li>

        <li>
			<a href="javascript:;" class="side-menu">
				<div class="side-menu__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="box" data-lucide="box" class="lucide lucide-box">
						<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
						<polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
						<line x1="12" y1="22.08" x2="12" y2="12"></line>
					</svg>
				</div>
				<div class="side-menu__title"> Company
					<div class="side-menu__sub-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
							<polyline points="6 9 12 15 18 9"></polyline>
						</svg>
					</div>
				</div>
			</a>
			<ul class="" style="display: none;">
				<li>
					<a href="{{route('getCompnayList')}}" class="side-menu">
						<div class="side-menu__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="activity" data-lucide="activity" class="lucide lucide-activity">
								<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
							</svg>
						</div>
						<div class="side-menu__title"> Companies List </div>

					</a>
				</li>


			</ul>


</nav>

