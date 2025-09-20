    @props(['breadcrumbs' => [], 'pageTitle' => ''])
   @include('components.body.breadCrumb')

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        {{ $slot }}

        <!-- End PAge Content -->
    </div>
