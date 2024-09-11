 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Sonu Jha</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Menu</li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>BETU VIDEO</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a  href="{{ url('/see-betu-video') }}">SEE VIDEO</a></li>
                        <li><a  href="{{ url('/upload-betu-video') }}">UPLOAD VIDEO</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>BETU PHOTO</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a  href="{{ url('/see-betu-photo') }}">SEE PHOTO</a></li>
                        <li><a  href="{{ url('/upload-betu-photo') }}">UPLOAD PHOTO</a></li>
                    </ul>
                </li>
    
                <li>
                    <a  href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Sonu CV</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a  href="{{ url('/see-cv') }}">SEE CV</a></li>
                        <li><a  href="{{ url('/upload-cv') }}">UPLOAD CV</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>FAMILY PHOTO</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a  href="{{ url('/see-family-photo') }}">SEE FAMILY PHOTO</a></li>
                        <li><a  href="{{ url('/upload-family-photo') }}">UPLOAD FAMILY PHOTO</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
