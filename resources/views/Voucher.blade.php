@extends('Layouts.main')
<style>
 
    .p-6 {
      padding: 0.6rem; /* Atur padding sidebar sesuai kebutuhan Anda */
    }
      /* Main Content */
    .flex-1 {
      flex: 1; /* Ambil sebanyak mungkin ruang yang tersedia */
    }
  
    .section-title {
      margin-bottom: 1.5rem; /* Atur margin bawah pada judul section */
    }
  
    .text-xl {
      font-size: 1.25rem; /* Atur ukuran teks judul section */
    }
  
    .font-semibold {
      font-weight: 600; /* Atur ketebalan teks judul card */
    }
  
    /* Cards */
    .rounded-lg {
      border-radius: 0.375rem;
      margin: 20px 20px 20px 20px; /* Atur radius sudut card */
    }
  
    .border {
      border-width: 1px; /* Atur ketebalan border card */
    }
  
    .text-card-foreground {
      color: #000000; /* Atur warna teks card */
    }
  
    .shadow-sm {
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); /* Atur bayangan card */
    }
  
    .bg-white.card {
      background-color: #ffffff; /* Atur warna latar belakang card */
    }
  
    .p-4 {
      padding: 1rem; /* Atur padding pada card */
    }
  
    .justify-between {
      justify-content: space-between; /* Atur penataan ruang antar elemen flex di sekitar sumbu utama (horizontal) */
    }
  
    .items-center {
      align-items: center; /* Atur penataan ruang antar elemen flex di sekitar sumbu lintang (vertical) */
    }
  
    /* Text */
    .text-lg {
      font-size: 1.125rem; /* Atur ukuran teks h3 */
      margin-bottom: 0.5rem; /* Atur margin bawah pada teks h3 */
 */
  white-space: nowrap;
  width: 208px;
    }
  
    .text-sm {
      font-size: 0.875rem; /* Atur ukuran teks untuk elemen dengan kelas text-sm */
    }
  
    .text-gray-600 {
      color: #718096; /* Atur warna teks menjadi abu-abu */
    }
  
    .max-lines-2 {
      display: -webkit-box;
      -webkit-box-orient: horizontal;
      overflow: hidden;
      text-overflow: ellipsis;
      -webkit-line-clamp: 6;
      max-height: 6 * 3rem; /* 1.2em is the line height */
    
    /* Menambahkan properti flex untuk mengatur vertikal */
  
    }
  
    /* Buttons */
    .rounded-md {
      border-radius: 0.400rem;
       /* Atur radius sudut tombol */
    }
  
    .text-sm.button-text {
      font-size: 0.875rem; /* Atur ukuran teks tombol */
    }
  
    .ring-offset-background {
      border-color: #ffffff; /* Atur warna border tombol */
    }
  
    .hover\:bg-blue-600:hover {
      background-color: #2563eb; /* Atur warna latar belakang tombol saat dihover */
    }
  
    .text-white {
      color: #ffffff; /* Atur warna teks tombol */
    }
  
    /* Checkboxes */
    /* ... (sesuaikan dengan kebutuhan Anda) */
  
    /* Deletion Buttons */
    .bg-destructive {
      background-color: #e53e3e; /* Atur warna latar belakang tombol hapus */
    }
  
    .text-destructive-foreground {
      color: #ffffff; /* Atur warna teks tombol hapus */
    }
  
    .hover\:bg-muted:hover {
    background-color: #cbd5e0;
}
.text-right{
    background: #fff;
  display: flex;
  justify-content: flex-end;
 
  
  /* padding: 0 20rem; */
  /* border: 3px solid #ede8f0;
  border-radius: 5px; */
}
.button {
    background-color: #1b253d;;
    position: absolute;
  top: 15%;
  right: 15%;
  transform: translate(-50%, -50%);

     
}
.col-sm-4 {
  display: flex;
    align-items: center;
    justify-content: flex-end;
}


  </style>
  
@section('content')
<div class="flex">
    <aside class="w-64 p-6 bg-white">
        <!-- Sidebar Content -->
        <main class="flex-1 p-6">
            <div class="section-title">
                <h2>Voucher</h2>
                <button class="primary" onclick="window.dialog.showModal();">Tambah Voucher</button>
            </div>
            <h2 class="mt-6 mb-4 text-xl font-semibold">Voucher Terkini</h2>
            <div class="grid gap-4">
                <!-- Card 1 -->
                <div class="rounded-lg border text-card-foreground shadow-sm bg-white p-3 flex justify-between items-center" data-v0-t="card">
                    <div class="flex-1">
                        <div class="flex flex-col">
                          <div class="row">
                            <div class="col-sm-8">
                            <h3 class="text-lg font-semibold">Diskon Pengguna Baru</h3>
                            <h3 class="text-lg font-semibold">Disc Rp 10.000,--</h3>
                            <p class="text-sm text-gray-600 max-lines-2">
                                Dapatkan keuntungan berupa potongan harga sebesar Rp 10.000 untuk pengguna dan pelanggan baru dari Daeng
                                Barbershop.
                            </p>
                              
                        </div>
                    <div class="col-sm-4">
                    <div class="text-right">
                        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-destructive text-destructive-foreground hover:bg-destructive/90 h-5 px-3 py-2 mt-2">
                            Hapus Voucher
                        </button>
                    </div>
                </div>
              </div>
                    </div>
                </div>
            </div>
        </main>
    </aside>
</div>
@include('TambahVoucher')
@endsection
