@extends('layouts.app')
@section('content')
<nav class="px-2 py-4 bg-white border-gray-200 rounded sm:px-4 ">
    <div class="container flex flex-wrap items-center justify-between mx-auto gap-y-5">
        <a href="https://myorbit.id" class="flex items-center">
            <img src="{{ asset('images/logo-orbit.svg') }}" class="h-[40px] md:h-16 mr-3" alt="Orbit Logo" />
        </a>
        <div class="flex md:order-2">
            <a href="#tap-section" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-semibold transition rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 "><i class="mr-3 text-lg fa-solid fa-magnifying-glass"></i>Cari Di Sekitar Anda</a>
        </div>
    </div>
</nav>

<div class="container px-3 py-10">
    <div id="banner-carousel" class="relative h-fit mx-auto w-[100%] md:w-3/4" data-carousel="static">

        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative rounded-lg h-[175px] md:h-[500px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/banner1.jpg') }}" class="absolute block object-fill w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/banner2.jpg') }}" class="absolute block object-fill w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/banner3.jpg') }}" class="absolute block object-fill w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/banner4.jpg') }}" class="absolute block object-fill w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 transition-all rounded-full bg-red-600/70 hover:bg-red-600" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 transition-all rounded-full bg-red-600/70 hover:bg-red-600" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 transition-all rounded-full bg-red-600/70 hover:bg-red-600" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 transition bg-red-600 rounded-full sm:w-10 sm:h-10 group-hover:bg-red-700 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 font-semibold text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 transition bg-red-600 rounded-full sm:w-10 sm:h-10 group-hover:bg-red-700 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</div>

<section class="flex flex-col items-center px-2 md:px-12" id="tap-section" x-data="{modal:false,id:'',toggle() { this.modal = ! this.modal }}">

    <span class="inline-block w-full text-[36px] md:text-6xl font-bold text-center text-white font-batik">Temukan Di Sekitar Anda</span>

    {{-- <div class="flex flex-col w-[100%] px-6 py-8 my-16 bg-white rounded-lg md:w-1/2 drop-shadow-2xl shadow-2xl ">
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-red-600 uppercase font-batik">POD LANGGA PAYUNG</span>
            <a href="https://maps.google.com" class="px-4 py-2 transition border-2 border-red-600 rounded-lg group hover:bg-red-600">
                <i class="text-lg text-red-600 transition-all fa-solid fa-location-dot group-hover:text-white"></i>
            </a>
        </div>
        <span class="font-medium capitalize font-batik text-slate-500">Jl. Lintas Langga Payung - Gunung Tua</span>
        <div class="flex items-center mt-2 gap-x-2"><i class="inline-block text-xl fa-solid fa-road text-slate-500"></i><span class="font-sans text-lg font-semibold text-slate-500">± 3 Km</span></div>

        <div class="flex justify-center mt-6 -mb-4 md:justify-end">
            <div class="grid w-[50%] grid-cols-3 gap-x-5 gap-y-4 md:w-fit">
                <a href="#" class="flex items-center justify-start px-4 py-2 text-white transition bg-red-600 rounded-lg col-span-full md:col-span-1 hover:bg-red-700">
                    <i class="mr-3 text-xl fa-brands fa-whatsapp"></i>
                    <span class="font-semibold">Whatsapp</span>
                </a>
                <button type="button" data-modal-toggle="msg-tap-6" class="flex items-center justify-start px-4 py-2 text-red-600 transition bg-white border-2 border-red-600 rounded-lg col-span-full md:col-span-1 hover:border-red-700">
                    <i class="mr-3 text-xl fa-solid fa-comments"></i>
                    <span class="font-semibold">Kirim Pesan</span>
                </button>
                <a href="#" class="flex items-center justify-start px-4 py-2 text-red-600 transition bg-white border-2 border-red-600 rounded-lg col-span-full md:col-span-1 hover:border-red-700">
                    <i class="mr-3 text-xl fa-solid fa-phone"></i>
                    <span class="font-semibold">Telepon</span>
                </a>
            </div>
        </div>
    </div> --}}

    <!-- Main modal -->
    <div id="msg-tap-6" data-modal-placement="center-center" x-show="modal" x-transition class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full bg-black/60">

        <div class="relative w-full h-full max-w-2xl p-4 md:h-auto" x-on:click.away="toggle()">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Kirim Pesan Ke Partner Orbit
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " x-on:click="toggle()">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form action="{{ route('order.store') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Modal body -->
                    <input type="hidden" name="tap_id" :value="id" required>
                    <label for="nama" class="flex flex-col px-5 mt-3 gap-y-1">
                        <span class="font-semibold text-slate-500">Nama Anda</span>
                        <input type="text" name="nama" id="nama" placeholder="Nama" class="px-3 py-2 capitalize rounded" required>
                    </label>
                    @error('nama')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                    <label for="telepon" class="flex flex-col px-5 mt-3 gap-y-1">
                        <span class="font-semibold text-slate-500">Nomor Telepon Yang Dapat Dihubungi</span>
                        <input type="text" name="telepon" id="telepon" placeholder="Nomor Telepon (081234567890)" class="px-3 py-2 capitalize rounded" required>
                    </label>
                    @error('telepon')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                    <label for="alamat" class="flex flex-col px-5 mt-3 gap-y-1">
                        <span class="font-semibold text-slate-500">Alamat Lengkap Anda</span>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="px-3 py-2 capitalize rounded" required>
                    </label>
                    @error('alamat')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                    <label for="produk" class="flex flex-col px-5 mt-3 gap-y-1">
                        <span class="font-semibold text-slate-500">Produk Yang Anda Inginkan</span>
                        <select name="produk" id="produk" class="px-3 py-2 capitalize rounded">
                            <option value="" selected disabled>Pilih Produk</option>
                            @foreach ($products as $item)
                            <option value="{{ $item->nama }}">{{$item->nama }}</option>
                            @endforeach
                        </select>
                    </label>
                    @error('produk')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kirim Pesan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-1/2 px-6 py-8 my-16 bg-white rounded-lg drop-shadow-2xl card" id="loading-card">
        <div class="flex items-center justify-between">
            <div class="inline-block w-full h-10 bg-gray-500 animate-pulse"></div>
        </div>
        {{-- <span class="font-medium capitalize font-batik text-slate-500">Jl. Lintas Langga Payung - Gunung Tua</span> --}}
        <div class="inline-block h-6 mt-3 bg-gray-500 animate-pulse w-[100%] md:w-52"></div>

        <div class="inline-block h-6 mt-3 bg-gray-500 animate-pulse w-[100%] md:w-52"></div>

        <div class="flex justify-end mt-6 -mb-4 gap-x-5">
            <div class="inline-block h-6 mt-3 bg-gray-500 animate-pulse w-52"></div>
            <div class="inline-block h-6 mt-3 bg-gray-500 animate-pulse w-52"></div>
        </div>
    </div>
</section>

@if (session('success'))
<div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
<script>
    var data = document.querySelector(".flash-data").getAttribute("data-flashdata");
    Swal.fire({
        title: 'Success'
        , text: data
        , icon: 'success'
        , showCancelButton: false
    , })

</script>
@endif

@endsection
@section('script')
<script>
    $(document).ready(function() {
        var latitude, longitude;
        let _token = $('meta[name="csrf-token"]').attr('content');

        navigator.permissions.query({
            name: 'geolocation'
        }).then(function(result) {
            if (result.state == 'denied') {
                alert('Izinkan halaman ini untuk melihat lokasi anda dan Aktifkan GPS anda');
            }
        })

        if (navigator.geolocation) {
            let coordinates = navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            console.log("Geolocation is not supported by this browser.");
            // alert('Izinkan Halaman Ini Untuk Melihat Lokasi Anda dan Aktifkan GPS Anda');
        }

        async function showPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;


            $.ajax({
                url: "{{ URL::to('/home/get_tap') }}"
                , method: "POST"
                , dataType: "JSON"
                , data: {
                    latitude: latitude
                    , longitude: longitude
                    , _token: _token
                }
                , success: (data) => {
                    const {
                        tap
                        , products
                    } = data;
                    const sortedTap = tap.sort((a, b) => {
                        return a.distance - b.distance;
                    })
                    if (!tap.length) {
                        $('#tap-section').append(
                            `<span class="inline-block w-full my-12 text-2xl text-center text-white font-base">Tidak Ada TAP Ditemukan</span>`
                        )
                    }
                    sortedTap.map((item, idx) => {
                        if (idx < 3) {
                            $('#tap-section').append(
                                `<div class="flex flex-col card w-[100%] px-6 py-8 my-8 bg-white rounded-lg md:w-1/2 drop-shadow-2xl shadow-2xl">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-2xl font-bold text-red-600 uppercase font-batik">${item.nama}</span>
                                    <a href="https://www.google.com/maps/search/?api=1&query=${item.latitude}%2C${item.longitude}" target="_blank" class="px-4 py-2 transition border-2 border-red-600 rounded-lg group hover:bg-red-600">
                                        <i class="text-lg text-red-600 transition-all fa-solid fa-location-dot group-hover:text-white"></i>
                                    </a>
                                </div>
                                <span class="font-medium capitalize font-batik text-slate-500">${item.alamat}</span>
                                <div class="flex items-center mt-2 gap-x-2"><i class="inline-block text-xl fa-solid fa-road text-slate-500"></i><span class="font-sans text-lg font-semibold text-slate-500">± ${item.distance} Km</span></div>

                                <div class="flex justify-center mt-6 -mb-4 md:justify-end">
                                    <div class="grid w-[100%] grid-cols-3 gap-x-1 md:gap-x-5 gap-y-4 md:w-fit">
                                        <a href="https://wa.me/62${item.call_center}" class="flex items-center justify-start px-4 py-2 text-white transition bg-green-600 rounded-lg md:col-span-1 hover:bg-green-800">
                                            <i class="mr-2 text-[18px] md:mr-3 md:text-xl fa-brands fa-whatsapp"></i>
                                            <span class="font-semibold">WA</span>
                                        </a>
                                        <button type="button" class="flex items-center justify-start px-4 py-2 text-white transition bg-red-600 rounded-lg open md:col-span-1 hover:bg-red-700" @click="toggle(),id=${item.id}">
                                            <i class="mr-2 text-[18px] md:mr-3 md:text-xl fa-solid fa-comments"></i>
                                            <span class="font-semibold whitespace-nowrap">Pesan</span>
                                        </button>
                                        <a href="tel:0${item.call_center}" class="flex items-center justify-start px-4 py-2 text-red-600 transition bg-white border-2 border-red-600 rounded-lg md:col-span-1 hover:border-red-700">
                                            <i class="mr-2 text-[18px] md:mr-3 md:text-xl fa-solid fa-phone"></i>
                                            <span class="font-semibold">Call</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            `
                            )
                        }
                    });

                    // tap.map((item) => {
                    //     $('#tap-section').append(
                    //         `<div id="msg-tap-${item.id}" data-modal-placement="center-center" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">

                    //             <div class="relative w-full h-full max-w-2xl p-4 md:h-auto">
                    //                 <div class="relative bg-white rounded-lg shadow ">
                    //                     <div class="flex items-start justify-between p-4 border-b rounded-t">
                    //                         <h3 class="text-xl font-semibold text-gray-900 ">
                    //                             Kirim Pesan Ke Partner Orbit
                    //                         </h3>
                    //                         <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center close" data-modal-toggle="msg-tap-${item.id}">
                    //                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    //                                 <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    //                             </svg>
                    //                         </button>
                    //                     </div>
                    //                     <form action="/order" method="post">
                    //                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    //                         <input type="hidden" name="tap_id" value="${item.id}" required>
                    //                         <label for="nama" class="flex flex-col px-5 mt-3 gap-y-1">
                    //                             <span class="font-semibold text-slate-500">Nama Anda</span>
                    //                             <input type="text" name="nama" id="nama" placeholder="Nama" class="px-3 py-2 capitalize rounded" required>
                    //                         </label>
                    //                         <label for="telepon" class="flex flex-col px-5 mt-3 gap-y-1">
                    //                             <span class="font-semibold text-slate-500">Nomor Telepon Yang Dapat Dihubungi</span>
                    //                             <input type="text" name="telepon" id="telepon" placeholder="Nomor Telepon (081234567890)" class="px-3 py-2 capitalize rounded" required>
                    //                         </label>
                    //                         <label for="telepon" class="flex flex-col px-5 mt-3 gap-y-1">
                    //                             <span class="font-semibold text-slate-500">Alamat Lengkap Anda</span>
                    //                             <input type="text" name="telepon" id="telepon" placeholder="Alamat" class="px-3 py-2 capitalize rounded" required>
                    //                         </label>
                    //                         <label for="produk" class="flex flex-col px-5 mt-3 gap-y-1">
                    //                             <span class="font-semibold text-slate-500">Produk Yang Anda Inginkan</span>
                    //                             <select name="produk" id="produk" class="px-3 py-2 capitalize rounded">
                    //                                 ${products.map((item)=>{
                    //                                     return(`<option value="${item.nama}">${item.nama}</option>`)
                    //                                 })}
                    //                             </select>
                    //                         </label>
                    //                         <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    //                             <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Kirim Pesan</button>
                    //                         </div>
                    //                     </form>
                    //                 </div>
                    //             </div>
                    //         </div>`

                    //     )
                    // })

                    $('#loading-card').hide();
                }
                , error: (e) => {
                    console.log(e)
                }
            });
        }

        $('.open').click(() => {
            let modal = this.attr('data-modal-toggle');
            console.log('modal');
        })

    })

</script>
@endsection
