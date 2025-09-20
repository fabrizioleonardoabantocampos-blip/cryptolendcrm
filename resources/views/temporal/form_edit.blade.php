@php
    $breadcrumbs = [
        ['name' => 'Home', 'href' => route('home')],
        // ['name' => 'Home', 'href' => route('dashboard')],
        ['name' => 'Form Edit', 'href' => route('form_edit')],
    ];
    $pageTitle = $pageTitle ?? 'Form Edit Page';
@endphp


<x-crm-layout :breadcrumbs="$breadcrumbs" :pageTitle="$pageTitle">
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bootstrap wysihtml5</h4>
                        <h6 class="card-subtitle">Bootstrap html5 editor</h6>
                        <form method="post">
                            <div class="form-group">
                                <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height:450px"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>

</x-crm-layout>
