@extends('layout.module.app')
@section('title')
    Digital Marketing | Reflection
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <h1 class="title">
                Digital Marketing <br>
                Specialist 101
            </h1>
        </div>
    </div>
    <div class="container pt-4">
        <p>
            This module consists of all the background information on Digital Marketing Specialist as a career, 2 (two) case
            studies and a final reflection. Complete all sections in order. Refer to Glossary and Additional Resources when
            necessary.
        </p>
    </div>
@endsection

@section('sidebar')
    @include('layout.module.sidebar-dm')
@endsection

@section('content')
    <div class="content">
        <div class="card">

            <div class="pt-3 pb-2 ps-3">
                <h3>Reflection</h3>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="mb-2">
                            After learning about Digital Marketing Specialist, do you want to pursue digital marketing as a
                            career?
                        </label>
                        <textarea class="form-control" rows="5"></textarea>
                        <br>
                        <label class="mb-2">
                            If so, what do you want to specialize in?
                        </label>
                        <textarea class="form-control" rows="5"></textarea>
                        <br>
                        <label class="mb-2">
                            What makes you interested in this career?
                        </label>
                        <textarea class="form-control" rows="5"></textarea>

                        <hr>
                        <div class="text-end">
                            <button class="btn btn-primary btn-sm px-3" onclick="next(1, 6)">
                                Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            let n = $('.accordion-item').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('part4-' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('dm-part' + i) == 'done') {
                    $('#dm-iconPart' + i).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("part" + part + "-" + n, "read");
            if (sessionStorage.getItem("part" + part + "-" + n) == 'read') {
                $('#icon' + n).removeClass('far fa-check-circle')
                $('#icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#part' + part + '-' + n).collapse('toggle');
            $('#part' + part + '-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('part' + part + '-' + i) == 'read') {
                    z++
                }
            }

            let nextPart = part + 1
            if (z == j) {
                sessionStorage.setItem("dm-part" + part, "done");
                if (sessionStorage.getItem('dm-part' + part) == 'done') {
                    $('#dm-iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                    window.location.href = "{{ url('digital-marketing/part-') }}" + nextPart;
                }
            }

        }

    </script>
@endsection
