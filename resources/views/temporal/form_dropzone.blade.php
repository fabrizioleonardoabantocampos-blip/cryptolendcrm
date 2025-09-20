@php
    $breadcrumbs = [
        ['name' => 'Home', 'href' => route('home')],
        // ['name' => 'Home', 'href' => route('dashboard')],
        ['name' => 'Form Dropzone', 'href' => route('form_dropzone')],
    ];
    $pageTitle = $pageTitle ?? 'Form Dropzone Page';
@endphp


<x-crm-layout :breadcrumbs="$breadcrumbs" :pageTitle="$pageTitle">

    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dropzone</h4>
                        <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                        <form action="#" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</x-crm-layout>
