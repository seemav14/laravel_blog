<nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="toggle-sidebar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="sidebar-brand">
                    <a href="/">Admin sidebar</a>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="/images/user.jpeg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <span class="user-status">
                                <i class="fa fa-circle"></i>
                                
                            </span>
                            {{ Auth::user()->name }}
                        </span>
                        <span class="user-role">Administrator</span>
                        
                    </div>
                </div>
                <!-- sidebar-header  -->
                
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="">
                            <a href="/add-blogs">
                                <i class="fa fa-user"></i>
                                <span>Add Blog</span>
                            </a>
                            
                        </li>

                        <li class="">
                            <a href="/view-blogs">
                                <i class="fa fa-eye"></i>
                                <span>view Blog</span>
                            </a>
                            
                        </li>

                     

                        <li class="">
                            <a href="{{ url('/logout') }}">
                                <i class="fa fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                            
                        </li>
                        
                       
                      
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
               
                <a href="#">
                    
                </a>
            </div>
        </nav>
<!--
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
    
        <ul class="nav navbar-right top-nav">
            
            @if(isset(Auth::user()->email))
             <li>
               <a><strong>Welcome {{ Auth::user()->email }}</strong></a>
             </li>
             <li>
               <a href="{{ url('/logout') }}">Logout</a>
             </li>
           @else
             <script>window.location = "/";</script>
           @endif
                  
        
     </ul>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
              
               
                <li>
                    <a href="/add-contact"><i class="fa fa-fw fa-user-plus"></i> Add Contact</a>
                </li>
                <li>
                    <a href="/view-contact"><i class="fa fa-fw fa-paper-plane-o"></i> List Conatct</a>
                </li>
                
            </ul>
        </div>
    </nav>-->