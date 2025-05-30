{{-- {% set title = 'Dashboard' %}
{% set filename = 'index.html' %}

{% extends 'layouts/master.html' %} --}}

{{-- {% block styles %}
<link rel="stylesheet" href="assets/css/shared/iconly.css">
{% endblock %} --}}

{{-- {% block content %} --}}
@extends('admin.master')
@section('content')
<div class="page-heading">
    <h3 class="float-left">Daftar Blanko Permohonan</h3>
    
    
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h4>Daftar Blanko Permohonan</h4> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-sm" id="table-permohonan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th witdh="0.1%"></th>
                                        <th>No Tiket</th>
                                        <th>Nama</th>
                                        <th>Pelayanan</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@section('script')
   <script>
    $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
   </script>
   <script>
    $(document).ready(function() {
        $('#table-permohonan').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ route('getDataPemohonan') }}",
                    type: 'GET'
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                      data: 'search',
                      name: 'search'
                    }, 
                    {
                        data: 'no_tiket',
                        name: 'no_tiket'
                    },  
                    {
                        data: 'nama',
                        name: 'nama'
                    },                                           
                    {
                        data: 'pelayanan.nm_pelayanan',
                        name: 'pelayanan'
                    },
                    {
                        data: 'waktu',
                        name: 'waktu'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
                order: [
                    [0, 'asc']
                ],
                columnDefs: [ {
                "targets": 1,
                "orderable": false
                } ],
            });
    });
   </script>
@endsection


{{-- {% endblock %} --}}
{{-- {% block js %}
<!-- Need: Apexcharts -->
<script src="{{asset('mazer')}}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('mazer')}}/assets/js/pages/dashboard.js"></script>
{% endblock %} --}}