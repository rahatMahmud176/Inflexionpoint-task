 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <!-- Vendor JS Files -->
 <script src="{{ asset('/') }}backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/chart.js/chart.umd.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/echarts/echarts.min.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/quill/quill.min.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/tinymce/tinymce.min.js"></script>
 <script src="{{ asset('/') }}backend/assets/vendor/php-email-form/validate.js"></script>
 {{-- sweetalert2 --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- toast --}}
 <script src="{{ asset('js/iziToast.js') }}"></script>
 <!-- Template Main JS File -->
 <script src="{{ asset('/') }}backend/assets/js/main.js"></script>

 @stack('script')


 <script>
     function logout() {
         Swal.fire({
             title: "Do you want to Logout?",
             showDenyButton: false,
             showCancelButton: true,
             confirmButtonText: "Logout",
             denyButtonText: `Don't save`
         }).then((result) => {
             /* Read more about isConfirmed, isDenied below */
             if (result.isConfirmed) {
                $('#logout-form').submit();

             }
         });
     }
 </script>
