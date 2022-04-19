<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{url('/')}}">
            <img alt="Logo" src="{{asset('image/logo/bepro.png')}}" class="h-25px logo" />
            &nbsp;
            <span class="text-white fw-bold fs-3 logo">Be Pro</span>
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
                </svg>
            </span>
        </div>
    </div>

    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div data-kt-menu-trigger="click" class="menu-item @if (Request::Segment(2) == 'dashboard') here show @endif menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion @if (Request::Segment(2) == 'dashboard') menu-active-bg @endif">
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(2) == 'dashboard') active @endif" href="{{url('/')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Dashboard Admin</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Master Data</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if (Request::Segment(2) == 'division-position') here show @endif menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16.86" cy="9.73" r="6.46" fill="black"/>
                                    <path fill="black" d="M21 28h7v1.4h-7z"/>
                                    <path fill="black" d="M15 30v3a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1V23a1 1 0 0 0-1-1h-7v-1.47a1 1 0 0 0-2 0V22h-2v-3.58a32.12 32.12 0 0 0-5.14-.42a26 26 0 0 0-11 2.39a3.28 3.28 0 0 0-1.88 3V30Zm17 2H17v-8h7v.42a1 1 0 0 0 2 0V24h6Z"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Divisi & Jabatan</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion @if (Request::Segment(2) == 'division-position') menu-active-bg @endif">
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'list-division') active @endif" href="{{url('/back-admin/division-position/list-division')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Divisi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'add-division') active @endif" href="{{url('/back-admin/division-position/add-division')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Divisi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'list-position') active @endif" href="{{url('/back-admin/division-position/list-position')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Jabatan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'add-position') active @endif" href="{{url('/back-admin/division-position/add-position')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Jabatan</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if (Request::Segment(2) == 'user') here show @endif menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Pengguna (User)</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion @if (Request::Segment(2) == 'user') menu-active-bg @endif">
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'list-employee') active @endif" href="{{url('/back-admin/user/list-employee')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Pegawai</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'add-employee') active @endif" href="{{url('/back-admin/user/add-employee')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Pegawai</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'list-mentor') active @endif" href="{{url('/back-admin/user/list-mentor')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Mentor</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'add-mentor') active @endif" href="{{url('/back-admin/user/add-mentor')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Mentor</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Course</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (Request::Segment(2) == 'category-course') active @endif" href="{{url('/back-admin/category-course/list-category-course')}}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill="black" d="M6.012 18H21V4a2 2 0 0 0-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1zM8 6h9v2H8V6z"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Kategori Course</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if (Request::Segment(2) == 'course') here show @endif menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill="black" d="M6.012 18H21V4a2 2 0 0 0-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1zM8 6h9v2H8V6z"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Course</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion @if (Request::Segment(2) == 'course') menu-active-bg @endif">
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'list-course') active @endif" href="{{url('/back-admin/course/list-course')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Course</span>
                            </a>
                        </div>
                        
                        <div class="menu-item">
                            <a class="menu-link @if (Request::Segment(3) == 'add-course') active @endif" href="{{url('/back-admin/course/add-course')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Course</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (Request::Segment(2) == 'benefit-course') active @endif" href="{{url('/back-admin/benefit-course/list-benefit-course')}}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill="black" d="M6.012 18H21V4a2 2 0 0 0-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1zM8 6h9v2H8V6z"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Benefit Course</span>
                    </a>
                </div>

                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
                                    <path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Product Gallery</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Product Gallery</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambak Product Gallery</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-0">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Feedback</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
                                    <path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Feedback</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Feedback</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M21 22H14C13.4 22 13 21.6 13 21V3C13 2.4 13.4 2 14 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                    <path d="M10 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H10C10.6 2 11 2.4 11 3V21C11 21.6 10.6 22 10 22Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Testimoni</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tambah Testimoni</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Testimoni</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="#" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Product Review</span>
                    </a>
                </div>
                
                <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black" />
                                    <path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dokumentasi API</span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>