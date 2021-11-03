
            <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
                <div class="side-nav">
                    <div class="main-menu">
                        <ul class="metismenu" id="menu">
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Export Files</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="{{route('export')}}"><i class="i-Circular-Point mr-2 text-muted"></i><span class="text-muted">Export Cash Book</span></a></li>
                                    <li class="item-name"><a href="{{route('libraryexport')}}"><i class="i-Circular-Point mr-2 text-muted"></i><span class="text-muted">Export Library Secuirity Book</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Users</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="{{route('adduser')}}"><i class="nav-icon i-Checked-User"></i><span class="item-name">Add New</span></a></li>
                                    <li class="item-name"><a href="{{url('admin/allusers')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">View All</span></a></li>
                                    <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Students</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="{{route('allstudents')}}"><i class="nav-icon i-Checked-User"></i><span class="item-name">All Student</span></a></li>
                                    <li class="item-name"><a href="{{url('admin/confirmstudents')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">Admission Confirm Students</span></a></li>
                                    <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Fee Structer</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="{{url('view-feestructure')}}"><i class="nav-icon i-Checked-User"></i><span class="item-name">View All Class Fee Structer</span></a></li>
                                    <li class="item-name"><a href="{{url('addfeestructure')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">Add New Fee Structer</span></a></li>
                                    
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Sessions</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="{{url('view-session')}}"><i class="nav-icon i-Checked-User"></i><span class="item-name">View All Sessions</span></a></li>
                                    <li class="item-name"><a href="{{url('create-session')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">Add New Sessions</span></a></li>
                                    
                                </ul>
                            </li>  
                            <li class="Ul_li--hover"><a href="{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Logout</span></a>
                                
                                    
                                </ul>
                            </li>
           
           
           
                            
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
                </div>
            </div>
            <!--  side-nav-close -->