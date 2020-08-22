                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-forumbee brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">Forum</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">User</li>
                                        <!--Menu list item-->   
                                        <li> <a href="index.html"> <img src="admin.png" width="78px" height="62px" alt="" style="margin-left: 10%"></i><span class="menu-title">
                                            <br>        
                                            <strong>{{auth()->user()->name}}</strong>
                                                    <section class="badge badge-primary">50</section>    
                                                </span> </a> </li>
                                        <!--Category name-->
                                        <li class="list-header">Forum</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="{{route('dashboard.forum')}}">
                                                <i class="fa fa-home"></i>
                                                <span class="menu-title">
                                                    Beranda
                                                </span>
                                        </a>
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button class="gpr btn btn-outline-danger">
                                                Log Out
                                            </button>
                                        </form>   
                                        </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
