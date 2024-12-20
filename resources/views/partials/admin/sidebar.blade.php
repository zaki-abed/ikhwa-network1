<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary">
        <!--begin::Header-->
        <div class="d-flex flex-column flex-center fs-6 fw-bold px-2 mb-5" id="kt_app_sidebar_primary_header">Workspace</div>
        <!--end::Header-->
        <!--begin::Sidebar navbar-->
        <div class="app-sidebar-nav flex-grow-1 hover-scroll-y scroll-ms px-4 pt-2" id="kt_app_sidebar_primary_nav" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_sidebar_primary_header, #kt_app_sidebar_primary_footer" data-kt-scroll-wrappers="#kt_app_content, #kt_app_sidebar_primary_nav" data-kt-scroll-offset="5px">
            <!--begin::Nav-->
            <ul class="nav">
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_collections" class="nav-link py-4 px-1 btn active">
                        <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Collections</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_apis" class="nav-link py-4 px-1 btn">
                        <i class="ki-outline ki-abstract-26 fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">APIs</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_environment" class="nav-link py-4 px-1 btn">
                        <i class="ki-outline ki-notification-status fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Environment</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_servers" class="nav-link py-4 px-1 btn">
                        <i class="ki-outline ki-message-notif fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Servers</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_notifications" class="nav-link py-4 px-1 btn">
                        <i class="ki-outline ki-rocket fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Notifications</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_history" class="nav-link py-4 px-1 btn">
                        <i class="ki-outline ki-chart-line fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">History</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
            </ul>
            <!--end::Nav-->
        </div>
        <!--end::Sidebar navbar-->
        <!--begin::Footer-->
        <div class="app-sidebar-footer d-flex flex-column flex-center" id="kt_app_sidebar_primary_footer">
            <!--begin::Menu-->
            <div class="mb-0">
                <button type="button" class="btn btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                    <i class="ki-outline ki-notification-status fs-1"></i>
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator mb-3 opacity-75"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Ticket</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Customer</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                        <!--begin::Menu item-->
                        <a href="#" class="menu-link px-3">
                            <span class="menu-title">New Group</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <!--end::Menu item-->
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Admin Group</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Staff Group</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Member Group</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Contact</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator mt-3 opacity-75"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                        </div>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Sidebar primary-->
    <!--begin::Sidebar secondary-->
    <div class="app-sidebar-secondary">
        <!--begin::Sidebar menu-->
        <div id="kt_app_sidebar_secondary_wrapper" class="hover-scroll-y mx-3" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependecies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_content" data-kt-scroll-offset="5px">
            <!--begin::Tab content-->
            <div class="tab-content px-5 px-lg-6">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_app_sidebar_secondary_collections" role="tabpanel">
                    <!--begin::Collections-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header mb-2">
                            <!--begin::Actions-->
                            <div class="text-end w-100">
                                <a href='#' class="btn btn-sm btn-color-gray-700 btn-outline btn-active-primary fw-bold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">New</a>
                                <a href='#' class="btn btn-sm btn-color-gray-700 btn-outline btn-active-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_select_users">Import</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body text-center">
                            <!--begin::Illustration-->
                            <img src="{{ asset('assets/images/admin/media/misc/watch.svg') }}" class="h-150px" alt="" />
                            <!--end::Illustration-->
                            <!--begin::Title-->
                            <h4 class="fw-bold text-gray-900 my-4">Upload your CSV file</h4>
                            <!--end::Title-->
                            <!--begin::Desctiption-->
                            <span class="fw-semibold text-gray-700 mb-4 d-block">Anyone can connect with audience through blogging benefits</span>
                            <!--end::Desctiption-->
                            <!--begin::Action-->
                            <a href='#' class="btn btn-sm btn-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Start Upload</a>
                            <!--begin::Action-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Collections-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_apis" role="tabpanel">
                    <!--begin::Apis-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-5">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-800">Visits by Country</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm btn-primary">View</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Items-->
                            <div class="m-0">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/united-states.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United States</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/brazil.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                            <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/turkey.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/france.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/india.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                            <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>8.3%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/images/admin/media/flags/sweden.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Label-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Apis-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_environment" role="tabpanel">
                    <!--begin::Environment-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Actions-->
                            <div class="text-end w-100">
                                <a href='#' class="btn btn-sm btn-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">New</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">M</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>
                                        <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">Q</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>
                                        <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">W</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>
                                        <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">M</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                                        <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>
                                        <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">M</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>
                                        <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary w-30px h-30px">
                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                    </a>
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Environment-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_servers" role="tabpanel">
                    <!--begin::Servers-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Actions-->
                            <div class="text-end w-100">
                                <a href='#' class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">New</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/14.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Fjallraven</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">#XDG-6437</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 72.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/13.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Nike</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">#XDG-1836</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 45.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/41.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bose QC 35</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">#XDG-6254</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 168.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/53.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Greeny</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">#XDG-1746</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 14.50</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/71.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Apple</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">#XDG-6245</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 362.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/images/admin/media/stock/ecommerce/194.png') }}" class="me-4 w-50px ms-n3" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Friendly Robot</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-2347</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 48.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Servers-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_notifications" role="tabpanel">
                    <!--begin::Notifications-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried new
                                <span class="fw-bolder">Notifications</span></h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="{{ asset('assets/images/admin/media/svg/illustrations/easy/1.svg') }}" class="theme-light-show w-200px" alt="" />
                                    <img src="{{ asset('assets/images/admin/media/svg/illustrations/easy/1-dark.svg') }}" class="theme-dark-show w-200" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_select_users">Learn more</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Notifications-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_history" role="tabpanel">
                    <!--begin::History-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header d-flex align-items-start pt-0">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-800">Mining Status</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mt-0">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-3">
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-outline ki-abstract-47 fs-2x text-info"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center">
                                        <!--begin::Action-->
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-3">
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-outline ki-glass fs-2x text-success"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center">
                                        <!--begin::Action-->
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-3">
                                        <span class="symbol-label bg-light-danger">
                                            <i class="ki-outline ki-abstract-35 fs-2x text-danger"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Est. daily USD</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">$48.02</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center">
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-secondary btn-active-color-primary w-25px h-25px">
                                            <i class="ki-outline ki-black-right fs-5"></i>
                                        </a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-3">
                                        <span class="symbol-label bg-light-primary">
                                            <i class="ki-outline ki-abstract-19 fs-2x text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Team Members</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">6</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center">
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-secondary btn-active-color-primary w-25px h-25px">
                                            <i class="ki-outline ki-black-right fs-5"></i>
                                        </a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::History-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Sidebar menu-->
    </div>
    <!--end::Sidebar secondary-->
</div>
<!--end::Sidebar-->

