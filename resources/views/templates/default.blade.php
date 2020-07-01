<!DOCTYPE html>
<html>

@include('templates.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('templates.partials.header') @include('templates.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                <nav aria-label="Page breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
                                    </ol>
                                </nav>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>

        @include('templates.partials.footer') @include('templates.partials.control')
    </div>
    <!-- ./wrapper -->

    @include('templates.partials.scripts')
</body>

</html>