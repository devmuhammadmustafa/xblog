<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.partials.head")
</head>

<body>



<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    @include("admin.partials.sidebar")
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">
                @yield("content")
        </div>
        <!-- /content area -->


        <!-- Footer -->
        @include("admin.partials.footer")
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
