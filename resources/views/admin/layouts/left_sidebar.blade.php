<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu fixed left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"> Apps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('profile.edit')}}" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Email</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li class="menu-heading px-4 py-3 text-xs font-medium text-gray-500 cursor-default" data-key="t-elements">Elements</li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"  class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-compo">Components</span>
                    </a>
                    <ul>
                        <li>
                            <a href="alerts.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
