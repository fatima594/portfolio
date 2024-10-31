<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/fatimablog.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Fatima Lakhal</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">

                <ul class="treeview-menu">
                    <li><a href="{{route('admin.projects.index')}}"><i class="fa fa-circle-o"></i> manage projects</a></li>
                </ul>

                <ul class="treeview-menu">
                    <li><a href="{{route('admin.about.index')}}"><i class="fa fa-circle-o"></i> manage about</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.skills.index')}}"><i class="fa fa-circle-o"></i> manage skills</a></li>
                </ul>

                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.contacts.show') }}"><i class="fa fa-circle-o"></i> Contact</a></li>
                </ul>



            </li>


    </section>
    <!-- /.sidebar -->
</aside>

