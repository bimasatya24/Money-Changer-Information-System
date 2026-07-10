@include('layout.header')
    <div class="container mx-auto px-4">
        <h2 class="text-center mb-4 font-verdana text-[32px]">Kurs Hari Ini</h2>
        <div>
            <p class="font-bold text-right mb-4 font-verdana text-[27px]">Terakhir diperbarui : {{ $lastUpdated ?? '-' }}</p>
            <div class="flex justify-center">
                <table class="w-[91%] border-collapse text-center mb-4 border border-slate-300 font-verdana text-[32px]">
                    <thead>
                        <tr class="font-bold">
                            <th class="bg-[rgb(220,53,69)] text-white border border-slate-300 p-1 align-middle">MATA UANG</th>
                            <th class="bg-[rgb(118,117,125)] text-white border border-slate-300 p-1 align-middle">PECAHAN</th>
                            <th class="bg-[rgb(255,193,7)] text-black border border-slate-300 p-1 align-middle">BELI</th>
                            <th class="bg-[rgb(25,135,84)] text-black border border-slate-300 p-1 align-middle">JUAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allUpload as $r)
                        <tr class="font-verdana text-[32px] font-bold">
                            <td class="border border-slate-300 p-2 align-middle">
                                {{ $r->mata_uang }}
                            </td>
                            <td class="border border-slate-300 p-2 align-middle">
                                {{ $r->pecahan }}
                            </td>
                            <td class="border border-slate-300 p-2 align-middle">
                                {{ $r->beli }}
                            </td>
                            <td class="border border-slate-300 p-2 align-middle">
                                {{ $r->jual }}
                            </td>                        
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center font-verdana text-[32px] font-bold text-[rgb(220,53,69)]">
                <b>HARGA SEWAKTU-WAKTU DAPAT BERUBAH</b>
                <br>
                <b>UNTUK KETERSEDIAAN STOK HARAP KONFIRMASI TERLEBIH DAHULU!</b>
            </div>
        </div>
    </div>
@include('layout.footer')